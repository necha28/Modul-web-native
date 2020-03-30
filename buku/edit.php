<?php
include'../koneksi.php';
include'../aset/header.php';

$id_buku = $_GET['id_buku'];
$query = mysqli_query($kon, "SELECT*FROM buku WHERE id_buku=$id_buku");
$buku = mysqli_fetch_assoc($query);
?>
<div class="container">
	<div class="row mt-4">
		<div class="col md-4">
			<div class="card">
				<div class="card-header">
					<h3><i class="fas fa-books-medical"></i>Edit Data</h3>
				</div>
				<div class="card-body">
					<form action="proses-tambah.php" method="post">
						<div class="form-group">
                    		<input type="text" class="form-control" name="judul" value="<?php echo $buku['judul']; ?>" placeholder="Judul">
                		</div>
                		<div class="form-group">
                    		<input type="text" class="form-control" name="pengarang" value="<?php echo $buku['penerbit']; ?>" placeholder="Pengarang">
                		</div>
                        <div class="form-group">
                            <textarea class="form-control" name="ringkasan"
                            value="<?php echo $buku['ringkasan']; ?>" placeholder="Ringkasan">
                            
                            </textarea>
                        </div>
                        <div class="form-group">
                            <input type="file" class="form-control" name="cover" placeholder="Cover">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="stok" placeholder="Stok">
                        </div>
                        <div class="form-group">
                            <select>
                                <option>--Pilih Kategori</option>
                                <?php 
                                while ($kategori = mysqli_fetch_assoc($query)){
                                ?>
                                <option value="<?php echo $kategori['id_kategori']; ?>"><?php echo $kategori['kategori']; ?></option>
                                <?php
                            };
                            ?>
                            </select>

                        </div>
                		<button type="submit" class="btn btn-primary" name="simpan">Simpan</button>


					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
include '../aset/footer.php';
?>