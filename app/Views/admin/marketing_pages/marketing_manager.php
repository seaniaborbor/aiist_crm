
<?=$this->extend('admin/common/layout')?>

<?=$this->section('content')?>


 <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Form Sale and Online Inquiry Manager</h1>
    </div>

<div class="row">
    <div class="col-md-12">
        
    </div>
</div>
  
<div class="row">
   <div class="col-md-8">
        <div class="card shadow-lg mb-4">
            <div class="card-header bg-white" style="border-bottom: none;">
                <nav class="">
                    <div class="nav nav-tabs " id="nav-tab" role="tablist">
                                <button class="nav-link active" id="nav-home-tab" data-toggle="tab" data-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">
                            <i class="fas fa-file-alt"></i> Form Log
                        </button>
                        <button class="nav-link" id="nav-profile-tab" data-toggle="tab" data-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">
                            <i class="fas fa-question-circle"></i> Inquiry Log
                        </button>
                    </div>
                </nav>
            </div>
            <div class="card-body">

                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <?php include 'form_sale_log.php'; ?>
                    </div>
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                        <?php include 'online_inquiry_log.php'; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card shadow-lg ">
            <div class="card-header">Users In this department</div>
        <div class="card-body bg-white">
        <div class="table-responsive">
            <table class="table table-striped table-bordered" id="table3">
                <thead>
                    <tr>
                        <th>User Name</th>
                        <th>Lead</th>
                        <th>Form</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    foreach ($contact_loggers as $user) { ?>
                        <tr>
                            <td><?= esc($user['userName']) ?></td>
                            <td><?= esc($user['online_inquiries']) ?></td>
                            <td><?= esc($user['form_sales']) ?></td>
                            <td>
                                <a href="/admin/user_profile/<?=$user['userId']?>"><i class="fa fa-user"></i></a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>

        </div>
        </div>

        </div>
    </div>
</div>


<?=$this->endSection()?>