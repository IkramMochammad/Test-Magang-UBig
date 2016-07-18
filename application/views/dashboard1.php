<?php
$this->load->view('template/head');
?>

<!--tambahkan custom css disini-->
<!-- iCheck -->
<link href="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/iCheck/flat/blue.css') ?>" rel="stylesheet" type="text/css" />
<!-- Morris chart -->
<link href="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/morris/morris.css') ?>" rel="stylesheet" type="text/css" />
<!-- jvectormap -->
<link href="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/jvectormap/jquery-jvectormap-1.2.2.css') ?>" rel="stylesheet" type="text/css" />
<!-- Date Picker -->
<link href="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/datepicker/datepicker3.css') ?>" rel="stylesheet" type="text/css" />
<!-- Daterange picker -->
<link href="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/daterangepicker/daterangepicker-bs3.css') ?>" rel="stylesheet" type="text/css" />
<!-- bootstrap wysihtml5 - text editor -->
<link href="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') ?>" rel="stylesheet" type="text/css" />

<!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/datatables/dataTables.bootstrap.css')?>" type="text/css" />

<?php
    $this->load->view('template/topbar');
    $this->load->view('template/sidebar');
?>

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Dashboard
        <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-aqua">
                <div class="inner">
                    <h3><?=$count_mhs?></h3>
                    <p><bold>Total Mahasiswa</bold></p>
                </div>
                <div class="icon">
                    <i class="fa fa-users"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div><!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-green">
                <div class="inner">
                    <h3><?=$count_mhsLaki?></h3>
                    <p>Mahasiswa Laki-laki</p>
                </div>
                <div class="icon">
                    <i class="ion ion-male"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div><!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-yellow">
                <div class="inner">
                    <h3><?=$count_mhsWanita?></h3>
                    <p>Mahasiswa Perempuan</p>
                </div>
                <div class="icon">
                    <i class="ion ion-female"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div><!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-red">
                <div class="inner">
                    <h3><?=$count_mhsCuti?></h3>
                    <p>Mahasiswa Cuti</p>
                </div>
                <div class="icon">
                    <i class="fa fa-user-times"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div><!-- ./col -->
    </div><!-- /.row -->
    
    <!-- Main row -->
    <div class="row">
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Data Mahasiswa</h3>
                        </div><!-- /.box-header -->
                        <div class="box-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th style="text-align: center; vertical-align: middle;">NRP</th>
                                        <th style="text-align: center; vertical-align: middle;">Nama</th>
                                        <th style="text-align: center; vertical-align: middle;">Jenis Kelamin</th>
                                        <th width="100px" style="text-align: center; vertical-align: middle;">Tanggal Lahir</th>
                                        <th style="text-align: center; vertical-align: middle;">Alamat</th>
                                        <th style="text-align: center; vertical-align: middle;">Status</th>
                                        <th style="text-align: center; vertical-align: middle;">Tahun Masuk</th>
                                        <th style="text-align: center; vertical-align: middle;">Opsi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($user as $user) { ?>
                                        <tr>
                                            <td><?=$user['nrp']?></td>
                                            <td><?=$user['nama']?></td>
                                            <td><?=($user['j_kelamin']==0)?'Laki-laki':'Perempuan'?></td>
                                            <td><?=$user['ttl']?></td>
                                            <td><?=$user['alamat']?></td>
                                            <td style="text-align: center; vertical-align: middle;">
                                                <?=($user['status']==0)?'Mahasiswa Cuti':'Mahasiswa Aktif'?>
                                            </td>
                                            <td style="text-align: center; vertical-align: middle;">
                                                <?=$user['thn_masuk']?>
                                            </td>
                                            <td style="text-align: center; vertical-align: middle; width: 70px;">
                                                <a href="#editModal" data-toggle="modal" 
                                                    data-nrp="<?=$user['nrp']?>"
                                                    data-nama="<?=$user['nama']?>"
                                                    data-j_kelamin="<?=$user['j_kelamin']?>"
                                                    data-ttl="<?=$user['ttl']?>"
                                                    data-status="<?=$user['status']?>"
                                                    data-thn_masuk="<?=$user['thn_masuk']?>"
                                                    data-alamat="<?=$user['alamat']?>"
                                                    class="editmhs">Edit</a> 
                                                | 
                                                <a onclick="return confirm('Are you sure?')" 
                                                    href="<?=site_url('main/deleteMhs')?>/<?=$user['nrp']?>">Delete</a>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div><!-- /.box-body -->
                    </div><!-- /.box -->
                </div><!-- /.col -->
            </div><!-- /.row -->
        </section><!-- /.content -->
    </div>
</section><!-- /.content -->

<!-- /.modal -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Edit Data Mahasiswa</h4>
            </div>
            <div class="modal-body edit-modal">
                <form name="editmhs" action="<?=site_url('main/editMhs')?>" method="POST">
                    <label for="basic-url">NRP</label>
                    <div class="input-group">
                        <span class="input-group-addon"></span>
                        <input nametype="text" class="form-control" placeholder="NRP" aria-describedby="basic-addon1" name="nrp" readonly="readonly">
                    </div>

                    <label for="basic-url">Nama</label>
                    <div class="input-group">
                        <span class="input-group-addon"></span>
                        <input type="text" class="form-control" placeholder="Nama" aria-describedby="basic-addon1" name="nama">
                    </div>

                    <label for="basic-url">Jenis Kelamin</label>
                    <div class="input-group">
                        <span class="input-group-addon"></span>
                        <select name="j_kelamin" class="form-control">
                            <option value="0">Laki-laki</option>
                            <option value="1">Perempuan</option>
                        </select>
                    </div>

                    <label for="basic-url">Tanggal Lahir</label>
                    <div class="input-group">
                        <span class="input-group-addon"></span>
                        <input type="date" class="form-control" placeholder="Tanggal Lahir" aria-describedby="basic-addon1" name="ttl">
                    </div>

                    <label for="basic-url">Alamat</label>
                    <div class="input-group">
                        <span class="input-group-addon"></span>
                        <input type="text" class="form-control" placeholder="Alamat" aria-describedby="basic-addon1" name="alamat">
                    </div>          

                    <label for="basic-url">Status</label>
                    <div class="input-group">
                        <span class="input-group-addon"></span>
                        <select name="status" class="form-control">
                            <option value="1">Mahasiswa Aktif</option>
                            <option value="0">Mahasiswa Cuti</option>
                        </select>
                    </div>

                    <label for="basic-url">Tahun Masuk</label>
                    <div class="input-group">
                        <span class="input-group-addon"></span>
                        <input type="text" class="form-control" placeholder="Tahun Masuk" aria-describedby="basic-addon1" name="thn_masuk" readonly="readonly">
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /.modal -->

<?php
$this->load->view('template/js');
?>

<script>
  $(function () {
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": true
    });
  });
</script>

<script type="text/javascript">
  $(document).on("click", ".editmhs", function(){
    $(".edit-modal").find('input[name=nrp]').val($(this).data('nrp'));
    $(".edit-modal").find('input[name=nama]').val($(this).data('nama'));
    $(".edit-modal").find('input[name=alamat]').val($(this).data('alamat'));
    $(".edit-modal").find('input[name=ttl]').val($(this).data('ttl'));
    $(".edit-modal").find('select[name=j_kelamin]').val($(this).data('j_kelamin'));
    $(".edit-modal").find('select[name=status]').val($(this).data('status'));
    $(".edit-modal").find('input[name=thn_masuk]').val($(this).data('thn_masuk'));
  })
</script>
<!--tambahkan custom js disini-->
<!-- jQuery UI 1.11.2 -->
<script src="<?php echo base_url('assets/js/jquery-ui.min.js') ?>" type="text/javascript"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') ?>" type="text/javascript"></script>
<!-- iCheck -->
<script src="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/iCheck/icheck.min.js') ?>" type="text/javascript"></script>

<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url('assets/AdminLTE-2.0.5/dist/js/pages/dashboard.js') ?>" type="text/javascript"></script>

<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url('assets/AdminLTE-2.0.5/dist/js/demo.js') ?>" type="text/javascript"></script>

<script src="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/datatables/jquery.dataTables.js') ?>"></script>
<script src="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/datatables/dataTables.bootstrap.js') ?>"></script>

<?php
$this->load->view('template/foot');
?>