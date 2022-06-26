<?php
require 'db_config.php';
// THIS FOR CREATE
if (isset($_POST['save_banner'])) {
    $upload_status = false;
    if (isset($_FILES['image'])) {

        $image_name       = $_FILES['image']['name'];
        $image_tmp_name   = $_FILES['image']['tmp_name'];
        $image_size       = $_FILES['image']['size'];
        $file_extension   = explode('.', $image_name);
        $extension_end    = end($file_extension);
        $common_file_type = strtolower($extension_end);
        $supported_ext    = ['jpg', 'png', 'jpeg'];
        $valid_ext        = in_array($common_file_type, $supported_ext);
        $random_file_name = time() . "." . $extension_end;
        $isUploaded       = 1;

        if (empty($common_file_type)) {
            $isUploaded  = 0;
            $message = "Please select a file to upload";
        } else {
            if ($image_size > 5000000) {

                $isUploaded = 0;
                $message = "Your file size is too large <br>";
            }

            if ($valid_ext == false) {

                $isUploaded = 0;
                $message = "This " . $common_file_type . " file is not supported .<br>";
            }

            if ($isUploaded == 1) {
                move_uploaded_file($image_tmp_name, "media/Banner Image/" . $random_file_name);
                $message = "Successfully uploaded";
                $upload_status = true;
            } else {
                $message = "File was not uploaded.";
            }
        }
    }
    $title     = $_POST['title'];
    $sub_title = $_POST['sub_title'];
    $details   = $_POST['details'];

    if (empty($title) || empty($sub_title) || empty($details) || $upload_status == false) {
        $message = "All fields are required";
    } else {
        $sql_query = "INSERT INTO banners (title, sub_title, details, image ) VALUES ('$title','$sub_title','$details', '{$random_file_name}')";
        $create_query = mysqli_query($db_con, $sql_query) or die("Query Unsuccessfull !");
        if ($create_query == true) {
            $message = "Banner Insert Succesfull";
        } else {
            $message = "Insert Failed";
        }
    }

    header("Location: banner_create.php?msg={$message}");
}

// THIS FOR UPDATE
if (isset($_POST['update_banner'])) {

    $banner_id = $_POST['banner_id'];
    $title     = $_POST['title'];
    $sub_title = $_POST['sub_title'];
    $details   = $_POST['details'];

    if (empty($title) || empty($sub_title) || empty($details) || $upload_status == false) {
        $message = "All fields are required";
    } else {
        $sql = "UPDATE banners SET title='{$title}', sub_title='{$sub_title}', details='{$details}', image='{$random_file_name}' WHERE id='{$banner_id}'";

        $update_query = mysqli_query($db_con, $sql) or die("Data not updated !");

        if ($update_query == true) {
            $message = "Banner Update Succesfull";
        } else {
            $message = "Update Failed";
        }
    }

    header("Location: banner_update.php?banner_id={$banner_id}&msg={$message}");
}