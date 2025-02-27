<?php
namespace App\Controllers\Admin;

use App\Controllers\BaseController;

use App\Models\Marketing\OnlineInquiryModel;
use App\Models\Marketing\FormSaleModel;



class MarketingManagerController extends BaseController
{
    public function index()
    {
       $data = [];

// Load the models
$marketing_db = new OnlineInquiryModel();
$form_sales_db = new FormSaleModel();

    $data['user_inquiry_log'] = $marketing_db
        ->select('olineinquirytable.*, users.*')
        ->join('users', 'users.userId = olineinquirytable.leadCreatedLoggedBy')
        ->findAll();

    $data['user_form_sale_log'] = $form_sales_db
        ->select('formsaletable.*, users.*')
        ->join('users', 'users.userId = formsaletable.formSaleCreatedLoggedBy')
        ->findAll();


    $data['distinct_prospective_status'] = $form_sales_db
        ->select('prospectiveStatus, COUNT(*) as status_count')
        ->groupBy('prospectiveStatus')
        ->findAll();
    
    $data['distinct_lead_status'] = $marketing_db
        ->select('leadStatus, COUNT(*) as status_count')
        ->groupBy('leadStatus')
        ->findAll();
    

    

        // Code to display the marketing manager dashboard
        return view('admin/marketing_pages/marketing_manager', $data);
    }

}