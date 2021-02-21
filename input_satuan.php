
<?php
include "koneksi.php";

if(isset($_POST['Save'])){
	$nama_satuan=$_POST['nama_satuan'];

$query=mysqli_query($koneksi,"insert into satuan(nama_satuan)
value ('$nama_satuan')");
if($query){
	header("location:tampil_satuan.php");
}else{
	echo mysqli_error($koneksi);
}
};
include('header.php');
?>
<h1><center> TAMBAHKAN SATUAN </center></h1>
<form method ="POST">
<table border="1" class="table table-success table-striped">
	<tr>
		<td>Nama Satuan</td>

	</tr>
	<tr>
		<td><input class="form-control" type="text" name="nama_satuan"></td>
		
	<Td>
		<button><input type="submit" class="btn btn-danger"name="Save" value="Simpan"></button>
	</Td>

	</tr>

</table>
</form>
<?php
include('footer.php');