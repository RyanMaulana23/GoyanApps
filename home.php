<?php require_once "controllerUserData.php"; ?>
<?php 
$email = $_SESSION['email'];
$password = $_SESSION['password'];
if($email != false && $password != false){
    $sql = "SELECT * FROM usertable WHERE email = '$email'";
    $run_Sql = mysqli_query($con, $sql);
    if($run_Sql){
        $fetch_info = mysqli_fetch_assoc($run_Sql);
        $status = $fetch_info['status'];
        $code = $fetch_info['code'];
        if($status == "verified"){
            if($code != 0){
                header('Location: reset-code.php');
            }
        }else{
            header('Location: user-otp.php');
        }
    }
}else{
    header('Location: login-user.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $fetch_info['name'] ?> | Home</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="stylepagelanding.css">
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="stylepagelanding.css">

</head>
<body>
    <main>
<!-- header section starts  -->

<header>

    
    <a href="#" class="logo"><span>Go</span>Yan</a>

    <input type="checkbox" id="menu-bar">
    <label for="menu-bar" class="fas fa-bars"></label>

    <nav class="navbar">
        <a href="#home">home</a>
        <a href="#fitur">fitur</a>
        <a href="#about">about</a>
        <a href="logout-user.php">Logout</a>
    </nav>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

    

    <div class="content">
    
    <b><i><h1>Hallo <?php echo $fetch_info['name'] ?></h1></i></b>

        <h3>Goyan <span>Application</span> Website</h3>
        <p>Goyan Adalah Aplikasi Untuk Membantu Aktifitas Rumah, Belanja, Serta Tugas</p>
        <a href="#" class="btn">#aplikasiseharihari</a>
    </div>

    <div class="image">
        <img src="images/home-img.png" alt="">
    </div>

</section>

<!-- home section ends -->

<!-- features section starts  -->

<section class="fitur" id="fitur">

    <h1 class="heading"> Fitur Aplikasi </h1>
    <p>Fitur Ini Insyaallah Dapat Membantu Anda Dalam Sesuatu Aktifitas</p>

    <div class="box-container">

        <div class="box">
            <img src="images/to_do_list.jpg" alt="">
            <h3>To Do List</h3>
            <p>Jika kamu ingin ngelist sesuatu fitur ini bisa di pakai agar tidak lupa, Berfungsi untuk ngelist tugas sekolah, kuliah, serta ngelist belanjaan apabila disuruh mamah atau disuruh atasan wkwkwk</p>
            <a href="todolist.html" class="btn">read more</a>
        </div>

        <div class="box">
            <img src="images/Note.jpg" alt="">
            <h3>Make Notes</h3>
            <p>Ketika kalian mendengarkan guru yang sedang menjelaskan materi di kelas dan kamu mencatat materi yang sedang disampaikan maka otak akan lebih mudah mengingat materi yang diajarkan. Kamu akan lebih mudah untuk mengingat materi yang kamu catat, karena kamu mendengarkan materinya ketika dijelaskan oleh guru dan juga kamu mencatatnya.</p>
            <a href="indexnotes.html" class="btn">read more</a>
        </div>

        <div class="box">
            <img src="images/savetextasfile.png" alt="">
            <h3>Save Text As File</h3>
            <p>Teruntuk kamu punya yang dari text bisa ke jenis File tersedia termasuk JavaScript & Dokumen bisa Klik ini</p>
            <a href="savetextasfile.html" class="btn">read more</a>
        </div>

        <div class="box">
            <img src="images/alarm.jpg" alt="">
            <h3>Alarm</h3>
            <p>Buat kamu yang sering kesiangan sekolah, kuliah dan kerja bisa juga nih sob dipakai juga biar kaga telat berangkat aktifitas</p>
            <a href="indexalarm.html" class="btn">read more</a>
        </div>

        <div class="box">
            <img src="images/drawing.png" alt="">
            <h3>Drawing</h3>
            <p>Bisa Menggambar sesuka hatimu</p>
            <a href="drawing.html" class="btn">read more</a>
        </div>

        <div class="box">
            <img src="images/resize-icon.png" alt="">
            <h3>Resizer Image</h3>
            <p>Untuk Merisize atau memperbesar ukuran file gambar bisa disini</p>
            <a href="resize.html" class="btn">read more</a>
        </div>

        <div class="box">
            <img src="images/pen.png" alt="">
            <h3>Image Editor</h3>
            <p>Editing Gambar dengan penambahan efek manipulasi. Mengatur Tone Warna atau mengubah warna</p>
            <a href="indeximageeditor.html" class="btn">read more</a>
        </div>

        <div class="box">
            <img src="images/scan-qr-ilustrasi.png" alt="">
            <h3>Can Make QR CODE </h3>
            <p>Bisa membuat anda membantu membuat sebuah QR Barcode yang bisa di isikan berupa Hyperlink dan juga serta Text</p>
            <a href="qrcode.html" class="btn">read more</a>
        </div>

    </div>

</section>

<!-- features section ends -->

<!-- about section starts  -->

<section class="about" id="about">

    <h1 class="heading"> about the app </h1>

    <div class="column">

        <div class="image">
            <img src="images/about-img.png" alt="">
        </div>

        <div class="content">
            <h3>Easy And Perfect Solution For Your Daily Activities</h3>
            <p>Semoga Membantu Ya Sobat :)</p>
            <p>#haveaniceday</p>
            <p>#havehappyday</p>
            <p>#haveagoodday</p>
        </div>

    </div>

</section>

<!-- footer -->
<footer>
    <div class="container text-center">
        <div class="row">
            <div class="col-sm-12">
                <p>&copy; copyright2022 | build by goyan <a href="http://intagram.com/ryanmlnaa_29">Ryan Maulana</a>.</p>
            </div>
        </div>
        </div>
</footer>

</main>

</body>

    
</body>
</html>