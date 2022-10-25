<?php
if (isset($_POST['Submit'])) {
$data = $_POST['data'];
$conn=mysqli_connect("localhost","root","","UAP1");
if(mysqli_connect_errno()) {
echo"Koneksi ke server gagal dilakukan";
exit();
}
For ($i=0;$i<sizeof($data);$i++){
$sql = "Delete from UAPKAI ".
"where nik=
'$data[$i]'";
mysqli_query($conn,$sql);
}
$num = mysqli_affected_rows($conn);
if ($num > 0 ) {
echo "$num baris sudah dihapus.";
echo "<a href='uapoutput.php'>Lihat data setelah diubah</a>";
} else {
echo "Penghapusan gagal dilakukan.</br>";
echo "<a href='uapoutput.php'>Lihat data</a>";
}

mysqli_close($conn);
}
?>