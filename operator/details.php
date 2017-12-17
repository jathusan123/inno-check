<?php
session_start();
?>
<html>
<title>Demo|Lisenme</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css.css">
<!--<link type="text/css" rel="stylesheet" href="style.css"/>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open Sans">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">-->
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script src="jquery.min.js"></script>
     <link href="css/bootstrap.min_1.css" rel="stylesheet">
	<link href="css/responsive-slider.css" rel="stylesheet">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
        <link href="css/style_2.css" rel="stylesheet">

<style>

    h1,h2,h3,h4,h5,h6 {font-family: "Oswald"}
    body {font-family: "Open Sans"}


    .select-boxes{width: 280px;text-align: center;}
    select {
        background-color: #F5F5F5;
        border: 1px double #15a6c7;
        color: #1d93d1;
        font-family: Georgia;
        font-weight: bold;
        font-size: 14px;
        height: 39px;
        padding: 7px 8px;
        width: 250px;
        outline: none;
        margin: 10px 0 10px 0;
    }
    select option{
        font-family: Georgia;
        font-size: 14px;}
    /*h6{
        font-size: 14px;
        height: 39px;
        width: 250px;

        }*/
    input{
        font-family: Georgia;
        font-weight: bold;
        font-size: 14px;
        height: 39px;
        padding: 7px 8px;
        width: 350px;
        outline: none;
        margin: 10px 0 10px 0;}

    button{
        font-family: Georgia;
        font-weight: bold;
        font-size: 10px;
        height: 30px;
        padding: 7px 8px;
        width: 100px;
        outline: none;
        margin: 10px 0 10px 0;}
</style>
 <style>
.dropbtn {
    background-color:white;
    font-family: fantasy;
    color: black;
    padding: 16px;
    font-size: 16px;
    border: none;
    font-size:15px ;
    cursor: pointer;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: white;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: #2196F3}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover .dropbtn {
    background-color: white;
}
</style>
<body class="w3-blue">

<!-- Navigation bar with social media icons -->
<header>
		<div class="container" style="width:100%;">
			<div class="row">
				<nav class="navbar navbar-default" role="navigation">
					<div class="container-fluid">
						<div class="navbar-header">
							<div class="navbar-brand">
								<a href="index.html"><h1>Your Bookings </h1></a>
							</div>
						</div>
						<div class="menu">
							<ul class="nav nav-tabs" role="tablist">
								  <li role="presentation" class="active"><a href="operator.php">Home</a></li>
								<li role="presentation"> <div class="dropdown">
                                                                    <button class="dropbtn">Update</button>
                                                                    <div class="dropdown-content">
    <a href="bus_update.php">Update Bus</a>
    <a href="update_bus.php">Update Profile</a>
    <a href="bus_delete.php">Delete Bus</a>
  </div>
</div></li>
                                                                    <li role="presentation"><a href="book.php">Book</a></li>
                                                                    	
                                                                    <!--<li role="presentation"><a href="details.php">My Details</a></li>-->
                                                                <li role="presentation"><a href="availability.php">Availability</a></li>
                                                              
                                  
                                               
                                                                <li role="presentation"><a href="Add_Bus.php">Add Bus</a></li>
                                                                <li role="presentation"><a href="login.php"  onclick="return confirm('Are you sure to log out?');">Logout</a></li>
                                                               <li role="presentation"><a href="reomve1.php">Deactivate</a></li>
							</ul>
						</div>
					</div>			
				</nav>
			</div>
		</div>
	</header>
<div class="w3-content" style="max-width:1600px">

<!--     Header 
-->    <header class="w3-container w3-center w3-padding-48 w3-white">
    <!--<h1 class="w3-xxxlarge"><a href="http://www.lisenme.com/"><img src="img/logo_bus.png" alt="Girl Hat" style="width:10%; " class="w3-padding-16"></a></h1>-->
   <a><h1>Bookings On Your Buses </h1></a>


    </header>


    <!-- Image header -->


    <!-- Grid -->
    <div class="w3-row w3-padding w3-border">

        <!-- Blog entries -->
        <div class="w3-col l12 s12">

            <!-- Blog entry -->
            <div class="w3-container w3-white w3-margin w3-padding-large">
<?php

/**
 * Created by PhpStorm.
 * User: G2
 * Date: 04-Oct-17
 * Time: 01:22 AM
 */

if (isset($_SESSION['email'])){
    $email = $_SESSION['email'];
    //$operator_id=$_SESSION["operator_id"];
    $db = mysqli_connect("localhost", "root", 'bd13011996', "ticketbooking") or die ("Failed to connect");
    $sql1 = "SELECT * FROM bus_operator WHERE email = '$email'";
    $query=mysqli_query($db,$sql1);
    if ($query){
        $row = mysqli_fetch_row($query);
        $username=$row[1];
        $operator_id=$row[0];
    }
}
else {
    header('Location: index.php');
    die();
}

?>

<?php

if((10>2)){

    $sql="select name,ph_number,email,booking_id,date,time,arrive_place,depart_place,seat_no,payment_status,route_id,bus_id from customer natural join booking where operator_id='$operator_id'";

    $query1=mysqli_query($db,$sql);
    //$sql1="select customer_id from booking where operator_id=$operator_id)";
    //$query2=mysqli_query($db,$sql1);

if($query1){
    ?>
    <table border="2"  style= "background-color: #f2fbff; color: #285e8e; margin: 0 auto;" >
    <thead>
    <tr>
        <th>  Name   </th>
        <th>  Phone No  </th>
        <th>  e mail  </th>
        <th>  Booking ID  </th>
        <th>  Date  </th>
        <!--<th>  Time  </th>-->
        <th>  Arrive Place  </th>
        <th>  Depart Place  </th>
        <th>  Seat Number  </th>
        <th>  Payment  </th>
        <th>  Route ID  </th>
        <th>  Bus ID  </th>

    </tr>
    </thead
    <table>
    <style>
    table{
        font-size: large;
        }
    </style>

    <?php

    while($row = mysqli_fetch_row($query1)){
        ?><tr><?php
        $i=0;
        while($i<12){
            if($i!=5){
                ?><td><?php echo $row[$i]; ?></td><?php
            }

            $i++;
        }?>

        </tr>
        <?php
    }
    }

    }
    ?>
    </table>
           <style>
table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: left;
    padding: 4px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
    background-color: #50c0e9;
    color: white;
}
</style>



    
