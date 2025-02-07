<?php
namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class UsersController extends BaseController
{
    public function __construct()
    {
        helper(['form', 'url']);
        $this->userModel = new \App\Models\Admin\UsersModel();
    }

    public function index()
    {
        $data = [];
        $data['users'] = $this->userModel->findAll();

        $data['userCountByDepartment'] = $this->userModel->select('userAccessType, COUNT(*) as count')
            ->groupBy('userAccessType')
            ->findAll();
        
        $data['userCountByStatus'] = $this->userModel->select('userStatus, COUNT(*) as count')
            ->groupBy('userStatus')
            ->findAll();


        return view('admin/user_pages/users', $data);
    }

    public function add_user()
    {
        $data = [];

         // Define validation rules and custom error messages
         $validationRules = [
            'userName' => [
                'rules' => 'required|min_length[3]|max_length[50]',
                'errors' => [
                    'required'    => 'The User Name field is required.',
                    'min_length'  => 'The User Name must be at least 3 characters long.',
                    'max_length'  => 'The User Name cannot exceed 50 characters.',
                ],
            ],
            'userEmail' => [
                'rules' => 'required|valid_email|is_unique[Users.userEmail]',
                'errors' => [
                    'required'    => 'The User Email field is required.',
                    'valid_email' => 'Please enter a valid email address.',
                    'is_unique'   => 'This email is already registered.',
                ],
            ],
            'userPassword' => [
                'rules' => 'required|min_length[6]',
                'errors' => [
                    'required'   => 'The Password field is required.',
                    'min_length' => 'The Password must be at least 6 characters long.',
                ],
            ],
            'userAccesstype' => [
                'rules' => 'required|in_list[admin,contactlogger]',
                'errors' => [
                    'required' => 'The Access Type field is required.',
                    'in_list'  => 'The Access Type must be either "admin" or "user".',
                ],
            ],
            'userStatus' => [
                'rules' => 'required|in_list[active,inactive]',
                'errors' => [
                    'required' => 'The Status field is required.',
                    'in_list'  => 'The Status must be either "active" or "inactive".',
                ],
            ],
        ];

        if ($this->request->getMethod() === 'post') {
            // Validate the input
            if($this->validate($validationRules)) {
                // Save the user to the database

                $user = [
                    'userName' => $this->request->getPost('userName'),
                    'userEmail' => $this->request->getPost('userEmail'),
                    'userPassword' => password_hash($this->request->getPost('userPassword'), PASSWORD_DEFAULT),
                    'userAccesstype' => $this->request->getPost('userAccesstype'),
                    'userStatus' => $this->request->getPost('userStatus'),
                    'userCreatedLoggedBy' => 1,
                ];

                if($this->userModel->save($user)) {
                    return redirect()->to('/admin/users')->with('success', 'You successfully added a new user.');
                } else {
                    $data['error'] = 'User not saved';
                }  
            } else {
                $data['validation'] = $this->validator;
            }
        }

        return view('admin/user_pages/add_user', $data);
    }

    // view the user profile page
    public function user_profile($id)
    {
        $data = [];
    
        $user = $this->userModel->find($id);

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
            'userEmail' => [
                'rules' => 'required|valid_email',
                'errors' => [
                    'required'    => 'The User Email field is required.',
                    'valid_email' => 'Please enter a valid email address.',
                ],
            ],
            'userAccesstype' => [
                'rules' => 'required|in_list[admin,contactlogger]',
                'errors' => [
                    'required' => 'The Access Type field is required.',
                    'in_list'  => 'The Access Type must be either "admin" or "user".',
                ],
            ],
            'userStatus' => [
                'rules' => 'required|in_list[active,inactive]',
                'errors' => [
                    'required' => 'The Status field is required.',
                    'in_list'  => 'The Status must be either "active" or "inactive".',
                ],
            ],
        ];

        if ($this->request->getMethod() === 'post') {
            // Validate the input
            if($this->validate($validationRules)) {
                // Save the user to the database

                $user = [
                    'userName' => $this->request->getPost('userName'),
                    'userEmail' => $this->request->getPost('userEmail'),
                    'userAccesstype' => $this->request->getPost('userAccesstype'),
                    'userStatus' => $this->request->getPost('userStatus'),
                ];

                if($this->userModel->update($id, $user)) {
                    return redirect()->to('/admin/users')->with('success', 'You successfully updated the user profile.');
                } else {
                    $data['error'] = 'User not saved';
                }  
            } else {
                $data['validation'] = $this->validator;
            }
        }

        return view('admin/user_pages/user_profile', $data);
    }
}