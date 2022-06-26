<!DOCTYPE html>
<html lang="en">

<?php


include 'head_source.php';
require 'db_config.php';

?>

<body>

    <?php include "main_nav.php"; ?>


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
                                <a href="#" class="media-left"><img src="assets/images/placeholder.jpg"
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
                    <?php include "navigation.php"; ?>

                </div>
            </div>
            <!-- /main sidebar -->


            <!-- Main content -->
            <div class="content-wrapper">

                <!-- Page header -->
                <div class="page-header">
                    <div class="breadcrumb-line">
                        <ul class="breadcrumb">
                            <li><a href="project_view.php">Our Projects</a></li>

                            <li class="active">Update</li>
                        </ul>
                    </div>
                </div>
                <!-- /page header -->
                <!-- Content area -->
                <div class="content">

                    <!-- Basic datatable -->
                    <div class="panel panel-flat">
                        <div class="panel-heading">
                            <h5 class="panel-category_name">Our Projects Update</h5>
                            <div class="heading-elements">
                                <ul class="icons-list">
                                    <li><a href="project_create.php" class="btn btn-primary add-new">Add
                                            New</a></li>
                                    <!-- <li><a data-action="collapse"></a></li>
                                    <li><a data-action="reload"></a></li>
                                    <li><a data-action="close"></a></li> -->
                                </ul>
                            </div>
                        </div>
                        <div class="panel-body">

                            <form class="form-horizontal mt-10" action="project_control.php" method="POST">
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
                                    <?php
                                    require 'db_config.php';
                                    $option_select_query = "SELECT * FROM categories WHERE active_status=1";
                                    $category_list = mysqli_query($db_con, $option_select_query);

                                    ?>
                                    <div class="form-group">
                                        <label class="control-label col-lg-2" for="category_id">Category Name</label>
                                        <div class="col-lg-10">
                                            <?php
                                            echo '<select name="category_id" class="form-control" id="category_id">';
                                            if (!empty($category_list)) {
                                                foreach ($category_list as $category) {

                                                    echo "<option value='{$category["id"]}' >" . $category['category_name'] . "</option>";
                                                }
                                                echo "</select>";
                                            } ?>
                                        </div>
                                    </div>

                                    <?php
                                    require 'db_config.php';
                                    $project_id = $_GET['project_id'];
                                    $show_data = "SELECT * FROM our_projects WHERE id = {$project_id}";
                                    $update_query = mysqli_query($db_con, $show_data) or die("Update query failed");


                                    if (!empty($update_query)) {
                                        foreach ($update_query as $key => $project) {
                                    ?>
                                    <input type="hidden" class="form-control" name="project_id"
                                        value="<?php echo $project['id']; ?>">

                                    <div class="form-group">
                                        <label class="control-label col-lg-2" for="project_name">Project Name</label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" id="project_name"
                                                name="project_name" value="<?php echo $project['project_name'] ?>">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-lg-2" for="project_link">Project Link</label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" id="project_link"
                                                name="project_link" value="<?php echo $project['project_link'] ?>">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-lg-2" for="project_thumb">Project Thumb</label>
                                        <div class="col-lg-10">
                                            <input name="project_thumb" type="file" class="form-control"
                                                id="project_thumb" value="<?php echo $project['project_thumb'] ?>">
                                        </div>
                                    </div>
                                    <?php }
                                    } ?>
                                </fieldset>
                                <div class="text-right">
                                    <button type="submit" class="btn btn-primary" name="update_project">Update Data
                                    </button>
                                    <a href="project_view.php" class="btn btn-info">Back To List</a>
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
    <?php include "script.php"; ?>
</body>

</html>