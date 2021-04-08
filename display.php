<?php 
//   DELETE record from table
 include('dbcon.php');
 error_reporting(1);
 if(isset($_REQUEST['submit'])){
 $sql = "DELETE FROM website WHERE id= {$_REQUEST['id']}";
 if(mysqli_query($conn,$sql)){
	 
    echo "<script> alert('Record Deleted successfully') </script>";
 }else {
    echo "<script> alert('Failed! Plz Try Again') </script>";
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
        .table.table-bordered thead tr,th{
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
             <th>Edit</th>
             <th>Delete</th>
           
</tr>
</thead>

 <tbody>
     <?php 
      include 'dbcon.php';
      $selectquery = "select * from website";
      $query = mysqli_query($conn,$selectquery);
     // $result = mysqli_fetch_array($query);
      while($result = mysqli_fetch_array($query)){
          ?>
          <tr>
            <td> <?php echo $result['id']; ?> </td>
            <td><img src="<?php echo $result['pic'];?>" width="100" height="50"> </td>
            <td> <?php echo $result['skunumber']; ?> </td>
            <td> <?php echo $result['itemname']; ?> </td>
            <td> <?php echo $result['Desp']; ?> </td>
            <td> <?php echo $result['Order_place']; ?> </td>
            <td> <?php echo $result['Cost']; ?> </td>
            <td> <?php echo $result['Labour']; ?> </td>
            <td> <?php echo $result['Delievery']; ?> </td>
            <td> <?php echo $result['Retail']; ?> </td>
            <td> <?php echo $result['Pakistan_shipping']; ?> </td>
            <td> <?php echo $result['Overseas_shipping']; ?> </td>
            <td> <?php echo $result['Bridal_Request']; ?> </td>
            <td>
            <form action="updates.php" method="POST"><input type="hidden" name="id" value='<?php echo $result['id']; ?> '>
            <input type="submit" class="btn btn-sm btn-primary" name="edit" value="Edit" style="width:42px; font-size:8px"></form></td>
           <td> <form action="" method="POST"><input type="hidden" name="id" value='<?php echo $result['id']; ?> '>
           <!-- DELETE button -->
           <input type="submit" class="btn btn-sm btn-danger" name="submit" value="Delete" style="width:42px; font-size:8px"></form></td>
           
            
        </td>
            </tr>
            <?php 
      }
      ?>  
 </tbody>
</table>
 <a href="index.php" class="btn btn-outline-primary">Go Back</a>
 <input type="submit" class="btn btn-outline-warning" id="btn" value="Print"></form>

 <script>
        function fe() {
            window.print();
        }
        document.getElementById("btn").addEventListener("click",fe);
    </script>
 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js" integrity="sha384-THPy051/pYDQGanwU6poAc/hOdQxjnOEXzbT+OuUAFqNqFjL+4IGLBgCJC3ZOShY" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js" integrity="sha384-Plbmg8JY28KFelvJVai01l8WyZzrYWG825m+cZ0eDDS1f7d/js6ikvy1+X+guPIB" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.3/js/bootstrap.min.js" integrity="sha384-ux8v3A6CPtOTqOzMKiuo3d/DomGaaClxFYdCu2HPMBEkf6x2xiDyJ7gkXU0MWwaD" crossorigin="anonymous"></script>
		
</body>

</html>