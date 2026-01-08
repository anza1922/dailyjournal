<?php
include "koneksi.php";

// Pagination
$hlm = (isset($_POST['hlm'])) ? $_POST['hlm'] : 1;
$limit = 5;
$limit_start = ($hlm - 1) * $limit;
$no = $limit_start + 1;

$sql = "SELECT * FROM user ORDER BY id DESC LIMIT $limit_start, $limit";
$result = $conn->query($sql);

$sql1 = "SELECT * FROM user";
$result1 = $conn->query($sql1);
$total_records = $result1->num_rows;
?>

<table class="table table-hover">
    <thead class="table-primary">
        <tr>
            <th>No</th>
            <th>Username</th>
            <th>Foto</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
        ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $row["username"] ?></td>
                    <td>
                        <?php
                        if ($row["foto"] != '') {
                            if (file_exists('img/' . $row["foto"] . '')) {
                        ?>
                                <img src="img/<?= $row["foto"] ?>" width="100">
                            <?php
                            }
                        } else {
                            ?>
                            <img src="img/default-user.png" width="100">
                        <?php
                        }
                        ?>
                    </td>
                    <td>
                        <a href="#" title="edit" class="badge rounded-pill text-bg-success" data-bs-toggle="modal" data-bs-target="#modalEdit<?= $row["id"] ?>"><i class="bi bi-pencil"></i></a>
                        <a href="#" title="delete" class="badge rounded-pill text-bg-danger" data-bs-toggle="modal" data-bs-target="#modalHapus<?= $row["id"] ?>"><i class="bi bi-x-circle"></i></a>

                        <!-- Awal Modal Edit -->
                        <div class="modal fade" id="modalEdit<?= $row["id"] ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Edit User</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <form method="post" action="" enctype="multipart/form-data">
                                        <div class="modal-body">
                                            <div class="mb-3">
                                                <label for="formGroupExampleInput" class="form-label">Username</label>
                                                <input type="text" class="form-control" name="username" placeholder="Masukkan Username" value="<?= $row["username"] ?>" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="formGroupExampleInput2" class="form-label">Password</label>
                                                <input type="password" class="form-control" name="password" placeholder="Kosongkan jika tidak ingin mengubah password">
                                                <small class="text-muted">*Kosongkan jika tidak ingin mengubah password</small>
                                            </div>
                                            <div class="mb-3">
                                                <label for="formGroupExampleInput3" class="form-label">Foto Profil</label>
                                                <input type="file" class="form-control" name="foto">
                                            </div>
                                            <div class="mb-3">
                                                <label>Foto Saat Ini:</label><br>
                                                <?php
                                                if ($row["foto"] != '') {
                                                    if (file_exists('img/' . $row["foto"] . '')) {
                                                ?>
                                                        <img src="img/<?= $row["foto"] ?>" width="150">
                                                    <?php
                                                    }
                                                } else {
                                                    ?>
                                                    <img src="img/default-user.png" width="150">
                                                <?php
                                                }
                                                ?>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <input type="submit" value="Simpan" name="simpan" class="btn btn-primary">
                                            <input type="hidden" name="id" value="<?= $row["id"] ?>">
                                            <input type="hidden" name="foto_lama" value="<?= $row["foto"] ?>">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- Akhir Modal Edit -->

                        <!-- Awal Modal Hapus -->
                        <div class="modal fade" id="modalHapus<?= $row["id"] ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Konfirmasi Hapus User</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <form method="post" action="">
                                        <div class="modal-body">
                                            <p>Yakin ingin menghapus user <strong><?= $row["username"] ?></strong>?</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                            <input type="submit" value="Hapus" name="hapus" class="btn btn-danger">
                                            <input type="hidden" name="id" value="<?= $row["id"] ?>">
                                            <input type="hidden" name="foto" value="<?= $row["foto"] ?>">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- Akhir Modal Hapus -->
                    </td>
                </tr>
            <?php
            }
        } else {
            ?>
            <tr>
                <td colspan="4" align="center">Belum ada data</td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>

<!-- Pagination -->
<?php
$total_pages = ceil($total_records / $limit);
?>
<p>Total User: <?= $total_records ?></p>
<nav class="mb-2">
    <ul class="pagination justify-content-end">
        <?php
        for ($i = 1; $i <= $total_pages; $i++) {
        ?>
            <li class="page-item">
                <a class="page-link halaman" id="<?= $i ?>" href="#"><?= $i ?></a>
            </li>
        <?php
        }
        ?>
    </ul>
</nav>