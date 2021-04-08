<?php 
//   DELETE record from table
 include('dbcon.php');
 error_reporting(1);
 if(isset($_REQUEST['submit'])){
 $sql = "DELETE FROM website WHERE id= {$_REQUEST['id']}";
 if(mysqli_query($conn,$sql)){
    echo "<script> alert('Record Deleted successfully') </script>";
 }
}
?>


<title>Player - Data</title>

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
          
        
            
           
            
        }
       
        .btn{
           
            margin:18px;
        }
        

            
    
    </style>


<h1 >Products Details</h1>

<?php
include('dbcon.php');

$search_value=$_POST["search"];

      //  $sql="SELECT * from project where skunumber like '%$search_value%'";
		// $result = mysqli_query($conn,"SELECT * FROM project where skunumber like '%$search_value%'");
  $result = mysqli_query($conn,"SELECT * FROM website where skunumber like '%$search_value%'");
 echo "
	<center>
  <div class='container-fluid'>           
  <table class='table table-bordered' id='myTable'>
   
    <thread>
        <tr>
       <th>Id</th> 
      <th>pic</th>
      <th>skunumber</th>
      <th>itemname</th>
      <th>Desp</th>
	   <th>Order_place</th>
	    <th>Cost</th>
		 <th>Labour</th>
		  <th>Delievery</th>
		   <th>Retail</th>
		   <th>Pakistan_shipping</th>
		   <th>Overseas_shipping</th>
       <th>Bridal_Request</th>
       <th>Edit</th>
       <th>Delete</th>
    
    </tr>
    </thread>
      ";
    foreach($result as $row)
    {
        echo  "
        
		  <tr>
      <td> ". $row['id']." </td>
            <td><img src=' ". $row['pic']." ' width='100' height='50'> </td>
            <td> ". $row['skunumber']." </td>
            <td> ". $row['itemname']. " </td>
            <td> ". $row['Desp']. " </td>
            <td> ". $row['Order_place']. "</td>
            <td> ". $row['Cost']. " </td>
            <td> ". $row['Labour']. " </td>
            <td> ". $row['Delievery']. " </td>
            <td> ". $row['Retail']. "</td>
            <td> ". $row['Pakistan_shipping']. " </td>
            <td> ". $row['Overseas_shipping']. " </td>
            <td> ". $row['Bridal_Request']. "</td>";
            echo '<td> <form action="updates.php" method="POST"><input type="hidden" name="id" value=' . $row["id"] .'>
            <input type="submit" class="btn btn-sm btn-primary" name="edit" value="Edit" style="width:42px; font-size:8px"></form></td>';
           
            echo '<td> <form action="" method="POST"><input type="hidden" name="id" value=' . $row["id"] .'>
            <input type="submit" class="btn btn-sm btn-danger" name="submit" value="Delete" style="width:42px; font-size:8px"></form></td>';
            echo "</tr>";?>
          <?php

             
            
    }?>
	     
</table>
<a href="display.php" class="btn btn-outline-primary">Go Back</a>
<input type="submit" class="btn btn-outline-warning" id="btn" value="Print"></form>

<script>
        function fe() {
            window.print();
        }
        document.getElementById("btn").addEventListener("click",fe);
    </script>

