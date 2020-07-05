<h2>DATA BARANG</h2>

<table class="table table-bordered">
	<thead>
		<tr>
			<th>no</th>
			<th>nama</th>
			<th>jumlah</th>
			<th>satuan</th>
			<th>harga</th>
			<th>aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php $nomor=1;?>
		<?php $ambil=$koneksi->query("SELECT * FROM barang"); ?>
		<?php while($pecah=$ambil->fetch_assoc()){?>
		<tr>
			<td><?php echo $nomor;?></td>
			<td><?php echo $pecah['nama_barang'];?></td>
			<td><?php echo $pecah['jumlah'];?></td>
			<td><?php echo $pecah['satuan'];?></td>
			<td><?php echo $pecah['harga_barang'];?></td>
			<td>
				<a href=""class="btn-danger btn">hapus</a>
				<a href=""class="btn btn-warning">ubah</a>
			</td>
		</tr>
		<?php $nomor++;?>
		<?php } ?>
		</tbody>
</table>