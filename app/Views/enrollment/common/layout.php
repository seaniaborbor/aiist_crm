
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Blank</title>

    <!-- Custom fonts for this template-->
    <link href="/dashboard_assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- Core plugin JavaScript-->
    <script src="/dashboard_assets/vendor/jquery/jquery.min.js"></script>
    <script src="/dashboard_assets/vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Custom styles for this template-->
    <link href="/dashboard_assets/css/sb-admin-2.min.css" rel="stylesheet">
       <!-- Page level plugins -->
       <script src="/dashboard_assets/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="/dashboard_assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Include DataTables and Buttons extensions CSS and JS -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.1/css/buttons.dataTables.min.css">

 
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/enrollment">
               <img src="/dashboard_assets/img/logo.png" class="img-fluid rounded shadow-lg w-100" alt="">
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="/enrollment">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->

            <li class="nav-item">
                <a class="nav-link" href="/enrollment/enroll">
                <i class="fas fa-clipboard-list"></i>
                <span>Enroll New Stud</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="/enrollment/personal_profile/<?=session()->get('userId')?>">
                <i class="fas fa-user"></i>
                <span> Your Profile </span></a>
            </li>


            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <marquee behavior="" direction="">AIIST; "Learn By Doing"</marquee>
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?=session()->get('userName')?></span>
                                <img class="img-profile rounded-circle"
                                    src="/dashboard_assets/img/<?=session()->get('userPic')?>">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="/enrollment/personal_profile/<?=session()->get('userId')?>">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="/logout" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Content of the page renders here -->
                     <?=$this->renderSection("content")?> 

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

   
    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header alert alert-danger">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body text-danger">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <a href="/logout" class="btn p-0 btn-sm btn-success btn-icon-split" >
                        <span class="icon text-white-50">
                            <i class="fas fa-times"></i>
                        </span>
                        <span class="text">Yes, Log Me Out</span>
                    </a>
                    <a href="#" class="btn p-0 btn-sm btn-danger btn-icon-split" data-dismiss="modal">
                        <span class="icon text-white-50">
                            <i class="fas fa-times"></i>
                        </span>
                        <span class="text">Cancel</span>
                    </a>
                </div>
            </div>
        </div>
    </div>


    <?php if(session()->getFlashdata('success')): ?>
    <div class="modal fade show" id="successModal" tabindex="-1" role="dialog" aria-labelledby="successModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content pb-0">
                <div class="modal-header d-flex justify-content-around bg-success text-white p-0 ">
                   <img class="img-fluid" src="/dashboard_assets/img/success_icon.png" alt="">
                </div>
                <div class="modal-body text-dark text-center m-0  pb-0">
                    <h4 class="text-success">
                        Success
                    </h4>
                    <p class="leaad">
                    <?= session()->getFlashdata('success') ?>
                    </p>
                    
                    <button  type="button" class="btn my-4 p-0 btn-danger btn-icon-split"  data-dismiss="modal" >
                    <span class="icon text-white-50">
                        <i class="fas fa-times"></i>
                    </span>
                    <span class="text">Dismiss </span>
                </button>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>

<?php if(session()->getFlashdata('error')): ?>
    <div class="modal fade show" id="errorModal" tabindex="-1" role="dialog" aria-labelledby="errorModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header p-0">                    
                    <img class="img-fluid" src="/dashboard_assets/img/error_icon.jpg" alt="">
                </div>
                <div class="modal-body text-center">
                    <h3 class="text-danger" >An Error Occured</h3>
                    <p class="lead">
                    <?= session()->getFlashdata('error') ?>
                    </p>
                    <button  type="button" class="btn my-4 p-0 btn-danger btn-icon-split"  data-dismiss="modal" >
                    <span class="icon text-white-50">
                        <i class="fas fa-times"></i>
                    </span>
                    <span class="text">Dismiss </span>
                </button>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>


    <!-- Bootstrap core JavaScript-->
    <script src="/dashboard_assets/vendor/jquery/jquery.min.js"></script>
    <script src="/dashboard_assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="/dashboard_assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="/dashboard_assets/js/sb-admin-2.min.js"></script>

       <!-- Page level plugins -->
       <script src="/dashboard_assets/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="/dashboard_assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>
      <!-- Page level plugins -->
      <script src="/dashboard_assets/vendor/datatables/jquery.dataTables.min.js"></script>
  
  <script src="https://cdn.datatables.net/buttons/2.4.1/js/dataTables.buttons.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.html5.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.print.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>


    <script>
    $(document).ready(function () {
        // Configure DataTable with export and print buttons for table2
        $('#table2').DataTable({
            dom: 'Bfrtip', // Add the buttons to the DataTable
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });

        // Configure DataTable with export and print buttons for table0
        $('#table0').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });

        // Configure DataTable with export and print buttons for table3
        $('#table3').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
    });
</script>

<script>
    $(document).ready(function() {
    // Automatically show success modal if flash data exists
    <?php if(session()->getFlashdata('success')): ?>
        $('#successModal').modal('show');
    <?php elseif(session()->getFlashdata('error')): ?>
        $('#errorModal').modal('show');
    <?php endif; ?>
});

</script>

</body>

</html>