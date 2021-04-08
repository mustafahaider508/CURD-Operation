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
                  <div>
                      <form action="index.php" method="POST" enctype="multipart/form-data">
                        

                      <div class="col-md-12 mb-3">
                          <div class="form-group">
                            <input type="file" name="s_img" class="form-control"   value="" required/>
                          </div>
                        </div>

                        <div class="col-md-12 mb-3">
                          <div class="form-group">
                            <input type="text" name="s_sku" class="form-control"  placeholder="Enter SKU NUMBER" value="" required/>
                          </div>
                        </div>

                        <div class="col-md-12 mb-3">
                          <div class="form-group">
                            <input type="text" class="form-control" name="s_itemname"  placeholder="Enter Item-Name" value="" required />
                          </div>
                        </div>

                        <div class="col-md-12 mb-3">
                          <div class="form-group">
                            <textarea class="form-control" name="s_description" rows="3"  placeholder="Enter Discription" value="" required></textarea>
                          </div>
                        </div>

                        <div class="col-md-12 mb-3">
                          <div class="form-group">
                            <input type="text" class="form-control" name="s_orderplace" placeholder="Enter Order place" value="" required/>
                            
                          </div>
                        </div>
                        
                        <div class="col-md-12 mb-3">
                            <div class="form-group">
                              <input type="text" class="form-control" name="s_cost"  placeholder="Enter Cost" value="" required />
                            </div>
                        </div>
                        
                        <div class="col-md-12 mb-3">
                          <div class="form-group">
                            <input type="text" class="form-control" name="s_labour"  placeholder="Enter Labour" value="" required />
                          </div>
                        </div>

                        <div class="col-md-12 mb-3">
                          <div class="form-group">
                            <textarea class="form-control" name="s_delivery" rows="3"  placeholder="Enter delivery" value="" required></textarea>
                          </div>
                        </div>

                        <div class="col-md-12 mb-3">
                          <div class="form-group">
                            <input type="text" class="form-control" name="s_retail"  placeholder="Enter Retail" value="" required />
                          </div>
                        </div>

                        <div class="col-md-12 mb-3">
                          <div class="form-group">
                            <input type="text" class="form-control" name="s_pakistanshipping"  placeholder="Enter Pakistan Shipping" value="" required />
                          </div>
                        </div>

                        <div class="col-md-12 mb-3">
                          <div class="form-group">
                            <input type="text" class="form-control" name="s_overseasshipping"  placeholder="Enter Overseas Shipping" value="" required />
                          </div>
                        </div>

                        <div class="col-md-12 mb-3">
                          <div class="form-group">
                            <input type="text" class="form-control" name="s_bridalrequest"  placeholder="Bridal Request" value="" required />
                          </div>
                        </div>
                        
                        <div class="col-md-12">
                          <button type="submit"  name="submit" class="button button-a button-big button-rouded">Submit</button>
						  <a href="display.php"  class="button button-a button-big button-rouded bg-primary">Details</a>
                        </div>

						
                      </div>
            
                    </form>
                  </div>
                </div>
  

		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js" integrity="sha384-THPy051/pYDQGanwU6poAc/hOdQxjnOEXzbT+OuUAFqNqFjL+4IGLBgCJC3ZOShY" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js" integrity="sha384-Plbmg8JY28KFelvJVai01l8WyZzrYWG825m+cZ0eDDS1f7d/js6ikvy1+X+guPIB" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.3/js/bootstrap.min.js" integrity="sha384-ux8v3A6CPtOTqOzMKiuo3d/DomGaaClxFYdCu2HPMBEkf6x2xiDyJ7gkXU0MWwaD" crossorigin="anonymous"></script>
		
	</body>
</html>
<?php

include('dbcon.php');
error_reporting(1);
	
  if(isset($_POST["submit"]))
  
	{
    $id =  addslashes($_POST["Id"]);
		$file = $_FILES["s_img"];
		$s_sku = addslashes($_POST["s_sku"]);
		$s_itemname = addslashes($_POST["s_itemname"]);
		$s_description = addslashes($_POST["s_description"]);
		$s_oderplace = addslashes($_POST["s_orderplace"]);
		$s_cost = addslashes($_POST["s_cost"]);
		$s_labour = addslashes($_POST["s_labour"]);
		$s_delivery = addslashes($_POST["s_delivery"]);
		$s_retail = addslashes($_POST["s_retail"]);
		$s_pakistanshipping = addslashes($_POST["s_pakistanshipping"]);
		$s_overseasshipping = addslashes($_POST["s_overseasshipping"]);
		$s_bridalrequest = addslashes($_POST["s_bridalrequest"]);
		
		
		$filename = $file['name'];
		$filepath = $file['tmp_name'];
		$fileerror = $file['error'];
	 
		if($fileerror == 0){
		   $destfile = 'upload/'.$filename;
		   // echo "$destfile";
		   move_uploaded_file( $filepath, $destfile);
		
			$sql = "insert into website(pic,skunumber,itemname,Desp,Order_place,Cost,Labour,Delievery,Retail,Pakistan_shipping,Overseas_shipping,Bridal_Request) values('$destfile', '$s_sku', '$s_itemname', '$s_description', '$s_oderplace', '$s_cost', '$s_labour', '$s_delivery', '$s_retail', '$s_pakistanshipping', '$s_overseasshipping', '$s_bridalrequest')";
			
			if($conn->query($sql) == TRUE){
        echo "<script> alert('Data Insert successfully') </script>";
    } else {
      echo "<script> alert(' failed, please try again.') </script>";
    }
		}
		
		
	}

?>
