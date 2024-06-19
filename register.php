<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
}

if(isset($_POST['submit'])){

   $name = $_POST['name'];
   $name = filter_var($name);
   $email = $_POST['email'];
   $email = filter_var($email, FILTER_SANITIZE_EMAIL);
   $number = $_POST['number'];
   $number = filter_var($number, FILTER_SANITIZE_NUMBER_INT);
   $pass = $_POST['pass'];
   $pass = filter_var($pass);
   $cpass = $_POST['cpass'];
   $cpass = filter_var($cpass);
   $address = $_POST['address'];
   $address = filter_var($address);

   if($pass !== $cpass){
      $message[] = 'Confirm password does not match!';
   } else {
      try {
         $select_user = $conn->prepare("SELECT * FROM `users` WHERE email = ? OR number = ?");
         $select_user->execute([$email, $number]);
         if($select_user->rowCount() > 0){
            $message[] = 'Email or number already exists!';
         } else {
            $hashed_pass = password_hash($cpass, PASSWORD_DEFAULT);
            $insert_user = $conn->prepare("INSERT INTO `users`(name, email, number, password, address) VALUES(?,?,?,?,?)");
            $insert_user->execute([$name, $email, $number, $hashed_pass, $address]);
            
            $select_user = $conn->prepare("SELECT * FROM `users` WHERE email = ?");
            $select_user->execute([$email]);
            $row = $select_user->fetch(PDO::FETCH_ASSOC);
            if($select_user->rowCount() > 0 && password_verify($pass, $row['password'])){
               $_SESSION['user_id'] = $row['id'];
               header('Location: home.php');
               exit;
            }
         }
      } catch (PDOException $e) {
         echo "Error: " . $e->getMessage();
      }
   }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/styles.css">

</head>
<body>
   
<!-- header section starts  -->
<?php include 'components/user_header.php'; ?>
<!-- header section ends -->

<section class="form-container">

<form action="" method="post">
   <h3>Register Now</h3>
   <input type="text" name="name" required placeholder="Enter your name" class="box" maxlength="50">
   <input type="email" name="email" required placeholder="Enter your email" class="box" maxlength="50" oninput="this.value = this.value.replace(/\s/g, '')">
   <input type="number" name="number" required placeholder="Enter your number" class="box" min="0" max="9999999999" maxlength="10">
   <input type="password" name="pass" required placeholder="Enter your password" class="box" maxlength="50" oninput="this.value = this.value.replace(/\s/g, '')">
   <input type="password" name="cpass" required placeholder="Confirm your password" class="box" maxlength="50" oninput="this.value = this.value.replace(/\s/g, '')">
   <input type="text" name="address" placeholder="Enter your address" class="box" maxlength="255">
   <input type="submit" value="Register Now" name="submit" class="btn">
   <p>Already have an account? <a href="login.php">Login now</a></p>
</form>


</section>











<?php include 'components/footer.php'; ?>







<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>