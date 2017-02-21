<?php
include '../header.php';
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Manage Customer
        <small> Type</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Customer</a></li>
        <li class="active">Manage Type </li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title"></h3>
            </div>
            <!-- /.box-header -->
            <div class="nav nav-tabs-custom">
              <ul class="nav nav-tabs">
                  <li class="active"><a data-toggle="tab" href="#all">All</a></li>
                  <li><a data-toggle="tab" href="#add">Add New</a></li>
              </ul>
            </div>
            <div class="box-body">
            <div class="tab-content">
            <div id="all" class="tab-pane fade in active">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Customer Type Name</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <?php
                    $sql = $pdo->prepare("SELECT * FROM customer_type");
                    $sql->execute();
                    while($row = $sql->fetch(PDO::FETCH_ASSOC)){
                        ?>
                  <td><?php echo $row['customer_type_name'];?></td>
                  <td><a href="#mymodal?id=<?php echo $row['customer_type_id']; ?>" class="btn-form-modal btn btn-warning glyphicon glyphicon-pencil" data-toggle="modal" data-target="#mymodal"></a>
                    <a href= "" class="btn-form btn btn-danger glyphicon glyphicon-trash"></a></td>
                </tr>
                    <?php }?>
              </table>
            </div>

          <div id="add" class="tab-pane fade">
            <form method="POST" action="add_customer_type">
              <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title"></h3>
                </div>
           <div class="box-body">
             <div class="form-group ">
                <label>Customer Type Name:</label>
                  <input type="text" name="customer_type_name" class="form-control" placeholder="Regular">
              </div>


                  <input type="submit" name="submit" class="btn btn-success"  value="Submit"   />
               </div>
                </div>
              </form>
                </div>

          </div>
              <!--/ Tab content -->
                <div id="mymodal" class="modal fade" role="dialog">

                          <div class="modal-dialog">
                          <div class="modal-content">
                          <div class="modal-header">
                          <h4 class="modal-title">Edit Customer Type </h4>
                        </div>
                        <div class="modal-body">
                          <form method="POST" action="edit_manage_type.php">
                            <div class="box box-info">
                              <div class="box-header with-border">
                                <h3 class="box-title"></h3>
                            </div>
                         <div class="box-body">
                           <div class="form-group ">
                              <label>Customer Type Name:</label>
                                <input type="text" name="customer_type" class="form-control">
                            </div>

                                <input type="submit" name="submit" class="btn btn-success"  value="Submit"   />
                                </div>
                        <div class="modal-footer">
                           <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                      </div>
                            </form>
                  </div>
          </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php
include '../footer.php';
?>
