<?php
include '../header.php';
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Manage Customer
        <small> Record</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Customer</a></li>
        <li class="active">Manage Customer </li>
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
              <form action="test_crud.php" method="post" >
           <div class="box-body">
             <div class="form-group ">
                <label>Surname Name:</label>
                  <input type="text" name="surname" class="form-control" placeholder="Adeoye">
              </div>
              <br/>
               <?php
        $k = date('Y-m-d H:i:s');
        echo $k;
            ?>
              <div class="form-group">
                  <label>Other Name:</label>
                  <input type="text" name="other_name" class="form-control" placeholder="Raphael Olamide">
              </div>
              <br/>

              <div class="form-group">
                <label>Gender</label>
                <select class="form-control select2" name="gender" style="width: 100%;">
                  <option selected="selected">Select</option>
                  <option>Male</option>
                  <option>Female</option>
                </select>
              </div>
              <br/>
            
          <div class="form-group">
             <label>Address</label>
               <textarea class="form-control" name="address" rows="3" placeholder="Enter ..."></textarea>
          </div>
            <br/>
            <div class="input-group">
              <div class="input-group-addon">
              <label>Phone</label><i class="glyphicon glyphicon-phone"></i>
              </div>
              <input type="text" class="form-control" name="phone_number" data-inputmask='"mask": "(9999) 999-9999"' data-mask>
            </div>
            <br/>

        
                    <input type="submit" name="submit" class="btn btn-success"  value="Submit"   />

               </div>
</form>

          <!--/ Tab content -->
          </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
    

<?php
include '../footer.php';
?>