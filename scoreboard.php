<?php include "access_check.php"; ?>
<?php
include "connect.php";
$sql = "SELECT player_name, points FROM users ORDER BY points DESC, stamp DESC";

// Execute the query
$result = mysqli_query($conn, $sql);
?>


<!DOCTYPE html>
<html class="sidebar-light fixed sidebar-left-collapsed">

<head>
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
    <?php include "head.php"; ?>
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
                <h2>Points Table</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Points</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // Fetch data from the result set
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<tr>";
                            echo "<td>" . $row['player_name'] . "</td>";
                            echo "<td>" . $row['points'] . "</td>";
                            echo "</tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </section>
        </div>
    </section>


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
    <?php include "footer.php"; ?>

</body>

</html>