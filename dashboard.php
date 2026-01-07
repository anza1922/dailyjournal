<?php
//query untuk mengambil data article
$sql1 = "SELECT * FROM article ORDER BY tanggal DESC";
$hasil1 = $conn->query($sql1);

//menghitung jumlah baris data article
$jumlah_article = $hasil1->num_rows;

//query gallery
//$sql2 = "SELECT * FROM gallery ORDER BY tanggal DESC";
//$hasil2 = $conn->query($sql2);
//$jumlah_gallery = $hasil2->num_rows;
?>

<div class="row row-cols-1 row-cols-md-4 g-4 justify-content-center pt-4">

    <!-- CARD ARTICLE -->
    <div class="col">
        <div class="card border-0 shadow-lg rounded-4">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    
                    <div class="p-2">
                        <h5 class="card-title text-primary fw-bold">
                            <i class="bi bi-newspaper me-1"></i> Article
                        </h5>
                    </div>

                    <div class="p-2">
                        <span class="badge bg-primary fs-2 px-4 py-2 rounded-pill">
                            <?php echo $jumlah_article; ?>
                        </span>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- CARD GALLERY -->
    <div class="col">
        <div class="card border-0 shadow-lg rounded-4">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">

                    <div class="p-2">
                        <h5 class="card-title text-primary fw-bold">
                            <i class="bi bi-camera me-1"></i> Gallery
                        </h5>
                    </div>

                    <div class="p-2">
                        <span class="badge bg-primary fs-2 px-4 py-2 rounded-pill">
                            <?php //echo $jumlah_gallery; ?>
                        </span>
                    </div>

                </div>
            </div>
        </div>
    </div>

</div>
