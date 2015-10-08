<?php
/**
 * Created by PhpStorm.
 * User: viral
 * Date: 04-Oct-15
 * Time: 11:07 AM
 */

class admin extends Controller
{
    protected $user;
    public function __construct()
    {
        $this->user = new User();
    }

    /** do login in if cred. matches
     * @param $_post data
     **/
    public function login ()
    {
        // if already logged in the redirect to dashboard page
        if(Session::get('loggin') == true){
            $this->redirect('admin/dashboard');
        }

        if(isset($_POST) && !empty($_POST)){
            //call protected function to login the user
            $this->__postLogin();
        }
        $this->view('__layout/header');
        $this->view('admin/login');
        $this->view('__layout/header');
    }

    /** to logout from the system
     **/
    public function logout()
    {
        Session::destroy();
        $this->redirect('admin/login');
    }

    /** do login in cred. matches
     * @param $_post data
     * @redirect to dashboard if cred. matches
     */
    protected function __postLogin()
    {
        if(isset($_POST['submit'])){
            $username = $_POST['username'];
            $password = $_POST['password'];
            $userData = $this->user->getBy('email', $username);

            if (isset($userData) && !empty($userData)) {

                if (MD5($password) == $userData['0']['password']) {
                    //set the session to true
                    Session::set('loggin',true);
                    // if matches username and password redirect to dashboard
                    $this->redirect('admin/dashboard');
                } else {
                    //when password is wrong
                    $response = array();
                    $response['message'][] = 'Your password is wrong, please try again !';
                    $this->view('admin/login', $response);
                }
            } else {
                // when username is wrong
                $response = array();
                $response['message'][] = 'Your Username is wrong, please try again !';
                $this->view('admin/login', $response);
            }
        }else{
            // if user press submit button without entering username and password
            $response = array();
            $response['message'][] = 'Please enter username and password to login !';
            $this->view('admin/login',$response);
        }
    }


    /** verify username and password
     * @param username & password
     * @return true or false
     */
    protected function __verify($userData){

    }

    public function dashboard(){
        // if user is not logged then it can not access this method
        if(Session::get('loggin') == false){
            $this->redirect('admin/login');
        }

        $this->view('__layout/header');
        $this->view('__layout/navbar');
        $this->view('admin/dashboard');
        $this->view('__layout/footer');
    }


}