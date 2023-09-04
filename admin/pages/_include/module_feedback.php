<?php

function get_all_feedbacks()
{

}

function insert_feedback()
{
    global $conn;

    if (isset($_POST['insert_feedback'])) {
        $username = $_POST['username'];
        $subject  = $_POST['subject'];
        $email    = $_POST['email'];
        $feedback = $_POST['feedback'];

        $query = "INSERT INTO tbl_feedbacks (username, subject, email, feedback)
                  VALUES('$username', '$subject', '$email', '$feedback')";

        mysqli_query($conn, $query);

        show_alert_message('Thank You for Your Feedback', 'success');
        header('location: index.php');
        exit();
    }
}

function delete_feedback()
{
    global $conn;
    mysqli_query($conn, "DELETE FROM tbl_feedbacks WHERE id={$_POST['del_feedback_id']}");

    show_alert_message('Feedback Deleted Successfully', 'success');
    redirect('dashboard.php?view=feedback_index');
}
