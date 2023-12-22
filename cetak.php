<!DOCTYPE html>
<html>
<head>
	<title>Cetak Resi pesanan</title>
</head>
<body>
	<center>
		<h2>Resi Pemesanan Online Hotel Kolektiv</h2>
	</center>
<tr>
	<?php
	include'koneksi.php'
	?>
	<center>
	<table border="1" style="height:50%;">
		
		<th width="11%">No</th>
		<th>id Pesanan</th>
		<th>Check in</th>
		<th>Check out</th>
		<th>Nama pemesan</th>
		<th>Email pemesan</th>
		<th>No Hp pemesan</th>
		<th>Nama tamu</th>
		<th>id kamar</th>
	
</tr>
	<?php
	$no = 1;
	$sql = mysqli_query($koneksi,"select * from pesanan");
	while($data = mysqli_fetch_array($sql)){
		?>
	<tr>
		<td><?php echo $no++;
	?></td>
	<td><?php echo $data['id_pesanan'];?></td>
	<td><?php echo $data['cek_in'];?></td>
	<td><?php echo $data['cek_out'];?></td>
	<td><?php echo $data['nama_pemesan'];?></td>
	<td><?php echo $data['email_pemesan'];?></td>
	<td><?php echo $data['hp_pemesan'];?></td>
	<td><?php echo $data['nama_tamu'];?></td>
	<td><?php echo $data['id_kamar'];?></td>

	</tr>
	</center>
	<?php
	}
	?>
	</table>
	<script>
		window.print()
	</script>
	
</body>
</html>