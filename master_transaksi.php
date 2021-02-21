

<?php
include "koneksi.php";
include('header.php');
?>
<h2><center> DAFTAR TRANSAKSI </center></h2>

<table class="table table-success table-striped"border="1">
	<tr>
		<td>No</td>
		<td>Nama Transaksi</td>
		<td>Tanggal Transaksi</td>
		<td>Pelanggan</td>
		<td>Barang</td>
		<td>Harga</td>
		<td>Kuantitas</td>
		<td>Diskon</td>
	</tr>
	<?php
		$no=1;
		$query = "SELECT * FROM transaksi 
		INNER JOIN barang ON transaksi.id_barang = barang.id_barang
		";
		$sql_brg = mysqli_query($koneksi, $query) or die (mysqli_error($koneksi));
		while ($data = mysqli_fetch_array($sql_brg)) { 
		?>
	<tr>
		<td><?= $no++; ?></td>
		<td><?=$data['nama_transaksi']?></td>
		<td><?=$data['tgl_transaksi']?></td>
		<td><?=$data['id_pelanggan']?></td>
		<td><?=$data['nama_barang']?></td>
		<td>Rp.<?=$data['harga']?></td>
		<td><?=$data['qty']?></td>
		<td><?=$data['diskon']?>%</td>
	</tr>
	<?php }?>

</table>
</form><input type='button'value='Tambah Transaksi'onClick='top.location="input_transaksi.php"'class='btn btn-danger '>
<input type='button'value='Laporan Transaksi'onClick='top.location="laporan_transaksi.php"'class='btn btn-danger '>
<?php 
include('footer.php');