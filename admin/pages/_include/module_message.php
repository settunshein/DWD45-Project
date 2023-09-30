<?php

function insert_message()
{
    global $conn;

    if (isset($_POST['insert_message'])) {
        $username = $_POST['username'];
        $subject  = $_POST['subject'];
        $email    = $_POST['email'];
        $message  = $_POST['message'];

        $query = "INSERT INTO tbl_messages (username, subject, email, message)
                  VALUES('$username', '$subject', '$email', '$message')";

        mysqli_query($conn, $query);

        show_alert_message('Thank You for Your Message', 'success');
        header('location: index.php');
        exit();
    }
}

function delete_message()
{
    global $conn;
    mysqli_query($conn, "DELETE FROM tbl_messages WHERE id={$_POST['del_message_id']}");

    show_alert_message('Message Deleted Successfully', 'success');
    redirect('dashboard.php?view=message_index');
}
