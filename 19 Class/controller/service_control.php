<?php
require 'db_config.php';
// THIS FOR CREATE
if (isset($_POST['save_banner'])) {
    $title     = $_POST['title'];
    $sub_title = $_POST['sub_title'];
    $details   = $_POST['details'];

    if (empty($title) || empty($sub_title) || empty($details)) {
        $message = "All fields are required";
    } else {
        $sql_query = "INSERT INTO banners (title, sub_title, details) VALUES ('$title','$sub_title','$details')";
        $create_query = mysqli_query($db_con, $sql_query) or die("Query Unsuccessfull !");
        if ($create_query == true) {
            $message = "Banner Insert Succesfull";
        } else {
            $message = "Insert Failed";
        }
    }

    header("Location: ../banner/banner_create.php?msg={$message}");
}

// THIS FOR UPDATE
if (isset($_POST['update_banner'])) {

    $banner_id = $_POST['banner_id'];
    $title     = $_POST['title'];
    $sub_title = $_POST['sub_title'];
    $details   = $_POST['details'];

    if (empty($title) || empty($sub_title) || empty($details)) {
        $message = "All fields are required";
    } else {
        $sql = "UPDATE banners SET title='{$title}', sub_title='{$sub_title}', details='{$details}' WHERE id='{$banner_id}'";

        $update_query = mysqli_query($db_con, $sql) or die("Data not updated !");

        if ($update_query == true) {
            $message = "Banner Update Succesfull";
        } else {
            $message = "Update Failed";
        }
    }

    header("Location: ../banner/banner_update.php?banner_id={$banner_id}&msg={$message}");
}