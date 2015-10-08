<?php
class home extends Controller
{

    protected $user;

    /*
     * to create objects that is require for this controller
     */
    public function __construct()
    {
        $this->user = new User();
    }

    public function index($name = '')
    {
        //$user = $this->model('User');
        //$this->user->name = $name;
        //$params= array();
        //$params['name'] = $this->user->name;
        $this->view('__layout/header');
        $this->view('__layout/navbar');
        $this->view('home/index');
        $this->view('__layout/footer');
    }

}