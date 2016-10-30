<?php
namespace Application\Home\Controller;
use Sharin\Library\CI;
use Sharin\Library\Controller;

class Index extends Controller{

    public function index(){

        \Sharin\dump(CI::app()->uri->segment(1));


        $this->assign('info',[
            'author'    => 'lin',
            'address'   => 'https://github.com/kbylin0531/sharin7',
        ]);
        $this->display();
    }

}