<?php $this->load->view('template/header'); ?>
<link href="<?php echo base_url(); ?>assets/plugins/bower_components/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
<link href="https://cdn.datatables.net/buttons/1.2.2/css/buttons.dataTables.min.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets'); ?>/plugins/jquery-notific8/jquery.notific8.min.css"/>
<link href="<?php echo base_url(); ?>assets/plugins/bower_components/sweetalert/sweetalert.css" rel="stylesheet" type="text/css">

<link href="<?php echo base_url(); ?>assets/plugins/bower_components/custom-select/custom-select.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url(); ?>assets/plugins/bower_components/bootstrap-select/bootstrap-select.min.css" rel="stylesheet" />
<link href="<?php echo base_url(); ?>assets/plugins/bower_components/multiselect/css/multi-select.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url(); ?>assets/plugins/bower_components/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css" />
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row bg-title">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">
                    Manajemen User
                </h4>
            </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> 
                <ol class="breadcrumb">
                    <li class="active">Manajemen User</li>
                </ol>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="white-box"> 
                    
                    <div class="sttabs tabs-style-underline">
                        <nav>
                            <ul>
                                <li><a href="#" class="sticon ti-id-badge active"><span>Manajemen Profil User</span></a></li>
                            </ul>
                        </nav>
                        <div class="content-wrap">
                            <hr>
                            <center>
                
                                <button class='btn btn-info'  data-toggle="modal" data-target="#modalmanajemenuser" onclick=''><i class='fa fa-plus'></i> Tambah User Baru</button>
                                <!--<button class='btn btn-info'  data-toggle="modal" data-target="#modalDetail"><i class='fa fa-plus'></i> Tambah Pemesanan</button>-->
                                <button class='btn btn-default' onclick='tb_users.ajax.reload();'><i class='fa fa-refresh'></i> Reload Table</button>

                            </center>
                            <hr>
                            <div class="table-responsive">
                                <table id="tb_users" class="table table-bordered table-hover color-table info-table">
                                    <thead>
                                        <tr>
                                            <th>Nama</th>
                                            <th>Username</th>
                                            <th>Alamat</th>
                                            <th>No. Telpon</th>
                                            <th>Keaktifan</th>
                                            <th>Jabatan</th>
                                            <th>Act</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Nama</th>
                                            <th>Username</th>
                                            <th>Alamat</th>
                                            <th>No. Telpon</th>
                                            <th>Keaktifan</th>
                                            <th>Jabatan</th>
                                            <th>Act</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                        
                        </div>
                        <!-- /content -->
                    </div>
                </div>
            </div>
        </div>


    </div> 
</div>
<div class="modal fade bd-example-modal-lg" id="modalmanajemenuser" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">Tambah User Baru</div>
            <div class="modal-content">
                <div class="col-md-12" style="padding: 10px;">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <div class="input-group">
                                <div class="input-group-addon"><i class="ti-user"></i></div>
                                <input type="text" id="nama" name="nama" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="username">Username</label>
                            <div class="input-group">
                                <div class="input-group-addon"><i class="ti-user"></i></div>
                                <input type="text" id="username" name="username" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="alamat">Alamat</label>
                            <div class="input-group">
                                <div class="input-group-addon"><i class="ti-home"></i></div>
                            <input type="text" id="alamat" name="alamat" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="nomortelepon">Nomor Telepon</label>
                            <div class="input-group">
                                <div class="input-group-addon"><i class="ti-mobile"></i></div>
                                <input type="text" id="nomortelepon" name="nomortelepon" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="jabatan">Jabatan</label>
                            <div class="input-group">
                                <div class="input-group-addon"><i class="ti-medall"></i></div>
                                <input type="text" id="jabatan" name="jabatan" class="form-control">
                                </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="keaktifan" class="control-label">Keaktifan</label>
                            <div class="input-group">
                                <div class="input-group-addon"><i class="ti-dashboard"></i></div>
                                <select id="keaktifan" name="keaktifan" class="form-control">
                                    <option value="1">Aktif</option>
                                    <option value="0">Tidak Aktif</option>
                                </select>
                            </div>
                        </div> 
                    </div>                      
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-danger btn-md"><a href="<?php echo base_url(); ?>Profiluser"><i class="fa-fa-close"></i> Batal </button>
                <button class="btn btn-success btn-md"><i class="fa-fa-save"></i> Simpan </button>
            </div>
        </div>
        </div>
    </div>
</div>
<?php $this->load->view('template/footer'); ?>

<script src="<?php echo base_url(); ?>assets/plugins/bower_components/datatables/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('public'); ?>/jquery.form.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets'); ?>/plugins/jquery-notific8/jquery.notific8.min.js"></script> 
<script src="<?php echo base_url(); ?>assets/plugins/bower_components/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/bower_components/sweetalert/sweetalert.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/bower_components/sweetalert/jquery.sweet-alert.custom.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets'); ?>/plugins/bootbox/bootbox.min.js"></script>

<script src="<?php echo base_url('assets'); ?>/plugins/bower_components/custom-select/custom-select.min.js" type="text/javascript"></script>
<script src="<?php echo base_url('assets'); ?>/plugins/bower_components/bootstrap-select/bootstrap-select.min.js" type="text/javascript"></script>

    <script src="<?php echo base_url('assets'); ?>/js/cbpFWTabs.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets'); ?>/plugins/bower_components/multiselect/js/jquery.multi-select.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        tb_users = $('#tb_users').DataTable({
            "columnDefs": [{
                
            }],
             "ajax": {
                "url": "<?php echo base_url('Profiluser/ajaxTable');?>",
                "type": "POST"
            },
            "serverSide": true, //Feature control DataTables' server-side processing mode.
            "processing": true,

            "scrollCollapse": true,
            
        });
    });

    $("#bt-users").click(function(){
        tb_users.ajax.reload()
        
    });
</script>