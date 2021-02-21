<?php

include "koneksi.php";

if(isset($_POST['Save'])){
	$nama_barang=$_POST['nama_barang'];
	$kategori_id=$_POST['kategori_id'];
	$satuan_id=$_POST['satuan_id'];
	$harga=$_POST['harga'];
$query=mysqli_query($koneksi,"insert into barang(nama_barang,kategori_id,satuan_id,harga)
value ('$nama_barang','$kategori_id','$satuan_id','$harga')");
if($query){
	header('location:tampil_barang.php');
}else{
	echo mysqli_error($koneksi);
}
};
include("header.php");
?>
<form method ="POST">
<table border="1" class="table table-success table-striped">
	<tr>
		<td>Nama</td>
		<td>Harga</td>
		<td>Kategori</td>
		<td>Satuan</td>

	</tr>
	<tr>
		<td><input class="form-control" type="text" name="nama_barang"></td>
		<td><input class="form-control" type="number" name="harga"></td>
		<td><select class="form-control" name="kategori_id">
			<option value="">-----Pilih-----</option>
			<?php 
			$sql_kategori = mysqli_query ($koneksi, "Select * from kategori" ) or die
			(mysql_error($koneksi));
			while ($kategri = mysqli_fetch_array($sql_kategori)) {
				echo '<option value="'.$kategri['nama_ktg'].'">'.$kategri['nama_ktg'].'</option>';
			} ?>
		</select></td>
		<td><select class="form-control" name="satuan_id">
			<option value="">-----Pilih-----</option>
			<?php 
			$sql_satuan = mysqli_query ($koneksi, "Select * from satuan" ) or die
			(mysql_error($koneksi));
			while ($satuan = mysqli_fetch_array($sql_satuan)) {
				echo '<option value="'.$satuan['id_satuan'].'">'.$satuan['nama_satuan'].'</option>';
			} ?>
		</select></td>
	<Td>
		<button><input type="submit" class="btn btn-danger"name="Save" value="Simpan"></button>
	</Td>
		
	</tr>

</table>
</form><input type='button'value='Tambah kategori'onClick='top.location="input_kategori.php"'class='btn btn-danger'>
<input type='button'value='Tambah Satuan'onClick='top.location="input_satuan.php"'class='btn btn-danger'>
<?php 
include('footer.php');