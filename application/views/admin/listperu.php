<!-- <!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    
    
    <title>percobaan</title>
    <link href="<?php echo base_url(); ?>/assets/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/assets/datatable/dataTables.min.css" rel="stylesheet">
    
</head>

<body> -->
<section>
    <div class="container">

        <p class="mb-4"></p>
        <?php if ($this->session->flashdata('success')): ?>
        <div class="alert alert-success" role="alert">
            <?php echo $this->session->flashdata('success');?>
        </div>
        <?php endif;?>
        <?php if ($this->session->flashdata('delete')): ?>
        <div class="alert alert-danger" role="alert">
            <?php echo $this->session->flashdata('delete');?>
        </div>
        <?php endif;?>
        <a class="btn btn-danger mb-2" href="<?php echo base_url(); ?>perusahaan/input"><i class="fa fa-upload"></i>
            Tambah Data</a>
        <div class="card shadow-sm mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Perusahaan</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th style="width: 30px;">No.</th>
                                <th>Perusahaan</th>

                                <th style="width: 70px;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no=1;
                            foreach ($perusahaan as $yk): ?>
                            <tr>
                                <td style="text-align: center;"><?php echo $no++;?></td>
                                <td><?php echo $yk->nama;?></td>

                                <td style="text-align: center;">
                                    <!-- <button type="button" class="btn btn-info viewItem"
                                    data-id="<?php echo $data->id; ?>" data-toggle="modal"
                                    data-target="#myModal<?php echo $data->id; ?>">View</button> -->

                                    <a href="<?php echo base_url(); ?>perusahaan/hapuskan/<?php echo $yk->id; ?>"
                                        class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                    <a href="<?php echo base_url(); ?>perusahaan/edit/<?php echo $yk->id; ?>"
                                        class="btn btn-warning btn-sm"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>

                            <!-- Modal -->

                </div>
                <?php endforeach; ?>

                </tbody>
                </table>
            </div>
        </div>
    </div>
    <footer class="mt-5 mb-3">
        <div class="container my-auto">
            <div class="text-center my-auto">
                <span>developed by <b>Yakuza</b></span>
            </div>
        </div>
    </footer>
    </div>


    <!-- <script src="<?php echo base_url(); ?>/assets/jquery/jquery.slim.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/datatable/datatables.min.js"></script> -->
    <!-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet"> -->
    <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script> -->
    <script>
    $(document).ready(function() {
        $('#dataTable').DataTable();
    });
    </script>
</section>