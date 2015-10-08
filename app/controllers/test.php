<?php
class test extends Controller
{

    public function index($name = '')
    {
        $user = $this->model('User');
        $user->name = $name;

        $params= array();
        $params['name'] = $user->name;
        $this->view('home/index',$params);
    }

    public function ronak($test = '' , $name=''){
        echo 'testing purpose '.$test;
        echo '<br>';
        echo $name;
    }

}