<?php include('assets/include/header.php'); ?>

<body>
  <div class="page-wrapper">

    <div class="page-content">
      <div class="row">
        <div class="col-xl-1">
        </div>
        <div class="col-6 col-xl-6 stretch-card">
          <div class="row flex-grow">
            <div class="col-md-12 stretch-card">
              <div class="card card-custom">
                <div class="card-body">
                  <h6 class="card-title">
                    <h4>Add New User:</h4>
                  </h6><br>
                    <?php echo form_open('Form/insert'); ?>
                    <div class="row">
                      <div class="col-lg-5 my-2 ">
                        <div class="form-group">
                          <label class="control-label">
                            <h5>UserName</h5>
                          </label>
                          <input type="text" name="user_name" class="form-control" placeholder="Enter user Name" value="<?php echo set_value('user_name'); ?>">
                          <?php echo form_error('user_name'); ?>
                        </div>
                      </div>
                      <div class="col-lg-5 my-2 ">
                        <div class="form-group">
                          <label class="control-label">
                            <h5>Email ID</h5>
                          </label>
                          <input type="email" name="email" class="form-control" placeholder="Enter Email-ID" value="<?php echo set_value('email'); ?>">
                          <?php echo form_error('email'); ?>
                        </div>
                      </div>

                    </div>
                    <div class="row">
                      <div class="col-lg-5 my-2 ">
                        <div class="form-group">
                          <label class="control-label">
                            <h5>Password</h5>
                          </label>
                          <input type="text" name="password" class="form-control" placeholder="Enter Password" value="<?php echo set_value('password'); ?>">
                          <?php echo form_error('password'); ?>
                        </div>
                      </div>
                      <div class="col-lg-5 my-2 ">
                        <div class="form-group">
                          <label class="control-label">
                            <h5>Re-enter Password</h5>
                          </label>
                          <input type="text" name="re-password" class="form-control" placeholder="Re-enter Password" value="<?php echo set_value('re-password'); ?>">
                          <?php echo form_error('re-password'); ?>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-lg-5 my-2 ">
                        <div class="form-group">
                          <label class="control-label">
                            <h5>Date of Birth</h5>
                          </label>
                          <input type="date" onchange="age();" id="date" name="D_o_B" class="form-control" placeholder="Enter Date of Birth" value="<?php echo set_value('D_o_B'); ?>">
                          <?php echo form_error('D_o_B'); ?>
                        </div>
                      </div>
                      <div class="col-lg-5 my-2 ">
                        <div class="form-group">
                          <label class="control-label">
                            <h5>Mobile no.</h5>
                          </label>
                          <input type="number" name="mobile_no" class="form-control" placeholder="Enter Mobile No" value="<?php echo set_value('mobile_no'); ?>">
                          <?php echo form_error('mobile_no'); ?>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-5 my-2 ">
                        <div class="form-group">
                          <label class="control-label">
                            <h5>Date of Birth</h5>
                          </label>
                          <input type="text" id="age" name="D_o_B" class="form-control" placeholder="Enter Date of Birth" value="<?php echo set_value('D_o_B'); ?>">
                          <?php echo form_error('D_o_B'); ?>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-5 my-2 ">
                        <div class="form-group">
                          <label class="control-label">
                            <h5>Address Line 1</h5>
                          </label>
                          <input type="text" name="address_1" class="form-control" placeholder="Enter address line 1 here" value="<?php echo set_value('address_1'); ?>">
                          <?php echo form_error('address_1'); ?>
                        </div>
                      </div>

                      <div class="col-lg-5 my-2 ">
                        <div class="form-group">
                          <label class="control-label">
                            <h5>Address Line 2</h5>
                          </label>
                          <input type="text" name="address_2" class="form-control" placeholder="Enter address Line 2 here" value="<?php echo set_value('address_2'); ?>">
                          <?php echo form_error('address_2'); ?>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-5 my-2 ">
                        <div class="form-group">
                          <label class="control-label">
                            <h5>City</h5>
                          </label>
                          <input type="text" name="city" class="form-control" placeholder="Enter city Name" value="<?php echo set_value('city'); ?>">
                          <?php echo form_error('city'); ?>
                        </div>
                      </div>
                      <div class="col-lg-5 my-2 ">
                        <div class="form-group">
                          <label class="control-label">
                            <h5>State</h5>
                          </label>
                          <input type="text" name="state" class="form-control" placeholder="Enter State Name" value="<?php echo set_value('state'); ?>">
                          <?php echo form_error('state'); ?>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-5 my-2 ">
                        <div class="form-group">
                          <label class="control-label">
                            <h5>Country</h5>
                          </label>
                          <input type="text" name="country" class="form-control" placeholder="Enter country" value="<?php echo set_value('country'); ?>">
                          <?php echo form_error('country'); ?>
                        </div>
                      </div>
                      <div class="col-lg-5 my-2 ">
                        <div class="form-group">
                          <label class="control-label">
                            <h5>Reason for Registration</h5>
                          </label>
                          <textarea rows="2" type="text" name="reason" class="form-control" placeholder="Enter Company Name" value="<?php echo set_value('reason'); ?>"></textarea>
                          <?php echo form_error('reason'); ?>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-5 my-2 ">
                        <div class="form-group">
                          <label class="control-label">
                            <h5>Select file</h5>
                          </label>
                          <input type="file" name="select_file" id="myDropify" class="border" />
                        </div>
                      </div>
                      <div class="col-lg-5 my-2 ">
                        <div class="form-group">
                          <label class="control-label">
                            <h5>Select Image</h5>
                          </label>
                          <input type="file" name="select_image" id="myDropify_image" class="border" />
                        </div>
                      </div>
                    </div>
                    <button class="btn btn-primary">Submit</button>
                    <a href="<?php echo base_url() . 'form'; ?>" class="btn-secondary btn">Reset</a>
                    <?php echo form_close(); ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script type="text/javascript">
     function age() {
        var category = $("#date").val();
        document.
        // alert(category); 
        $.ajax({
            type: "post",
            url: "age.php",
            data: {
                cat: category
            },
            success: function(data) {
                // alert(data); 
                $("#age").html(data);
            }
        });
    }
    </script>
   
    <?php include('assets/include/footer.php'); ?>