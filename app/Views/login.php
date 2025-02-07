
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1 maximum-scale=1.0"> <!-- корректное отображение на мобильных устройствах, отмена масштабирования -->
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <title>Log In</title>
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Custom css -->
     <!-- include bootstrap icon -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <link href="/dashboard_assets/css/login_style.css" rel="stylesheet">
  </head>

  <body>
    <div class="container-fluid">
      <div class="container">
        <div class="row">
          <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 bg_section_login" style="background-image: url('/dashboard_assets/img/loginbanner.jpg');">
            <img class="logo" src="/dashboard_assets/img/logo.png" alt=""/>
          </div>
          <div class="col-12 m_bg_section_login">
            <img src="/dashboard_assets/img/logo.png" alt=""/>
          </div>
          <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 login_section">
            <form action="/" method="post" class="w-100" style="width: 100% !important;">
           
              <h1>Log in</h1>
              <div class="form-row">
                <?php //echo password_hash("123456", PASSWORD_DEFAULT); ?>
                <input type="email" name="userEmail" class="form-control form-control-lg"  id="userEmail" aria-describedby="emailHelp" placeholder="User Email " >
                <!-- error message -->
                 <?php if(isset($validation) && $validation->hasError('userEmail')): ?>
                    <p class="text-danger"><?= $validation->getError('userEmail') ?></p>
                <?php endif; ?>
              </div>
              <div class="form-row">
                <input type="password" name="userPassword" class="form-control form-control-lg" id="userPassword" placeholder="userPassword" >
                <!-- error message -->
                 <?php if(isset($validation) && $validation->hasError('userPassword')): ?>
                    <p class="text-danger"><?= $validation->getError('userPassword') ?></p>
                <?php endif; ?>
              </div>
              <div class="form-check">
                <input type="checkbox" class="form-check-input" id="login_check">
                <label class="form-check-label" for="login_check">Stay signed in</label>
                <a href="#">Forgot password?</a>
              </div>
              <button type="submit" class="btn btn-primary">LOG IN</button>
              <button type="submit" class="btn btn-outline-primary" disabled>CONTACT US</button>
            </form>
          </div>
      </div>
    </div>


    <?php if(isset($error)) : ?>
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body text-center">
                    <h1 class="modal-title fw-bold my-3 text-danger display-4" id="exampleModalLabel">
                        <i class="fa fa-exclamation-triangle"></i>
                        Opps!
                    </h1>
                    <hr>
                       <h3 class="text-danger"><?php echo $error ?> </h3>
                       <button type="button" class="btn mt-4 btn-danger" data-dismiss="modal">Dismiss</button>
                    </div>
                </div>
            </div>
        </div>
        <script>
            document.addEventListener('DOMContentLoaded', function () {
            $('#exampleModal').modal('show');
            });
        </script> 
 <?php endif; ?>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
  </body>
</html>