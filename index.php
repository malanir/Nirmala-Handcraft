<?php 
include 'header.php';
?>
<!-- IMAGE -->
<div class="container-fluid" style="margin: 0;padding: 0;">
	<div class="image" style="margin-top: -21px">
		<img src="image/home/mutiara.jpg" style="width: 100%;  height: 650px;">
	</div>
</div>
<br>
<br>

<!-- PRODUK TERBARU -->
<div class="container">

	<h4 class="text-center" style="font-family: arial; padding-top: 10px; padding-bottom: 10px; font-style: italic; line-height: 29px; border-top: 2px solid #d6a4d3; border-bottom: 2px solid #d6a4d3; color: #6c567b;">
		Nirmala Handcraft adalah salah satu pelopor pertama dalam bisnis gelang modern di Indonesia. Didirikan pada tahun yang akan datang, saat ini dikelola di bawah PT. Milkita. Produk kami dijual dengan harga terjangkau oleh semua orang.
	</h4>

	<h2 style="width: 100%; border-bottom: 4px solid #a67bbd; margin-top: 80px; color: #6c567b;">
		<b>Produk Kami</b>
	</h2>

	<div class="row">
		<?php 
		$result = mysqli_query($conn, "SELECT * FROM produk");
		while ($row = mysqli_fetch_assoc($result)) {
			?>
			<div class="col-sm-6 col-md-4">
				<div class="thumbnail" style="border: 1px solid #d6a4d3; background-color: #f8f1f9;">
					<img src="image/produk/<?= $row['image']; ?>" style="border-bottom: 2px solid #d6a4d3;">
					<div class="caption" style="color: #6c567b;">
						<h3><?= $row['nama'];  ?></h3>
						<h4>Rp.<?= number_format($row['harga']); ?></h4>
						<div class="row">
							<div class="col-md-6">
								<a href="detail_produk.php?produk=<?= $row['kode_produk']; ?>" class="btn btn-light btn-block" style="background-color: #d6a4d3; color: white;">Detail</a> 
							</div>
							<?php if(isset($_SESSION['kd_cs'])){ ?>
								<div class="col-md-6">
									<a href="proses/add.php?produk=<?= $row['kode_produk']; ?>&kd_cs=<?= $kode_cs; ?>&hal=1" class="btn btn-light btn-block" style="background-color: #6c567b; color: white;" role="button"><i class="glyphicon glyphicon-shopping-cart"></i> Tambah</a>
								</div>
								<?php 
							}
							else{
								?>
								<div class="col-md-6">
									<a href="keranjang.php" class="btn btn-light btn-block" style="background-color: #6c567b; color: white;" role="button"><i class="glyphicon glyphicon-shopping-cart"></i> Tambah</a>
								</div>
								<?php 
							}
							?>
						</div>
					</div>
				</div>
			</div>
			<?php 
		}
		?>
	</div>

</div>
<br>
<br>
<br>
<br>
<?php 
include 'footer.php';
?>
