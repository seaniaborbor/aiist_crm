<?php

namespace App\Controllers\Marketing;

use App\Controllers\BaseController;
use App\Models\Marketing\OnlineInquiryModel;
use App\Models\Marketing\FormSaleModel;
use App\Models\Admin\UsersModel;


class DashboardController extends BaseController
{
    public function __construct()
    {
        helper(['form', 'url']);
    }
    public function index(): string
    {
        $data = [];
        $marketing_db = new OnlineInquiryModel();
        $form_sales_db = new FormSaleModel();

        $data['user_inquiry_log'] = $marketing_db->where('leadCreatedLoggedBy', session()->get('userId'))->findAll();
        $data['user_form_sale_log'] = $form_sales_db->where('formSaleCreatedLoggedBy', session()->get('userId'))->findAll();
        

        return view('marketing/index', $data);
    }


    
    // view personal profile
    public function personal_profile($id)
    {
        $data = [];

        $userModel = new UsersModel();
    
        $user = $userModel->find($id);

        if ($id != session()->get('userId')) {
            return redirect()->back()->with('error', 'You are not authorized to view this profile.');
        }

        if($user) {
            $data['user'] = $user;
        } else {
            $data['error'] = 'User not found';
        }

        //validation rules if the users posts form to edit profile 
        $validationRules = [
            'userName' => [
                'rules' => 'required|min_length[3]|max_length[50]',
                'errors' => [
                    'required'    => 'The User Name field is required.',
                    'min_length'  => 'The User Name must be at least 3 characters long.',
                    'max_length'  => 'The User Name cannot exceed 50 characters.',
                ],
            ],

            'userPassword' => [
                'rules' => 'required|max_length[50]',
                'errors' => [
                    'required'    => 'The User password field is required.',
                    'max_length'  => 'The User password cannot exceed 50 characters.',
                ],
            ],
        
            
        ];

        if ($this->request->getMethod() === 'post') {

                $changePassword = false;

            if($this->request->getPost("newPassword") && !empty($this->request->getPost("newPassword"))){

                $validationRules['newPassword'] = [
                    'rules' => 'required|max_length[50]',
                    'errors' => [
                        'required'    => 'The User new  password field is required.',
                        'max_length'  => 'The User new password cannot exceed 50 characters.',
                    ],
                ];

                $changePassword = true; 
            }
            // Validate the input
            if($this->validate($validationRules)) {
                
                // VERIFY THE PASSWORD 
                if(password_verify($this->request->getPost("userPassword"), $user['userPassword'])){

                    if($changePassword){
                        $user['userPassword'] = password_hash($this->request->getPost('newPassword'), PASSWORD_DEFAULT);
                    }

                    $user['userName'] = $this->request->getPost('userName');

                }


                if($userModel->update($id, $user)) {
                    return redirect()->back()->with('success', 'You successfully updated the user profile.');
                } else {
                    $data['error'] = 'User not saved';
                }  
            } else {
                $data['validation'] = $this->validator;
            }
        }

        return view('marketing/edit_user_account', $data);
    }
}
