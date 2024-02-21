<?php include "access_check.php"; ?>
<?php include "connect.php"; ?>

<?php
if(isset($_POST['question'])) {
    $question = addslashes($_POST['question']);
    $code = isset($_POST['code']) ? addslashes($_POST['code']) : '';
    $answer = $_POST['answer'];
    $level= $_POST['level'];
    $option1 = $_POST['option1'];
    $option2 = $_POST['option2'];
    $option3 = $_POST['option3'];

    // Inserting data into words3 table
    $insert_query = "INSERT INTO words2 (question, answer, option1, option2, option3,level) VALUES ('$question', '$answer', '$option1', '$option2', '$option3','$level')";
    mysqli_query($conn, $insert_query);
}
?>

<!doctype html>
<html class="sidebar-light fixed sidebar-left-collapsed">
<head>
    <?php include "head.php"; ?>
    <style>
        td {
            color: #000000;
        }
    </style>
    <link rel="stylesheet" href="vendor/pnotify/pnotify.custom.css" />
    <link rel="stylesheet" href="vendor/summernote/summernote-bs4.css" />
</head>
<body>
<section class="body">
    <?php include "header.php"; ?>
    <div class="inner-wrapper">
        <?php include "sidebar.php"; ?>
        <section role="main" class="content-body">
            <header class="page-header">
                <h2>BO EDX</h2>
            </header>
            <div class='row'>
                <div class="col-xl-12">
                    <h5 class="font-weight-semibold text-dark text-uppercase mb-3 mt-3">ADD NEW QUESTION</h5>
                    <section class="card mt-4">
                        <div class="card-body">
                            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                                <table class="table table-responsive-md table-striped mb-0">
                                    <thead>
                                    <tr>
                                        <th>FIELD</th>
                                        <th>INPUT</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>QUESTION</td><td><textarea name='question' class='form-control form-control-lg'></textarea></td>
                                    </tr>
                                    <tr>
                                        <td>CODE (optional)</td>
                                        <td><textarea name='code' class="summernote" data-plugin-summernote data-plugin-options='{ "height": 180, "codemirror": { "theme": "ambiance" } }'></textarea></td>
                                    </tr>
                                    <tr><td>OPTION A</td><td><input type='text' name='option1' class='form-control form-control-lg'></td></tr>
                                    <tr><td>OPTION B</td><td><input type='text' name='option2' class='form-control form-control-lg'></td></tr>
                                    <tr><td>OPTION C</td><td><input type='text' name='option3' class='form-control form-control-lg'></td></tr>
                                    <tr><td>ANSWER</td><td><input type='text' name='answer' class='form-control form-control-lg'></td></tr>
                                    <tr><td>Level</td><td><input type='text' name='level' class='form-control form-control-lg'></td></tr>
                                   
                                    <tr><td>SUBMIT</td><td><input type='submit' value='POST QUESTION' class='form-control form-control-lg'></td></tr>
                                    </tbody>
                                </table>
                            </form>
                        </div>
                    </section>
                </div>
            </div>
            <div class='row'>
                <div class="col-xl-12">
                    <h5 class="font-weight-semibold text-dark text-uppercase mb-3 mt-3">Our Partners & Sponsors</h5>
                    <div class="owl-carousel owl-theme" data-plugin-carousel data-plugin-options='{ "dots": false, "autoplay": true, "autoplayTimeout": 3000, "loop": true, "margin": 10, "nav": true, "responsive": {"0":{"items":2 }, "600":{"items":3 }, "1000":{"items":6 } }  }'>
                        <div class="item"><img class="img-thumbnail" src="img/sponsors/bvrmol.jpg" alt=""></div>
                        <div class="item"><img class="img-thumbnail" src="img/sponsors/srkrec.jpg" alt=""></div>
                        <div class="item"><img class="img-thumbnail" src="img/sponsors/mcr_web.jpg" alt=""></div>
                    </div>
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
<script src="vendor/summernote/summernote-bs4.js"></script>

<!-- Theme Base,
