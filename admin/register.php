<?php include "access_check.php"; ?>
<?php 
   include "connect.php";
   $player_cnt=mysqli_query($conn, "SELECT count(*) FROM users;"); 		
        
   $row=mysqli_fetch_row($player_cnt);
   $cnt=$row[0];

?>
<!doctype html>
<html class="sidebar-light fixed sidebar-left-collapsed">
	<head>
     <?php include "head.php"; ?>
	 <style>
	  td{
 		  color:#000000;
	    }
	 </style>
	 <link rel="stylesheet" href="vendor/pnotify/pnotify.custom.css" />
    </head>
	<body>
		<section class="body">
            <?php include "header.php"; ?>
			<div class="inner-wrapper">
			<!-- start: sidebar -->
            <?php include "sidebar.php"; ?>
				<!-- end: sidebar -->
				<section role="main" class="content-body">
					<header class="page-header">
						<h2>BO HOUSIE</h2>
					</header>

					<!-- start: page -->
					<div class='row'>
					<div class="col-xl-12">
	
					<section class="card mt-4">

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 400px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            font-weight: bold;
        }

        input[type="text"],
        select {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 3px;
            box-sizing: border-box;
        }

        button[type="submit"] {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            display: block;
            width: 100%;
            margin-top: 10px;
        }

        button[type="submit"]:hover {
            background-color: #0056b3;
        }

        .message {
            margin-top: 10px;
            padding: 10px;
            border-radius: 3px;
        }

        .success {
            background-color: #d4edda;
            color: #155724;
        }

        .error {
            background-color: #f8d7da;
            color: #721c24;
        }
    </style>

    <div class="container">
        <h2>Player Form</h2>
        <?php
        // Include database connection file
        include "connect.php";



        // Process form submission

        if (isset($_POST['submit'])) {
            // Collect form data
            $playerid = $_POST['playerid'];
            $playername = $_POST['playername'];
            $branch = $_POST['branch'];
            $year = $_POST['year'];

            // SQL query to insert data into the table
            $sql = "INSERT INTO users(pid, pin, player_name, place,year, status,points) VALUES ('$playerid', '0000', '$playername', '$branch','$year', '1','0')";

            // Execute the query
            if ($conn->query($sql) === TRUE) {
               
                echo"<script>alert('New record created successfully');</script>";
            } else {
                $message = "Error: " . $sql . "<br>" . $conn->error;
                $class = "error";
            }

            // Close database connection
            $conn->close();
        }

        ?>
        <form action=" " method="post">
            <div class="form-group">
                <label for="playerid">Player ID:</label>
                <input type="text" id="playerid" name="playerid" required>
            </div>
           
            <div class="form-group">
                <label for="playername">Player Name:</label>
                <input type="text" id="playername" name="playername" required>
            </div>
            <div class="form-group">
                <label for="branch">Branch:</label>
                <select id="branch" name="branch" required>
                    <option value="CSD">CSD</option>
                    <option value="CSE">CSE</option>
                    <option value="CSBS">CSBS</option>
                    <option value="CIC">CIC</option>
                    <option value="CSIT">CSIT</option>
                    <option value="IT">IT</option>
                    <option value="AIDS">AIDS</option>
                    <option value="AIML">AIML</option>
                    <option value="MECH">MECH</option>
                    <option value="CIVIL">CIVIL</option>
                    <option value="ECE">ECE</option>
                    <option value="EEE">EEE</option>
                </select>
            </div>
            <div class="form-group">
                <label for="year">Year:</label>
                <select id="year" name="year" required>
                    <option value="1">1st year</option>
                    <option value="2">2st year</option>
                    <option value="3">3st year</option>
                    <option value="4">4st year</option>
                   
                </select>
            </div>
            
            <button type="submit" name="submit">Submit</button>
        </form>

    </div>
<!--							<button id="sticky-error" class="mt-3 mb-3 btn btn-danger">Error</button> -->
							</section>
								

					</div>
                    </div>

				</section>
			</div>


		</section>

		<!-- Vendor -->
		<script src="vendor/jquery/jquery.js"></script>
		<script src="vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
		<script src="vendor/popper/umd/popper.min.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.js"></script>
		<script src="vendor/common/common.js"></script>
		<script src="vendor/nanoscroller/nanoscroller.js"></script>
		<script src="vendor/magnific-popup/jquery.magnific-popup.js"></script>
		<script src="vendor/jquery-placeholder/jquery-placeholder.js"></script>
		
		<!-- Specific Page Vendor -->
		<script src="vendor/jquery-ui/jquery-ui.js"></script>
		<script src="vendor/jqueryui-touch-punch/jqueryui-touch-punch.js"></script>
		<script src="vendor/jquery-appear/jquery-appear.js"></script>
		<script src="vendor/owl.carousel/owl.carousel.js"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="js/theme.js"></script>
		
		<!-- Theme Custom -->
		<!-- <script src="js/custom.js"></script> -->
		<!--<script src="js/housie.js"></script> -->
		
		<!-- Theme Initialization Files -->
		<script src="js/theme.init.js"></script>

	<script>
		
		//Change Player Status......
		function change_status(pid)
          {
			var er = "s" + pid;	 
			if (window.XMLHttpRequest)
				{// code for IE7+, Firefox, Chrome, Opera, Safari
					xmlhttp=new XMLHttpRequest();
				}
			else
				{// code for IE6, IE5
					xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
				}

			xmlhttp.onreadystatechange=function()
				{
					if (xmlhttp.readyState==1)
						{
						 document.getElementById(er).innerHTML="Updating..";
						}
					if (xmlhttp.readyState==4 && xmlhttp.status==200)
						{
						 document.getElementById(er).innerHTML=xmlhttp.responseText;
						}
				}
			xmlhttp.open("GET","change_status.php" + "?pid=" + pid, true);
			
			xmlhttp.send();
			
		}
	
		//activating & deactivating users......
		function activate(mode)
          {
						
			if (!confirm("Are you sure you want to do this?\nAll user accounts will be activated / deactivated.")) 
             {  
               exit; 
             }  

			
			if (window.XMLHttpRequest)
				{// code for IE7+, Firefox, Chrome, Opera, Safari
					xmlhttp=new XMLHttpRequest();
				}
			else
				{// code for IE6, IE5
					xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
				}

			xmlhttp.onreadystatechange=function()
				{
					if (xmlhttp.readyState==1)
						{
						 //document.getElementById(er).innerHTML="Updating..";
						}
					if (xmlhttp.readyState==4 && xmlhttp.status==200)
						{
						 alert(xmlhttp.responseText);
						 location.reload();
						}
				}
			xmlhttp.open("GET","activate.php" + "?mode=" + mode, true);
			
			xmlhttp.send();
			
		}
    </script>
	
	<script src="vendor/pnotify/pnotify.custom.js"></script>
	<br><br>
    <?php include "footer.php"; ?>
	</body>
</html>