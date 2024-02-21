<?php include "access_check.php"; ?>
<?php
$right = -1;
include "connect.php";
$sid = $_SESSION['pid'];
if (!isset($_SESSION['music_played1'])) {
	echo '<script>
            var introAudio = new Audio("sounds/intro.mp3");
            introAudio.play();
          </script>';

	// Set the session variable to indicate that the music has been played
	$_SESSION['music_played1'] = true;
}
$nqres = mysqli_query($conn, "SELECT count(*) from responses1 where sid='$sid';");
$qres = mysqli_fetch_array($nqres);
$q = $qres[0];

if (isset($_GET['qid'])) {
	$qid = (int) $_GET['qid'];
	$response = strtoupper(trim($_GET['op']));

	$ans = mysqli_query($conn, "SELECT * FROM words3 where qid=$qid;");
	$answer = mysqli_fetch_row($ans);
	$sid = $_SESSION['pid'];
	$ranswer = strtoupper($answer[1]);
	$level = $answer[3];
	$right = 1;
	if ($level <= 3) {
		$marks = 100;
	}
	if ($ranswer != $response) {
		$marks = 0;
		$right = 0;
	}
	$query = "insert into responses1 (sid, qid, answer,marks) values ('$sid', $qid, '$response', $marks)";
	mysqli_query($conn, $query);
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
			color: lightblue;
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


		th,
		td {
			border: 2px solid black;
			padding: 8px;
			text-align: left;
			-webkit-text-fill-color: black bold;
			color: whitesmoke;
			/* Set the text color */
			font-weight: bold;
			/* Set the text weight to bold */
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
	<!-- Your existing PHP and HTML content goes here -->
	<!-- ... -->
</body>
<?php

if ($right == 1) {
	?>

	<script>
		var audio = new Audio("sounds/skanda.mp3");
		audio.play();
		//var audio = new Audio("sounds/claps.mp3");
		//audio.play();
	</script>

	<?php
}
if ($right == 0) {
	?>

	<script>
		var audio = new Audio("sounds/moye.mp3");
		audio.play();
	</script>

	<?php
}
?>

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
								<h5><b>YOUR ANSWER:</b>
									<?php echo $response; ?><br> <b>RIGHT ANSWER:</b>
									<?php echo $ranswer; ?>
								</h5>
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
									<h5><b>YOUR ANSWER:</b>
									<?php echo $response; ?><br> <b>RIGHT ANSWER:</b>
									<?php echo $ranswer; ?>
									</h5>
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
							if ($q < 4) {
								$q = $q + 1;
								echo "<h4 align='center' STYLE='COLOR:RED; class='box'><B>YOUR QUESTION NO - $q </B></h4>";
								$ques = mysqli_query($conn, "SELECT * FROM words3 where qid not in (select qid from responses1 where sid='$sid') AND level=2 ORDER BY RAND() LIMIT 1;");
								$qrow = mysqli_fetch_array($ques);
								$qid = $qrow['qid'];
								$ranswer = strtoupper($qrow['answer']);
								$question = $qrow['question'];
								$opr = array($qrow['option1'], $qrow['option2'], $qrow['option3'], $ranswer);
								shuffle($opr);

								$option1 = strtoupper($opr[0]);
								$option2 = strtoupper($opr[1]);
								$option3 = strtoupper($opr[2]);
								$option4 = strtoupper($opr[3]);

								$userResponsesQuery = "SELECT qid, answer AS response, marks FROM responses1 WHERE sid='$sid'";
								$userResponsesResult = mysqli_query($conn, $userResponsesQuery);

								echo "<div align='center' class='box'><h4><b>Question: </b></h4></div>";
								echo "<pre align='center' class='box' style='font-size: 18px;'>" . htmlspecialchars($question) . "</pre>";




								echo "<div align='center' class='box'><h4><b>Level 1: </b>";
								echo "<div id='box'>CLICK ON THE RIGHT ANSWER</div>";



								echo "<a href='dashboard.php?qid=$qid&op=$option1'><button type='submit' class='mb-1 mt-1 mr-1 btn btn-primary' class='box'>$option1</button></a>";
								echo "<a href='dashboard.php?qid=$qid&op=$option2'><button type='submit' class='mb-1 mt-1 mr-1 btn btn-primary' class='box'>$option2</button></a>";
								echo "<a href='dashboard.php?qid=$qid&op=$option3'><button type='submit' class='mb-1 mt-1 mr-1 btn btn-primary' class='box'>$option3</button></a>";
								echo "<a href='dashboard.php?qid=$qid&op=$option4'><button type='submit' class='mb-1 mt-1 mr-1 btn btn-primary' class='box'>$option4</button></a>";

								echo "</div><br>";
							} else {
								echo "<h3 style='color:red;' align='center'>YOUR LEVEL-1 KBC HAS BEEN COMPLETED!</h3>";
								$totalMarks = 0; // Initialize total marks variable
								$userResponsesQuery = "SELECT qid, answer AS response, marks FROM responses1 WHERE sid='$sid'";
								$userResponsesResult = mysqli_query($conn, $userResponsesQuery);
								while ($row = mysqli_fetch_assoc($userResponsesResult)) {
									$totalMarks += $row['marks']; // Accumulate marks
							
								}
								if ($totalMarks >= 300) {
									echo "<div align='center'>
					<button id='quit' style='background-color:red; color:white;  border-radius: 20px; width: 100px '>Quit Here</button>
					<button id='continue' style='color:white; background-color:green;  border-radius: 20px; width: 100px '>Continue</button>
				</div>";
								}
							}



							?>
						</div>
						<?php
						if (isset($_GET['life2'])) {

							$sq = "UPDATE users SET button2=1 WHERE pid='$sid'";
							$re = mysqli_query($conn, $sq);
						}
						?>

						<div align='center' class='box'>
							<?php
							$sql3 = "SELECT * FROM users WHERE pid='$sid'";
							$result3 = mysqli_query($conn, $sql3);
							while ($row3 = mysqli_fetch_assoc($result3)) {
								if ($row3['button1'] == 0) {
									echo "<button type='button' class='button1 mb-1 mt-1 mr-1 btn' name='life1'>Call</button>";
								}
								if ($row3['button2'] == 0) {
									echo "<form action='' method='get'>";
									echo "<button type='submit' class='mb-1 mt-1 mr-1 btn' name='life2'>Swap</button>";
									echo "</form>";

								}
								if ($row3['button3'] == 0) {
									echo "<button type='button' class='button3 mb-1 mt-1 mr-1 btn' name='life3'>50-50</button>";

								}
							}

							?>
						</div>
				</div>
			</section>
		</div>
		<section class="user-responses-section">
			<h2>Your Score Card</h2>
			<table border="5">
				<thead>
					<tr>
						<th>Question</th>
						<th>Response</th>
						<th>Marks</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$totalMarks = 0; // Initialize total marks variable
					$userResponsesQuery = "SELECT qid, answer AS response, marks FROM responses1 WHERE sid='$sid'";
					$userResponsesResult = mysqli_query($conn, $userResponsesQuery);

					$s = 0;
					while ($row = mysqli_fetch_assoc($userResponsesResult)) {
						if ($s < 5) {
							$s = $s + 1;
							echo "<tr>";
							echo "<td>{$s}</td>";
							echo "<td>{$row['response']}</td>";
							echo "<td>{$row['marks']}</td>";
							echo "</tr>";

							$totalMarks += $row['marks'];
						} // Accumulate marks
					}
					?>
					<!-- Display total marks row -->
					<tr>
						<td style="color:red" colspan="2">Total Marks:</td>
						<td style="color:red">
							<?php echo $totalMarks; ?>
						</td>
					</tr>
				</tbody>
			</table>
			<?php
			if ($s == 5) {
				$sql1 = "SELECT points FROM users WHERE pid='$sid'";
				$result1 = mysqli_query($conn, $sql1);

				// Check if the query was successful
				if ($result1) {
					$row = mysqli_fetch_assoc($result1);
					$currentPoints = $row['points'];

					// Assuming $totalMarks is a variable with some numeric value
					$newTotalPoints = $currentPoints + $totalMarks;

					// Update the points in the database
					$sql2 = "UPDATE users SET points=$newTotalPoints WHERE pid='$sid'";
					$result2 = mysqli_query($conn, $sql2);
				}
			}
			?>
		</section>



		</div>

		</div>

	</section>
	</div>


	</section>
	</section>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
	<script>
		$(document).ready(function () {
			$(".button1").click(function () {
				$(this).prop("disabled", true);

				var sid = <?php echo "$sid" ?>;


				$.ajax({
					type: "GET",
					url: "lifeline1.php",  // Replace with your PHP script URL
					data: { id: sid },
					success: function (response) {
						$("#statusContainer").html(response);
					}
				});
			});
		});
		$(document).ready(function () {
    $(".button3").click(function () {
        var sid = <?php echo "$sid" ?>;

        $.ajax({
            type: "GET",
            url: "lifeline3.php",  // Replace with your PHP script URL
            data: { id: sid },
            success: function (response) {
                // Handle the AJAX response
                $("#statusContainer").html(response);

                // Disable the button to prevent multiple clicks
                $(".button3").prop("disabled", true);

                // Call the function to remove two random wrong options
                removeWrongOptions();
            }
        });
    });

    // Function to remove two random wrong options
    function removeWrongOptions() {
        var options = document.querySelectorAll('.box .btn-primary');
        var removedIndices = [];
        while (removedIndices.length < 2) {
            var randIndex = Math.floor(Math.random() * options.length);
            if (!removedIndices.includes(randIndex) && options[randIndex].textContent.toUpperCase() !== '<?php echo strtoupper($ranswer); ?>') {
                removedIndices.push(randIndex);
            }
        }
        removedIndices.forEach(function(index) {
            options[index].style.display = 'none';
        });
    }
});


		document.getElementById('quit').addEventListener('click', function () {
			window.location.href = 'index.php';
		});

		document.getElementById('continue').addEventListener('click', function () {
			window.location.href = 'level2.php';
		});

	</script>


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



	<script>
		function spell_sound(id) {
			var audio = new Audio("sounds/machine/" + id + ".mp3");
			audio.play();
		}
	</script>

	<script>
		function spell_human(id) {
			var audio = new Audio("sounds/human/" + id + ".mp3");
			audio.play();
		}
	</script>


	<script>
		var source = new EventSource("leaderboard3.php");
		source.onmessage = function (event) {
			document.getElementById('lboard').innerHTML = event.data;
		};
	</script>


	<script>
		var source = new EventSource("login_alert.php");
		source.onmessage = function (event) {
			if (event.data != "0") {
				new PNotify({
					title: 'New Login!',
					text: event.data,
					addclass: 'red notification-primary',
					icon: 'fab fa-twitter',
					delay: 1000
				});
			}
		}
	</script>

	<script>
		/*     function post_answer(qid,ans)
	 {
		 alert("hi");
		 alert(qid);
		 alert(ans);		 
	 }
*/
	</script>



	<br><br>
	<?php include "footer.php"; ?>

</body>

</html>