<?php

/*
|--------------------------------------------------------------------------
| Utilities Functions
|--------------------------------------------------------------------------
*/
function is_active($param)
{
    if( isset($_GET['view']) ){
        return str_contains($_GET['view'], $param) ? 'active' : '';
    }else{
        return $param === 'dashboard' ? 'active' : '';
    }
}

function show_alert_message($message, $status)
{
    $status_icon = ($status == 'success') ? 'far fa-check-circle' : 'far fa-times-circle';
    $upper_case_status = strtoupper($status);
    return $_SESSION['alert'] = "<script>toastr.$status('$message &nbsp;<i class=\"$status_icon\"></i>', '$upper_case_status')</script>";
}

function redirect($param = null)
{
    is_null($param) ? header('location: admin/views/dashboard.php') : header('location: ' . $param);
    exit();
}

function redirect_back($call_exit_func = true)
{
    isset($_SERVER['HTTP_REFERER']) ? header('location:' . $_SERVER['HTTP_REFERER']) : header('location: javascript:history.back(-1)');
    $call_exit_func ? exit() : '';
}

function get_data_by_page($tbl, $limit)
{
    global $conn;
    $page   = isset($_GET['page']) ? $_GET['page'] : 1;
    $offset = ($page - 1) * $limit;

    $query = "SELECT * FROM {$tbl} ORDER BY created_at DESC LIMIT {$offset},{$limit}";

    if ($result = mysqli_query($conn, $query)) {
        return [ $result, $page ];
    }
}

function get_paginator($tbl, $limit)
{
    global $conn;
    $result = mysqli_query($conn, "SELECT * FROM $tbl");
    if( mysqli_num_rows($result) > 0 ){
        $total_records = mysqli_num_rows($result);
        $total_page = ceil($total_records / $limit);
        return $total_page;
    }
}

function get_counter($page, $limit)
{
    return $page == 1 ? 0 : ($page - 1) * $limit;
}

function print_data($data)
{
    echo "<pre>" . print_r($data, true) . "</pre>"; die;
}
