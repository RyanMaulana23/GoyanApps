<?php require_once "controllerUserData.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="stylelogin.css">
</head>
<body>

    <div class="container" >
        <div class="row">
            <div class="col-md-4 offset-md-4 form login-form">
                <form id="loginform" action="login-user.php" method="POST" autocomplete="" >
                    <h2 class="text-center">Login Dulu Cuy</h2>
                    <p class="text-center">Login with your email and password.</p>
                    <?php
                    if(count($errors) > 0){
                        ?>
                        <div class="alert alert-danger text-center">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>
                    <div class="form-group">
                        <input class="form-control" type="email" name="email" placeholder="Email Address" required value="<?php echo $email ?>">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" name="password" placeholder="Password" required>
                    </div>
                    <div class="link forget-pass text-left"><a href="forgot-password.php">Forgot password?</a></div>
                    <div class="form-group">
                        <input class="form-control button" type="submit" name="login" value="Login">
                     </div>
                    <div class="link login-link text-center">Not yet a member? <a href="signup-user.php">Buat Akun</a></div>
                    
                    <div id="preloader"></div>           

                 </div>    
                </form>
            </div>
        </div>
    </div>
    
   
    
                 
<script>

const form = document.getElementById('loginForm');

form.addEventListener('submit', function(event) {
  event.preventDefault(); // mencegah submit form
  const preloader = this.getElementById('.preloader');
  preloader.style.display = 'block'; // menampilkan preloader

  const formData = new FormData(this); 
  // mengambil data form
  const url = 'home.php'; 
  // url ke script PHP

  // mengirim data form ke server menggunakan fetch
  fetch(url, {
    method: '$_POST',
    body: formData
  })
  .then(response => response.json()) // mengambil respon dari server dalam bentuk JSON
  .then(data => {
    preloader.style.display = 'none'; // menyembunyikan preloader setelah selesai
    if (data.success) { 
        // jika login berhasil
      window.location.href = data.redirect; // navigasi ke link yang diberikan oleh server
    } else {
      alert(data.message); // menampilkan pesan error dari server
    }
  })
  .catch(error => {
    console.error(error);
  });
});


</script>




</body>
</html>