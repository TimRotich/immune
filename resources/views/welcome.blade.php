<!DOCTYPE html>
<html lang="en">
<head>
    <title>Immunization System</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Additional CSS Files -->

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.css') }}">

    <link rel="stylesheet" href="{{ asset('/assets/css/templatemo-softy-pinko.css') }}">

    <!--===============================================================================================-->

    <link rel="stylesheet" href="{{ asset('assets/css/logreg/images/icons/favicon.ico') }}">
    <!--===============================================================================================-->

    <link rel="stylesheet" href="{{ asset('assets/css/logreg/vendor/bootstrap/css/bootstrap.min.css') }}">
    <!--===============================================================================================-->

    <link rel="stylesheet" href="{{ asset('assets/css/logreg/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <!--===============================================================================================-->

    <link rel="stylesheet" href="{{ asset('assets/css/logreg/fonts/iconic/css/material-design-iconic-font.min.css') }}">
    <!--===============================================================================================-->

    <link rel="stylesheet" href="{{ asset('assets/css/logreg/vendor/animate/animate.css') }}">
    <!--===============================================================================================-->

    <link rel="stylesheet" href="{{ asset('assets/css/logreg/vendor/css-hamburgers/hamburgers.min.css') }}">
    <!--===============================================================================================-->

    <link rel="stylesheet" href="{{ asset('assets/css/logreg/vendor/animsition/css/animsition.min.css') }}">
    <!--===============================================================================================-->

    <link rel="stylesheet" href="{{ asset('assets/css/logreg/vendor/select2/select2.min.css') }}">
    <!--===============================================================================================-->

    <link rel="stylesheet" href="{{ asset('assets/css/logreg/vendor/daterangepicker/daterangepicker.css') }}">
    <!--===============================================================================================-->


{{--    <link rel="stylesheet" href="{{ asset('assets/css/logreg/css/util.css') }}">--}}
{{--    <link rel="stylesheet" href="{{ asset('assets/css/logreg/css/main.css') }}">--}}
<!--===============================================================================================-->

    <link rel="stylesheet" href="{{ asset('assets/css/payfor/css/util.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/payfor/css/main.css') }}">
    <style>
        .card {
            /* Add shadows to create the "card" effect */
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            transition: 0.3s;
            border-radius: 12px;
            /*height: fit-content;*/
            /*width: 700px;*/
        }

        /* On mouse-over, add a deeper shadow */
        .card:hover {
            box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
        }


        .join {
            font-size: 14px;
            color: #a0a0a0;
            font-weight: bold
        }

        /* Add rounded corners to the top left and the top right corner of the image */
        img {
            border-radius: 5px 5px 0 0;
        }
    </style>
</head>
<br>
<br>
<br>
<br>
<br>
<body class="welcome-area">

<div class="container-fluid" style="background-color: white; margin: 20px; border-radius: 12px;">

    <div class="wrap-login100 p-t-85 p-b-20">
          @csrf
            <div style="text-align: center;">
                <h2 style="font-weight: bold; color: blue; font-size: 25px;" class="fa fa-hospital-o"> Simple Immunization System</h2>
<br>
                <br><br>
                <center>
                <div class="row" style="margin-left: 750px;">
        <a href="/newimmune" style="margin-top: 50px;margin-left: 20px;"> <button class="btn btn-success fa fa-plus"> New Immunization</button></a><br><br>
                <a href="/newimmune" style="margin-top: 50px;margin-left: 20px;"> <button class="btn btn-success fa fa-eye">View Records</button></a><br><br>
                </div>
                </center>
        <center><a><div class=" px-2 rounded mt-4 date " style="background-color: white;"> <span class="join">Powered by Timothy Kipkosgei</span> </div></a></center>
            </div>
    </div>
</div>




<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/bootstrap/js/popper.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/daterangepicker/moment.min.js"></script>
<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
<script src="js/main.js"></script>

</body>
</html>
