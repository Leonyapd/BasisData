<h2>DATA PEMBELIAN</h2>

<table class="table table-bordered">
	<thead>
		<tr>
			<th>No</th>
			<th>Nama Pelanggan</th>
			<th>Tanggal Pembelian</th>
			<th>Total</th>
			
		</tr>
	</thead>
	<tbody>
	<?php $nomor=1;?>
	<?php $ambil=$koneksi->query("SELECT * FROM pembelian JOIN pelanggan ON pembelian.id_pelanggan=pelanggan.id_pelanggan");?>
	<?php while($pecah=$ambil->fetch_assoc()){ ?>
		<tr>
			<td><?php echo $nomor;?></td>
			<td><?php echo $pecah['nama_pelanggan'];?></td>
			<td><?php echo $pecah['tanggal_pembelian'];?></td>
			<td><?php echo $pecah['total_pembelian'];?></td>
			
		</tr>
		<?php $nomor++;?>
	<?php }?>
	</tbody>
</table>