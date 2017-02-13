<ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#all">All</a></li>
    <li><a data-toggle="tab" href="#add">Add New</a></li>
</ul>

<div class="tab-content">
    <div id="all" class="tab-pane fade in active">
         <table class="data-table table table-responsive table-borderd table-condensed">
            <thead>
                <tr>
                    <th>student SurName</th>
                    <th>student Middle Name</th>
                    <th>student Lastname</th>
                    <th>student sex</th>
                    <th> Action</th>
                </tr>
            </thead>
            <tbody>
                {foreach $students as $schstudent}
                    <tr>
                        <td>{$schstudent->student_fname}</td>
                        <td>{$schstudent->student_mname}</td>
                        <td>{$schstudent->student_sname}</td>
                          <td>{$schstudent->student_sex}</td>
                        <td>

                          <a href="{site_url("students/view/{$schstudent->student_id}")}" class="btn-form-modal btn btn-success"
                             >View</a>
                            <a href="{site_url("students/edit/{$schstudent->student_id}")}" class="btn-form-modal btn btn-warning"
                               >Edit</a>
                            <a href="{site_url("students/delete/{$schstudent->student_id}")}" class="btn-form btn btn-danger"
                              >Delete</a>
                        </td>
                    </tr>
                {/foreach}
            </tbody>
        </table>
    </div>



    <div id="add" class="tab-pane fade">
         <form method="POST">
    <div class="container col-md-12">

    <div class="form-group ">
        <label>First Name:</label>
        <input type="text" name="student_fname" class="form-control">
    </div>

    <div class="form-group">
        <label>Middle Name:</label>
        <input type="text" name="student_mname" class="form-control">
    </div>

    <div class="form-group">
        <label>Surname:</label>
        <input type="text" name="student_lname" class="form-control">
    </div>

    <div class="form-group">
        <label >Sex:</label>
        <br>

        <input type="radio" name="student_sex" value="male" >Male
        <input type="radio" name="student_sex" value="female" >Female
    </div>

    <label>Class:</label>
    <div class="form-group">
        <select name="class_id" class="form-control">
            <option value="" class="form-control">Select</option>
              {foreach $classes as $class}
                    <option value="{$class->id}">{$class->name}</option>
             {/foreach}
        </select>
    </div>

     <div class="form-group">
        <label>Status:</label>
        <select name="status_id" class="form-control">
            <option value="" class="form-control">Select</option>
              {foreach $status_options as $status_num => $title}
                    <option value="{$status_num}">{$title}</option>
             {/foreach}
        </select>
    </div>

     <div class="form-group">
        <label>Parent:</label>
        <select name="parent_id" class="form-control">
            <option value="" class="form-control">Select</option>
              {foreach $parents as $parent}
                    <option value="{$parent->id}">{$parent->getName()}</option>
             {/foreach}
        </select>
    </div>

    <div class="form-group">
        <label>Nationality:</label>
        <input type="text" name="nationality" class="form-control">
    </div>

    <div class="form-group">
        <label>State of Origin:</label>
        <select name="student_state" class="form-control">
        <option value="" class="form-control">state</option>
        {foreach $states as $state}
                    <option value="{$state}">{$state}</option>
             {/foreach}
        </select>
    </div>

    <div class="form-group">
        <label>Student LGA:</label>
        <input type="text" name="student_lga" class="form-control">
    </div>

    <div class="form-group">
        <label>Date of Birth: </label>
        <input type="date" name="student_dob" class="form-control">
    </div>

    <div class="form-group">
        <label>Birth Place:</label>
        <textarea name="birth_place" class="form-control"></textarea>
    </div>

    <div class="form-group">
        <label>Mother Tongue:</label>
        <input type="text" name="mother_tongue" class="form-control">
    </div>

    <div class="form-group">
        <label>Student Address:</label>
      <textarea name="studuent_address" class="form-control"></textarea>
    </div>

    <div class="form-group">
        <label>City:</label>
        <input type="text" name="city" class="form-control">
    </div>

    <div class="form-group">
        <label>Student Religion:</label>
        <input type="text" name="student_religion" class="form-control">
    </div>

    <div class="form-group">
        <label>Phone Number:</label>
        <input type="text" name="phone" class="form-control">
    </div>

     <div class="form-group">
        <label>Mobile Number:</label>
        <input type="text" name="mobile" class="form-control">
    </div>

     <div class="form-group">
        <label>Email:</label>
        <input type="text" name="email" class="form-control">
    </div>

    <div class="form-group">
        <label>Student Bloodgroup:</label>
        <input type="email" name="student_bloodgroup" class="form-control">
    </div>

    <div class="form-group">
          <label>Student Genotype</label>
          <input type="text" name="student_genotype" class="form-control">
      </div>

      <div class="form-group">
             <label>Image:</label>
             <input type="file" name="student_img" class="form-control">
         </div>

         <div class="form-group">
             <label>File No:</label>
             <input type="text" name="file_no" class="form-control">
         </div>

         <div class="form-group">
             <label>Boarder:</label>
             <input type="text" name="boarder" class="form-control">
         </div>

         <div class="form-group">
             <label>Admission Date:</label>
             <input type="date" name="adm_date" class="form-control">
         </div>

     <div class="form-group">
        <label>Left Notes</label>
        <input type="text" name="left_notes" class="form-control">
    </div>

     <div class="form-group">
        <label>User Id</label>
        <input type="text" name="user_id" class="form-control">
    </div>

 <div class="form-group">
        <label>Student Commmonaliment</label>
        <input type="text" name="student_commmonaliment" class="form-control">
    </div>


      <input type="submit" name="submit" class="btn btn-success"  value="Submit"   />
</form>

</div>
   </div>

<ul class="nav nav-tabs">
<li class="active"><a data-toggle="tab" href="#all">All</a></li>
<li><a data-toggle="tab" href="#add">Add New</a></li>
</ul>


<div class="tab-content">

    <div id="add" class="tab-pane fade">
    <form method="POST">
      <div class="container col-md-12">

      <div class="form-group ">
          <label>First Name:</label>
          <input type="text" name="student_fname" class="form-control">
      </div>

      <div class="form-group">
          <label>Middle Name:</label>
          <input type="text" name="student_mname" class="form-control">
      </div>

        <input type="submit" name="submit" class="btn btn-success"  value="Submit"   />
      </div>
  </form>
</div>
</div>
</div>
