

<?php
include "koneksi.php";

?>
<h1><center> LAPORAN TRANSAKSI </center></h1>

<table class="table table-success table-striped" border="1">
	<tr>
		<td>No</td>
		<td>Nama Pelanggan</td>
		<td>Kategori</td>
		<td>Barang</td>
		<td>QTY</td>
		<td>harga</td>
		<td>total</td>
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
			
		<td><?=$data['id_pelanggan']?></td>
		<td><?=$data['kategori_id']?></td>
		<td><?=$data['nama_barang']?></td>
		<td><?=$data['qty']?></td>
		<td>Rp.<?=$data['harga']?></td>
		<td>Rp.<?=$data['harga'] * $data['qty'] ?></td>
	</tr>
	<?php }?>

</table>
<input type='button'value='Tambah Transaksi'onClick='top.location="input_transaksi.php"'class='btn btn-danger'>
<?php 