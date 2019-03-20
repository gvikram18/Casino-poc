<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title Page-->
    <title>NABC 2020 : BOOK HOTEL</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <?php
    // variables
    $idErr = $emailErr = $mobErr = $otpErr = "";
    $id = $email = $mobile = $gen_otp = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["email"])) {
            $emailErr = "Email is required";
        }else {
            $email = test_input($_POST["email"]);
               
       // check if e-mail address is well-formed
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Invalid email format"; 
            }
        }
    
    if (empty($_POST["id"])) {
               $idErr = "Reference ID is required";
            }else {
               $id = test_input($_POST["id"]);
            }
    
    if (empty($_POST["mob"])) {
        $mobErr = "Mobile number is required";
    }else {
        $mobile = test_input($_POST["mob"]); 
        }

    if (empty($_POST["gen_otp"])) {
        $otpErr = "OTP is required";
    }else {
        $gen_otp = test_input($_POST["gen_otp"]);
    }
}

    function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
         }
      ?>

    <div class="wrap font-robo" style="background:url(main-banner.png) no-repeat center center fixed;
    -webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover; padding-bottom: 199px; padding-top: 100px;">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="banner">
                    <img src="banner.png" alt="banner" style="width:680px;height:200px;">
                </div>
                <div class="card-body" style="padding: 0 90px;padding-top: 15px;padding-bottom: 50px;">
                    <style type="text/css">
                        /* When the pattern is matched */
                        input[type=text]:valid, input[type=email]:valid, input[type=tel]:valid, input[type=number]:valid {
                        color: green;
                        }

                        /* Unmatched */
                        input[type=text]:invalid, input[type=email]:invalid, input[type=tel]:invalid, input[type=number]:invalid {
                        color: red;
                        }

                    </style>
                    <h2 class="title">OTP Verification</h2>
                    <form method="POST">
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1" type="text" placeholder="REFERENCE ID" name="ref_id"
                                    pattern="NABC2020-[0-9]{10}" autofocus required>
                                </div>
                            </div>
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="email" placeholder="EMAIL" name="email" 
                            pattern="\A(?=[a-z0-9@.!#$%&'*+/=?^_`{|}~-]{6,254}\z)(?=[a-z0-9.!#$%&'*+/=?^_`{|}~-]{1,64}@)
                            [a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@ (?:(?=[a-z0-9-]{1,63}\.)[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+(?=[a-z0-9-]{1,63}\z)[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\z" autofocus required>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <input type="tel" class="input--style-1" placeholder="MOBILE NUMBER" name="mob_no" autofocus 
                                    required pattern="\d{10}" />  
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="p-t-10">
                                    <span class="btn btn--radius btn--green" type="submit">GENERATE OTP</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-2 input-group">
                            <input class="input--style-1" type="number" placeholder="ENTER GENETATED OTP" name="generated_otp"
                            autofocus required pattern="\d{6}">
                        </div> 
                        <div class="p-t-10">
                            <button class="btn btn--radius btn--green" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>


</body>
</html>
<!-- end document-->
