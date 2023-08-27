<?php

function get_contact_info()
{
    global $conn;
    $result  = mysqli_query($conn, "SELECT * FROM tbl_contact_infos ORDER BY id LIMIT 1");
    $contact = mysqli_fetch_assoc($result);

    return $contact;
}

function edit_contact_info()
{
    global $conn;
    $google_map = $_POST['google_map'];
    $location   = $_POST['location'];
    $email      = $_POST['name'];
    $phone      = $_POST['phone'];
    $website    = $_POST['website'];
    $query = "UPDATE tbl_contact_infos SET google_map='$google_map', email='$email', location='$location', phone='$phone', website='$website', updated_at=now()";
    mysqli_query($conn, $query);

    show_alert_message('Contact Info Updated Successfully', 'success');
    redirect('dashboard.php?view=contact_info_index');
}
