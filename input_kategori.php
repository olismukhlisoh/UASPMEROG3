<?php
include "koneksi.php";
if(isset($_POST['Save'])){
	$nama_ktg=$_POST['nama_ktg'];

$query=mysqli_query($koneksi,"insert into kategori(nama_ktg)
value ('$nama_ktg')");
if($query){
	header("location:tampil_kategori.php");
}else{
	echo mysqli_error($koneksi);
}
};
include('header.php');
?>
<form method ="POST">
<table border="1" class="table table-bordered">
	<tr>
		<td>Nama Kategori</td>

	</tr>
	<tr>
		<td><input class="form-control" type="text" name="nama_ktg"></td>
		
	<Td>
		<button><input type="submit" class="btn btn-danger"name="Save" value="Simpan"></button>
	</Td>

	</tr>

</table>
</form>
<?php

include('footer.php');