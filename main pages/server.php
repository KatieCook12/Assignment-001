<?php
session_start();

// initializing variables
$first_name = "";
$last_name = "";
$email = "";
$password = "";
$phone_number = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'gloucestershire_constabulary');

// registers user
if (isset($_POST['users'])) {
  // receive all input values from the form
  $first_name = mysqli_real_escape_string($db, $_POST['first_name']);
  $last_name = mysqli_real_escape_string($db, $_POST['last_name']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  $phone_number = mysqli_real_escape_string($db, $_POST['phone_number']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($first_name)) { array_push($errors, "First name is required."); }
  if (empty($last_name)) { array_push($errors, "Last name is required."); }
  if (empty($email)) { array_push($errors, "Email is required."); }
  if (empty($password)) { array_push($errors, "Password is required."); }
  if (empty($phone_number)) { array_push($errors, "Contact number is required."); }
  
  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists

    if ($user['email'] === $email) {
      array_push($errors, "Email already exists.");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password);//encrypt the password before saving in the database

  	$query = "INSERT INTO users (first_name, last_name, email, phone_number) 
  			  VALUES('$first_name', '$last_name', '$email', '$password', '$phone_number')";
  	mysqli_query($db, $query);
    header('location: ../registered users access pages/registered-users-home-page.php');
  }
}

// ... 

// ... 

// LOGIN USER
if (isset($_POST['login_user'])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
  
    if (empty($username)) {
        array_push($errors, "Username is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }
  
    if (count($errors) == 0) {
        $password = md5($password);
        $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
        $results = mysqli_query($db, $query);
        if (mysqli_num_rows($results) == 1) {
          $_SESSION['username'] = $username;
          $_SESSION['success'] = "You are now logged in";
          header('location: ../registered users access pages/registered-users-home-page.php');
        }else {
            array_push($errors, "Wrong username/password combination");
        }
    }
  }
  
  ?>
