<?php
if (isset($_POST['input'])){
	$user=$_POST['user'];
	$pass=$_POST['pass'];
if (($user<>'KAI') OR ($pass<>'2020')){
	echo"<h2><center>Login Anda Gagal. Silahkan Coba Lagi.</center></h2>";
	echo"<h2><center><a href='uaptampilan.php'>Klik disini untuk login kembali</a></center></h2>";
} else {

	
?>

<html>
<head><title>PT. KAI</title>
  <style>
        h2
        {
            background-color: white;
            color: black;
            font-family: sans-serif;
            text-align: center;
            width: 45%;
            margin:auto;
            padding: 20px;
        }
 
        body
        {
            background-image: url('pinterest3.jpg');
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
</head>
<body>
<h2>Selamat Login Anda Berhasil!</h2>
<br>
<h2>Silahkan Lanjutkan Proses Input Data Anda!</h2>
</body>
</html>
<?php
echo"<h2><a href='uapinput.php'>Input Data Disini </a></h2>";
}
}
?>