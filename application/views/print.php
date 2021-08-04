<!DOCTYPE html>
<html>

<head>
    <title>User Data</title>

</head>

<body>

    <div class="row">
        <p>UserName : <?php echo $p[0]['user_name'] ?></p>
        <p>Email : <?php echo $p[0]['email'] ?></p>
        <p>Date Of Birth : <?php echo $p[0]['D_o_B'] ?></p>
        <p>Mobile no. : <?php echo $p[0]['mobile_no'] ?></p>
        <p>Address Line 1 : <?php echo $p[0]['address_1'] ?></p>
        <p>Address Line 2 : <?php echo $p[0]['address_2'] ?></p>
        <p>City : <?php echo $p[0]['city'] ?></p>
        <p>State : <?php echo $p[0]['state'] ?></p>
        <p>Country : <?php echo $p[0]['country'] ?></p>
        <p>Reason for Registration : <?php echo $p[0]['reason'] ?></p>
        <p>File : <?php echo $p[0]['select_file'] ?></p>
    </div>
    <!-- <img src="./product_image/<?php echo $row['prod_img'];?>" class="img-fluid" style="height:100px;width:100px"> -->
</body>

</html>