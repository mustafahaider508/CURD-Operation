error_reporting(1);
	
	if(isset($_POST["submit"]))
	{
  
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
		
			//  $sql = "insert into website(pic,skunumber,itemname,Desp,Order_place,Cost,Labour,Delievery,Retail,Pakistan_shipping,Overseas_shipping,Bridal_Request) values('$destfile', '$s_sku', '$s_itemname', '$s_description', '$s_oderplace', '$s_cost', '$s_labour', '$s_delivery', '$s_retail', '$s_pakistanshipping', '$s_overseasshipping', '$s_bridalrequest')";
      
    $sql = "UPDATE website SET pic='$destfile',skunumber='$s_sku',itemname='$s_itemname',Desp='$s_description',Order_place='$s_oderplace',Cost='$s_cost',Labour='$s_labour',Delievery='$s_delivery',Retail='$s_retail',Pakistan_shipping'$s_pakistanshipping',Overseas_shipping='$s_overseasshipping',Bridal_Request='$s_bridalrequest' WHERE id={$_REQUEST['id']}";
			if(mysqli_query($conn,$sql)){
        echo "<script> alert('Data Update successfully') </script>";
    } else {
      echo "<script> alert(' failed, please try again.') </script>";
    }
		}
		
		
	}
   


?>
