<?php

/*
|--------------------------------------------------------------------------
| Brand Module
|--------------------------------------------------------------------------
*/
function get_faq($param)
{
    global $conn;
    $result = mysqli_query($conn, "SELECT * FROM tbl_faqs WHERE id=$param");
    $faq    = mysqli_fetch_assoc($result);

    return $faq;
}
