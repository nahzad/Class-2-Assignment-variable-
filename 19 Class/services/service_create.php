<!DOCTYPE html>
<html lang="en">
<?php
if (basename(__DIR__) != 'admin') {
    $baseURL = '../';
    $isInternal = true;
} else {
    $baseURL = '';
    $isInternal = false;
}

include '../includes/head_source.php';
require '../controller/db_config.php';
?>

<body>

    <?php include "../includes/main_nav.php"; ?>
    <!-- Page container -->
    <div class="page-container">

        <!-- Page content -->
        <div class="page-content">

            <!-- Main sidebar -->
            <div class="sidebar sidebar-main">
                <div class="sidebar-content">

                    <!-- User menu -->
                    <div class="sidebar-user">
                        <div class="category-content">
                            <div class="media">
                                <a href="#" class="media-left"><img
                                        src="<?php echo $baseURL; ?>assets/images/placeholder.jpg"
                                        class="img-circle img-sm" alt=""></a>
                                <div class="media-body">
                                    <span class="media-heading text-semibold">Victoria Baker</span>
                                    <div class="text-size-mini text-muted">
                                        <i class="icon-pin text-size-small"></i> &nbsp;Santa Ana, CA
                                    </div>
                                </div>

                                <div class="media-right media-middle">
                                    <ul class="icons-list">
                                        <li>
                                            <a href="#"><i class="icon-cog3"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /user menu -->
                    <?php include "../includes/navigation.php"; ?>

                </div>
            </div>
            <!-- /main sidebar -->


            <!-- Main content -->
            <div class="content-wrapper">

                <!-- Page header -->
                <div class="page-header">
                    <div class="breadcrumb-line">
                        <ul class="breadcrumb">
                            <li><a href="service_view.php"><i class="icon-hammer-wrench position-left"></i>Services</a>
                            </li>

                            <li class="active">Create</li>
                        </ul>
                    </div>
                </div>
                <!-- /page header -->
                <!-- Content area -->
                <div class="content">

                    <!-- Basic datatable -->
                    <div class="panel panel-flat">
                        <div class="panel-heading">
                            <h5 class="panel-title">Servies Create</h5>
                            <div class="heading-elements">
                                <ul class="icons-list">
                                    <li><a href="service_create.php" class="btn btn-primary add-new">Add
                                            New</a></li>
                                    <!-- <li><a data-action="collapse"></a></li>
                                    <li><a data-action="reload"></a></li>
                                    <li><a data-action="close"></a></li> -->
                                </ul>
                            </div>
                        </div>
                        <div class="panel-body">
                            <form class="form-horizontal mt-10" action="../controller/service_control.php"
                                method="POST">
                                <fieldset class="content-group">
                                    <?php

                                    if (isset($_GET['msg'])) {
                                    ?>
                                    <div class="alert alert-success no-border">
                                        <button type="button" class="close" data-dismiss="alert"><span>×</span><span
                                                class="sr-only">Close</span></button>
                                        <span class="text-semibold"><?php echo $_GET['msg']; ?></span>
                                    </div>
                                    <?php } ?>


                                    <div class="form-group">
                                        <label class="control-label col-lg-2" for="service_name">Service Name</label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" id="service_name"
                                                name="service_name">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-lg-2" for="service_details">Service
                                            Details</label>
                                        <div class="col-lg-10">
                                            <textarea rows="5" cols="5" class="form-control"
                                                placeholder="Your Messages Here " id="service_details"
                                                name="service_details"></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-lg-2" for="icon_name">Icon Name</label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" id="icon_name" name="icon_name">
                                        </div>
                                    </div>

                                </fieldset>
                                <div class="text-right">
                                    <input type="submit" value="Save Data" name="save_service" class="btn btn-primary">

                                    <a href="service_view.php" class="btn btn-info">Back To List</a>
                                </div>

                            </form>
                        </div>
                    </div>
                    <!-- /basic datatable -->

                    <!-- Footer -->
                    <div class="footer text-muted">
                        &copy; 2015. <a href="#">Limitless Web App Kit</a>
                    </div>
                    <!-- /footer -->

                </div>
                <!-- /content area -->

            </div>
            <!-- /main content -->

        </div>
        <!-- /page content -->

    </div>
    <!-- /page container -->
    <?php include "../includes/script.php"; ?>
</body>

</html>