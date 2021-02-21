<?php
include "koneksi.php";

if(isset($_POST['Save'])){
	$nama_transaksi=$_POST['nama_transaksi'];
	$tgl_transaksi=$_POST['tgl_transaksi'];
	$qty=$_POST['qty'];
	$id_barang=$_POST['id_barang'];
	$diskon=$_POST['diskon'];
	$id_pelanggan=$_POST['id_pelanggan'];
$query=mysqli_query($koneksi,"insert into transaksi(nama_transaksi,tgl_transaksi,qty,id_barang,diskon,id_pelanggan)
value ('$nama_transaksi','$tgl_transaksi','$qty','$id_barang','$diskon','$id_pelanggan')");
if($query){
	header("location:tampil_transaksi.php");
}else{
	echo mysqli_error($koneksi);
}
};
include('header.php');
?>
<h1><center> TAMBAHKAN TRANSAKSI </center></h1>
<form method ="POST">
<table border="1" class="table table-success table-striped">
	<tr>
		<td>Nama</td>
		<td>Tanggal Transaksi</td>
		<td>QTY</td>
		<td>Nama Barang</td>
		<td>Nama Pelanggan</td>
		<td>Diskon</td>
	</tr>
	<tr>
		<td><input class="form-control" type="text" name="nama_transaksi"></td>
		<td><input class="form-control" type="date" name="tgl_transaksi"></td>
		<td><input class="form-control" type="number" name="qty"></td>

		<td><select class="form-control" name="id_barang">
			<option value="">-----Pilih-----</option>
			
			
				<?php 
			$sql_kategori = mysqli_query ($koneksi, "Select * from barang" ) or die
			(mysql_error($koneksi));
			while ($kategri = mysqli_fetch_array($sql_kategori)) {
				echo '<option value="'.$kategri['id_barang'].'">'.$kategri['nama_barang'].'</option>';
			} ?>
			
		</select></td>
		<td><select class="form-control" name="id_pelanggan">
			<option value="">-----Pilih-----</option>
			<?php 
			$sql_satuan = mysqli_query ($koneksi, "Select * from pelanggan" ) or die
			(mysql_error($koneksi));
			while ($satuan = mysqli_fetch_array($sql_satuan)) {
				echo '<option value="'.$satuan['nama_pelanggan'].'">'.$satuan['nama_pelanggan'].'</option>';
			} ?>
		</select></td>
		<td><input class="form-control" type="number" name="diskon"></td>
	<Td>
		<button><input type="submit" class="btn btn-danger"name="Save" value="Simpan"></button>
	</Td>
		
	</tr>

</table>
</form><input type='button'value='Tambah Pelanggan'onClick='top.location="input_pelanggan.php"'class='btn btn-danger '>
<?php 
include('footer.php');