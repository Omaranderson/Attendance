<?php 
require_once 'db/conn.php';

if (isset($_POST['submit1']))
    {
        $id = $_POST['id'];
        $fname = $_POST['firstname'];
        $lname = $_POST['lastName'];
        $dob = $_POST['dob'];
        $email = $_POST['email'];
        $contact = $_POST['phone'];
        $specialty = $_POST['specialty'];

        $result = $crud->editAttendee($id, $fname, $lname, $dob, $email, $contact, $specialty);

        if ($result)
        {
            header("Location: viewrecords.php");
        }
        else
        {
            include 'include/errormessage.php';
        }
    }
    else
    {
        include 'include/errormessage.php';
    }


?>