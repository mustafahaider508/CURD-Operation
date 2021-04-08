<title>Accounts</title>
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>

<center>
<h1>Accounts</h1>
<form class="form-inline" action="fetch.php" method="post">
<input class="form-control mr-sm-2" type="text" name="search" placeholder="Search using a name" required>
<button class="btn btn-outline-primary my-2 my-sm-0" type="submit" name="submit" value="Search">Search</button>
</form>
</center>
<table>
    <tr>
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
    </tr>
		
<?php

include('dbcon.php');
$sql = "SELECT * FROM website";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()){
		
		echo  "
          <tr>
		  <td><img src='img/". $row["pic"]."' style='width:128px;height:128px'></td>
            <td>" . $row["skunumber"]. "</td>
			<td>" . $row["itemname"]. "</td>
            <td>" . $row["Desp"]. "</td>
			 <td>" . $row["Order_place"]. "</td>
			  <td>" . $row["Cost"]. "</td>
			   <td>" . $row["Labour"]. "</td>
			    <td>" . $row["Delievery"]. "</td>
				 <td>" . $row["Retail"]. "</td>
				  <td>" . $row["Pakistan_shipping"]. "</td>
				   <td>" . $row["Overseas_shipping"]. "</td>
				    <td>" . $row["Bridal_Request"]. "</td>
          </tr>
          ";
		
} }  else {
    echo "0 results";
}
$conn->close();?>


</table>
