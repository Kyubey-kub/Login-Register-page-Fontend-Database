<?php 

    session_start();
    include('server.php');

    $errors = array();

    if (isset($_POST['reg_user'])) {
        $username = mysqli_real_escape_string($conn, $_POST['username']); //Protection Sp. Hacker etc.
        $email = mysqli_real_escape_string($conn, $_POST['email']); //Protection Sp. Hacker etc.
        $password_1 = mysqli_real_escape_string($conn, $_POST['password_1']); //Protection Sp. Hacker etc.
        $password_2 = mysqli_real_escape_string($conn, $_POST['password_2']); //Protection Sp. Hacker etc.

        if (empty($username)) {
            array_push($errors, "Username is required");
        }

        if (empty($email)) {
            array_push($errors, "Email is required");
        }

        if (empty($password_1)) {
            array_push($errors, "Password is required");
        }

        if ($password_1 != $password_2) {
            array_push($errors, "Password 1 And Password 2 isn't match !");
        }

        $user_check_query = "SELECT * FROM user WHERE username = '$username' OR email = '$email' ";
        $query = mysqli_query($conn, $user_check_query);

        $result = mysqli_fetch_assoc($query);

        if ($result) { //if user exists
            if ($result['username'] === $username) {
                array_push($errors, "Username already exist");
            }

            if ($result['email'] === $email) {
                array_push($errors, "Email already exist");
            }
        }

        if (count($errors) == 0) {
            $password = md5($password_1);

            $sql = "INSERT INTO user (username, email, password) VALUES ('$username', '$email', '$password')";
            mysqli_query($conn, $sql);

            $_SESSION['username'] = $username; 
            $_SESSION['success'] = "You are now logged in";
            header("location: index.php");
        }

    }

?>