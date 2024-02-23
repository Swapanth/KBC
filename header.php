
<!DOCTYPE html>
<html >
	<head>
<style>
  

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
    margin:  auto;
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
    max-width: 1200px; /* Adjust the value based on your desired width */
    margin-bottom:800px ;
	margin-left: 20px;
}
/* Add additional styles as needed fror your design */
.d-flex
	{
      background-color: rebeccapurple ;
	  color :whitesmoke
    }
	.header{
      background-color: rebeccapurple ;
    }

	
    </style>


</head>


<body>
    <header class="header">
        <div class="logo-container">
            <a href="dashboard.php" class="logo">
                <img src="img/kbp.jpg" style="margin-top: -10px" width=55 alt="MCR WEB" />
            </a>
            <!-- <div class="d-md-none toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html"
                data-fire-event="sidebar-left-opened">
                <i class="fas fa-bars" aria-label="Toggle sidebar"></i>
            </div> -->
        </div>
<!-- 
        <div class="header-right">
            Your other header-right content here 
        </div> -->

		<!-- <div class="header-center">
    <div class="row">
        <div class="col-md-12">
            <span class="d-flex align-items-center">&nbsp;KBC NEWS</span>
            <div class="d-flex align-items-center" style="margin-right: 175px;">
                <marquee class="news-scroll" behavior="scroll" direction="left" onmouseover="this.stop();" onmouseout="this.start();">
                    <a href="#" style="color: whitesmoke;">Kaun Banega Codepathi Welcomes You</a>
                    <span class="dot"></span>
                    <a href="#" style="color: whitesmoke;">Come On Go And Check Your Coding Knowledge</a>
                    <span class="dot"></span>
                    <a href="#" style="color:whitesmoke;">Thanks For Enrolling</a>
                    <span class="name" style="color: whitesmoke;"></span>
                </marquee>
            </div>
        </div>
    </div>
</div> -->


        <!-- Your other header content here -->




		<!-- start: search & user box -->
		<div class="header-right">

		<div class="bt-primary" style="margin-right:50px; margin-top:15px">

							<a href="index.php?logout"><button class="fas fa-power-off btn-primary"></button> Logout</a>
				</div>
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