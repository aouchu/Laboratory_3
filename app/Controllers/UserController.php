<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class UserController extends BaseController
{
    public function Signup(){
        helper(['form']);
        echo view('Homepage/signup');
    }

    public function register()
    {
        helper(['form']);
        $rules =[
            'username' => 'required|min_length[4]|max_length[100]',
            'password' =>'required|min_length[4]|max_length[50]',
            'confirmpassword' => 'matches[password]',
        ];
            if($this->validate($rules)){
            $userModel = new UserModel();

            $data =[
            'username' => $this->request->getVar('username'),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
            'usertype' => 'user',
            ];

            $userModel->save($data);

            return redirect()->to('/Login');
        }else{
            $data['validation'] = $this->validator;
            return redirect()->to('/Register');
            };
    }

    public function Login() {
        helper(['form']);
        echo view('Homepage/signin');
    }

    public function Logout() {
        $session = session();
        session_destroy();
        return redirect()->to('/Login');
    }

    public function LoginAuth() {

        $session = session();
        $userModel = new UserModel();
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');

        $data = $userModel->where('username', $username)->first();
        if($data){
            $pass = $data['password'];
            $authenticatePassword = password_verify($password, $pass);
                
            if($authenticatePassword){
                    $ses_data = [
                        'id' => $data['id'],
                        'username' => $data['username'],
                        'usertype' => $data['usertype'],
                        'isLoggedIn' => TRUE,
                    ];
                    $session->set($ses_data);

                    if($_SESSION['usertype'] == 'admin'){
                        return redirect()->to('/Admin');
                    }
                    else{
                        return redirect()->to('/Index');
                    }
                }
                else{
                $session->setFlashdata('msg','Password is incorrect.');
                return redirect()->to('/Login');
                }
            }
            else
            {
                $session->setFlashdata('msg','Email does not exist.');
                return redirect()->to('/Login');
            };
    }

    public function index()
    {
        //
    }

    

}
