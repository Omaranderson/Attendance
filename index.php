<?php 
    $title = 'Index';
    require_once 'includes/header.php'; 
    require_once 'db/conn.php';

    $results = $crud->getSpecialties();
?>
<br>
    <h1 class="text-center">Registration for IT Conference </h1>

    <form method="post" action="success.php">
    <div class="form-group">
            <label for="firstname">First Name</label>
            <input required type="text" class="form-control" id="firstname" name="firstname">
    </div>

    <div class="form-group">
            <label for="lastName">Last Name</label>
            <input required type="text" class="form-control" id="lastName" name="lastName">
    </div>

    <div class="form-group">
            <label for="dob">Date of Birth</label>
            <input type="text" class="form-control" id="dob" name="dob">
    </div>

    <div class="form-group">
            <label for="specialty">Area of Expertise</label>
            <select class="form-control" id="specialty" name="specialty">
                <?php while($r = $results->fetch(PDO::FETCH_ASSOC)) {?>
                <option value= "<?php echo $r['specialty_id'] ?>"><?php echo $r['name'];  ?></option>
                <?php }?>                
            </select>
    </div>

    <div class="form-group">
        <label for="email">Email address</label>
        <input required type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>

    <div class="form-group">
        <label for="phone">Contact number</label>
        <input type="text" class="form-control" id="phone" aria-describedby="phoneHelp" name="phone">
        <small id="phoneHelp" class="form-text text-muted">We'll never share your number with anyone else.</small>
    </div>

    <button type="submit" class="btn btn-primary btn-block" name="submit">Submit</button>
</form>


<!-- <form method="get" action="success.php"> this method shows the values in the URL query string 
    <div class="form-group">
            <label for="firstname">First Name</label>
            <input type="text" class="form-control" id="firstname" name="firstname">
    </div>

    <div class="form-group">
            <label for="lastName">Last Name</label>
            <input type="text" class="form-control" id="lastName" name="lastName">
    </div>

    <div class="form-group">
            <label for="dob">Date of Birth</label>
            <input type="text" class="form-control" id="dob" name="dob">
    </div>

    <div class="form-group">
            <label for="specialty">Area of Expertise</label>
            <select class="form-control" id="specialty" name="specialty">
                <option>Database Administrator</option>
                <option>Software Developer</option>
                <option>Web Administrator</option>
                <option>Other</option>
            </select>
    </div>

    <div class="form-group">
        <label for="email">Email address</label>
        <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>

    <div class="form-group">
        <label for="phone">Contact number</label>
        <input type="text" class="form-control" id="phone" aria-describedby="phoneHelp" name="phone">
        <small id="phoneHelp" class="form-text text-muted">We'll never share your number with anyone else.</small>
    </div>

    <button type="submit" class="btn btn-primary btn-block" name="submit">Submit</button>
</form> -->

<br>
<br>
<br>
<br>
<?php require_once 'includes/footer.php'; ?>
