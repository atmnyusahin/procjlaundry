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
	                Pilihan Paket
	            </h4>
	        </div>
	        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> 
	            <ol class="breadcrumb">
	                <li class="active">Paket</li>
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
	                            <li><a href="#" class="sticon ti-id-badge active"><span>Manajemen Paket</span></a></li>
	                        </ul>
	                    </nav>
	                    <div class="content-wrap">
	                        <hr>
                            <center>
                
                                <button class='btn btn-info'  data-toggle="modal" data-target="#modalNonResep" onclick=''><i class='fa fa-plus'></i> Tambah Satuan Harga</button>
                                <!--<button class='btn btn-info'  data-toggle="modal" data-target="#modalDetail"><i class='fa fa-plus'></i> Tambah Pemesanan</button>-->
                                <button class='btn btn-default' onclick='table_non_resep.ajax.reload();'><i class='fa fa-refresh'></i> Reload Table</button>

                            </center>
                            <hr>
                            <div class="table-responsive">
                                <table id="tb_paket" class="table table-bordered table-hover color-table info-table">
                                    <thead>
                                        <tr>
                                            <th>Nama</th>
                                            <th>Harga</th>
                                            <th>Satuan</th>
                                            <th>Jangka Waktu</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Nama</th>
                                            <th>Harga</th>
                                            <th>Satuan</th>
                                            <th>Jangka Waktu</th>
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
		tb_paket = $('#tb_paket').DataTable({
            "columnDefs": [{
                
            }],
             "ajax": {
                "url": "<?php echo base_url('Paket/ajaxTable');?>",
                "type": "POST"
            },
            "serverSide": true, //Feature control DataTables' server-side processing mode.
            "processing": true,

            "scrollCollapse": true,
            
        });
	});

    $("#bt-pelanggan").click(function(){
        tb_paket.ajax.reload()
        // alert("hai");
    });
</script>