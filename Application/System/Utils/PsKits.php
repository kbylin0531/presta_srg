<?php
/**
 * Created by PhpStorm.
 * User: asus
 * Date: 10/30/16
 * Time: 9:22 PM
 */
namespace Application\System\Utils;

defined('_PSR_CONFIG_DIR_') or require(__DIR__.'/../Common/constant.php');

class PsKits {

    protected static $_config = [];

    /**
     * 加载应用配置
     * @param string $name 配置名菜
     * @param mixed $replace 配置文件不存在时的配置
     * @param bool $reload 是否重新加载
     * @return mixed
     */
    public static function loadConfig(string $name,$replace=null,bool $reload=false){
        if($reload or !isset(self::$_config[$name])){
            if (is_file(_PSR_CONFIG_DIR_.$name)) {
                self::$_config[$name] = include(_PSR_CONFIG_DIR_.$name);
            }else{
                self::$_config[$name] = $replace;
            }
        }
        return self::$_config[$name];
    }

    /**
     * 设置类的别名
     * @param string $classname 类名称
     * @param string $class_aliases 设置的别名
     * @return mixed|null
     */
    public static function setAlias(string $classname,string $class_aliases){
        return class_exists($class_aliases) ? eval('class '.$classname.' extends '.$class_aliases.' {}') : null;
    }


}