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
                
                                <button class='btn btn-info' id="btn-tambah" data-toggle="modal" data-target="#modal_paket" onclick="bt_tambah()"><i class='fa fa-plus'></i> Tambah Paket</button>
                                <!--<button class='btn btn-info'  data-toggle="modal" data-target="#modalDetail"><i class='fa fa-plus'></i> Tambah Pemesanan</button>-->
                                <button class='btn btn-default' onclick='bt-paket'><i class='fa fa-refresh'></i> Reload Table</button>

                            </center>
                            <hr>
                            <div class="table-responsive">
                                <table id="tb_paket" class="table table-bordered table-hover color-table info-table">
                                    <thead>
                                        <tr>
                                            <th>Nama</th>
                                            <th>Satuan</th>
                                            <th>Jangka Waktu</th>
                                            <th>Harga</th>
                                            <th>Jumlah</th>
                                            <th>Act</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
		                                    <th>Nama</th>
                                            <th>Satuan</th>
                                            <th>Jangka Waktu</th>
                                            <th>Harga</th>
                                            <th>Jumlah</th>
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
<div id="modal_paket" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Tambah Data Menu Paket</h4> </div>
            <div class="modal-body">
                <form id="form_paket" method="POST">
                <div class="col-md-12" style="padding: 10px;">
                	<div class="col-md-6">
	                    <div class="form-group">
	                        <label for="nama-name" class="control-label">Nama Paket:</label>
	                        <div class="input-group">
	                        	<div class="input-group-addon"><i class="ti-package"></i></div>
	                        	<input type="text" class="form-control" id="nama">
	                        </div>
	                    </div>
	                </div>
	                <div class="col-md-6">
	                    <div class="form-group">
	                        <label for="satuan-text" class="control-label">Satuan:</label>
	                        <div class="input-group">
	                        	<div class="input-group-addon"><i class="ti-filter"></i></div>
	                        	<select id="satuan" name="keaktifan" class="form-control">

	                        	</select>
	                        </div>
	                    </div>
					</div>
					<div class="col-md-6">
	                    <div class="form-group">
	                        <label for="jangka-text" class="control-label">Jangka Waktu:</label>
	                        <div class="input-group">
	                        	<div class="input-group-addon"><i class="ti-time"></i></div>
	                        	<input type="text" class="form-control" id="jangka">
	                        </div>
	                    </div>
					</div>
					<div class="col-md-6">
	                    <div class="form-group">
	                        <label for="harga-text" class="control-label">Harga:</label>
	                        <div class="input-group">
	                        	<div class="input-group-addon"><i class="ti-money"></i></div>
	                        	<input type="text" class="form-control" id="harga">
	                        </div>
	                    </div>
					</div>
					<div class="col-md-6">
	                    <div class="form-group">
	                        <label for="jumlah-text" class="control-label">Jumlah:</label>
	                        <div class="input-group">
	                        	<div class="input-group-addon"><i class="ti-bar-chart"></i></div>
	                        	<input type="text" class="form-control" id="jumlah">
	                        </div>
	                    </div>
					</div>
				</div>
				</form>                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default waves-effect" id="reset_form">Refresh</button>
                <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-success waves-effect waves-light" id="btn-simpan">Save changes</button>
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
                "url": "<?php echo base_url('Transaksi/ajaxTable');?>",
                "type": "POST"
            },
            "serverSide": true, //Feature control DataTables' server-side processing mode.
            "processing": true,

            "scrollCollapse": true,
            
        });
	});

    $("#bt-transaksi").click(function(){
        tb_paket.ajax.reload()
        // alert("hai");
    });

    $("#btn-simpan").click(function(){
        status = validator();
        if (status == true){}
        else{
        	$.toast({
            heading: 'Error!',
            text: 'Kolom berwarna merah wajib diisi',
            position: 'top-right',
            loaderBg: '#ef3b3b',
            icon: 'error',
            hideAfter: 3500,
            stack: 6
        })
        }
    });

    $("#reset_form").click(function(){
        $("#form_paket")[0].reset();
        remover_error();
    });

    function validator()
    {
    	nama = document.getElementById('nama').value;
    	satuan = document.getElementById('satuan').value;
    	jangka = document.getElementById('jangka').value;
    	harga = document.getElementById('harga').value;
    	jumlah = document.getElementById('jumlah').value;

    	status = true;

    	if (nama==""){
    		status = false;
    		$("#nama").parent().parent().addClass("has-error");
    	}
    	else
    	{
    		$("#nama").parent().parent().removeClass("has-error");
    	}

    	if (satuan==""){
    		status = false;
    		$("#satuan").parent().parent().addClass("has-error");
    	}
    	else
    	{
    		$("#satuan").parent().parent().removeClass("has-error");
    	}

    	if (jangka==""){
    		status = false;
    		$("#jangka").parent().parent().addClass("has-error");
    	}
    	else
    	{
    		$("#jangka").parent().parent().removeClass("has-error");
    	}

    	if (harga==""){
    		status = false;
    		$("#harga").parent().parent().addClass("has-error");
    	}
    	else
    	{
    		$("#harga").parent().parent().removeClass("has-error");
    	}

    	if (jumlah==""){
    		status = false;
    		$("#jumlah").parent().parent().addClass("has-error");
    	}
    	else
    	{
    		$("#jumlah").parent().parent().removeClass("has-error");
    	}

    	return status;
    }


    function bt_tambah()
    {
    	$("modal-header").text("Tambah Paket");
    	remover_error();
    }

    function remover_error()
    {
    	$("#nama").parent().parent().removeClass("has-error");
    	$("#satuan").parent().parent().removeClass("has-error");
    	$("#jangka").parent().parent().removeClass("has-error");
    	$("#harga").parent().parent().removeClass("has-error");
    	$("#jumlah").parent().parent().removeClass("has-error");
    }
    
</script>