<?php

namespace App\Controllers\Marketing;

use App\Controllers\BaseController;
use App\Models\Marketing\FormSaleModel;
use CodeIgniter\HTTP\RedirectResponse;

class FormSaleController extends BaseController
{
    public function __construct()
    {
        helper(['form', 'url']);
        $this->formSaleModel = new FormSaleModel();
    }

    public function index()
    {
        $data = [];

        // validation rules if form is submitted
        $validationRules = [
            'prospectiveFullName' => [
                'rules' => 'required|min_length[3]|max_length[255]',
                'label' => 'Full Name',
                'errors' => [
                    'required' => 'The Full Name field is required.',
                    'min_length' => 'The Full Name must be at least 3 characters long.',
                    'max_length' => 'The Full Name cannot exceed 255 characters.'
                ]
            ],
            'prospectiveContact1' => [
                'rules' => 'required|min_length[10]|max_length[15]',
                'label' => 'Contact 1',
                'errors' => [
                    'required' => 'The Contact 1 field is required.',
                    'min_length' => 'The Contact 1 must be at least 10 characters long.',
                    'max_length' => 'The Contact 1 cannot exceed 15 characters.'
                ]
            ],
            'prospectiveContact2' => [
                'rules' => 'permit_empty|min_length[10]|max_length[15]',
                'label' => 'Contact 2',
                'errors' => [
                    'min_length' => 'The Contact 2 must be at least 10 characters long.',
                    'max_length' => 'The Contact 2 cannot exceed 15 characters.'
                ]
            ],
            'prospectiveWhatAppContact' => [
                'rules' => 'permit_empty|min_length[10]|max_length[15]',
                'label' => 'WhatsApp Contact',
                'errors' => [
                    'min_length' => 'The WhatsApp Contact must be at least 10 characters long.',
                    'max_length' => 'The WhatsApp Contact cannot exceed 15 characters.'
                ]
            ],
            'prospectiveAddress' => [
                'rules' => 'required|min_length[5]|max_length[255]',
                'label' => 'Address',
                'errors' => [
                    'required' => 'The Address field is required.',
                    'min_length' => 'The Address must be at least 5 characters long.',
                    'max_length' => 'The Address cannot exceed 255 characters.'
                ]
            ],
            'prspectiveFormPurchase' => [
                'rules' => 'required',
                'label' => 'Form Purchase',
                'errors' => [
                    'required' => 'The Form Purchase field is required.'
                ]
            ],
            'prospectiveInvoiceNum' => [
                'rules' => 'required|integer|is_unique[formsaletable.prospectiveInvoiceNum]',
                'label' => 'Invoice Number',
                'errors' => [
                    'required' => 'The Invoice Number field is required.',
                    'integer' => 'The Invoice Number must be a valid number.',
                    'is_unique' => 'The Invoice Number already exists.'
                ]
            ],
            'prospectiveFormNo' => [
                'rules' => 'required|integer|is_unique[formsaletable.prospectiveFormNo]',
                'label' => 'Form Number',
                'errors' => [
                    'required' => 'The Form Number field is required.',
                    'integer' => 'The Form Number must be a valid number.',
                    'is_unique' => 'The Form Number already exists.'
                ]
            ]
        ];

        if($this->request->getMethod() === 'post'){
            // validate form
            if($this->validate($validationRules)){
                // get form data
                $prospectiveFullName = $this->request->getPost('prospectiveFullName');
                $prospectiveContact1 = $this->request->getPost('prospectiveContact1');
                $prospectiveContact2 = $this->request->getPost('prospectiveContact2');
                $prospectiveWhatAppContact = $this->request->getPost('prospectiveWhatAppContact');
                $prospectiveAddress = $this->request->getPost('prospectiveAddress');
                $prspectiveFormPurchase = $this->request->getPost('prspectiveFormPurchase');
                $prospectiveInvoiceNum = $this->request->getPost('prospectiveInvoiceNum');
                $prospectiveFormNo = $this->request->getPost('prospectiveFormNo');
                $formSaleCreatedLoggedBy = session()->get('userId');
               
                $formData = [
                    'prospectiveFullName' => $prospectiveFullName,
                    'prospectiveContact1' => $prospectiveContact1,
                    'prospectiveContact2' => $prospectiveContact2,
                    'prospectiveWhatAppContact' => $prospectiveWhatAppContact,
                    'prospectiveAddress' => $prospectiveAddress,
                    'prspectiveFormPurchase' => $prspectiveFormPurchase,
                    'prospectiveInvoiceNum' => $prospectiveInvoiceNum,
                    'prospectiveFormNo' => $prospectiveFormNo,
                    'prospectiveStatus' => "Pending",
                    'formSaleCreatedLoggedBy' => $formSaleCreatedLoggedBy
                ];
                
                if($this->formSaleModel->save($formData)){
                   return redirect()->to("/marketing")->with('success', 'Form Sale submitted successfully.');
                }else{
                    return redirect()->to("/marketing")->with('error', 'Form Sale submission failed.');
                }

                $data['success'] = 'Form Sale submitted successfully.';
            }else{
                $data['validation'] = $this->validator;
            }
        }

        return view('marketing/log_form_sale', $data);
    }

    // view 

    public function view($id){
        $formSale = $this->formSaleModel->find($id);

        if (!$formSale) {
           return redirect()->back()->with("error", "The data you request to view is not found");
        }

        // check if the data was created by the current user
        if ($formSale['formSaleCreatedLoggedBy'] !== session()->get('userId')) {
            return redirect()->back()->with("error", "You do not have permission to view this data.");
        }

        $data = [
            'formSale' => $formSale
        ];

        if ($this->request->getMethod() === 'post') {
            // validation rules for editing
            $validationRules = [
                'prospectiveFullName' => [
                    'rules' => 'required|min_length[3]|max_length[255]',
                    'label' => 'Full Name',
                    'errors' => [
                        'required' => 'The Full Name field is required.',
                        'min_length' => 'The Full Name must be at least 3 characters long.',
                        'max_length' => 'The Full Name cannot exceed 255 characters.'
                    ]
                ],
                'prospectiveContact1' => [
                    'rules' => 'required|min_length[10]|max_length[15]',
                    'label' => 'Contact 1',
                    'errors' => [
                        'required' => 'The Contact 1 field is required.',
                        'min_length' => 'The Contact 1 must be at least 10 characters long.',
                        'max_length' => 'The Contact 1 cannot exceed 15 characters.'
                    ]
                ],
                'prospectiveContact2' => [
                    'rules' => 'permit_empty|min_length[10]|max_length[15]',
                    'label' => 'Contact 2',
                    'errors' => [
                        'min_length' => 'The Contact 2 must be at least 10 characters long.',
                        'max_length' => 'The Contact 2 cannot exceed 15 characters.'
                    ]
                ],
                'prospectiveWhatAppContact' => [
                    'rules' => 'permit_empty|min_length[10]|max_length[15]',
                    'label' => 'WhatsApp Contact',
                    'errors' => [
                        'min_length' => 'The WhatsApp Contact must be at least 10 characters long.',
                        'max_length' => 'The WhatsApp Contact cannot exceed 15 characters.'
                    ]
                ],
                'prospectiveAddress' => [
                    'rules' => 'required|min_length[5]|max_length[255]',
                    'label' => 'Address',
                    'errors' => [
                        'required' => 'The Address field is required.',
                        'min_length' => 'The Address must be at least 5 characters long.',
                        'max_length' => 'The Address cannot exceed 255 characters.'
                    ]
                ],
                'prspectiveFormPurchase' => [
                    'rules' => 'required',
                    'label' => 'Form Purchase',
                    'errors' => [
                        'required' => 'The Form Purchase field is required.'
                    ]
                ],
                'prospectiveInvoiceNum' => [
                    'rules' => 'required|integer',
                    'label' => 'Invoice Number',
                    'errors' => [
                        'required' => 'The Invoice Number field is required.',
                        'integer' => 'The Invoice Number must be a valid number.',
                    ]
                ],
                'prospectiveFormNo' => [
                    'rules' => 'required|integer',
                    'label' => 'Form Number',
                    'errors' => [
                        'required' => 'The Form Number field is required.',
                        'integer' => 'The Form Number must be a valid number.',
                    ]
                ]
            ];

            if ($this->validate($validationRules)) {
                // get form data
                $formData = [
                    'prospectiveFullName' => $this->request->getPost('prospectiveFullName'),
                    'prospectiveContact1' => $this->request->getPost('prospectiveContact1'),
                    'prospectiveContact2' => $this->request->getPost('prospectiveContact2'),
                    'prospectiveWhatAppContact' => $this->request->getPost('prospectiveWhatAppContact'),
                    'prospectiveAddress' => $this->request->getPost('prospectiveAddress'),
                    'prspectiveFormPurchase' => $this->request->getPost('prspectiveFormPurchase'),
                    'prospectiveInvoiceNum' => $this->request->getPost('prospectiveInvoiceNum'),
                    'prospectiveFormNo' => $this->request->getPost('prospectiveFormNo')
                ];

                if ($this->formSaleModel->update($id, $formData)) {
                    return redirect()->back()->with('success', 'Form Sale updated successfully.');
                } else {
                    return redirect()->back()->with('error', 'Form Sale update failed.');
                }
            } else {
                $data['validation'] = $this->validator;
            }
        }

        return view('marketing/form_sale_detail', $data);
    }

    // this method that delete
    public function delete($id)
    {
        $formSale = $this->formSaleModel->find($id);

        if (!$formSale) {
            return redirect()->back()->with("error", "The data you request to delete is not found");
        }

        // check if the data was created by the current user
        if ($formSale['formSaleCreatedLoggedBy'] !== session()->get('userId')) {
            return redirect()->back()->with("error", "You do not have permission to delete this data.");
        }

        if ($this->formSaleModel->delete($id)) {
            return redirect()->to("/marketing")->with('success', 'Form Sale deleted successfully.');
        } else {
            return redirect()->to("/marketing")->with('error', 'Form Sale deletion failed.');
        }
    }

    public function change_status($id, $status_code){
        $formSale = $this->formSaleModel->find($id);

        if (!$formSale) {
            return redirect()->back()->with("error", "The data you request to change status is not found");
        }

        // check if the data was created by the current user
        if ($formSale['formSaleCreatedLoggedBy'] !== session()->get('userId')) {
            return redirect()->back()->with("error", "You do not have permission to change the status of this data.");
        }

        $formData = [
            'prospectiveStatus' => $status_code
        ];

        if ($this->formSaleModel->update($id, $formData)) {
            return redirect()->back()->with('success', 'Form Sale status updated successfully.');
        } else {
            return redirect()->back()->with('error', 'Form Sale status update failed.');
        }
    }
}
