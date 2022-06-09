<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="icon" type="x-icon" href="images/logo.png">
</head>
<body>
<?php 
        if(isset($_GET['pesan'])){
            if($_GET['pesan'] == "berhasil"){
                echo "<script> 
                alert('Login Berhasil');
            </script>
            ";
            }
            else if($_GET['pesan'] == "gagal"){
                echo "<script> 
                alert('Login Gagal, Username atau Password Anda Salah');
            </script>
            ";
            }
            else if($_GET['pesan'] == "logout"){
               echo "<script> 
                alert('Anda Telah Logout');
            </script>
            ";
            }
            else if($_GET['pesan'] == "belum_login"){
                echo "<script> 
                alert('Anda Harus Login Untuk Akses Halaman Admin');
            </script>
            ";
            }
        }
    ?>
<div class="content-login">
    <table align="center" cellspacing="0" width="70%" style="margin: auto; padding: 16px;">
        <form action="cek-login.php" method="post">
            <tr>
                <td colspan="2"><h1 align="center">Login</h1></td>
            </tr>
            <tr>
                <td>Username</td>
                <td><input type="text" name="username" class="input" placeholder="Masukkan Username Anda"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password" class="input" placeholder="Masukkan Password Anda"></td>
            </tr>
            <tr>
                <td colspan="2" style="padding-botton: 16px;">
                    <input type="reset" class="submit" value="Reset">

                    <input type="submit" class="submit" value="Login">

                    <a href="forgotpassword.php">Lupa Password ?</a>

                    <input type="checkbox" name="remember" /> Remember Me
                </td>
            </tr>
        </form>
    </table>
</div>
</body>
</html>