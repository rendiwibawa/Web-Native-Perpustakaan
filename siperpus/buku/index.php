<?php
include '../koneksi.php';
$sql = "SELECT * FROM buku ORDER BY judul";
$res = mysqli_query($koneksi, $sql);
$anggota = array();

while ($data = mysqli_fetch_assoc($res)) {
    $anggota[] = $data;
}

include '../aset/header.php';
?>
<div class="container">
    <div class="row mt-4">
        <div class="col-md">
        </div>    
    </div>
    <div class="card">
  <div class="card-header">
    <h2 class="card-title"><i class="fas fa-book"></i> Data Buku</h2>
       
  </div>
  <div class="card-body">
  <table class="table table-striped">
  <thead>
   <tr>
   <th scope="col">#</th>
   <th scope="col">Judul</th>
   <th scope="col">Pengarang</th>
   <th scope="col">Stock</th>
   <th scope="col">Aksi</th>
   </tr>
</thead>
</div>
<?php
    $no = 1;
    foreach ($anggota as $p ) { ?>

    <tr>
        <th scope="row"><?= $no ?></th>
        <td><?= $p['judul'] ?></th></td>
        <td><?= $p['pengarang'] ?></th></td>
        <td><?= $p['stock'] ?></th></td>
        <td>
        <a href="#" class="badge badge-success">Detail</a>
        <a href="#" class="badge badge-warning">Edit</a>
        <a href="#" class="badge badge-danger">Hapus</a>     
        <a href="http://localhost/siperpus/buku/tambah.php" class="badge badge-primary">Tambah</a>                 
        </td>
    </tr>
                                        
<?php 
    $no++;
}
?>
</table>
<?php
include '../aset/footer.php';
?>