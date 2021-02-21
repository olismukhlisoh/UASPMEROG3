
<?php
include "koneksi.php";
$jml_mhs=mysqli_query($koneksi,"select count(id_mahasiswa) as all_mhs from mahasiswa");
$total=mysqli_fetch_array($jml_mhs);
 
$jml_mhs_pria=mysqli_query($koneksi,"select count(id_mahasiswa) as all_pria from mahasiswa where jenis_kelamin='pria'");
$total_pria=mysqli_fetch_array($jml_mhs_pria);
 
$jml_mhs_wanita=mysqli_query($koneksi,"select count(id_mahasiswa) as all_wanita from mahasiswa where jenis_kelamin='wanita'");
$total_wanita=mysqli_fetch_array($jml_mhs_wanita);

?>
<h1>List Mahasiswa</h1>
<table class="table table-dark">
	<tr>
		<td>No</td>
		<td>Nama</td>
		<td>Jenis Kelamin</td>
		<td colspan="2">Action</td>
	</tr>
	<?php
	$no=1;
	$query=mysqli_query($koneksi,"select * from mahasiswa");
	while ($list_mahasiswa=mysqli_fetch_array($query))
	{
		?>
		<tr>
			<td><?php echo $no++;?></td>
			<td><?php echo $list_mahasiswa['nama'];?></td>
			<td><?php echo $list_mahasiswa['jenis_kelamin'];?></td>
			<td><a href="edit_mahasiswa.php?id_mahasiswa=<?php echo $list_mahasiswa['id_mahasiswa'];?>"class="btn btn-success">Edit</td>
			<td><a href="hapus_mahasiswa.php?id_mahasiswa=<?php echo $list_mahasiswa['id_mahasiswa'];?>" class="btn btn-warning">Hapus</td>
		</tr>
	<?php } ?>
	
			
			<tr>
		<td>Jumlah Mahasiswa <?php echo $total['all_mhs'];?></td>
		<td>Jumlah Mahasiswa Pria <?php echo $total_pria['all_pria'];?></td>
		<td>Jumlah Mahasiswa wanita <?php echo $total_wanita['all_wanita'];?></td>
	</tr>
 
	</table>