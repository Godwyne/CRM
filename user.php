<?php 
include 'connect.php';
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];
    $religion = $_POST['religion'];

    $sql = "INSERT INTO `crm_users`(`name`, `address`, `phone`, `email`, `birth_date`, `religion`) 
    VALUES ('$name','$address', '$phone', '$email', '$dob', '$religion')";
    $result = mysqli_query($connection, $sql);

    if($result){
        // echo "Form filled successfully";
        header('location:display.php');
    }
    else{
        die("Connection Failed: ". mysqli_error($connection));
    }
}

?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>CRM</title>
  </head>
  <body>
    <div class="container">
        <div class="my-5 col-8 center">
        <form method="post"> 
        <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" name="name" class="form-control" placeholder="Enter your name" autocomplete="off">
        </div>
        <div class="mb-3">
            <label class="form-label">Address</label>
            <input type="text" name="address" class="form-control" placeholder="Enter your address" autocomplete="off">
        </div>
        <div class="mb-3">
            <label class="form-label">Mobile</label>
            <input type="text" name="phone" class="form-control" placeholder="Enter your mobile number" autocomplete="off">
        </div>
        <div class="mb-3">
            <label class="form-label">Email address</label>
            <input type="email" class="form-control" name="email" id="exampleInputEmail1" autocomplete="off">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label class="form-label">Date of birth</label>
            <input type="date" name="dob" class="form-control" autocomplete="off">
        </div>
        <div class="mb-3">
            Gender:  
            <input type="checkbox" class="form-check-input">
            <label class="form-check-label">Male</label>
            <input type="checkbox" class="form-check-input">
            <label class="form-check-label">Female</label>
        </div>
        <div class="mb-3">
            Religion: 
            <select name="religion" id="">
                <option value="christian">Christian</option>
                <option value="muslim">Muslim</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </form>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>
