<?php include('assets/include/header.php'); ?>
<?php
$id = $_GET['id'];
?>

<body>
    <div class="page-wrapper">

        <div class="page-content">
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <button type="button" href="<?php echo base_url() . 'down/pdf_print/' . $id ?>" class="btn-default">
                            <a class="text-1" href="<?php echo base_url('down/pdf_print/') ?><?php echo $id; ?>">Click to Download
                                <i class="" data-feather="printer"></i>
                            </a>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <?php include('assets/include/footer.php'); ?>