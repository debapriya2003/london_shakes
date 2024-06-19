<?php
// error_reporting(E_ALL);
// ini_set('display_errors', 1);

include 'components/connect.php';

session_start();

// Check if user is already logged in
if (isset($_SESSION['user_id'])) {
    header('location: home.php');
    exit;
}

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['pass'];

    // Validate email and password
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $message[] = 'Invalid email address!';
    } elseif (empty($password)) {
        $message[] = 'Password is required!';
    } else {
        // Prepare and execute query to validate user credentials
        $select_user = $conn->prepare("SELECT * FROM users WHERE email = :email");
        $select_user->execute([':email' => $email]);
        $row = $select_user->fetch(PDO::FETCH_ASSOC);

        if ($select_user->rowCount() > 0) {
            $hashed_password = $row['password'];
            if (password_verify($password, $hashed_password)) {
                // Login successful, set session and redirect
                session_regenerate_id();
                $_SESSION['user_id'] = $row['id'];
                header('location: home.php');
                exit;
            } else {
                $message[] = 'Incorrect password!';
            }
        } else {
            $message[] = 'User not found!';
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
    <title>Login</title>
    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <!-- custom css file link -->
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <!-- header section starts -->
    <?php include 'components/user_header.php';?>
    <!-- header section ends -->
    <section class="form-container">
        <form action="" method="post">
            <h3>login now</h3>
            <input type="email" name="email" required placeholder="Enter your email" class="box" maxlength="50" oninput="this.value = this.value.replace(/\s/g, '')">
            <input type="password" name="pass" required placeholder="Enter your password" class="box" maxlength="50" oninput="this.value = this.value.replace(/\s/g, '')">
            <input type="submit" value="login now" name="submit" class="btn">
            <p>Don't have an account? <a href="register.php">Register now</a></p>
            <?php if (isset($message)) {?>
                <p class="error"><?= implode('<br>', $message)?></p>
            <?php }?>
        </form>
    </section>

    <?php include 'components/footer.php';?>

    <!-- custom js file link -->
    <script src="js/script.js"></script>
</body>
</html>