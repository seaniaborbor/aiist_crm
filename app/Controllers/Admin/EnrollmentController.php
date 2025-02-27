<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Enrollment\EnrollmentModel;
use App\Models\Marketing\FormSaleModel;
use App\Models\Enrollment\ProfilePicModel;



class EnrollmentController extends BaseController
{
    public function __construct()
    {
        helper(['form', 'url']);
    }

    public function index()
    {
        $data = [];

        $enrollment_db = new EnrollmentModel();
        
        $data['enrollment_log'] = $enrollment_db->findAll();

        // select count from the enroll ment table group by stud_enroll_status
        $data['enrollment_status_counts'] = $enrollment_db->select('stud_enroll_status, COUNT(*) as count')
            ->groupBy('stud_enroll_status')
            ->findAll();

        return view('admin/enrollment_log', $data);
    }


    // student profile method 
    public function stud_profile($student_id){
        $enrollment_db = new EnrollmentModel();
        $student = $enrollment_db->find($student_id);

        if (!$student) {
            return redirect()->back()->with('error', 'Student not found.');
        }

        $profile_pic_db = new ProfilePicModel();
        $profile_pic = $profile_pic_db->where("student_id", $student_id)->first();

        if($profile_pic){
            $data['pic_is_present'] = 1;
            $data['profile_pic'] = $profile_pic['profileImg'];
        }else{
            $data['pic_is_present'] = 0;
            $data['profile_pic'] = "/dashboard_assets/img/ediusers.jpg";
        }
        

        $data['student_id'] = $student_id;

        $data['student'] = $student;
        return view('admin/view_student_profile', $data);
    }





    // method to upload student profile or passport size
    public function upload_student_profile(){

        $profile_pic_db = new ProfilePicModel();

        $rules = [
            'profileImg' => [
                'rules' => 'uploaded[profileImg]|is_image[profileImg]|mime_in[profileImg,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'uploaded' => 'Profile image is required.',
                    'is_image' => 'Profile image must be a valid image file.',
                    'mime_in' => 'Profile image must be a jpg, jpeg, or png file.'
                ]
            ],
            'student_id' => [
                'rules' => 'required|numeric',
                'errors' => [
                    'required' => 'Student ID is required.',
                    'numeric' => 'Student ID must be a number.'
                ]
            ]
        ];

        if ($this->request->getMethod() == "post") {
            if (!$this->validate($rules)) {
                return redirect()->back()->with("error", "Either a valid image isn't selected or you left the field blank.");
            } else {
                // Handle the file upload and other logic here
                $img = $this->request->getFile('profileImg');
                if ($img->isValid() && !$img->hasMoved()) {
                    $newName = $img->getRandomName();
                
                    if ($img->move(FCPATH . 'dashboard_assets/img/', $newName)) {
                        $studentId = $this->request->getPost('student_id');
                    
                        $profileData = [
                            'profileImg' => $newName
                        ];
                    
                        // Check if the student record exists
                        if ($profile_pic_db->where("student_id", $studentId)->first()) {
                            // Update query should be done using 'set' and 'where'
                            if ($profile_pic_db->set($profileData)->where("student_id", $studentId)->update()) {
                                return redirect()->back()->with("success", "You updated the profile image successfully.");
                            } else {
                                return redirect()->back()->with("error", "Failed to update profile picture.");
                            }
                        } else {
                            // Insert the new profile data
                            $profileData['student_id'] = $studentId; // Ensure student_id is included for insert
                            if ($profile_pic_db->insert($profileData)) {
                                return redirect()->back()->with("success", "Profile image uploaded successfully.");
                            } else {
                                return redirect()->back()->with("error", "Failed to save image data.");
                            }
                        }
                    } else {
                        return redirect()->back()->with("error", "Failed to move uploaded file.");
                    }
                    
                } else {
                    return redirect()->back()->with("error", "Invalid image file.");
                }
                
            }
        }

        return redirect()->back()->with("error", "You wrongly visited this route");
    }



    /// change enrollment status 
    public function change_enroll_ment_status($stud_id ){
        $enrollment_db = new EnrollmentModel();
        $student = $enrollment_db->find($stud_id);

    if (!$student) {
        return redirect()->back()->with('error', 'Student not found.');
    }

    $newStatus = $this->request->getPost('stud_enroll_status');

     if (!in_array($newStatus, ['dropped', 'freshman', 'sophomore', 'junior', 'senior', 'graduated'])) {
        return redirect()->back()->with('error', 'Invalid status.');
     }

    $student['stud_enroll_status'] = $newStatus;

    if ($enrollment_db->save($student)) {
        return redirect()->back()->with('success', 'Enrollment status updated successfully.');
    } else {
        return redirect()->back()->with('error', 'Failed to update enrollment status.');
    }
    }

// this is the query by 
public function query_by_status(){

    if ($this->request->getMethod() == "post") {

        $rules = [
            'start_date' => [
                'rules' => 'required|valid_date',
                'errors' => [
                    'required' => 'Start date is required.',
                    'valid_date' => 'Start date must be a valid date.'
                ]
            ],
            'end_date' => [
                'rules' => 'required|valid_date',
                'errors' => [
                    'required' => 'End date is required.',
                    'valid_date' => 'End date must be a valid date.'
                ]
            ],
            'status' => [
                'rules' => 'required|in_list[dropped,freshman,sophomore,junior,senior,graduated]',
                'errors' => [
                    'required' => 'Status is required.',
                    'in_list' => 'Status must be one of: dropped, freshman, sophomore, junior, senior, graduated.'
                ]
            ]
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->with('error', 'There was a validation error.');
        }

        // Process the form data if validation passes
        $startDate = $this->request->getPost('start_date');
        $endDate = $this->request->getPost('end_date');
        $status = $this->request->getPost('status');

        // Your logic to handle the form data goes here
        $enrollment_db = new EnrollmentModel();
        $students = $enrollment_db->where('stud_enroll_status', $status)
                                  ->where('created_at >=', $startDate)
                                  ->where('created_at <=', $endDate)
                                  ->findAll();

        $data['students'] = $students;

        return view('enrollment/query_results', $data);
    }
}


    
}
