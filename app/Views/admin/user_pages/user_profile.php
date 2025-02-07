
<?=$this->extend('admin/common/layout')?>

<?=$this->section('content')?>

<div class="row d-flex justify-content-around">

    <div class="col-md-4 p-2 mb-4 mt-5">
         <div class="card shadow-lg ">
                <!-- card image -->
               <div class="card-header bg-success text-white text-center">
                     <button class="btn btn-success rounded-circle shadow-lg" style="margin-top: -50px;">
                     <i class="fa fa-user fa-3x"></i>
                     </button>
                   <h5 class="card-title"><?=$user['userName']?>'s Profile</h5>
               </div>
                <div class="card-body text-center">
                    <p class="card-text d-flex justify-content-between border-bottom mt-0"><span> <i class="fa text-dark fa-user"></i> User Name:</span> <span><?=$user['userName']?></span></p>
                    <p class="card-text d-flex justify-content-between border-bottom mt-0"><span> <i class="fa text-dark fa-envelope-open-text"></i> User Email:</span><span> <?=$user['userEmail']?></span></p>
                    <p class="card-text d-flex justify-content-between border-bottom mt-0"><span> <i class="fa text-dark fa-assistive-listening-systems"></i> User Access Type:</span> <span><?=$user['userAccessType']?></span></p>
                    <p class="card-text d-flex justify-content-between border-bottom mt-0"><span> <i class="fa text-dark fa-lock-open"></i> User Status:</span> <span><?=$user['userStatus']?></span></p>
                    <p class="card-text d-flex justify-content-between border-bottom mt-0"><span> <i class="fa text-dark fa-clock"></i> User Created At:</span> <span><?=$user['createdAt']?></span></p>
                    <!-- split button -->
                    <div class="btn-group mt-3">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                            <i class="fa fa-pen"></i> Edit Profile
                        </button>
                        <a href="/admin/users" class="btn btn-secondary">
                            <i class="fa fa-users"></i> Back to users 
                        </a>
                </div>
        </div>
    </div>

</div>

<!-- The Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header bg-primary text-white">
                <h4 class="modal-title"> <i class="fa fa-pen"></i> Edit User Profile</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!-- Modal Body -->
            <div class="modal-body">
                <?php include APPPATH . 'Views/admin/forms/edit_user_form.php'; ?>
            </div>
        </div>
    </div>
</div>

<?=$this->endSection()?>