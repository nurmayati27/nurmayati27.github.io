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
            background-image: url('pinterest2.jpg');
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
</head>
<body>
<h2>PT. KAI K.C. PADANG</h2>
<a href='uapmenu.php'><button>Kembali Ke Menu Pilihan</button></a>
		
<?php
$dbname = "UAP1";
$host = "localhost";
$username = "root";
$password = "";
$conn=mysqli_connect($host,$username,$password,$dbname);
if(mysqli_connect_errno()) {
echo"Koneksi ke server gagal dilakukan";
exit();
}
$query = "SELECT * ".
             "FROM UAPKAI";
$result = mysqli_query($conn,$query);
if($result) {
?>
<h4><u>Data Penumpang</u></h4>
<form action = "uaphapus.php" method = "post">
<table border = "1">
<tr>
<th style = "width:10px">Centang</th>
<th width = "250">Nama</th>
<th width = "80">NIK</th>
<th width = "100">Alamat</th>
<th width = "50">Umur</th>
<th width = "100">Tanggal Berangkat</th>
<th width = "100">Stasiun Tujuan</th>
<th width = "100">Jam Keberangkatan</th>
<th width = "100">Jenis Kelas</th>
<th width = "100">Metode Pembayaran</th>
</tr>
<?php
while($row = mysqli_fetch_row($result)) {
?>
<tr>
<?php
$nama = $row[0];
$nik = $row[1];
$alamat = $row[2];
$umur = $row[3];
$tgl = $row[4];
$tujuan = $row[5];
$jam = $row[6];
$kelas = $row[7];
$metode = $row[8];



?>
<td>
<input name = "data[]" type = "checkbox" value = "<?php echo $nik;?> ">
</td>
<td> <?php echo $nama; ?> </td>
<td> <?php echo $nik; ?> </td>
<td> <?php echo $alamat; ?> </td>
<td> <?php echo $umur; ?> </td>
<td> <?php echo $tgl; ?> </td>
<td> <?php echo $tujuan; ?> </td>
<td> <?php echo $jam; ?> </td>
<td> <?php echo $kelas; ?> </td>
<td> <?php echo $metode; ?> </td>
</tr>
<?php
}
?>
</table>
<br/>
<b> Keterangan</b>
Pilih data yang akan dihapus dengan memberi tanda cek pada kotak yang tersedia!
<br/><br/>
<input type="submit" name="Submit" value="hapus">
</form>
<?php
mysqli_free_result($result);
}
mysqli_close($conn);
?>
<form action = "uaptampilan.php" method = "post">
<input type="submit" name="input" value="Logout">
</form>
</body>
</html>