<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Product List</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.css'?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/jquery.dataTables.css'?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/dataTables.bootstrap4.css'?>">
</head>
<body>
<div class="container">
    <!-- Page Heading -->
    <div class="row">
        <div class="col-12">
            <div class="col-md-12">
                <h1>Product
                    <small>List</small>
                    <div class="float-right"><a href="javascript:void(0);" class="btn btn-primary" data-toggle="modal" data-target="#Modal_Add"><span class="fa fa-plus"></span> Add New</a></div>
                </h1>
            </div>
             
            <table class="table table-striped" id="mydata">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th style="width: 110px;">Product Name</th>
                        <th>Total</th>
                        <th>Color</th>
                        <th>Purchase Date</th>
                        <th>Condition</th>
                        <th style="width: 90;">Keeping Place</th>
                        <th style="text-align: right; width: 110px;">Actions</th>
                    </tr>
                </thead>
                <tbody id="show_data">
                     
                </tbody>
            </table>

            <h1>Archive Items</h1>
            <table class="table table-striped" id="show_archive_data">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Product Name</th>
                        <th style="text-align: right;">Action</th>
                    </tr>
                </thead>
                <tbody id="show_archive_data2">
                    
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
                    <h5 class="modal-title" id="exampleModalLabel">Add New Product</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Product Name</label>
                            <div class="col-md-10">
                              <input type="text" name="product_name" id="product_name" class="form-control" placeholder="Product Name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Total</label>
                            <div class="col-md-10">
                              <input type="text" name="total" id="total" class="form-control" placeholder="Total">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Color</label>
                            <div class="col-md-10">
                              <input type="text" name="color" id="color" class="form-control" placeholder="Color">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Purchasing Date</label>
                            <div class="col-md-10">
                              <input type="date" name="purchase_date" id="purchase_date" class="form-control" placeholder="Date" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Product Condition</label>
                            <div class="col-md-10">
                              <input type="text" name="product_condition" id="product_condition" class="form-control" placeholder="Product Condition">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Keeping Place</label>
                            <div class="col-md-10">
                              <input type="text" name="keeping_place" id="keeping_place" class="form-control" placeholder="Keeping Place">
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
                    <h5 class="modal-title" id="exampleModalLabel">Edit Product</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">ID</label>
                            <div class="col-md-10">
                              <input type="text" name="product_id_edit" id="product_id_edit" class="form-control" placeholder="Product ID" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Product Name</label>
                            <div class="col-md-10">
                              <input type="text" name="product_name_edit" id="product_name_edit" class="form-control" placeholder="Product Name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Total</label>
                            <div class="col-md-10">
                              <input type="text" name="total_edit" id="total_edit" class="form-control" placeholder="Total">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Color</label>
                            <div class="col-md-10">
                              <input type="text" name="color_edit" id="color_edit" class="form-control" placeholder="Color">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Purchase Date</label>
                            <div class="col-md-10">
                              <input type="date" name="purchase_date_edit" id="purchase_date_edit" class="form-control" placeholder="Date" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Product Condition</label>
                            <div class="col-md-10">
                              <input type="text" name="product_condition_edit" id="product_condition_edit" class="form-control" placeholder="Condition">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Keeping Place</label>
                            <div class="col-md-10">
                              <input type="text" name="keeping_place_edit" id="keeping_place_edit" class="form-control" placeholder="Keeping Place">
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
                    <h5 class="modal-title" id="exampleModalLabel">Delete Product</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                       <strong>Are you sure to delete this record?</strong>
                  </div>
                  <div class="modal-footer">
                    <input type="hidden" name="product_code_delete" id="product_code_delete" class="form-control">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                    <button type="button" type="submit" id="btn_delete" class="btn btn-primary">Yes</button>
                  </div>
                </div>
              </div>
            </div>
            </form>
        <!--END MODAL DELETE-->

        <!--ARCHIVE DELETE-->
         <form>
            <div class="modal fade" id="archive_delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete Product</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                       <strong>Are you sure to delete this record?</strong>
                  </div>
                  <div class="modal-footer">
                    <input type="hidden" name="product_archive_delete" id="product_archive_delete" class="form-control">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                    <button type="button" type="submit" id="btn_archive_delete" class="btn btn-primary">Yes</button>
                  </div>
                </div>
              </div>
            </div>
            </form>
        <!--END ARCHIVE DELETE-->

        <!--MODAL ARCHIVE-->
         <form>
            <div class="modal fade" id="modal_archive" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Archive Product</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                       <strong>Are you sure to archive this product?</strong>
                  </div>
                  <div class="modal-footer">
                    <input type="hidden" name="product_code_archive" id="product_code_archive" class="form-control">
                    <input type="hidden" name="product_name_archive" id="product_name_archive" class="form-control">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                    <button type="button" type="submit" id="btn_archive" class="btn btn-primary">Yes</button>
                  </div>
                </div>
              </div>
            </div>
            </form>
        <!--END MODAL ARCHIVE-->
 
<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery-3.2.1.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery.dataTables.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/js/dataTables.bootstrap4.js'?>"></script>
 
<script type="text/javascript">
    $(document).ready(function(){
        show_product(); //call function show all product
         
        $('#mydata').dataTable();
          
        //function show all product
        function show_product(){
            $.ajax({
                type  : 'ajax',
                url   : '<?php echo site_url('/product/product_data')?>',
                async : true,
                dataType : 'json',
                success : function(data){
                    var html = '';
                    var i;
                    for(i=0; i<data.length; i++){
                        html += '<tr>'+
                                '<td>'+data[i].id+'</td>'+
                                '<td style="width: 20px;">'+data[i].product_name+'</td>'+
                                '<td>'+data[i].total+'</td>'+
                                '<td>'+data[i].color+'</td>'+
                                '<td>'+data[i].purchase_date+'</td>'+
                                '<td>'+data[i].product_condition+'</td>'+
                                '<td>'+data[i].keeping_place+'</td>'+
                                '<td style="text-align:right; margin: 5px;">'+
                                    '<a href="javascript:void(0);" class="btn btn-info btn-sm item_edit" data-id="'+data[i].id+'" data-product_name="'+data[i].product_name+'" data-total="'+data[i].total+'" data-color="'+data[i].color+'" data-purchase_date="'+data[i].purchase_date+'" data-product_condition="'+data[i].product_condition+'" data-keeping_place="'+data[i].keeping_place+'">Edit</a>'+' '+
                                    '<a href="javascript:void(0);" class="btn btn-danger btn-sm item_delete" data-id="'+data[i].id+'">Delete</a>'+
                                    '<a href"javascript:void(0)" class="btn btn-primary btn-sm item_archive" data-id="'+data[i].id+'" data-product_name="'+data[i].product_name+'" >Archive</a>'
                                '</td>'+
                                '</tr>';
                    }
                    $('#show_data').html(html);
                }
 
            });
        }

        // show_product();

        var date = new Date();
        var currentDate = date.toISOString().substring(0,10);

            // console.log(currentDate);

        var purchase_date        = $('#purchase_date').val(currentDate);
 
        //Save product
        $('#btn_save').on('click',function(){
            // var product_code = $('#product_code').val();
            // var date = new Date();
            // var currentDate = date.toISOString().substring(0,10);

            // console.log(currentDate);


            var product_name = $('#product_name').val();
            var total        = $('#total').val();
            var color        = $('#color').val();
            var purchase_date        = $('#purchase_date').val();
            var product_condition        = $('#product_condition').val();
            var keeping_place        = $('#keeping_place').val();

            // console.log(purchase_date);
            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('/product/save')?>",
                dataType : "JSON",
                data : {product_name:product_name, total:total, color:color, purchase_date:purchase_date, product_condition:product_condition, keeping_place:keeping_place},
                success: function(data){
                    $('[name="product_name"]').val("");
                    $('[name="total"]').val("");
                    $('[name="color"]').val("");
                    $('[name="purchase_date"]').val("");
                    $('[name="product_condition"]').val("");
                    $('[name="keeping_place"]').val("");
                    $('#Modal_Add').modal('hide');
                    show_product();
                }
            });
            return false;
        });
 
        //get data for update record
        $('#show_data').on('click','.item_edit',function(){
            var id = $(this).data('id');
            var product_name = $(this).data('product_name');
            var total        = $(this).data('total');
            var color        = $(this).data('color');
            var purchase_date        = $(this).data('purchase_date');
            var product_condition        = $(this).data('product_condition');
            var keeping_place        = $(this).data('keeping_place');
             
            $('#Modal_Edit').modal('show');
            $('[name="product_id_edit"]').val(id);
            $('[name="product_name_edit"]').val(product_name);
            $('[name="total_edit"]').val(total);
            $('[name="color_edit"]').val(color);
            $('[name="purchase_date_edit"]').val(purchase_date);
            $('[name="product_condition_edit"]').val(product_condition);
            $('[name="keeping_place_edit"]').val(keeping_place);
        });
 
        //update record to database
         $('#btn_update').on('click',function(){
            var id = $('#product_id_edit').val();
            var product_name = $('#product_name_edit').val();
            var total        = $('#total_edit').val();
            var color        = $('#color_edit').val();
            var purchase_date        = $('#purchase_date_edit').val();
            var product_condition        = $('#product_condition_edit').val();
            var keeping_place        = $('#keeping_place_edit').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('/product/update')?>",
                dataType : "JSON",
                data : {id:id , product_name:product_name, total:total, color:color, purchase_date:purchase_date, product_condition:product_condition, keeping_place:keeping_place},
                success: function(data){
                    $('[name="product_id_edit"]').val("");
                    $('[name="product_name_edit"]').val("");
                    $('[name="total_edit"]').val("");
                    $('[name="color_edit"]').val("");
                    $('[name="purchase_date_edit"]').val("");
                    $('[name="product_condition_edit"]').val("");
                    $('[name="keeping_place_edit"]').val("");
                    $('#Modal_Edit').modal('hide');
                    show_product();
                }
            });
            return false;
        });
 
        //get data for delete record
        $('#show_data').on('click','.item_delete',function(){
            var id = $(this).data('id');
             
            $('#Modal_Delete').modal('show');
            $('[name="product_code_delete"]').val(id);
        });
 
        //delete record to database
         $('#btn_delete').on('click',function(){
            var id = $('#product_code_delete').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('product/delete')?>",
                dataType : "JSON",
                data : {id:id},
                success: function(data){
                    $('[name="product_code_delete"]').val("");
                    $('#Modal_Delete').modal('hide');
                    show_product();
                }
            });
            return false;
        });
 
    });
 
</script>

<script type="text/javascript">

    $('#show_data').on('click','.item_archive',function(){
            var id = $(this).data('id');
            var product_name = $(this).data('product_name');
            // alert(product_name);
             
            $('#modal_archive').modal('show');
            $('[name="product_code_archive"]').val(id);
            $('[name="product_name_archive"]').val(product_name);
            // alert(hello);
        });

    $('#btn_archive').on('click',function(){
            var id = $('#product_code_archive').val();
            var product_name = $('#product_name_archive').val();
            // alert(product_name);


            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('/archive/save')?>",
                dataType : "JSON",
                data : {id:id, product_name:product_name},
                success: function(data){
                    $('[name="product_code_archive"]').val("");
                    $('[name="product_name_archive"]').val("");
                    $('#modal_archive').modal('hide');
                    location.reload();
                }
            });
            return false;
    });
</script>

<script type="text/javascript">

        //get data for delete record
        $('#show_archive_data2').on('click','.delete_archive',function(){
            var id = $(this).data('id');
            // alert(id);
             
            $('#archive_delete').modal('show');
            $('[name="product_archive_delete"]').val(id);
        });
 
        //delete record to database
         $('#btn_archive_delete').on('click',function(){
            var id = $('#product_archive_delete').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('/archive/delete')?>",
                dataType : "JSON",
                data : {id:id},
                success: function(data){
                    $('[name="product_archive_delete"]').val("");
                    $('#archive_delete').modal('hide');
                    // show_product();
                    location.reload();
                }
            });
            return false;
        });

</script>

<script type="text/javascript">
    $(function() {


        show_archive(); //call function show all product
         
        $('#show_archive_data').dataTable();
          
        //function show all product
        function show_archive(){
            $.ajax({
                type  : 'ajax',
                url   : '<?php echo site_url('/archive/archive_data')?>',
                async : true,
                dataType : 'json',
                success : function(data){
                    var html = '';
                    var i;
                    for(i=0; i<data.length; i++){
                        html += '<tr>'+
                                '<td>'+data[i].id+'</td>'+
                                '<td>'+data[i].product_name+'</td>'+
                                '<td style="text-align:right; margin: 5px;">'+
                                '<a href="javascript:void(0);" class="btn btn-danger btn-sm delete_archive" data-id="'+data[i].id+'">Delete</a>'
                                '</td>'+
                                '</tr>';
                    }
                    $('#show_archive_data2').html(html);
                }
 
            });
        }


    });
</script>

</body>
</html>