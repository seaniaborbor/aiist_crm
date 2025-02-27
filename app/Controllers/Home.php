<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use CodeIgniter\HTTP\RedirectResponse;

use App\Models\Admin\UsersModel;
use App\Models\LogTracker;


class Home extends BaseController
{
    public function __construct()
    {
        helper(['form', 'url']);
        $this->userModel = new UsersModel();
    }


    // login function

    public function index()
    {
        $data = [];

        $validationRules = [
            'userEmail' => [
                'rules' => 'required|min_length[3]|max_length[20]',
                'label' => 'User Email',
                'errors' => [
                    'required' => 'The User Email field is required.',
                    'min_length' => 'The User Email must be at least 3 characters long.',
                    'max_length' => 'The User Email cannot exceed 20 characters.',
                ],
            ],
            'userPassword' => [
                'rules' => 'required|min_length[5]',
                'label' => 'User Password',
                'errors' => [
                    'required' => 'The User Password field is required.',
                    'min_length' => 'The User Password must be at least 6 characters long.',
                ],
            ],
        ];

        if($this->request->getMethod() === 'post') {
           
            if(!$this->validate($validationRules)) {
                $data['validation'] = $this->validator;
            } else {
                // get the input values
                $email = $this->request->getPost('userEmail');
                $password = $this->request->getPost('userPassword');
                // check if the user exists
                $user = $this->userModel->where('userEmail', $email)->first();
                // check if the user exists
                if($user) {
                    // check if the password is correct
                    if (password_verify($password, $user['userPassword'])) {
                        // Check if the user is active
                        if ($user['userStatus'] === "active") {
                            // Set the user session
                            $newLog = new LogTracker();

                            session()->set($user);
                            // Choose where the user should be directed
                            if ($user['userAccessType'] === 'admin') {

                                if($newLog->save([
                                    'userRealId' => $user['userId'],
                                ]));

                                // Redirect to the admin dashboard
                                return redirect()->to('/admin');
                            } elseif($user['userAccessType'] === 'enrollment'){
                                if($newLog->save([
                                    'userRealId' => $user['userId'],
                                ]));

                                // Redirect to the admin dashboard
                                return redirect()->to('/enrollment');
                            } else{
                                if($newLog->save([
                                    'userRealId' => $user['userId'],
                                ]));
                                // Redirect to the marketing dashboard
                                return redirect()->to('/marketing');
                            }
                        } else {
                            // If the user is inactive, set an error message
                            $data['error'] = 'Sorry, your account is inactive. Please contact the Administration for more information.';
                        }
                    } 
                     else {
                        $data['error'] = 'Wrong password';
                    }
                } else {
                    $data['error'] = 'Sorry, this user does not exist';
                }
            }
        }

        return view('login', $data);
    }


    // logout function
    public function logout(): RedirectResponse
{
   
    session()->destroy();


    // Redirect to the login page with a success message
    return redirect()->to('/')->with('success', 'You have been logged out successfully.');
}

}
