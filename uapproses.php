<?php
if (isset($_POST['input'])) {
$nama = $_POST['nama'];
$nik = $_POST['nik'];
$alamat = $_POST['alamat'];
$umur = $_POST['umur'];
$tgl = $_POST['tgl'];
$tujuan = $_POST['tujuan'];
$jam = $_POST['jam'];
$kelas = $_POST['kelas'];
$metode = $_POST['metode'];
$conn=mysqli_connect("localhost","root","","UAP1");
if(mysqli_connect_errno()) {
echo"Koneksi ke server gagal dilakukan";
exit();
}
$sql = "Insert into UAPKAI ".
"values('$nama','$nik','$alamat','$umur','$tgl','$tujuan','$jam','$kelas','$metode')";
mysqli_query($conn,$sql);
$num = mysqli_affected_rows($conn);
if ($num > 0 ) {
echo "<h3>Data yang anda masukan sudah disimpan.</h3>";
} else {
echo "<h3>Data gagal disimpan ke dalam database.</h3>";
}
}
mysqli_close($conn);
echo"<h2><a href='uapmenu.php'>Klik disini untuk ke Menu Pilihan</a></h2>";
?>