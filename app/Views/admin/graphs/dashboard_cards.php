
<div class="row">

<div class="col-xl-6 col-md-6 mb-4">
        <div class="card border-left-danger shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                          Platform Users
                        </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                            <?=$total_users?>
                            <small class=" d-block mt-2">
                                <a class="btn btn-danger rounded-pill " href="/admin/users">Manage</a>
                            </small>
                        </div>
                    </div>
                    <div class="col-auto">
                    
                    <i class="fas fa-users fa-2x text-danger"></i>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-6 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                           Online Inquiry & Form Sale
                        </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                            <?=$total_online_inquiries+$total_form_sales?>
                            <small class=" d-block mt-2">
                                <a class="btn btn-success rounded-pill " href="/admin/marketing_manager">Manage</a>
                            </small>
                        </div>
                    </div>
                    <div class="col-auto">
                    
                    <i class="fas fa-clipboard fa-2x text-success"></i>

                    </div>
                </div>
            </div>
        </div>
    </div>



</div>