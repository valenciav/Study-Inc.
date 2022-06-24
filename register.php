<?php
    require "connect.php";
    $user = [ ];
    $email;
    $firstName;
    $lastName;
    $pw;
    $gender;
    if(isset($_POST["regisForm"])){
        $firstName=$_POST["firstName"];
        $lastName=$_POST["lastName"];
        $email=$_POST["email"];
        $pw=$_POST["password"];
        $gender=$_POST["gender"];
        echo $email;
        $user = query("SELECT * FROM users WHERE email LIKE '$email'");
    }
    if(count($user) > 0){
      echo "<script>alert('Registration Successful')</script>";
      insert($firstName, $lastName, $email, $pw, $gender);
    }
    else{
      if(isset($_POST['regisForm'])){
        $form = $_POST['regisForm'];
        echo "<script>alert('Email is already registered.')</script>";
        echo "<script> var form = $form;
        console.log(form);
        form.preventDefault(); </script>";
      }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="signInStyle.css">
    <script src="https://kit.fontawesome.com/d57f3da380.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.7.1.min.js"></script>
    <script defer src = "validate.js"></script>

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <title>Study Inc.</title>
</head>

<body> 
    <div class = "header">
        <logo><i class="fa-solid fa-book-open" id = "profile"></i>study Inc.</logo>
    </div>
    <form id="regisForm" action="home.php" method="post">
        <h2>Welcome to study inc.!</h2>
        <br>
        <h1>Create Account</h1>
        <br>
        <h4>Already registered?</h4>
        <h4><a href="signIn.php">Sign In</a></h4>
        <br>
        <div class="form-content">
            <label for="firstName">First Name</label>
            <input
              type="text"
              placeholder="Write your First Name"
              id="firstName"
              name="firstName"
              oninput="validateFirstName()"
            >
            <small>message</small>
        </div>

        <div class="form-content">
            <label for="lastName">Last Name</label>
            <input
              type="text"
              placeholder="Write your Last Name"
              id="lastName"
              name="lastName"
              oninput="validateLastName()"
            >
            <small>message</small>
        </div>

        <div class="form-content">
            <label for="email">Email</label>
            <input
              type="email"
              placeholder="Write your E-Mail"
              id="email"
              name="email"
              oninput="validateEmail()"
            >
            <small>message</small>
        </div>

        <div class="form-content">
            <label for="password">Password</label>
            <input
              type="password"
              placeholder="Write your Password"
              id="password"
              name="password"
              oninput="validatePassword()"
            >
            <small>message</small>
        </div>

        <div class="form-content">
            <label for="passwordconfirmation">Re-enter Password</label>
            <input
              type="password"
              placeholder="Re-enter your Password"
              id="passwordconfirmation"
              name="passwordconfirmation"
              oninput="validatePasswordConfirm()"
            >
            <small>message</small>
        </div>

        <div class="form-content">
            <label for="gender">Gender</label>
            <select class="select" type="gender" name="gender" id="gender" oninput="validateGender()">
              <option disabled hidden selected value = "0">Gender</option>
              <option value="1">Male</option>
              <option value="2">Female</option>
              <option value="3">Others</option>
            </select>
            <small>message</small>
        </div>

        <div class="form-content">
          <label for="checkbox">
            <input type="checkbox" id="checkbox" oninput="validateCheckbox()">
            I agree to terms & conditions.
          </label>
          <small>message</small>
        </div>

        <div>
            <button class = "submit" type = "submit" name="regis">Submit</button>
        </div>
    </form>
</body>
</html>
