
<?php include('server.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to login & Register</title>
    <link rel="stylesheet" href="style.css">

    <link href="https://cdn.jsdelivr.net/gh/yesiamrocks/cssanimation.io@1.0.3/cssanimation.min.css" rel="stylesheet">
</head>
<body>
    
    <header>

        <h2 class="cssanimation sequence leFadeIn">Welcomeback Sir</h2>
        
        

        <nav class="nav">
            <a href="#">Home</a>
            <a href="#">About</a>
            <a href="#">Service</a>
            <a href="#">Contact</a>
            <button class="btnlogin-popup">Login</button>
        </nav>
    </header>

    <section>

      <div class="from_box">

        <span class="close">
            <ion-icon name="close-outline"></ion-icon>
        </span>

        <!-- Login -->

          <div class="from_value_log">

          <!-- notification message -->
            <form action="login_db.php" method = "post">

              <?php if (isset($_SESSION['error'])) : ?>
                <div class="error">
                    <h3>
                        <?php
                            echo $_SESSION['error'];
                            unset($_SESSION['error']);
                        ?>
                    </h3>
                </div>
            <?php endif ?>

             

            <h2 class="cssanimation fadeIn infinite">Login</h2>

            

                  <div class="input_box">
                      <ion-icon name="person-circle-outline"></ion-icon>
                      <input type="text" name="username" required>
                      <label for="">Name</label>
                  </div>

                  <div class="input_box">
                      <ion-icon name="lock-open-outline"></ion-icon>
                      <input type="password" name="password" required>
                      <label for="">Password</label>
                  </div>
              
                  <div class="forget">
                      <label for="">
                      <input type="checkbox">Record
                      <a href="#">Do you want to remember</a>
                      </label>
                  </div>

                  <button type="submit" name="login_user" class="btn">Login</button>

                  <div class="register">
                      <p> Don't have an account <a href="#">Sign Up</a></p>
                  </div>
              </form>
          </div>

          <!-- register -->
      

          <div class="from_value_re">
              <form action="register_db.php" method="post">
                <?php include('errors.php'); ?>
                <h2 class="cssanimation fadeIn infinite">Register</h2>
  
                  <div class="input_box">
                      <ion-icon name="person-circle-outline"></ion-icon>
                      <input type="text" name="username" required>
                      <label for="">Name</label>
                  </div>

                  <div class="input_box">
                      <ion-icon name="send-outline"></ion-icon>
                      <input type="Email" name="email" required>
                      <label for="">Email</label>
                  </div>

                  <div class="input_box">
                      <ion-icon name="lock-open-outline"></ion-icon>
                      <input type="password" name="password_1" required>
                      <label for="">Password</label>
                  </div>
              
                  <div class="input_box">
                      <ion-icon name="lock-open-outline"></ion-icon>
                      <input type="password" name="password_2" required>
                      <label for="">Confirm Password</label>
                  </div>
              
                  <div class="forget">
                      <label for="">
                          <input type="checkbox">Record
                          <a href="#">Do you want to remember</a>
                      </label>
                  </div>
  
                  <button type="submit" name="reg_user" class="btn">Register</button>
                  
                  <div class="Login">
                      <p> Have an account already <a href="#">Sign in</a></p>
                  </div>

              </form>
          </div>
      </div>

  </section>

    <script src="script.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <script type="text/javascript" src="https://cdn.jsdelivr.net/gh/yesiamrocks/cssanimation.io@1.0.3/letteranimation.min.js"></script>
    
</body>
</html>