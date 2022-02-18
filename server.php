<?php
session_start();

$name = "";
$password    = "";
$errors = array(); 

$db = mysqli_connect('localhost', 'root', '', 'corpus');

if (isset($_POST['reg_user'])) {
  $name = mysqli_real_escape_string($db, $_POST['name']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($name)) { array_push($errors, "name is required"); }
  if (empty($password)) { array_push($errors, "password is required"); }

  $user_check_query = "SELECT * FROM registration WHERE name='$name' OR password='$password' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['name'] === $name) {
      array_push($errors, "name already exists");
    }

    if ($user['password'] === $password) {
      array_push($errors, "password already exists");
    }
  }

  if (count($errors) == 0) {
  	$password = md5($password_1);

  	$query = "INSERT INTO registration (name, password) 
  			  VALUES('$name', '$password')";
  	mysqli_query($db, $query);
  	$_SESSION['name'] = $name;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: index.php');
  }
}