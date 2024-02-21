

<?php include "access_check.php"; ?>
<?php
$right = -1;
include "connect.php";
$sid = $_SESSION['pid'];

$nqres = mysqli_query($conn, "SELECT count(*) from responses where sid='$sid';");
$qres = mysqli_fetch_array($nqres);
$q = $qres[0] + 1;

if (isset($_GET['qid'])) {
	$qid = (int)$_GET['qid'];
	$response = strtoupper(trim($_GET['op']));

	$ans = mysqli_query($conn, "SELECT * FROM words3 WHERE level = 2 ORDER BY RAND() LIMIT 5");
	$answer = mysqli_fetch_row($ans);
	$sid = $_SESSION['pid'];
	$ranswer = strtoupper($answer[1]);
	$level = $answer[3];
	$right = 1;
	if ($level <= 3) {
		$marks = 100;
	} else if ($level <= 6) {
		$marks = 200;
	} else if ($level <= 10) {
		$marks = 300;
	}

	if ($ranswer != $response) {
		$marks = 0;
		$right = 0;
	}
	$query = "insert into responses (sid, qid, answer,marks) values ('$sid', $qid, '$response', $marks)";
	mysqli_query($conn, $query);
	
    // Check if the user has completed level 1 (5 questions)
    if ($q > 10) {
        // Redirect the user to the next level (level 2)
        header("Location: completed2.php");
        exit();
    }
}
?>


<!DOCTYPE html>
<html class="sidebar-light fixed sidebar-left-collapsed">

<head>
	<?php include "head.php"; ?>
	<style>
	 {
            background-size: 150%;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }

        /* Large screens (desktops) */
        @media (min-width: 769px) {
            body {
                background: url('https://getwallpapers.com/wallpaper/full/e/4/6/570852.jpg') center center fixed;
				
            }
        }

        /* Small screens (mobile devices) */
        @media (max-width: 768px) {
            body {
                background: url('https://getwallpapers.com/wallpaper/full/e/4/6/570852.jpg') center center fixed;
                background-size: cover;
                /* Adjust other background properties as needed for mobile view */
            }
        }

		td {
			color: #000000;
		}

		.ui-pnotify.red .ui-pnotify-container {
			background-color: #DC143C !important;
			color: #ffffff;
			border: 0px;
		}

		.ui-pnotify.blue .ui-pnotify-container {
			background-color: #0088cc !important;
			color: #ffffff;
			border: 0px;
		}

		.code {
			display: inline-block;
			overflow-wrap: break-word;
			word-wrap: break-word;
			text-align: left;
		}

		/* Add your CSS styles here */
		.card {
			margin: 20px;
			padding: 20px;
			border: 1px solid #ddd;
			border-radius: 5px;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
		}

		table {
			width: 72%;
			border-collapse: collapse;
			margin: 20px auto;
			/* Center the table horizontally */
		}

		/* Media query for mobile view */
		@media (max-width: 768px) {
			table {
				width: 100%;
				/* Make the table full width on smaller screens */
				margin: 20px 0;
				/* Remove left and right margin on smaller screens */
			}
		}


		th,td {
			border: 2px solid black;
			padding: 8px;
			text-align: left;
			-webkit-text-fill-color: black bold;
			color: whitesmoke; /* Set the text color */
    		font-weight: bold; /* Set the text weight to bold */
    		text-shadow: 1px 1px 1px black;
		}

		th {
			background-color: purple;
			color: whitesmoke;
			/* Set the text color to black */
			font-weight: bold;
			/* Increase the thickness of the text */
		}

		tr:hover {
			background-color: black;
		}

		h2 {
			text-align: center;
			margin-top: 20px;
		}

		/* Add this CSS style to remove black cursor on hover */
		.user-responses-section table {
			cursor: default;
		}

		/* Add this style if you want to change the cursor color */
		.user-responses-section table tr:hover {
			background-color: transparent;
			/* Change the background color on hover if needed */
			cursor: default;
		}
	</style>


	<!-- Include your additional styles or scripts here -->
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
					<h2 style="margin-left: 37%;">Kaun Banega Codepathi</h2>
				</header>


				<!--
<div style='z-index:99;position: absolute;' align='center'>
 <img src="img/congrats.gif" class="browse-tip" id="imgHideShow">
</div>
-->

				<?php

				if ($right == 1) {
				?>
					<div id="swinner" class="modal-block modal-header-color modal-block-primary">
						<section class="card">
							<header class="card-header">
								<div class="card-actions">
									<a href="#" class="card-action card-action-toggle" data-card-toggle></a>
									<a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
								</div>
								<h2 class="card-title">KBC ANSWER</h2>
							</header>
							<div class="card-body" style='text-align:center;'>
								<ul class="simple-bullet-list mb-3">
									<img src="img/congrats.gif">
								</ul>
								<h5><b>YOUR ANSWER:</b> <?php echo $response; ?><br> <b>RIGHT ANSWER:</b> <?php echo $ranswer; ?></h5>
							</div>
						</section>
					</div>
				<?php
				} else if ($right == 0) {
				?>

					<div id="srunner" class="modal-block modal-header-color modal-block-danger">
						<section class="card">
							<header class="card-header">
								<div class="card-actions">
									<a href="#" class="card-action card-action-toggle" data-card-toggle></a>
									<a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
								</div>
								<h2 class="card-title">KBC ANSWER</h2>
							</header>
							<div class="card-body" style='text-align:center;'>
								<ul class="simple-bullet-list mb-3">
									<img src="img/fail.gif">
								</ul>
								<h5><b>YOUR ANSWER:</b> <?php echo $response; ?><br> <b>RIGHT ANSWER:</b> <?php echo $ranswer; ?></h5>
							</div>
						</section>
					</div>

				<?php

				}

				?>

				<div id="srunner" class="modal-block modal-header-color modal-block-danger">
					<section class="card">
						<header class="card-header" style="background-color: purple;">

							<h2 class="card-title">Your Question Goes Here:</h2>
						</header>
						<div class="card-body">
							<?php

							if ($q <= 5) {
								$bl = 1;
								$be = 3;
							} else if ($q <= 10) {
								$bl = 4;
								$be = 7;
							} else {
								$bl = 8;
								$be = 10;
							}

							if ($q <= 15) {
								echo "<h4 align='center' STYLE='COLOR:RED; class='box'><B>YOUR QUESTION NO - $q</B></h4>";
								$ques = mysqli_query($conn, "SELECT * FROM words3 where qid not in (select qid from responses where sid='$sid') and level between $bl and $be ORDER BY RAND() LIMIT 1;");

								$qrow = mysqli_fetch_array($ques);
								$qid = $qrow['qid'];
								$ranswer = strtoupper($qrow['answer']);
								$question = $qrow['question'];
								$lvl = $qrow['level'];

								if ($lvl <= 3) {
									$level = "Easy";
								} else if ($lvl <= 6) {
									$level = "Moderate";
								} else if ($lvl <= 10) {
									$level = "Difficult";
								}

								$opr = array($qrow['option1'], $qrow['option2'], $qrow['option3'], $ranswer);
								shuffle($opr);

								$option1 = strtoupper($opr[0]);
								$option2 = strtoupper($opr[1]);
								$option3 = strtoupper($opr[2]);
								$option4 = strtoupper($opr[3]);

								$userResponsesQuery = "SELECT qid, answer AS response, marks FROM responses WHERE sid='$sid'";
								$userResponsesResult = mysqli_query($conn, $userResponsesQuery);

								echo "<div align='center' class='box'><h4><b>Question: </b></h4></div>";
								echo "<pre align='center' class='box' style='font-size: 18px;'>" . htmlspecialchars($question) . "</pre>";




								echo "<div align='center' class='box'><h4><b>Level 1: </b>";

								//echo "<button class='mb-1 mt-1 mr-1 btn btn-primary' onclick='spell_human($qid);'><span style='color:#000000;'><i class='fas fa-volume-up'></i> SPELL HUMAN WORD <i class='fas fa-play'></i></span></button>";

								//echo "<div id='spelling'>WRITE THE CORRECT SPELLING IN THE TEXT BOX<div class='col-8'><input type='hidden' name='qid' id='qid' value='$qid'><input type='text' class='form-control' name='answer'  id='answer'  value='' placeholder='Your Spelling Here' style='text-transform:uppercase;' autocomplete='off' REQUIRED></div><div class='col-4'><button type='submit' class='mb-1 mt-1 mr-1 btn btn-success' onclick='check_spelling();'>Submit Spelling</button></div></div>";
								echo "<div id='box'>CLICK ON THE RIGHT ANSWER</div>";



								echo "<a href='dashboard.php?qid=$qid&op=$option1'><button type='submit' class='mb-1 mt-1 mr-1 btn btn-primary' class='box'>$option1</button></a>";
								echo "<a href='dashboard.php?qid=$qid&op=$option2'><button type='submit' class='mb-1 mt-1 mr-1 btn btn-primary' class='box'>$option2</button></a>";
								echo "<a href='dashboard.php?qid=$qid&op=$option3'><button type='submit' class='mb-1 mt-1 mr-1 btn btn-primary' class='box'>$option3</button></a>";
								echo "<a href='dashboard.php?qid=$qid&op=$option4'><button type='submit' class='mb-1 mt-1 mr-1 btn btn-primary' class='box'>$option4</button></a>";

								echo "</div>";
							} else {
								echo "<h3 style='color:red;' align='center'>YOUR SPELL BEE QUIZ HAS BEEN COMPLETED!</h3>";
							}



							?>
						</div>
					</section>
				</div>
				<section class="user-responses-section">

					<h2>User Score</h2>
					<table border="5">
						<thead>
							<tr>
								<th>QID</th>
								<th>Response</th>
								<th>Marks</th>
							</tr>
						</thead>
						<tbody>
							<?php
							while ($row = mysqli_fetch_assoc($userResponsesResult)) {
								echo "<tr>";
								echo "<td>{$row['qid']}</td>";
								echo "<td>{$row['response']}</td>";
								echo "<td>{$row['marks']}</td>";
								echo "</tr>";
							}
							?>
						</tbody>
					</table>
				</section>

				<!-- start: page -->





				<!--					<div class="col-xl-2">

					<h5 class="font-weight-semibold text-dark text-uppercase mb-3 mt-3">My Stats</h5>
        			<?php

					$points_res = mysqli_query($conn, "SELECT * from users where pid='$sid';");
					$points = mysqli_fetch_array($points_res);

					?>

					</div>
-->
		</div>

	</section>
	</div>


	</section>




	<!--		<footer class="card-footer">
			<div class="row">
			<div class="col-md-12 text-right">
			<button class="btn btn-success modal-dismiss">OK</button>
			</div>
			</div>
		</footer>
-->
	</section>
	</div>

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
	<script src="js/examples/examples.modals.js"></script>
	<script src="vendor/pnotify/pnotify.custom.js"></script>

	<!-- Theme Custom -->
	<!--<script src="js/custom.js"></script>-->
	<!--<script src="js/housie.js"></script> -->

	<!-- Theme Initialization Files -->
	<script src="js/theme.init.js"></script>

