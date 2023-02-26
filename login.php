<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran Siswa Baru | SMK Coding</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <title>Login Page</title>
    <link rel="stylesheet" href="style.css" media="screen" title="no title">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
</head>

<body>
      <div class="login">
      <div class="avatar">
      <i class="fa fa-user"></i>
      </div>
      <h2>Login Form</h2>
      <div class="box-login">
       <i class="fas fa-envelope-open-text" ></i>
            <input type="text" placeholder="Email">
          </div>

          <div class="box-login">
            <i class="fas fa-lock"></i>
            <input type="text" placeholder="Password">
          </div>

          <button type="submit" name="login" class="btn-login">Login</button>
          <div class="bottom">
            <a href="#">Register</a>
            <a href="#">Forgot Password</a>
          </div>
      </div>

    <?php if(isset($_GET['status'])): ?>
    <p>
        <?php
            if($_GET['status'] == 'sukses'){
                echo "Pendaftaran siswa baru berhasil!";
            } else {
                echo "Pendaftaran gagal!";
            }
        ?>
    </p>
        <?php endif; ?>

        

    </body>
</html>