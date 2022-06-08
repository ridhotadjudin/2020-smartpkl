<!--SMARTPKL BACKEND ADMIN PAGES AKUN INDEX.PHP
-->

<table class="table table-striped" id="tabelakun">
	<thead>
		<tr>
			<th>Username</th>
			<th>Password</th>
			<th>Email</th>
			<th>Kontak</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Nomor KTP</th>
			<th>Pilihan</th>
		</tr>
	</thead>

	<tbody>
		<?php
			$query = mysqli_query($con, "select * from account");
			while($data = mysqli_fetch_assoc($query)){
				echo "<tr>
				<td>".$data['username']."</td>
				<td>".$data['password']."</td>
				<td>".$data['email']."</td>
				<td>".$data['kontak']."</td>
				<td>".$data['nama']."</td>
				<td>".$data['alamat']."</td>
				<td>".$data['noktp']."</td>
				<td>
					<a href='index.php?m=editakun&username=$data[username]'>
						<button class='btn btn-success'><i class='fa fa-file'></i></button></a>
					<a href='pages/akun/delete_process.php?username=$data[username]'>
						<button class='btn btn-danger'><i class='fa fa-times'></i></button>
				</a></td>
				</tr>
				";
			}
		?>
	</tbody>

</table>

<hr>
<a href="index.php?m=tambahakun"> 
	<button class="btn btn-primary">Tambah Akun</button>
</a>

<script type="text/javascript" src="vendor/jquery/jquery.js"></script>
<script type="text/javascript" src="vendor/jquery/jquery.min.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$("#tabelakun").DataTable();
	});
</script>