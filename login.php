<?php session_start();
include_once('includes/config.php');
// code for Login
if(isset($_POST['login']))
{
$password=$_POST['password'];
$dec_password=$password;
$useremail=$_POST['uemail'];
//connect ke database
$ret= mysqli_query($con,"SELECT id,fname FROM users WHERE email='$useremail' and password='$dec_password'");
$num=mysqli_fetch_array($ret);
if($num>0)
{

$_SESSION['id']=$num['id'];
$_SESSION['name']=$num['fname'];
header("location:welcome2.php");

}
else
{
echo "<script>alert('Invalid username or password');</script>";
}
}



 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <main>
        <div class="box">
            <div class="inner-box">
                <div class="forms-wrap">
                    <form autocomplete="off" class="login" method="post" >
                        <div class="heading">
                            <h2>Selamat Datang</h2>
                            <h6>Belum memiliki akun ? </h6>
                            <a href="#" class="toggle">Daftar Sekarang</a>
                        </div>

                        <div class="actual-form">
                            <div class="input-wrap">
                                <input
                                type="email"
                                name="uemail"
                                class="input-field"
                                minlength="12"
                                autocomplete="off"

                                required
                                />
                                <label for="inputEmail">Email address</label>
                            </div>

                            <div class="input-wrap">
                                <input
                                type="password"
                                name="password"
                                class="input-field"
                                autocomplete="off"

                                required
                                />
                                <label for="inputPassword">Password</label>
                            </div>

                            <!-- <input type="submit" value="Sign In" class="login-btn"/> -->
                            <button class="login-btn" type="submit" name="login">Login</button>

                            <p class="text">
                                Lupa dengan password Anda ?
                                <a href="#">Klik Disini</a>
                            </p>
                        </div>
                    </form>

                    <!--Ini adalah register page-->

                    <form action="login.html" autocomplete="off" class="register">
                        <div class="heading">
                            <h2>Selamat Datang</h2>
                            <h6>Sudah memiliki akun ? </h6>
                            <a href="#" class="toggle">Masuk Sekarang</a>
                        </div>

                        <div class="actual-form">
                            <div class="input-wrap">
                                <input
                                type="radio"
                                id="bpjs"
                                name="kategori"
                                class="input-field"
                                required
                                />
                                <label>BPJS</label>
                            </div>

                            <div class="input-wrap">
                                <input
                                type="radio"
                                id="non"
                                name="kategori"
                                class="input-field"
                                required
                                />
                                <label>Non - BPJS</label>
                            </div>

                            <div class="input-wrap">
                                <input
                                type="text"
                                class="input-field"
                                autocomplete="off"
                                required
                                />
                                <label>Nomor Induk Kependudukan</label>
                            </div>

                            <div class="input-wrap">
                                <input
                                type="text"
                                class="input-field"
                                minlength="12"
                                autocomplete="off"
                                required
                                />
                                <label>Nomor Handphone</label>
                            </div>

                            <input type="submit" value="Sign Up" class="login-btn"/>

                            <p class="text">
                                Dengan melakukan pendaftaran ini, saya menyetujui
                                <a href="#">Syarat dan Ketentuan</a> yang berlaku
                            </p>
                        </div>
                    </form>
                </div>

                <div class="carousel">
                    <div class="images-wrapper">
                        <img src="img/image1.jpg" class="image img-1 show" alt=""/>
                        <img src="img/image2.jpg" class="image img-2" alt=""/>
                        <img src="img/image3.jpg" class="image img-3" alt=""/>
                    </div>
                    <div class="text-slider">
                        <div class="text-wrap">
                            <div class="text-group">
                                <h2>Melayani dengan sepenuh hati</h2>
                                <h2>Pasien kami, prioritas kami</h2>
                                <h2>Dedikasi kami sepenuh hati</h2>
                            </div>
                        </div>
                        <div class="bullets">
                            <span class="active" data-value="1"></span>
                            <span data-value="2"></span>
                            <span data-value="3"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>


    <!--Ini koneksi javascript-->
    <script src="js/login.js"></script>
</body>
</html>
