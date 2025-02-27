<?php

namespace App\Controllers\Enrollment;

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
        $data['statuses'] = $enrollment_db->select('stud_enroll_status')->distinct()->findAll();
        

    $rules = [

        'firstName' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'First name is required.',
            ]
        ],
       
        'lastName' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Last name is required.',
            ]
        ],
        'sex' => [
            'rules' => 'required|in_list[male,female]',
            'errors' => [
                'required' => 'Sex is required.',
                'in_list' => 'Sex must be either male or female.'
            ]
        ],
        'dob' => [
            'rules' => 'required|valid_date',
            'errors' => [
                'required' => 'Date of birth is required.',
                'valid_date' => 'Date of birth must be a valid date.'
            ]
        ],
        'placeOfBirth' => [
            'rules' => 'required|alpha_space',
            'errors' => [
                'required' => 'Place of birth is required.',
                'alpha_space' => 'Place of birth must contain only letters and spaces.'
            ]
        ],
        'city' => [
            'rules' => 'required|alpha_space',
            'errors' => [
                'required' => 'City is required.',
                'alpha_space' => 'City must contain only letters and spaces.'
            ]
        ],
        'countryOfOrigin' => [
            'rules' => 'required|alpha_space',
            'errors' => [
                'required' => 'Country of origin is required.',
                'alpha_space' => 'Country of origin must contain only letters and spaces.'
            ]
        ],
        'nationality' => [
            'rules' => 'required|alpha_space',
            'errors' => [
                'required' => 'Nationality is required.',
                'alpha_space' => 'Nationality must contain only letters and spaces.'
            ]
        ],
        'address' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Address is required.'
            ]
        ],
        'phone' => [
            'rules' => 'required|numeric',
            'errors' => [
                'required' => 'Phone number is required.',
                'numeric' => 'Phone number must be a number.'
            ]
        ],
        'email' => [
            'rules' => 'required|valid_email',
            'errors' => [
                'required' => 'Email is required.',
                'valid_email' => 'Email must be a valid email address.'
            ]
        ],
        'highSchool' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'High school is required.',
            ]
        ],
        'yearGraduated' => [
            'rules' => 'required|numeric',
            'errors' => [
                'required' => 'Year graduated is required.',
                'numeric' => 'Year graduated must be a number.'
            ]
        ],

        'fatherName' => [
            'rules' => 'required|alpha_space',
            'errors' => [
                'required' => 'Father\'s name is required.',
                'alpha_space' => 'Father\'s name must contain only letters and spaces.'
            ]
        ],
        'fatherPhone' => [
            'rules' => 'required|numeric',
            'errors' => [
                'required' => 'Father\'s phone number is required.',
                'numeric' => 'Father\'s phone number must be a number.'
            ]
        ],
        'fatherAddress' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Father\'s address is required.'
            ]
        ],
        'motherName' => [
            'rules' => 'required|alpha_space',
            'errors' => [
                'required' => 'Mother\'s name is required.',
                'alpha_space' => 'Mother\'s name must contain only letters and spaces.'
            ]
        ],
        'motherPhone' => [
            'rules' => 'required|numeric',
            'errors' => [
                'required' => 'Mother\'s phone number is required.',
                'numeric' => 'Mother\'s phone number must be a number.'
            ]
        ],
        'motherAddress' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Mother\'s address is required.'
            ]
        ],
        'sponsorName' => [
            'rules' => 'required|alpha_space',
            'errors' => [
                'required' => 'Sponsor\'s name is required.',
                'alpha_space' => 'Sponsor\'s name must contain only letters and spaces.'
            ]
        ],
        'sponsorPhone' => [
            'rules' => 'required|numeric',
            'errors' => [
                'required' => 'Sponsor\'s phone number is required.',
                'numeric' => 'Sponsor\'s phone number must be a number.'
            ]
        ],
        'schoolRecords' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'School records are required.'
            ]
        ],
        'whichOne' => [
            'rules' => 'required|alpha_space',
            'errors' => [
                'required' => 'Which one is required.',
                'alpha_space' => 'Which one must contain only letters and spaces.'
            ]
        ],
        'programType' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Program type is required.'
            ]
        ],
        'program' => [
            'rules' => 'required|alpha_space',
            'errors' => [
                'required' => 'Program is required.',
                'alpha_space' => 'Program must contain only letters and spaces.'
            ]
        ],
        'course' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Course is required.',
            ]
        ],
        'preferredClassTime' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Preferred class time is required.',
            ]
        ],
        'timeSlot' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Time slot is required.',
            ]
        ],
        'shirtSize' => [
            'rules' => 'required|alpha',
            'errors' => [
                'required' => 'Shirt size is required.',
                'alpha' => 'Shirt size must contain only letters.'
            ]
        ],
        'source' => [
            'rules' => 'required|alpha_space',
            'errors' => [
                'required' => 'Source is required.',
                'alpha_space' => 'Source must contain only letters and spaces.'
            ]
            ],
        'formNum' => [
            'rules' => 'required|numeric|is_unique[enrollmentform.formNum]',
            'errors' => [
                'required' => 'Source is required.',
                'numeric' => 'Only numbers are allowed',
                'is_unique' => 'An applicant already has the form number in the database',
            ]
        ]
    ];

    if($this->request->getMethod() == "post"){
        if (!$this->validate($rules)) {
            $data['enrollment_application_error'] = $this->validator;
    
        } else {

            // check if the form number is in the form purchase data base 
            $form_db = new FormSaleModel();

            if(!$form_db->where("prospectiveFormNo", $this->request->getPost("formNum"))->first()){
                return redirect()->back()->with("error", "The form number is not in the database. Try again or if the error persist, tell the 
                applicant to go to the form sale department to make sure the form is recorded in the database");
                exit();
            }
    
            $studentData = [
                'firstName' => $this->request->getPost('firstName'),
                'middleName' => $this->request->getPost('middleName'),
                'lastName' => $this->request->getPost('lastName'),
                'sex' => $this->request->getPost('sex'),
                'dob' => $this->request->getPost('dob'),
                'placeOfBirth' => $this->request->getPost('placeOfBirth'),
                'city' => $this->request->getPost('city'),
                'countryOfOrigin' => $this->request->getPost('countryOfOrigin'),
                'nationality' => $this->request->getPost('nationality'),
                'address' => $this->request->getPost('address'),
                'phone' => $this->request->getPost('phone'),
                'email' => $this->request->getPost('email'),
                'highSchool' => $this->request->getPost('highSchool'),
                'yearGraduated' => $this->request->getPost('yearGraduated'),
                'highSchoolContact' => $this->request->getPost('highSchoolContact'),
                'fatherName' => $this->request->getPost('fatherName'),
                'fatherPhone' => $this->request->getPost('fatherPhone'),
                'fatherAddress' => $this->request->getPost('fatherAddress'),
                'motherName' => $this->request->getPost('motherName'),
                'motherPhone' => $this->request->getPost('motherPhone'),
                'motherAddress' => $this->request->getPost('motherAddress'),
                'sponsorName' => $this->request->getPost('sponsorName'),
                'sponsorPhone' => $this->request->getPost('sponsorPhone'),
                'schoolRecords' => $this->request->getPost('schoolRecords'),
                'whichOne' => $this->request->getPost('whichOne'),
                'programType' => $this->request->getPost('programType'),
                'program' => $this->request->getPost('program'),
                'course' => $this->request->getPost('course'),
                'preferred_class_time' => $this->request->getPost('preferredClassTime'),
                'time_slot' => $this->request->getPost('timeSlot'),
                'shirt_size' => $this->request->getPost('shirtSize'),
                'source' => $this->request->getPost('source'),
                'formNum' => $this->request->getPost("formNum"),
                'stud_enroll_status' => "freshman",
            ];

    
           if($enrollment_db->insert($studentData)){
            return redirect()->back()->with("success", "You finally enrolled a student");
           }else{
            return redirect()->back()->with("error", "You finally enrolled a student");
           };
        }
    }

        return view('enrollment/enroll_student', $data);
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
        return view('enrollment/student_profile', $data);
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
