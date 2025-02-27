
<?=$this->extend('admin/common/layout')?>

<?=$this->section('content')?>

<div class="row d-flex justify-content-around">

    <div class="col-md-8 p-2 mb-4 mt-5">
         <div class="card shadow-lg ">
                <!-- card image -->
               <div class="card-header alert alert-primary text-center">
                   <h3 class="card-title"><?=$user['userName']?>'s Profile</h3>
                </div>
                    <div class="card-body text-center">
                        <div class="row d-flex align-items-center">
                            <div class="col-md-8">

                                <p class="card-text d-flex justify-content-between border-bottom mt-0"><span> <i class="fa text-dark fa-user"></i> User Name:</span> <span><?=$user['userName']?></span></p>
                                <p class="card-text d-flex justify-content-between border-bottom mt-0"><span> <i class="fa text-dark fa-envelope-open-text"></i> User Email:</span><span> <?=$user['userEmail']?></span></p>
                                <p class="card-text d-flex justify-content-between border-bottom mt-0"><span> <i class="fa text-dark fa-assistive-listening-systems"></i> User Access Type:</span> <span><?=$user['userAccessType']?></span></p>
                                <p class="card-text d-flex justify-content-between border-bottom mt-0"><span> <i class="fa text-dark fa-lock-open"></i> User Status:</span> <span><?=$user['userStatus']?></span></p>
                                <p class="card-text d-flex justify-content-between border-bottom mt-0"><span> <i class="fa text-dark fa-clock"></i> User Created At:</span> <span><?=$user['createdAt']?></span></p>
                                <!-- split button -->
                                <div class="btn-group mt-3">
                                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myModal">
                                        <i class="fa fa-pen"></i> Edit Profile
                                    </button>
                                    <a href="/admin/users" class="btn btn-primary" data-toggle="modal" data-target="#profileModal">
                                        <i class="fa fa-pen"></i>Edit Profile Pic 
                                    </a>
                                    <a href="/admin/users" class="btn btn-secondary">
                                        <i class="fa fa-users"></i> Back to users 
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <img src="/dashboard_assets/img/<?=$user['userPic']?>" alt="" class="img-fluid w-100">
                            </div>
                </div>
        </div>
    </div>

</div>




<!-- Profile Image Upload Modal -->
<div class="modal fade" id="profileModal" tabindex="-1" role="dialog" aria-labelledby="profileModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header alert alert-success">
                <h5 class="modal-title" id="profileModalLabel"><i class="fas fa-user-edit"></i> Upload Profile Image</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/admin/edit_user_profile" enctype="multipart/form-data" method="post">
            <div class="modal-body">
               
                    <div class="form-group">
                        <label for="profileImage"><i class="fas fa-image"></i> Choose Image</label>
                        <input name="userPic" type="file" class="form-control-file" id="profileImage" accept="image/*">
                    </div>
                    <input type="hidden" name="userId" value="<?=$user['userId']?>">
                
            </div>
            <div class="modal-footer">
                <button  type="submit" class="btn mt-3 p-0 btn-success btn-icon-split">
                    <span class="icon text-white-50">
                        <i class="fas fa-file"></i>
                    </span>
                    <span class="text">Upload Pic</span>
                </button>
                <button  type="button" class="btn mt-3 p-0 btn-danger btn-icon-split" data-dismiss="modal">
                    <span class="icon text-white-50">
                        <i class="fas fa-times"></i>
                    </span>
                    <span class="text">Cancel</span>
                </button>
            </div>
            </form>
        </div>
    </div>
</div>


<?=$this->endSection()?>