<?php
// Database configuration
$dbHost = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "details";

// Create database connection
$conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if (isset($_POST['id_no']) || isset($_POST['fname']) || isset($_POST['mname']) || isset($_POST['lname']) || isset($_POST['dob'])) {
    // Get the submitted form data
    $id_no = $_POST['id_no'];
    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $lname = $_POST['lname'];
    $dob = $_POST['dob'];

    $query = "INSERT INTO data (id_no, fname, mname, lname, dob) VALUES ('$id_no','$fname', '$mname', '$lname','$dob')";

    $query_run = mysqli_query($conn, $query);

    if ($query_run) {
        //echo "success";
    } else {
        //echo "failed" . mysqli_error($conn);
    }
}
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css">
    <!--font awesome cdn-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--google fonts--
    <link href="https://fonts.googleapis.com/css2?family=Oxygen+Mono&family=Roboto:wght@500&display=swap" rel="stylesheet">-->
    <link href="//db.onlinewebfonts.com/c/b04d25d25486827f18acf042114e67b7?family=OCR+B+Std" rel="stylesheet" type="text/css" />

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/js/bootstrap.min.js"></script>

    <title>Document</title>
    <style>
        @import url(//db.onlinewebfonts.com/c/b04d25d25486827f18acf042114e67b7?family=OCR+B+Std);

        @font-face {
            font-family: "OCR B Std";
            src: url("//db.onlinewebfonts.com/t/b04d25d25486827f18acf042114e67b7.eot");
            src: url("//db.onlinewebfonts.com/t/b04d25d25486827f18acf042114e67b7.eot?#iefix") format("embedded-opentype"), url("//db.onlinewebfonts.com/t/b04d25d25486827f18acf042114e67b7.woff2") format("woff2"), url("//db.onlinewebfonts.com/t/b04d25d25486827f18acf042114e67b7.woff") format("woff"), url("//db.onlinewebfonts.com/t/b04d25d25486827f18acf042114e67b7.ttf") format("truetype"), url("//db.onlinewebfonts.com/t/b04d25d25486827f18acf042114e67b7.svg#OCR B Std") format("svg");
        }

        .modal {
            font-weight: 700;
            font-size: 14px;
            font-family: 'Roboto', sans-serif;
            letter-spacing: 1.7px;

        }

        .modal-dialog {
            width: 350px !important;
        }

        .classs {
            font-family: "OCR B Std" !important;
            font-size: 13px !important;
            padding: 8px !important;
            font-weight: 700 !important;
            min-width: 200px !important;
            height: 100px !important;
            overflow: hidden !important;
            white-space: nowrap;
        }
    </style>
</head>

<body>
    <!--header-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Details</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ml-auto">
                <a class="nav-link active" href="#">Home <span class="sr-only">(current)</span></a>

                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Account</a>
            </div>
        </div>
    </nav>

    <div class="container mt-4 d-flex justify-content-center">
        <!-- Status message -->
        <div class="statusMsg"></div>

        <!-- File upload form -->
        <div class="col-lg-6 col-md-6 col-sm-12">
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-id-card-o"></i></span>
                        </div>
                        <input type="text" class="form-control" id="id_no" name="id_no" maxlength="8" placeholder="Enter id no" required>
                    </div>
                </div>

                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-id-card-o"></i></span>
                        </div>
                        <input type="text" class="form-control" id="fname" onkeyup="this.value = this.value.toUpperCase();" name="fname" placeholder="Enter first name" required>
                    </div>
                </div>

                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-id-card-o"></i></span>
                        </div>
                        <input type="text" class="form-control" id="mname" onkeyup="this.value = this.value.toUpperCase();" name="mname" placeholder="Enter middle name" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-id-card-o"></i></span>
                        </div>
                        <input type="text" class="form-control" id="lname" onkeyup="this.value = this.value.toUpperCase();" name="lname" placeholder="Enter last name" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-id-card-o"></i></span>
                        </div>
                        <input type="date" class="form-control" id="dob" name="dob" placeholder="yyyymmdd" maxlength="8" required>

                    </div>
                </div>
                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="gender1" value="M" checked>
                        <label class="form-check-label" for="exampleRadios1">
                            Male
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="gender2" value="F">
                        <label class="form-check-label" for="exampleRadios2">
                            Female
                        </label>
                    </div>
                </div>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong" onClick="submitText();clicks();">
                    GENERATE
                </button>
                <!-- Modal -->
                <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-body classs" id="bodyModal">
                            </div>
                            <div class="container py-2 d-flex justify-content-center">

                                <input type="submit" id="submit" name="submit" class="btn btn-success submitBtn px-5" value="OK" />
                            </div>
                        </div>
                    </div>
                </div>
            </form>

            <script>
                function clicks() {

                }

                function submitText() {
                    var x = $("#fname").val() + "<".replace('<', '&lt;').replace('>', '&gt;') + $("#mname").val() +
                        "<".replace('<', '&lt;').replace('>', '&gt;') + $("#lname").val() + "";
                    var y = '36' - x.length;

                    for (var i = x.length; i < 36; i++) {
                        var replaced = x += "<";
                    }
                    var html = " IDKYA2441216280<<3981<<<<<3982" + "<br>" + $("#dob").val().replace('/', '').substring(2, 8) +
                        "0" + document.querySelector("input[name=gender]:checked").value + "1702150<B00".replace('<', '&lt;').replace('>', '&gt;') +
                        $("#id_no").val() + "M<<".replace('>', '&gt;') + "<br> " + replaced.replace('<', '&lt;').replace('>', '&gt;');

                    $("#bodyModal").html(html);
                }
            </script>

        </div>
    </div>
    <!-- Optional JavaScript -->

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->


</body>

</html>