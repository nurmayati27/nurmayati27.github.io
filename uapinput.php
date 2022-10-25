<html>
<head><title>PT. KAI</title>
 <script>
  function tampil(){
	var nama_tujuan=document.getElementById("input").tujuan.value;
if (nama_tujuan=="Pariaman")
{
	document.getElementById("jam").innerHTML="<option value='5.45 WIB'>5.45 WIB</option><option value='9.10 WIB'>9.10 WIB</option><option value='13.05 WIB'>13.05 WIB</option><option value='17.55 WIB'>17.55 WIB</option>";
}	else if (nama_tujuan=="Bandara"){
	document.getElementById("jam").innerHTML="<option value='5.30 WIB'>5.30 WIB</option><option value='8.45 WIB'>8.45 WIB</option><option value='12.40 WIB'>12.40 WIB</option><option value='18.00 WIB'>18.00 WIB</option>";
} else if (nama_tujuan=="Lembah Anai"){
	document.getElementById("jam").innerHTML="<option value='6.45 WIB'>6.45 WIB</option><option value='10.35 WIB'>10.35 WIB</option>";
}
} 
</script>
</head>
<body>
<style>
        h2
        {
            background-color: white;
            color: blue;
            font-family: sans-serif;
            text-align: center;
            width: 45%;
            margin:auto;
            padding: 20px;
        }
 
        body
        {
            background-image: url('kaifix1.jpg');
            background-repeat: no-repeat;
            background-size: cover;
        }
</style>
<h2>Rekap Data Penumpang PT.KAI K.C Padang</h2>
<form id="input" ACTION= "uapproses.php" METHOD= "POST" NAME="input">
<b> <font color="black">Nama:</b><br/>
<input name="nama" type="text" size = "40" maxlength= "40">
<br /><br />
<b>NIK : </b><br/>
<input name="nik" type="text" size="30" maxlength="25">
<br /><br />
<b>Alamat: </b><br/>
<input name="alamat" type="text" size="30" maxlength="25">
<br /><br />
<b>Umur: </b><br/>
<input name="umur" type="number" size="30" maxlength="25">
<br /><br/>
<b>Tanggal Berangkat : </b><br/>
<input name="tgl" type="date" size="30" maxlength="25">
<br /><br/>
<b>Stasiun Tujuan:</b><br/>
		<select id="tujuan" name="tujuan" onchange="tampil()">
		<br><option value="Pariaman">Pariaman</option>
		<br><option value="Bandara">Bandara</option>
		<br><option value="Lembah Anai">Lembah Anai</option>
		</select>
<br />
<br><b>Jam Keberangkatan</b></br>
	 <select id="jam" name="jam">
     </select>
<br /><br/>
<b>Jenis Kelas:</b><br/>
		<select name="kelas">
		<br><option value="Eksekutif">Eksekutif</option>
		<br><option value="Bisnis">Bisnis</option>
		<br><option value="Ekonomi">Ekonomi</option>
		<br><option value="Premium">Premium</option>
		</select>
<br /><br/>
<b>Metode Pembayaran</b><br/>
		<select name="metode">
		<br><option value="Tunai">Tunai</option>
		<br><option value="Debit">Debit</option>
		<br><option value="OVO">OVO</option>
		</select>
<br /><br/>
<input type="submit" name="input" value="input">
</form>
</body>
</html>
