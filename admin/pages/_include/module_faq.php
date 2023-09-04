<?php

/*
|--------------------------------------------------------------------------
| FAQ Module
|--------------------------------------------------------------------------
*/
function get_all_faqs()
{
    global $conn;
    $result = mysqli_query($conn, "SELECT * FROM tbl_faqs");

    return $result;
}

function get_faq($param)
{
    global $conn;
    $result = mysqli_query($conn, "SELECT * FROM tbl_faqs WHERE id=$param");
    $faq    = mysqli_fetch_assoc($result);

    return $faq;
}

function insert_faq()
{
    global $conn;
    $title   = $_POST['title'];
    $content = $_POST['content'];
    $query   = "INSERT INTO tbl_faqs (title, content, created_at) VALUES ('$title', '$content', now())";
    mysqli_query($conn, $query);

    show_alert_message('New FAQ Created Successfully', 'success');
    redirect('dashboard.php?view=faq_index');
}

function edit_faq()
{
    global $conn;
    $id      = $_POST['edit_faq_id'];
    $title   = $_POST['title'];
    $content = $_POST['content'];
    $name    = $_POST['name'];
    $query   = "UPDATE tbl_faqs SET title='$title', content='$content', updated_at=now() WHERE id=$id";
    mysqli_query($conn, $query);

    show_alert_message('FAQ Updated Successfully', 'success');
    redirect('dashboard.php?view=faq_index');
}

function delete_faq()
{
    global $conn;
    mysqli_query($conn, "DELETE FROM tbl_faqs WHERE id={$_POST['del_faq_id']}");

    show_alert_message('FAQ Deleted Successfully', 'success');
    redirect('dashboard.php?view=faq_index');
}
