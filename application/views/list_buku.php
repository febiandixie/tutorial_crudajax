<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo $title?></title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'Assets/css/bootstrap.css'?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'Assets/css/jquery.dataTables.css'?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'Assets/css/dataTables.bootstrap4.css'?>">
</head>
<body>
<div class="container">
    <!-- Page Heading -->
    <div class="row">
        <div class="col-12">
            <div class="col-md-12">
                <h1>Ebook
                    <small>List</small>
                    <div class="float-right"><a href="javascript:void(0);" class="btn btn-primary" data-toggle="modal" data-target="#Modal_Add"><span class="fa fa-plus"></span> Add New</a></div>
                </h1>
            </div>
            
            <table class="table table-striped" id="mydata">
                <thead>
                    <tr>
                        <th>Judul</th>
                        <th>Penerbit</th>
                        <th>Halaman</th>
                        <th>link Ebook</th>
                        <th>Deskripsi</th>
                        <th style="text-align: right;">Actions</th>
                    </tr>
                </thead>
                <tbody id="show_data">
                    
                </tbody>
            </table>
        </div>
    </div>      
</div>

        <!-- MODAL ADD -->
            <form>
            <div class="modal fade" id="Modal_Add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Ebook</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Judul</label>
                            <div class="col-md-10">
                              <input type="text" name="judul" id="judul" class="form-control" placeholder="Judul">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Penerbit</label>
                            <div class="col-md-10">
                              <input type="text" name="penerbit" id="penerbit" class="form-control" placeholder="Penerbit">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Halaman</label>
                            <div class="col-md-10">
                              <input type="text" name="halaman" id="halaman" class="form-control" placeholder="Halaman">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Link Ebook</label>
                            <div class="col-md-10">
                              <input type="text" name="link_ebook" id="link_ebook" class="form-control" placeholder="Link Ebook">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Deskripsi</label>
                            <div class="col-md-10">
                              <input type="text" name="deskripsi" id="deskripsi" class="form-control" placeholder="Deskripsi">
                            </div>
                        </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" type="submit" id="btn_save" class="btn btn-primary">Save</button>
                  </div>
                </div>
              </div>
            </div>
            </form>
        <!--END MODAL ADD-->

        <!-- MODAL EDIT -->
        <form>
            <div class="modal fade" id="Modal_Edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Ebook</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Judul</label>
                            <div class="col-md-10">
                              <input type="text" name="judul_edit" id="judul_edit" class="form-control" placeholder="Judul" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Penerbit</label>
                            <div class="col-md-10">
                              <input type="text" name="penerbit_edit" id="penerbit_edit" class="form-control" placeholder="Penerbit">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Halaman</label>
                            <div class="col-md-10">
                              <input type="text" name="halaman_edit" id="halaman_edit" class="form-control" placeholder="Halaman">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Link Ebook</label>
                            <div class="col-md-10">
                              <input type="text" name="link_ebook_edit" id="link_ebook_edit" class="form-control" placeholder="Link Ebook">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Deskripsi</label>
                            <div class="col-md-10">
                              <input type="text" name="deskripsi_edit" id="deskripsi_edit" class="form-control" placeholder="Deskripsi">
                            </div>
                        </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" type="submit" id="btn_update" class="btn btn-primary">Update</button>
                  </div>
                </div>
              </div>
            </div>
            </form>
        <!--END MODAL EDIT-->

        <!--MODAL DELETE-->
         <form>
            <div class="modal fade" id="Modal_Delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete Ebook</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                       <strong>Apa kamu yakin ??</strong>
                  </div>
                  <div class="modal-footer">
                    <input type="hidden" name="judul_delete" id="judul_delete" class="form-control">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                    <button type="button" type="submit" id="btn_delete" class="btn btn-primary">Yes</button>
                  </div>
                </div>
              </div>
            </div>
            </form>
        <!--END MODAL DELETE-->

<script type="text/javascript" src="<?php echo base_url().'Assets/js/jquery-3.2.1.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'Assets/js/bootstrap.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'Assets/js/jquery.dataTables.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'Assets/js/dataTables.bootstrap4.js'?>"></script>

<script type="text/javascript">
    $(document).ready(function(){
        show_ebook();   //call function show all ebook
        
        $('#mydata').dataTable();
         
        //function show all ebook
        function show_ebook(){
            $.ajax({
                type  : 'ajax',
                url   : '<?php echo site_url('Welcome/ebook_data')?>',
                async : false,
                dataType : 'json',
                success : function(data){
                    var html = '';
                    var i;
                    for(i=0; i<data.length; i++){
                        html += '<tr>'+
                                '<td>'+data[i].judul+'</td>'+
                                '<td>'+data[i].penerbit+'</td>'+
                                '<td>'+data[i].halaman+'</td>'+
                                '<td>'+data[i].link_ebook+'</td>'+
                                '<td>'+data[i].deskripsi+'</td>'+
                                '<td style="text-align:right;">'+
                                    '<a href="javascript:void(0);" class="btn btn-info btn-sm item_edit"  data-judul="'+data[i].judul+'" data-penerbit="'+data[i].penerbit+'" data-halaman="'+data[i].halaman+'" data-link_ebook="'+data[i].link_ebook+'" data-deskripsi="'+data[i].deskripsi+'">Edit</a>'+' '+
                                    '<a href="javascript:void(0);" class="btn btn-danger btn-sm item_delete" data-judul="'+data[i].judul+'">Delete</a>'+
                                '</td>'+
                                '</tr>';
                    }
                    $('#show_data').html(html);
                }

            });
        }

        //Save ebook
        $('#btn_save').on('click',function(){
            var judul = $('#judul').val();
            var penerbit = $('#penerbit').val();
            var halaman        = $('#halaman').val();
            var link_ebook = $('#link_ebook').val();
            var deskripsi = $('#deskripsi').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('Welcome/save')?>",
                dataType : "JSON",
                data : {judul:judul , penerbit:penerbit, halaman:halaman,link_ebook:link_ebook, deskripsi,deskripsi},
                success: function(data){
                    $('[name="judul"]').val("");
                    $('[name="penerbit"]').val("");
                    $('[name="halaman"]').val("");
                    $('[name="link_ebook"]').val("");
                    $('[name="deskripsi"]').val("");
                    $('#Modal_Add').modal('hide');
                    show_ebook();
                }
            });
            return false;
        });

        //get data for update record
        $('#show_data').on('click','.item_edit',function(){
            var judul = $(this).data('judul');
            var penerbit = $(this).data('penerbit');
            var halaman        = $(this).data('halaman');
            var link_ebook        = $(this).data('link_ebook');
            var deskripsi        = $(this).data('deskripsi');
            
            $('#Modal_Edit').modal('show');
            $('[name="judul_edit"]').val(judul);
            $('[name="penerbit_edit"]').val(penerbit);
            $('[name="halaman_edit"]').val(halaman);
            $('[name="link_ebook_edit"]').val(link_ebook);
            $('[name="deskripsi_edit"]').val(deskripsi);
        });

        //update record to database
         $('#btn_update').on('click',function(){
            var judul = $('#judul_edit').val();
            var penerbit = $('#penerbit_edit').val();
            var halaman        = $('#halaman_edit').val();
            var link_ebook        = $('#link_ebook_edit').val();
            var deskripsi        = $('#deskripsi_edit').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('Welcome/update')?>",
                dataType : "JSON",
                data : {judul:judul , penerbit:penerbit, halaman:halaman, link_ebook:link_ebook, deskripsi,deskripsi},
                success: function(data){
                    $('[name="judul_edit"]').val("");
                    $('[name="penerbit_edit"]').val("");
                    $('[name="halaman_edit"]').val("");
                    $('[name="link_ebook_edit"]').val("");
                    $('[name="deskripsi_edit"]').val("");
                    $('#Modal_Edit').modal('hide');
                    show_ebook();
                }
            });
            return false;
        });

        //get data for delete record
        $('#show_data').on('click','.item_delete',function(){
            var judul = $(this).data('judul');
            
            $('#Modal_Delete').modal('show');
            $('[name="judul_delete"]').val(judul);
        });

        //delete record to database
         $('#btn_delete').on('click',function(){
            var judul = $('#judul_delete').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('Welcome/delete')?>",
                dataType : "JSON",
                data : {judul:judul},
                success: function(data){
                    $('[name="judul_delete"]').val("");
                    $('#Modal_Delete').modal('hide');
                    show_ebook();
                }
            });
            return false;
        });

    });

</script>
</body>
<footer class="text-center">
    <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <p>Copyright © Febian Dixie 2018. All rights reserved.</p>
          </div>
      </div>
    </div>
</footer>
</html>