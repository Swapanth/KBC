<!--
			<header class="header">
				<div class="logo-container">
						<img src="img/sponsor.png" alt="BO HOUSIE" />
					<div class="d-md-none toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
						<i class="fas fa-bars" aria-label="Toggle sidebar"></i>
					</div>
				</div>
			</header>
-->
<!-- end: header -->
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
                <img src="\KBC-PRO-main\KBC-PRO-main\KBC-PRO-main\KBC-PRO\spellbee\img\kbp.jpg" style="margin-top: -10px" width=55 alt="MCR WEB" />
            </a>
            <div class="d-md-none toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html"
                data-fire-event="sidebar-left-opened">
                <i class="fas fa-bars" aria-label="Toggle sidebar"></i>
            </div>
        </div>

        <div class="header-right">
            <!-- Your other header-right content here -->
        </div>

		<div class="header-center">
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
                    <span class="name" style="color: whitesmoke;"><?php echo $_SESSION['player_name']; ?></span>
                </marquee>
            </div>
        </div>
    </div>
</div>


        <!-- Your other header content here -->




		<!-- start: search & user box -->
		<div class="header-right">
			<span class="separator"></span>

			<!--					<ul class="notifications">
						<li>
							<a href="#" onclick='get_sgames();' class="dropdown-toggle notification-icon" data-toggle="dropdown">
								<i class="fas fa-tasks"></i>
								<span class="badge">
								<?php
								?>
								
								</span>
							</a>
			
							<div class="dropdown-menu notification-menu large">
								<div class="notification-title">
									<span class="float-right badge badge-default"><?php  //echo $sch; 
																					?></span>
									Scheduled Games
								</div>
			
								<div class="content">
									<ul id='scheduled_games' style='font-size:12px;'>
									</ul>
								</div>
								
							</div>
						</li>
						<li>
							<a href="#" class="dropdown-toggle notification-icon" data-toggle="dropdown">
								<i class="fas fa-bell"></i>
								<span class="badge">3</span>
							</a>
			
							<div class="dropdown-menu notification-menu">
								<div class="notification-title">
									<span class="float-right badge badge-default">3</span>
									Alerts
								</div>
			
								<div class="content">
									<ul>
										<li>
											<a href="#" class="clearfix">
												<div class="image">
													<i class="fas fa-thumbs-up bg-danger text-light"></i>
												</div>
												<span class="title">1 FREE Game Every Day!</span>
												<span class="message">Stay Tuned @ 7:30 PM</span>
											</a>
										</li>
										<li>
											<a href="#" class="clearfix">
												<div class="image">
													<i class="fas fa-gift bg-warning text-light"></i>
												</div>
												<span class="title">Play & Win Gifts / Points</span>
												<span class="message">Exciting Prizes / Reward Points / Vouchers</span>
											</a>
										</li>
										<li>
											<a href="#" class="clearfix">
												<div class="image">
													<i class="fas fa-user-friends bg-success text-light"></i>
												</div>
												<span class="title">Invite Friends & Earn Points</span>
												<span class="message">Get 10 points for every successful referral</span>
											</a>
										</li>
									</ul>
			
									<hr />
			
									<div class="text-right">
										<a href="#" class="view-more">View All</a>
									</div>
								</div>
							</div>
						</li>
					</ul>
-->
			<span class="separator"></span>

			<div id="userbox" class="userbox">
				<a href="#" data-toggle="dropdown">
					<div class="profile-info">
						<span class="name"><?php echo $_SESSION['player_name']; ?></span>
						<span class="role"><?php echo $_SESSION['place']; ?></span>
					</div>

					<i class="fa custom-caret"></i>
				</a>

				<div class="dropdown-menu" style="color:whitesmoke";>
					<ul class="list-unstyled mb-2">
						<li class="divider"></li>
						<li>
							<a role="menuitem" tabindex="-1" href="#"><i class="fas fa-user"></i> My Profile</a>
						</li>
						<li>
							<a role="menuitem" tabindex="-1" href="index.php?logout"><i class="fas fa-power-off"></i> Logout</a>
						</li>
					</ul>

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