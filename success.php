<?php 
    $title = 'Success';
    require_once 'includes/header.php'; 
    require_once 'db/conn.php';

    if (isset($_POST['submit']))
    {
        $fname = $_POST['firstname'];
        $lname = $_POST['lastName'];
        $dob = $_POST['dob'];
        $email = $_POST['email'];
        $contact = $_POST['phone'];
        $specialty = $_POST['specialty'];

        $isSuccess = $crud->insert($fname, $lname, $dob, $email, $contact, $specialty);

        if ($isSuccess)
        {
            echo '<h1 class="text-center text-success">You have been registered</h1>';
        }
        else
        {
            include 'include/errormessage.php';
            //echo '<h1 class="text-center text-danger">There was an error in processing</h1>';
        }
    }
?>
    
    <div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">
        <?php echo $_POST['firstname'] . ' ' . $_POST['lastName']; ?>     
    </h5>

    <h6 class="card-subtitle mb-2 text-muted">
        <?php echo $_POST['specialty']; ?>    
    </h6>

    <p class="card-text">
        Date of birth: <?php echo $_POST['dob']; ?> 
    </p>

    <p class="card-text">
        Email Address: <?php echo $_POST['email']; ?> 
    </p>

    <p class="card-text">
        Contact Number: <?php echo $_POST['phone']; ?> 
    </p>
  </div>
</div>


    <!-- <?php
       //echo $_GET['firstname'];      
       //echo $_GET['lastName'];      
       //echo $_GET['dob'];       
       //echo $_GET['specialty'];      
       //echo $_GET['email'];      
       //echo $_GET['specialty'];    
       //echo $_GET['email'];     
       //echo $_GET['phone'];

    ?> -->


<br>
<br>
<br>
<br>
<?php require_once 'includes/footer.php'; ?>