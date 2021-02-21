


<?php
include "koneksi.php";

include('header.php');
?>
<h1><center> DAFTAR KATEGORI </center></h1>

<table class="table table-success table-striped"border="1">
	<tr>
		<td>No</td>
		<td>Kategori</td>
		<td>Keterangan</td>
		
	</tr>
	<?php
		$no=1;
		$query = "SELECT * FROM Kategori
		";
		$sql_brg = mysqli_query($koneksi, $query) or die (mysqli_error($koneksi));
		while ($data = mysqli_fetch_array($sql_brg)) {
		
	?>
	<tr>
		<td><?= $no++; ?></td>
		<td><?=$data['nama_ktg']?></td>
		<td>Sedang Digunakan</td>
	</tr>
	<?php }?>

</table>
<input type='button'value='Tambah Kategori'onClick='top.location="input_kategori.php"'class='btn btn-danger'>
	<?php
include('footer.php');