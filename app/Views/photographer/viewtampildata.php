<?= $this->extend('layout/main') ?>
<?= $this->extend('layout/menu') ?>
<?= $this->section('isi') ?>

<link href="<?= base_url()?>/assets/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
<link href="<?= base_url()?>/assets/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
<script src="<?= base_url()?>/assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url()?>/assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>
<div class="col-sm-12">
    <div class="page-title-box">
        <h4 class="page-title">Galeri Foto</h4>
    </div>
</div>    
<div class="col-sm-12">
<div class="card m-b-30">
                            <div class="card-body">
                                <p class="card-text viewdata">
                                </p>
                            </div>
                        </div>
</div>
<script>
    function dataphotographer(id) {
        $.ajax({
            url: "<?= site_url('photographer/ambildata')?>",
            dataType: "json",
            success: function (response) {
                $('.viewdata').html(response.data);
            },
            error: function(xhr, ajaxoptions, thrownError){
                alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
            }
        });
    }
$(document).ready(function() {
    dataphotographer();
});
</script>
<?= $this->endSection('') ?>