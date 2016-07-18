<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?php echo base_url('assets/AdminLTE-2.0.5/dist/img/user2-160x160.jpg') ?>" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <p>Alexander Pierce</p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
                <span class="input-group-btn">
                    <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="treeview">
                <a href="<?php echo site_url('main') ?>">
                    <i class="fa fa-dashboard"></i> 
                    <span>Dashboard</span>
                    <i class="fa fa-angle-right pull-right"></i>
                </a>
                <!-- <ul class="treeview-menu">
                    <li><a href="<?php echo site_url('dashboard1') ?>"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
                    <li><a href="<?php echo site_url('dashboard2') ?>"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
                </ul> -->
            </li>
            <li class="treeview">
                <a href="<?php echo site_url('charts') ?>">
                    <i class="fa fa-pie-chart"></i>
                    <span>Charts</span>
                    <i class="fa fa-angle-right pull-right"></i>
                </a>
            </li>            
            <li class="treeview">
                <a href="#createModal" data-toggle="modal">
                    <i class="fa fa-user-plus"></i>
                    <span>Tambah Mahasiswa</span>
                    <i class="fa fa-angle-right pull-right"></i>
                </a>
            </li>            
        </ul>
    </section>
    <div class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Buat Data Mahasiswa Baru</h4>
                </div>
                <div class="modal-body create-modal">
                    <form name="createmhs" action="<?=site_url('main/createMhs')?>" method="POST">
                        <label for="basic-url">NRP</label>
                        <div class="input-group">
                            <span class="input-group-addon"></span>
                            <input nametype="text" class="form-control" placeholder="NRP" aria-describedby="basic-addon1" name="nrp">
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
                            <input type="month" class="form-control" placeholder="Tahun Masuk" aria-describedby="basic-addon1" name="thn_masuk" required="required">
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary">Create Mahasiswa</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /.modal -->
    <!-- /.sidebar -->
</aside>

<!-- =============================================== -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">