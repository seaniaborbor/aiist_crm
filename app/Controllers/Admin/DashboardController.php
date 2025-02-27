<?php
namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\LogTracker;
use App\Models\Admin\UsersModel;
use App\Models\Marketing\OnlineInquiryModel;
use App\Models\Marketing\FormSaleModel;
use App\Models\Enrollment\EnrollmentModel;

class DashboardController extends BaseController
{
    public function index()
    {
        $data = [];

        $logTrackerModel = new LogTracker();
        $userModel = new UsersModel();
        $onlineInquiryModel = new OnlineInquiryModel();
        $formSaleModel = new FormSaleModel();
        $enrollment_db = new EnrollmentModel();

       
        $total_users = $logTrackerModel->db->table('users')->countAllResults();
        $total_online_inquiries = $onlineInquiryModel->countAllResults();
        $total_form_sales = $formSaleModel->countAllResults();
        $total_enrollment = $enrollment_db->countAllResults();

        $data['counters'] = [
            "Total Admin" => $total_users,
            "Total Lead" => $total_online_inquiries,
            "Total Form Sold" => $total_form_sales,
            "Total Enrollment" => $total_form_sales,
        ];

        $data['user_login_log'] = $logTrackerModel->table('userloginlog')
        ->select('users.userId, users.userPic, users.userName, MAX(userloginlog.loginInTime) as loginInTime')
        ->join('users', 'users.userId = userloginlog.userRealId')  // Join with users table
        ->groupBy('users.userId')  // Ensure unique users
        ->orderBy('loginInTime', 'DESC')  // Get the latest logins
        ->limit(5)  // Limit to last 5 unique users
        ->get()
        ->getResult();
    

        $data['enrollment_log'] = $enrollment_db->findAll();  

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