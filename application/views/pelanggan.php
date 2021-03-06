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
	                Pelanggan
	            </h4>
	        </div>
	        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> 
	            <ol class="breadcrumb">
	                <li class="active">Pelanggan</li>
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
	                            <li><a href="#" class="sticon ti-id-badge active"><span>Manajemen Pelanggan</span></a></li>
	                        </ul>
	                    </nav>
	                    <div class="content-wrap">
	                        <hr>
                            <center>
                
                                <button class='btn btn-info' data-toggle="modal" data-target="#modal_pelanggan" onclick="bt_tambah()"><i class='fa fa-plus'></i> Tambah Pelanggan</button>
                                <button class='btn btn-default' id='bt-pelanggan'><i class='fa fa-refresh'></i> Reload Table</button>

                            </center>
                            <hr>
                            <div class="table-responsive">
                                <table id="tb_pelanggan" class="table table-bordered table-hover color-table info-table">
                                    <thead>
                                        <tr>
                                            <th>Nama</th>
                                            <th>Alamat</th>
                                            <th>No. Telpon</th>
                                            <th>Email</th>
                                            <th>Act</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Nama</th>
                                            <th>Alamat</th>
                                            <th>No. Telpon</th>
                                            <th>Email</th>
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
<div class="modal fade bd-example-modal-lg" id="modal_pelanggan" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">Judul</div>
            <div class="modal-content">
                <form id="form_pelanggan" method="POST">
                    <div class="col-md-12" style="padding: 10px;">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="ti-user"></i></div>
                                    <input type="text" name="nama" id="nama" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="ti-home"></i></div>
                                    <input type="text" name="alamat" id="alamat" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="no_telpon">Nomor telepon</label>
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="ti-mobile"></i></div>
                                    <input type="text" name="no_telpon" id="no_telpon" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="ti-email"></i></div>
                                    <input type="text" name="email" id="email" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-default btn-md" id="reset_form"><i class="fa fa-refresh"></i> Refresh form</button>
                <button class="btn btn-danger btn-md" data-dismiss="modal"><i class="fa fa-close"></i> Batal</button>
                <button class="btn btn-success btn-md" id="btn-simpan"><i class="fa fa-save"></i> Simpan</button>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('template/footer'); ?>

<script src="<?php echo base_url(); ?>assets/plugins/bower_components/datatables/jquery.dataTables.min.js"></script>

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

var method;

	$(document).ready(function() {
		tb_pelanggan = $('#tb_pelanggan').DataTable({
            "columnDefs": [{
                
            }],
             "ajax": {
                "url": "<?php echo base_url('Pelanggan/ajaxTable');?>",
                "type": "POST"
            },
            "serverSide": true, //Feature control DataTables' server-side processing mode.
            "processing": true,

            "scrollCollapse": true,
            
        });
	});

    $("#bt-pelanggan").click(function(){
        tb_pelanggan.ajax.reload()
    });

    $("#btn-simpan").click(function(){
        status = validator();
        if (status == "true") {

            var url;
            if (method=="tambah") {
                url = "<?php echo base_url();?>Pelanggan/simpan";
            }

            else {
                url = "<?php echo base_url();?>Pelanggan/edit/"+id_edit;
            }

            $.ajax({
                url : url,
                type: "POST",
                data: $('#form_pelanggan').serialize(),
                dataType: "JSON",
                success: function(data)
                {
                    $.toast({
                        heading: 'Success!',
                        text: 'Berhasil disimpan!',
                        position: 'top-right',
                        loaderBg: '#ef3b3b',
                        icon: 'success',
                        hideAfter: 2000,
                        stack: 6
                    });
                    $("#modal_pelanggan").modal('toggle');
                    $("#form_pelanggan")[0].reset();
                    
                    tb_pelanggan.ajax.reload();
                    
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error adding / update data');

                }
            });
        }
        else{
            $.toast({
                heading: 'Error!',
                text: 'Kolom berwarna merah wajib diisi.',
                position: 'top-right',
                loaderBg: '#ef3b3b',
                icon: 'error',
                hideAfter: 2000,
                stack: 6
            });
        }
    });

    $("#reset_form").click(function(){
        $("#form_pelanggan")[0].reset();
        remover_error();
    });

    function validator()
    {
        nama = document.getElementById('nama').value;
        alamat = document.getElementById('alamat').value;
        no_telp = document.getElementById('no_telp').value;
        email = document.getElementById('email').value;

        status = "true";

        if (nama=="") {
            status = "false";
            $("#nama").parent().parent().addClass("has-error");
        }
        else
        {
            $("#nama").parent().parent().removeClass("has-error");
        }

        if (alamat=="") {
            status = "false";
            $("#alamat").parent().parent().addClass("has-error");
        }
        else
        {
            $("#alamat").parent().parent().removeClass("has-error");
        }

        if (no_telp=="") {
            status = "false";
            $("#no_telp").parent().parent().addClass("has-error");
        }
        else
        {
            $("#no_telp").parent().parent().removeClass("has-error");
        }

        if (email=="") {
            status = "false";
            $("#email").parent().parent().addClass("has-error");
        }
        else
        {
            $("#email").parent().parent().removeClass("has-error");
        }

        return status;
    }


    function bt_tambah()
    {
        $(".modal-header").text("Formulir Tambah Pelanggan");
        remover_error();
        method = "tambah";
    }

    function remover_error()
    {
        $("#nama").parent().parent().removeClass("has-error");
        $("#alamat").parent().parent().removeClass("has-error");
        $("#no_telp").parent().parent().removeClass("has-error");
        $("#email").parent().parent().removeClass("has-error");
    }


</script>