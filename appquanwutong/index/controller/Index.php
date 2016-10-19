<?php
namespace app\index\controller;
use think\Controller;
class Index extends Controller
{
    public function index()
    {

        //header('location:http://www.baidu.com/');
        //exit(0);

        //$this->redirect('http://www.baidu.com');


        return 'This is quanwutong app';
        //return '<meta http-equiv="refresh" content="0;url=web/index.php">';
    }
}
