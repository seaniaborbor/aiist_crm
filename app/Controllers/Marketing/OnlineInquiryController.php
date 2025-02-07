<?php

namespace App\Controllers\Marketing;

use App\Controllers\BaseController;
use App\Models\Marketing\OnlineInquiryModel;

class OnlineInquiryController extends BaseController
{
    public function __construct()
    {
        helper(['form', 'url']);
        $this->onlineInquiryModel = new OnlineInquiryModel();
    }

    public function index()
    {
        $data = [];

        $validationRules = [
            'LeadFullName' => [
                'rules' => 'required|min_length[3]|max_length[255]',
                'label' => 'Lead Full Name',
                'errors' => [
                    'required' => 'The Lead Full Name field is required.',
                    'min_length' => 'The Lead Full Name must be at least 3 characters long.',
                    'max_length' => 'The Lead Full Name cannot exceed 255 characters.',
                ],
            ],
            'leadMainContact' => [
                'rules' => 'required|min_length[10]|max_length[15]',
                'label' => 'Lead Main Contact',
                'errors' => [
                    'required' => 'The Lead Main Contact field is required.',
                    'min_length' => 'The Lead Main Contact must be at least 10 characters long.',
                    'max_length' => 'The Lead Main Contact cannot exceed 15 characters.',
                ],
            ],
            'leadContact2' => [
                'rules' => 'permit_empty|min_length[10]|max_length[15]',
                'label' => 'Lead Secondary Contact',
                'errors' => [
                    'min_length' => 'The Lead Secondary Contact must be at least 10 characters long.',
                    'max_length' => 'The Lead Secondary Contact cannot exceed 15 characters.',
                ],
            ],
            'leadWhatappNum' => [
                'rules' => 'permit_empty|min_length[10]|max_length[15]',
                'label' => 'Lead WhatsApp Number',
                'errors' => [
                    'min_length' => 'The Lead WhatsApp Number must be at least 10 characters long.',
                    'max_length' => 'The Lead WhatsApp Number cannot exceed 15 characters.',
                ],
            ],
            'leadAddress' => [
                'rules' => 'required|min_length[5]|max_length[255]',
                'label' => 'Lead Address',
                'errors' => [
                    'required' => 'The Lead Address field is required.',
                    'min_length' => 'The Lead Address must be at least 5 characters long.',
                    'max_length' => 'The Lead Address cannot exceed 255 characters.',
                ],
            ],
        ];

        if ($this->request->getMethod() === 'post') {
            if ($this->validate($validationRules)) {
                // get form data
                $data = [
                    'LeadFullName' => $this->request->getPost('LeadFullName'),
                    'leadMainContact' => $this->request->getPost('leadMainContact'),
                    'leadContact2' => $this->request->getPost('leadContact2'),
                    'leadWhatappNum' => $this->request->getPost('leadWhatappNum'),
                    'leadAddress' => $this->request->getPost('leadAddress'),
                    "leadStatus" => "Not Contacted",
                    'leadCreatedLoggedBy' => session()->get('userId'),
                ];
                // save to database
                if ($this->onlineInquiryModel->save($data)) {
                    return redirect()->back()->with('success', 'Form submitted successfully.');
                } else {
                    return redirect()->to('/marketing/log_online_inquiry_form')->with('error', 'Form submission failed.');
                }
            } else {
                $data['validation'] = $this->validator;
            }
        }
        return view('marketing/log_online_inquiry', $data);
    }

    public function detail($id)
    {
        $data = [];
        $data['lead'] = $this->onlineInquiryModel->find($id);
        //check if the lead exists
        if (!$data['lead']) {
            return redirect()->to('/marketing/log_online_inquiry_form')->with('error', 'Lead not found.');
        }

        // check if the current users is the one who logged this in
        if ($data['lead']['leadCreatedLoggedBy'] != session()->get('userId')) {
            return redirect()->to('/marketing/log_online_inquiry_form')->with('error', 'Unauthorized access.');
        }

        return view('marketing/online_inquiry_detail', $data);
    }

    // delete method 
    public function delete($id)
    {
       // get the lead
        $lead = $this->onlineInquiryModel->find($id);
        // check if the lead exists
        if (!$lead) {
            return redirect()->to('/marketing/log_online_inquiry_form')->with('error', 'Lead not found.');
        }
        // check if the current users is the one who logged this in
        if ($lead['leadCreatedLoggedBy'] != session()->get('userId')) {
            return redirect()->to('/marketing/log_online_inquiry_form')->with('error', 'Unauthorized access.');
        }
        // delete the lead
        if ($this->onlineInquiryModel->delete($id)) {
            return redirect()->to('/marketing')->with('success', 'Lead deleted successfully.');
        } else {
            return redirect()->to('/marketing')->with('error', 'Lead deletion failed.');
        }
    }

    // edit method
    public function edit($id){
        $data = [];
        $data['lead'] = $this->onlineInquiryModel->find($id);
        // check if the lead exists
        if (!$data['lead']) {
            return redirect()->to('/marketing/log_online_inquiry_form')->with('error', 'Lead not found.');
        }
        // check if the current users is the one who logged this in
        if ($data['lead']['leadCreatedLoggedBy'] != session()->get('userId')) {
            return redirect()->to('/marketing/log_online_inquiry_form')->with('error', 'Unauthorized access.');
        }
        // validation rules
        $validationRules = [
            'LeadFullName' => [
                'rules' => 'required|min_length[3]|max_length[255]',
                'label' => 'Lead Full Name',
                'errors' => [
                    'required' => 'The Lead Full Name field is required.',
                    'min_length' => 'The Lead Full Name must be at least 3 characters long.',
                    'max_length' => 'The Lead Full Name cannot exceed 255 characters.',
                ],
            ],
            'leadMainContact' => [
                'rules' => 'required|min_length[10]|max_length[15]',
                'label' => 'Lead Main Contact',
                'errors' => [
                    'required' => 'The Lead Main Contact field is required.',
                    'min_length' => 'The Lead Main Contact must be at least 10 characters long.',
                    'max_length' => 'The Lead Main Contact cannot exceed 15 characters.',
                ],
            ],
           
            'leadWhatappNum' => [
                'rules' => 'permit_empty|min_length[10]|max_length[15]',
                'label' => 'Lead WhatsApp Number',
                'errors' => [
                    'min_length' => 'The Lead WhatsApp Number must be at least 10 characters long.',
                    'max_length' => 'The Lead WhatsApp Number cannot exceed 15 characters.',
                ],
            ],

            'leadAddress' => [
                'rules' => 'required|min_length[5]|max_length[255]',
                'label' => 'Lead Address',
                'errors' => [
                    'required' => 'The Lead Address field is required.',
                    'min_length' => 'The Lead Address must be at least 5 characters long.',
                    'max_length' => 'The Lead Address cannot exceed 255 characters.',
                ],
            ],
        ];

        if ($this->request->getMethod() === 'post') {
            if ($this->validate($validationRules)) {
                // get form data
                $data = [
                    'LeadFullName' => $this->request->getPost('LeadFullName'),
                    'leadMainContact' => $this->request->getPost('leadMainContact'),
                    'leadContact2' => $this->request->getPost('leadContact2'),
                    'leadWhatappNum' => $this->request->getPost('leadWhatappNum'),
                    'leadAddress' => $this->request->getPost('leadAddress'),
                    'leadCreatedLoggedBy' => session()->get('userId'),
                ];
                // save to database
                if ($this->onlineInquiryModel->update($id, $data)) {
                    return redirect()->back()->with('success', 'Form updated successfully.');
                } else {
                    return redirect()->to('/marketing/log_online_inquiry_form')->with('error', 'Form update failed.');
                }
            } else {
               return redirect()->back()->with('error', 'Validation failed.');
            }
        }else{
            return redurect()->back()->with('error', 'Invalid request.');
        }
    }

    // update 
    public function update($id, $update_value){
        // find the data
        $data['lead'] = $this->onlineInquiryModel->find($id);
        // check if the lead exists
        if (!$data['lead']) {
            return redirect()->back()->with('error', 'Lead not found.');
        }
        // check if the current users is the one who logged this in
        if ($data['lead']['leadCreatedLoggedBy'] != session()->get('userId')) {
            return redirect()->back()->with('error', 'You are not allowed to access this data');
        }

        $data['lead']['leadStatus'] = $update_value;
        if($this->onlineInquiryModel->update($id, $data['lead'])){
            return redirect()->back()->with('success', 'You changed the status of this data');
        }else{
            return redirect()->back()->with('error', 'Failed to change the status');
        }
    }

}
