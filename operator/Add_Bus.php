<html>
<?php
session_start();
?>
<title>Demo|Lisenme</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css.css">
<link type="text/css" rel="stylesheet" href="style.css"/>    
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open Sans">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
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
    margin: 10px 0 10px 0;
    position:relative;
     color: black;
}

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
                                                            <a href="operator.php"><h1>Add your bus details here...</h1></a>
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
                                                                    	
                                                                    <li role="presentation"><a href="details.php">My Details</a></li>
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

  <!-- Header -->
<!--  <header class="w3-container w3-center w3-padding-48 w3-white">
      <h1 class="w3-xxxlarge"><a href="http://www.lisenme.com/"><img src="img/logon.jpg" alt="Girl Hat" style="width:20%" class="w3-padding-16"></a></h1>
    <h6>Welcome to  <span class="w3-tag">BusOn</span></h6>
    
      
  </header>-->
  
  
  <!-- Image header -->
 

  <!-- Grid -->
  <!--<div class="w3-row w3-padding w3-border">-->

    <!-- Blog entries -->
<!--    <div class="w3-col l12 s12">
    
       Blog entry 
      <div class="w3-container w3-blue w3-margin w3-padding-large " style="height:5%;">
        
          <h2 style="text-align: center";>Add Your Bus Details</h2>
          <br>
          <div class="select-boxes">
               </div>-->
<!--</div>-->
       <div class="login-page">
           <center> <div class="form">
  
    <form class="form-inline" >
        
       <label><b> Bus Name  </b></label>
        <div class="td">
            <input type="text" name = "bus_name" placeholder="Enter bus_name">
        </div>
        <label><b>Select Route ID  </b></label>
         <div class="td">
           <select name="route" id="route">
            <option value="">Select Route ID</option>
                  <?php 
                  include('dbConfig.php');
            if(empty($_GET['time'])){

                      $sql = $db->query("SELECT * FROM route");

    while ($row = mysqli_fetch_array($sql)){
    // creating temporary variable for each row
    $city1=$row["start_place"] ."-". $row["destination"];
    $city13=$row["route_id"];
    //assigning a value to each option in dropdown list
    echo "<option value=\"$city13\"> $city1 </option>";
            }}
    ?>
             </select>
              </div>
        <label><b>No Of Seats </b></label>
        <div class="td">
            <input type="number" name="seats" placeholder="Enter Total Number of Seats">
        </div>
        <label><b>Bus Number  </b></label>

        <div class ='td'>
            <input type="text" name="bus_no" placeholder="Enter Bus no">
        </div>
        <label><b>Type(Ac/Non_Ac) </b></label>
          <div class ='td'>
                  <select name="type" id="type">
            <option value="">Select Type</option>
                  <?php 
                  include('dbConfig.php');
                  $types=array("Ac","Non_Ac");                             
                      foreach ($types as $city){
    echo "<option value=\"$city\"> $city </option>";
            }
    ?>
             </select>
               </div>
        <!--<label><b>Select Time Slots </b></label>-->
        
        <div class='td'></div>
        <input type="submit" class="button" name="submit" value="Confirm" />
        <!--<input type="password" name="password" placeholder="Password" id="txtNewPassword" />-->
        </div></center>
        

     </form>
  </div>
</div>
    <?php
    include 'dbconfig.php';
    if($_GET){
        
        $bus_name=mysqli_real_escape_string($con,$_GET['bus_name']);
        //$uid= $mysqli->escape_string($uid);
        
        $bus_number=mysqli_real_escape_string($con,$_GET['bus_no']);
        $bus_route=$_GET['route'];
        $bus_seats=$_GET['seats'];
        $bus_type=$_GET['type'];
 
     
    
    if(isset($_GET['submit']) ){
          //echo $bus_route;
       if(!isset($bus_name) || trim($bus_name) == '' || !isset($bus_number) || trim($bus_number) == '' || !isset($bus_route) || trim($bus_route) == ''||!isset($bus_type) || trim($bus_type) == '' ||!isset($bus_seats) || trim($bus_seats) == ''){
           echo "<script type='text/javascript'>alert(' Enter Valid Details')</script>";
           
       }
        else{$_SESSION['bus_name'] = $bus_name;
    $_SESSION['bus_number'] = $bus_number;
    $_SESSION['bus_route'] = $bus_route;
    $_SESSION['bus_seats'] = $bus_seats;
    $_SESSION['bus_type'] = $bus_type;
    $_SESSION['int']=array();
$_SESSION['amount']=array();
$_SESSION['time1']=array();
        echo '<script>window.location="more.php"</script>';}
        
    }}
       
    
    
    
 
?>

  