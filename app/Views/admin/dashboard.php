
<?=$this->extend('admin/common/layout')?>

<?=$this->section('content')?>


 <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Administrator Dashboard</h1>
    </div>
    <?php include 'graphs/dashboard_cards.php'; ?>
    <div class="row">
       <div class="col-md-8">
            <div class="card">
            <div class="card-header">
                <h6 class="m-0 font-weight-bold text-primary">Login Log</h6>
            </div>
                <div class="card-body">
                    <?php include 'tables/LoginLog.php'; ?>
                </div>
            </div>
       </div>

       <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                <h6 class="m-0 font-weight-bold text-primary">Top five most login users</h6>
                </div>
                <div class="card-body">
                    <?php include "graphs/topfive_login_graph.php"; ?>
                </div>
            </div>
       </div>
    </div>


<?=$this->endSection()?>