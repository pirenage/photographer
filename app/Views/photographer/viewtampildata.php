<?= $this->extend('layout/main') ?>
<?= $this->extend('layout/menu') ?>
<?= $this->section('isi') ?>
<div class="col-sm-12">
    <div class="page-title-box">
        <h4 class="page-title">Galeri Foto</h4>
    </div>
</div>    
<div class="col-sm-12">
<div class="card m-b-30">
                            <div class="card-body">
                                <p class="card-text">
                                    <table class="table table-sm table-stripped" id="dataphotographer">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>No.Kta</th>
                                                <th>Author</th>
                                                <th>Deskripsi</th>
                                                <th>Foto</th>
                                                <th>Tanggal</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $nomor = 0; 
                                            foreach ($tampildata as $row):
                                                $nomor++;
                                            ?>
                                            <tr>
                                                <td><?= $nomor ?></td>
                                                <td><?= $row['kta']?></td>
                                                <td><?= $row['author']?></td>
                                                <td><?= $row['deksripsi']?></td>
                                                <td><?= $row['foto']?></td>
                                                <td><?= $row['tanggal']?></td>
                                                <td>
                                                    
                                                </td>
                                            </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </p>
                            </div>
                        </div>
</div>
<?= $this->endSection('') ?>