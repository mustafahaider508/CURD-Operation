<?php 
 
 error_reporting(1);

if(isset($_REQUEST['update'])) {
  if(($_FILES['s_img'] == "") || ($_REQUEST['s_sku'] == "")  || ($_REQUEST['s_itemname'] == "") ||($_REQUEST['s_description'] == "") ||
  ($_REQUEST['s_orderplace'] == "") || ($_REQUEST['s_cost'] == "") || ($_REQUEST['s_labour'] == "") || ($_REQUEST['s_delivery'] == "") ||
  ($_REQUEST['s_retail'] == "") || ($_REQUEST['s_pakistanshipping'] == "") || ($_REQUEST['s_overseasshipping'] == "") || 
  ($_REQUEST['s_bridalrequest'] == "")){
    echo"<small>Fill ALL Fields..</small><hr>";
  }
}
  else {
    
		$file = $_FILES['s_img'];
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

    $filename = $file['name'];
		$filepath = $file['tmp_name'];
		$fileerror = $file['error'];
	 
		if($fileerror == 0){
		   $destfile = 'upload/'.$filename;
		   // echo "$destfile";
		   move_uploaded_file( $filepath, $destfile);
    
    $sql = "UPDATE website SET pic='$destfile',skunumber='$s_sku',itemname='$s_itemname',Desp='$s_description',Order_place='$s_oderplace',Cost='$s_cost',Labour='$s_labour',Delievery='$s_delivery',Retail='$s_retail',Pakistan_shipping'$s_pakistanshipping',Overseas_shipping='$s_overseasshipping',Bridal_Request='$s_bridalrequest' WHERE id={$_REQUEST['id']}";
		if(mysqli_query($conn,$sql)){
      echo "<script> alert('Data Update successfully') </script>";
  } else {
    echo "<script> alert(' failed, please try again.') </script>";
  }
  }
}

?>
<!DOCTYPE html>
<html lang="en">
    
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.3/css/bootstrap.min.css" integrity="sha384-MIwDKRSSImVFAZCVLtU0LMDdON6KVCrZHyVQQj6e8wIEJkW4tvwqXrbMIya1vriY" crossorigin="anonymous">
	<meta name="viewport" content="width=device-width, initial-scale=1">
     <!-- font awesome -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
    body{
      
        background-color:#fdfffc;
    }
        h1{
            text-align:center;
            text-transform:uppercase;
            color:#3d5a80;
            margin:20px;
       
        }
        
        .table.table-bordered{
            border-collapse: collapse;
            margin: 0px;
            font-size:0.9em;
            min-width: 400px;
           

        }
        .table.table-bordered thread tr,th{
            background-color:#2c5364;
            color:white;
            text-align: left;
            font-weight: bold;
            text-transform:uppercase;
           
            
        }
        tr:hover {background-color:#f5f5f5;}
        .table.table-bordered th,
        .table.table-bordered td {
            padding:8px 3px;
            text-align: center;
            font-weight:bold;
          
        
            
           
            
        }
       
        .btn{
           
            margin:18px;
        }
        

            
    
    </style>

</head>
<body>

  <center>
    <h1 >Products Details</h1>
<form class="form-inline" action="fetch.php" method="post">
<input class="form-control mr-sm-2" type="text" name="search" placeholder="Search using Sku.." required>
<button class="btn btn-outline-primary my-2 my-sm-0" type="submit" name="submit" value="Search">Search</button>
</form>
</center>
    <!-- <div class="col-md-12 mb-3">
                <div class="form-group">
             <input type="text" name="" class="form-control" id="myInput" placeholder="Search.." onkeyup="searchFun()">
             </div>
                        </div> -->


 <div class="container-fluid">           
  <table class="table table-bordered" id="myTable">
   
  <thread>
         <tr>
             <th>Id</th>
             <th>pic</th>
             <th>skuNumber</th>
             <th>ItemName</th>
             <th>Description</th>
             <th>order_place</th>
             <th>cost</th>
             <th>labour</th>
             <th>Delivery</th>
             <th>Retail</th>
             <th>Pak_Shipping</th>
             <th>Overseas_Shipping</th>
             <th>Bridal_Request</th>
             <th>Operations</th>
</tr>
</thead>

 <tbody>
     <?php 
      include 'dbcon.php';
      $selectquery = "select * from website";
      $query = mysqli_query($conn,$selectquery);
     // $result = mysqli_fetch_array($query);

        while($row = mysqli_fetch_assoc($query)){
            echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
           echo "<td><img src=" . $row["pic"] . "width='100' height='50'></td>";
            echo "<td>" . $row["skunumber"] . "</td>";
            echo "<td>" . $row["itemname"] . "</td>";
            echo "<td>" . $row["Desp"] . "</td>";
            echo "<td>" . $row["Order_place"] . "</td>";
            echo "<td>" . $row["Cost"] . "</td>";
            echo "<td>" . $row["Labour"] . "</td>";
            echo "<td>" . $row["Delievery"] . "</td>";
            echo "<td>" . $row["Retail"] . "</td>";
            echo "<td>" . $row["Pakistan_shipping"] . "</td>";
            echo "<td>" . $row["Overseas_shipping"] . "</td>";
            echo "<td>" . $row["Bridal_Request"] . "</td>";
            echo '<td> <form action="" method="POST"><input type="hidden" name="id" value=' . $row["id"] .'>
            <input type="submit" class="btn btn-sm btn-danger" name="submit" value="Delete"></form></td>';
            echo "</tr>";
          }
      ?>
      </tbody>
      </table>
            <!-- <td> <form action="" method="POST"><input type="hidden" name="id" value=' '>
                      <input type="submit" class="btn btn-sm btn-danger" name="edit" value="Delete"></form></td>';
            
            </tr>
            <?php 
      
      ?>   -->
 </tbody>
</table>
 <a href="index.php" class="btn btn-outline-primary">Go Back</a>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js" integrity="sha384-THPy051/pYDQGanwU6poAc/hOdQxjnOEXzbT+OuUAFqNqFjL+4IGLBgCJC3ZOShY" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js" integrity="sha384-Plbmg8JY28KFelvJVai01l8WyZzrYWG825m+cZ0eDDS1f7d/js6ikvy1+X+guPIB" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.3/js/bootstrap.min.js" integrity="sha384-ux8v3A6CPtOTqOzMKiuo3d/DomGaaClxFYdCu2HPMBEkf6x2xiDyJ7gkXU0MWwaD" crossorigin="anonymous"></script>
		
</body>
<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});
</script>
</html>