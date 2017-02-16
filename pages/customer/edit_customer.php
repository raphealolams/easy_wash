  <div id="mymodal" class="modal fade" role="dialog">
      <form>
              <div class="modal-dialog">
              <div class="modal-content">
              <div class="modal-header">
              <h4 class="modal-title">Edit Customer Details </h4>
            </div>
            <div class="modal-body">
              <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title"></h3>
           </div>
           <form method="post" action="">
           <div class="box-body">
             <div class="form-group ">
                <label>Surname Name:</label>
                  <input type="text" name="surname" class="form-control" placeholder="Adeoye">
              </div>
              <br/>

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
                <label>Date Of Birth:</label>
                <input type="date" name="dob" class="form-control">
              </div>
              <br/>

              <div class="form-group">
                <label>State of Origin</label>
                <select class="form-control select2" name="state" style="width: 100%;">
                  <option selected="selected">Select</option>
                  <?php foreach ($state as $key => $value):
                    echo '<option value="'.$key.'">'.$value.'</option>'; //close your tags!!
                    endforeach;
                    ?>
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

            <div class="input-group">
              <div class="input-group-addon">
              <i class="">Email @</i>
              </div>
              <input type="email" class="form-control" name="email" id="exampleInputEmail1" placeholder="someone@yahoo.com">
            </div>
            <br/>

            <div class="form-group">
                 <label for="exampleInputFile">Picture</label>
                 <input type="file" name="image" id="exampleInputFile">
            </div>
            <br/>

            <div class="form-group">
              <label>Status</label>
              <select class="form-control select2" name="status" style="width: 100%;">
                <option selected="selected">Select</option>
                <option>New</option>
                <option>Active</option>
                <option>Inactive</option>
                <option>Passive</option>
              </select>
            </div>
            <br/>
                    <input type="submit" name="submit" class="btn btn-success"  value="Submit"   />

               </form>
              </div>
            </div>
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>