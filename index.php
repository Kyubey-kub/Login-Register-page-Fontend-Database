
<?php 
    session_start();

    if (!isset($_SESSION['username'])) {
        $_SESSION['msg'] = "You must be Login or Register first !!!";
        header('location: log&Re.php');
    }

    if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['username']);
        header('location: log&Re.php');
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
    <link rel="stylesheet" href="Home.css">
</head>
<body>
    
    <div class="header">
        <h2>Home page</h2>
    </div>

    <div class="content">

        <!-- notification message -->
        <?php if (isset($_SESSION['success'])) : ?>
            <div class="success">
                <h3>
                    <?php
                    
                        echo $_SESSION['success'];
                        unset($_SESSION['seccess']);

                    ?>
                </h3>
            </div>
        <?php endif ?>

        <!-- logged user information-->
        <?php if (isset($_SESSION['username'])) :  ?>
            <p>Welcomeback <strong><?php echo $_SESSION['username']; ?></strong></p>
            <button><p><a href="index.php?logout='1'" style="colour: white;">Logout</a></p></button>
        <?php endif ?>
    </div>

</body>
</html>