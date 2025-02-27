
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
            <form action="/enrollment/upload_student_profile" enctype="multipart/form-data" method="post">
            <div class="modal-body">
               
                    <div class="form-group">
                        <label for="profileImage"><i class="fas fa-image"></i> Choose Image</label>
                        <input name="profileImg" type="file" class="form-control-file" id="profileImage" accept="image/*">
                    </div>
                    <input type="hidden" name="student_id" value="<?=$student_id?>">
                
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
