<?php 

error_reporting(1);
include('dbcon.php');


$sql = "SELECT * FROM website WHERE id={$_REQUEST['id']}";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result);


if(isset($_REQUEST['submit'])){
//   if(($_FILES['s_img'] == "") || ($_REQUEST['s_sku'] == "")  || ($_REQUEST['s_itemname'] == "") ||($_REQUEST['s_description'] == "") ||
// //   ($_REQUEST['s_orderplace'] == "") || ($_REQUEST['s_cost'] == "") || ($_REQUEST['s_labour'] == "") || ($_REQUEST['s_delivery'] == "") ||
// //   ($_REQUEST['s_retail'] == "") || ($_REQUEST['s_pakistanshipping'] == "") || ($_REQUEST['s_overseasshipping'] == "") || 
// //   ($_REQUEST['s_bridalrequest'] == "")){
// //     echo"<small>Fill ALL Fields..</small><hr>";
// //   }
// // }
// //   else {

     $id = $_REQUEST['id'];
		// $file = $_FILES['s_img'];
		$s_sku = $_REQUEST['s_sku'];
		$s_itemname = $_REQUEST['s_itemname'];
		$s_description = $_REQUEST['s_description'];
		$s_oderplace = $_REQUEST['s_orderplace'];
		$s_cost = $_REQUEST['s_cost'];
		$s_labour = $_REQUEST['s_labour'];
		$s_delivery = $_REQUEST['s_delivery'];
		$s_retail = $_REQUEST['s_retail'];
		$s_pakistanshipping = $_REQUEST['s_pakistanshipping'];
		$s_overseasshipping = $_REQUEST['s_overseasshipping'];
        $s_bridalrequest = $_REQUEST['s_bridalrequest'];

    // $filename = $file['name'];
		// $filepath = $file['tmp_name'];
		// $fileerror = $file['error'];
	 
		// if($fileerror == 0){
		//    $destfile = 'upload/'.$filename;
		//    // echo "$destfile";
		//    move_uploaded_file( $filepath, $destfile);
    
    $sql = "UPDATE website SET skunumber='$s_sku',itemname='$s_itemname',Desp='$s_description',Order_place='$s_oderplace',Cost='$s_cost',Labour='$s_labour',Delievery='$s_delivery',Retail='$s_retail',Pakistan_shipping='$s_pakistanshipping',Overseas_shipping='$s_overseasshipping',Bridal_Request='$s_bridalrequest' WHERE id={$_REQUEST['id']}";
    $res = mysqli_query($conn,$sql);
    if($res){
      echo "<script> alert('Data Update successfully') </script>";
  } else {
    echo "<script> alert(' failed, please try again.') </script>";
  }
  
}

?>




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
   <!-- Favicons -->
   <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
   <!-- Main Stylesheet File -->
   <link href="css/style-green.css" rel="stylesheet">
    
   
</head>
<body>
   <!--/ Section Contact-Footer Star /-->
   <section class="paralax-mf footer-paralax bg-image sect-mt5 route" style="background-image: url(img/overlay-bg.jpg)">
    <div class="overlay-mf"></div>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="contact-mf">
            <div id="contact" class="box-shadow-full">
              <div class="row">
                <div class="col-md-6">
                  <div class="title-box-2">
                    <h5 class="title-left">
                     Enter Detail!
                    </h5>
                  </div>
                  
                  
 <?php

  
?>
                  <div>
                      <form action="updates.php" method="POST" enctype="multipart/form-data">
                        
<!-- 
                      <div class="col-md-12 mb-3">
                          <div class="form-group">
                            <input type="file" name="s_img" class="form-control"   value="<?php echo $r['pic'];?>"  required/>
                          </div>
                        </div> -->

                        <div class="col-md-12 mb-3">
                          <div class="form-group">
                            <input type="text" name="s_sku" class="form-control"  placeholder="Enter SKU NUMBER" value="<?php echo $row['skunumber']; ?>" required/>
                          </div>
                        </div>

                        <div class="col-md-12 mb-3">
                          <div class="form-group">
                            <input type="text" class="form-control" name="s_itemname"  placeholder="Enter Item-Name" value="<?php echo $row['itemname']; ?>" required />
                          </div>
                        </div>

                        <div class="col-md-12 mb-3">
                          <div class="form-group">
                            <input type="text" class="form-control" name="s_description" rows="3"  placeholder="Enter Discription" value="<?php echo $row['Desp']; ?>" required/>
                          </div>
                        </div>

                        <div class="col-md-12 mb-3">
                          <div class="form-group">
                            <input type="text" class="form-control" name="s_orderplace" placeholder="Enter Order place" value="<?php echo $row['Order_place']; ?>" required/>
                            
                          </div>
                        </div>
                        
                        <div class="col-md-12 mb-3">
                            <div class="form-group">
                              <input type="text" class="form-control" name="s_cost"  placeholder="Enter Cost" value="<?php echo $row['Cost']; ?>" required />
                            </div>
                        </div>
                        
                        <div class="col-md-12 mb-3">
                          <div class="form-group">
                            <input type="text" class="form-control" name="s_labour"  placeholder="Enter Labour" value="<?php echo $row['Labour']; ?>" required />
                          </div>
                        </div>

                        <div class="col-md-12 mb-3">
                          <div class="form-group">
                            <input type="text" class="form-control" name="s_delivery" rows="3"  placeholder="Enter delivery" value="<?php echo $row['Delievery']; ?>" required/>
                          </div>
                        </div>

                        <div class="col-md-12 mb-3">
                          <div class="form-group">
                            <input type="text" class="form-control" name="s_retail"  placeholder="Enter Retail" value="<?php echo $row['Retail']; ?>" required />
                          </div>
                        </div>

                        <div class="col-md-12 mb-3">
                          <div class="form-group">
                            <input type="text" class="form-control" name="s_pakistanshipping"  placeholder="Enter Pakistan Shipping" value="<?php echo $row['Pakistan_shipping']; ?>"required />
                          </div>
                        </div>

                        <div class="col-md-12 mb-3">
                          <div class="form-group">
                            <input type="text" class="form-control" name="s_overseasshipping"  placeholder="Enter Overseas Shipping" value="<?php echo $row['Overseas_shipping']; ?>" required />
                          </div>
                        </div>

                        <div class="col-md-12 mb-3">
                          <div class="form-group">
                            <input type="text" class="form-control" name="s_bridalrequest"  placeholder="Bridal Request" value="<?php echo $row['Bridal_Request']; ?>" required />
                          </div>
                        </div>

                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                        
                        <div class="col-md-12">
                          <button type="submit"  name="submit" class="button button-a button-big button-rouded">Update</button>
						  <a href="display.php"  class="button button-a button-big button-rouded bg-primary">Details</a>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>

                
 
</body>
</html>