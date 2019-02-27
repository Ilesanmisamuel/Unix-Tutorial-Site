<?php 
  $path = './';
  session_start();

  require $path."../../../dbConnect.inc";

  //connect to the database
//   include $path."../../../dbConnect.inc";

  //initializing variables
  $username = "";
  $email = "";
  $errors = array();

 

  //register user
  if(isset($_POST['reg_user'])){

    
    //receive all input values from the form
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password_1 = $_POST['password_1'];
    $password_2 = $_POST['password_2'];


  //form validation: ensure that the form is correctly filled .....
  //by adding (array_push()) corresponding error into $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  //first check the database to make sure
  // a user does not already exist with the same username and/or email
  $sql_user_check = "select * from users where username='$username' or email='$email' limit 1";
  $res = $mysqli->query($sql_user_check);
  $user = mysqli_fetch_array($res, MYSQLI_ASSOC);
 
  if($user){
      if($user['username'] == $username){
          array_push($errors, "Username already exists");
      }

      if($user['email'] == $email){
          array_push($errors, "email already exists");
      }
  }

  //finally, register user if there are no errors in the form
 if(count($errors) == 0){
     $password = md5($password_1);

     $stmt=$mysqli->prepare("insert into users (username, email, password) values('$username','$email', '$password')");
     $stmt->bind_param("sss", $username, $email, $password);
     $stmt->execute();
     $stmt->close();
     $_SESSION['username'] = $username;
     $_SESSION['success'] = "You are now logged in";
     header('Location: quiz.php');

  }

}


// login user
if(isset($_POST['login_user'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    if(empty($username)){
        array_push($errors, "Username is required");
    }

    if(empty($password)) {
        array_push($errors, "Password is required");
    }

    if(count($errors) == 0){
        $password = md5($password);

        $q = "select * from users where username='$username' and password='$password'";
        $results = $mysqli->query($q);
        if($results->num_rows == 1) {
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "You are now logged in";
            $_SESSION['score'] = 0;
            header('Location: quiz.php');


        } else {
            array_push($errors, "Invalid username/password");
        }
    }

}
?>