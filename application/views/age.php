<!-- <option selected disabled>Select Category</option> -->

<?php
$userid = $_POST['cat'];
$dob = new DateTime($userid);
        
$now = new DateTime();
$difference = $now->diff($dob);
$age = $difference->y;
return $age;
    

?>
                          <input type="text" id="age" name="D_o_B" class="form-control" placeholder="Enter Date of Birth" value="<?php return $age; ?>">
