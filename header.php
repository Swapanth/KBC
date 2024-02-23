<!DOCTYPE html>
<html>

<head>
	<style>
		body {
			font-family: Arial, sans-serif;
			margin: 0;
			padding: 0;
			background-color: #ddd;
			box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
		}
		.header-center {
			text-align: center;
		}

		.row {
			display: flex;
			justify-content: center;
		}

		.col-md-12 {
			width: 100%;
			height: 1px;
			box-sizing: 10px;
		}

		.breaking-news {
			padding: 10px;
		}

		.d-flex {
			display: flex;

		}

		.align-items-center {
			align-items: center;
		}

		.justify-content-between {
			justify-content: space-between;
		}


		.container {
			max-width: 1200px;
			margin: auto;
		}

		.mt-5 {
			margin-top: 5px;
		}

		.news-scroll {
			width: 100%;
			white-space: nowrap;
			overflow: hidden;
		}

		.dot {
			margin: 0 5px;
			display: inline-block;
			width: 5px;
			height: 5px;
			background-color: black;
			border-radius: 50%;
		}

		.bg-white {
			background-color: #ffffff;
			max-width: 1200px;
			/* Adjust the value based on your desired width */
			margin-bottom: 800px;
			margin-left: 20px;
		}

		/* Add additional styles as needed fror your design */
		.d-flex {
			background-color: white;
			color: whitesmoke
		}

		.header {
			background-color: #ddd;
		}
	</style>


</head>


<body>
	<header class="header" style="height: 100px;">
		<div class="logo-container">
			<a href="dashboard.php" class="logo">
				<img src="img/logo.png" style="margin-top: -10px; margin-left:20px;" width=97px; height=97px; alt="MCR WEB" />
			</a>
			
			
		</div>
		<a href="dashboard.php" class="logo">
				<img src="img/purpleline.png" style="margin-top: 3px; margin-left:910px;" width=187px; height=57px; alt="MCR WEB" />
			</a>

		

		<div class="header-center">
			<div class="row">
        <div class="col-md-12">
            <div class="d-flex align-items-center" style="margin-right: 175px;">
               
            </div>
        </div>
    </div>
		</div>


		<!-- Your other header content here -->




		<!-- start: search & user box -->
		<div class="header-right" style="margin-top: 25px; margin-left:50px;">
			

			<div id="userbox" class="userbox" style="padding: 8px; border-radius:12px;  border: 2px solid purple;">
			<a role="menuitem" tabindex="-1" href="index.php?logout" style="color: purple;"><i class="fas fa-power-off"></i> Logout</a>
		</div>
		</div>
		<!-- end: search & user box -->


	</header>


	<script>
		//GET GAMES......
		function get_sgames() {
			if (window.XMLHttpRequest) { // code for IE7+, Firefox, Chrome, Opera, Safari
				xmlhttp = new XMLHttpRequest();
			} else { // code for IE6, IE5
				xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
			}

			xmlhttp.onreadystatechange = function() {
				if (xmlhttp.readyState == 1) {
					document.getElementById("scheduled_games").innerHTML = "<div align='center'>Fetching Scheduled Games!<br><img src='img/loader.gif'></div>";
				}
				if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
					document.getElementById('scheduled_games').innerHTML = xmlhttp.responseText;
				}
			}
			xmlhttp.open("GET", "today_games.php", true);
			xmlhttp.send();
		}
	</script>
</body>

</html>