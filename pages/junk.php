
            <div id="mymodal" class="modal fade" role="dialog">
              <div class="modal-dialog">
              <div class="modal-content">
              <div class="modal-header">
              <h4 class="modal-title">Edit Staff Details </h4>
            </div>
            <div class="modal-body">
              <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title"></h3>
           </div>
           <div class="box-body">
             <form method="post"action="">
             <div class="form-group ">
                <label>Surname Name:</label>
                  <input type="text" name="staff_surname" class="form-control" placeholder="Adeoye">
              </div>
              <br/>

              <div class="form-group">
                  <label>Other Name:</label>
                  <input type="text" name="staff_othername" class="form-control" placeholder="Raphael Olamide">
              </div>
              <br/>

              <div class="form-group">
                <label>Gender</label>
                <select class="form-control select2" name="staff_gender" style="width: 100%;">
                  <option selected="selected">Select</option>
                  <option>Male</option>
                  <option>Female</option>
                </select>
              </div>
              <br/>

              <div class="form-group">
                <label>Date Of Birth:</label>
                <input type="date" name="staff_dob" class="form-control">
              </div>
              <br/>

              <div class="input-group">
                <div class="input-group-addon">
                <label>Phone</label><i class="glyphicon glyphicon-phone"></i>
                </div>
                <input type="text" class="form-control" name="staff_phone_number" data-inputmask='"mask": "(9999) 999-9999"' data-mask>
              </div>
              <br/>

              <div class="input-group">
                <div class="input-group-addon">
                <i class="">Email @</i>
                </div>
                <input type="email" class="form-control" name="staff_email" id="exampleInputEmail1" placeholder="someone@yahoo.com">
              </div>
              <br/>

              <div class="form-group">
                <label>Nationality:</label>
                <select class="form-control select2" name="staff_nationality" style="width: 100%;">
                  <option selected="selected">Select</option>
                  <?php foreach ($country as $key => $value):
                    echo '<option value="'.$key.'">'.$value.'</option>'; //close your tags!!
                    endforeach;
                    ?>
                </select>
              </div>
              <br/>

              <div class="form-group">
                <label>State of Origin</label>
                <select class="form-control select2" name="staff_state" style="width: 100%;">
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
               <textarea class="form-control" name="staff_address" rows="3" placeholder="Enter ..."></textarea>
          </div>
            <br/>

            <div class="form-group">
                <label>Highest Education Qualification:</label>
                <input type="text" name="highest_qualification" class="form-control" placeholder="Raphael Olamide">
            </div>
            <br/>

              <div class="form-group">
                <label>Staff Employment Type</label>
                <select class="form-control select2" name="staff_employment_type" style="width: 100%;">
                  <option selected="selected">Select</option>
                </select>
            </div>
            <br/>

              <div class="form-group">
                <label>Staff Department</label>
                <select class="form-control select2" name="staff_dept" style="width: 100%;">
                  <option selected="selected">Select</option>
                </select>
            </div>
            <br/>

              <div class="form-group">
                <label>Staff Level</label>
                <select class="form-control select2" name="staff_level" style="width: 100%;">
                  <option selected="selected">Select</option>
                </select>
            </div>
            <br/>

            <div class="form-group">
              <div class="form-group">
                <label>Staff Status</label>
                <select class="form-control select2" name="staff_status" style="width: 100%;">
                  <option selected="selected">Select</option>
                </select>
            </div>
            <br/>

            <div class="form-group">
                 <label for="exampleInputFile">Picture</label>
                 <input type="file" name="staff_image" id="exampleInputFile">
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
    </div>