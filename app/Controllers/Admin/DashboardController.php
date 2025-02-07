<?php
namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\LogTracker;
use App\Models\Admin\UsersModel;
use App\Models\Marketing\OnlineInquiryModel;
use App\Models\Marketing\FormSaleModel;

class DashboardController extends BaseController
{
    public function index()
    {
        $data = [];

        $logTrackerModel = new LogTracker();
        $userModel = new UsersModel();

        $data['user_login_log'] = $logTrackerModel->join('users', 'users.userId = userloginlog.userRealId')->findAll();

        $data['top_five_login_users'] = $logTrackerModel
            ->select('users.userName, COUNT(userloginlog.userRealId) as login_count')
            ->join('users', 'users.userId = userloginlog.userRealId')
            ->groupBy('userloginlog.userRealId')
            ->orderBy('login_count', 'DESC')
            ->limit(5)
            ->findAll();

        $data['total_users'] = $logTrackerModel->db->table('users')->countAllResults();

        $onlineInquiryModel = new OnlineInquiryModel();
        $data['total_online_inquiries'] = $onlineInquiryModel->countAllResults();

        $formSaleModel = new FormSaleModel();
        $data['total_form_sales'] = $formSaleModel->countAllResults();

        

        return view('admin/dashboard', $data);
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

        return view('admin/user_pages/edit_account', $data);
    }
}