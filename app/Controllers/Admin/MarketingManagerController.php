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

    $userModel = new \App\Models\Admin\UsersModel();

$data['contact_loggers'] = $userModel
        ->select('users.userId, users.userName, COUNT(DISTINCT olineinquirytable.onlineInquiryId) as online_inquiries, COUNT(DISTINCT formsaletable.formSaleId) as form_sales')
        ->join('olineinquirytable', 'olineinquirytable.leadCreatedLoggedBy = users.userId', 'left')
        ->join('formsaletable', 'formsaletable.formSaleCreatedLoggedBy = users.userId', 'left')
        ->where('users.userAccessType', 'contactlogger')
        ->groupBy('users.userId')
        ->findAll();

$data['form_sales_by_status'] = $form_sales_db
            ->select('formsaletable.prospectiveStatus, COUNT(formsaletable.formSaleId) as total_sales')
            ->groupBy('formsaletable.prospectiveStatus')
            ->findAll();

 $data['online_inquiries_by_status'] = $marketing_db
                ->select('olineinquirytable.leadStatus, COUNT(olineinquirytable.onlineInquiryId) as total_inquiries')
                ->groupBy('olineinquirytable.leadStatus')
                ->findAll();


        // Code to display the marketing manager dashboard
        return view('admin/marketing_pages/marketing_manager', $data);
    }

}