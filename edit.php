<h2>Fomrmulir Ubah Data Mahasiswa</h2>
<hr>
<form action="update.php" method="POST">

<?php
include"koneksi.php";
$koneksiObj= new Koneksi();
$koneksi = $koneksiObj->ambilKoneksi();

if($koneksi->connect_error) {
	die("Konesi Gagal : " . $koneksi->connect_error);
}

$qry= "select * from mahasiswa where nim= '" .
	$_GET["nim"] . "'";
$data=$koneksi->query($qry);

if($data->num_rows <=0){
	echo "isi data dengan benar!";
}else {
	while ($hasil =$data->fetch_assoc()) {
		global $nama;
		global $jurusan;
		$nama= $hasil["nama"];
		$jurusan= $hasil["jurusan"];
	}
}
?>

<table>
<tr>

    <td>NIM </td>
		<td width="20"></td>
    <td><input type="text" name="nim"readonly="true"
			value=<?php echo $_GET["nim"]; ?>></td>
</tr>
<tr>
    <td>NAMA</td>
		<td></td>
		<td><input type="text" name="nama"
			value=<?php echo $nama; ?>></td>
</tr>
<tr>
    <td>JURUSAN</td>
		<td></td>
		<td><input type="text" name="jurusan"
			value=<?php echo $jurusan; ?>></td>
</tr>
<tr>
	<td><input type="submit" value="Simpan"></td>
<<<<<<< HEAD


</tr>
</table>
</form>
<td></td>
<form class="" action="index.php" method="get">
	<input type="submit" value="Batal">

=======
</tr>
</table>
>>>>>>> b2e4f18b431625ac7ad04beb2d0d71b0169181ee
</form>
<form class="" action="index.php" method="get">
	<input type="submit" value="Batal">

</form>

