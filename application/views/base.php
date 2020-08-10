<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: #fff;
        }

        audio {
            width: 250px;
        }

        p {
            font-family: 'Poppins', sans-serif;
            font-size: 1.1em;
            font-weight: 300;
            line-height: 1.7em;
            color: #2d3436;
        }

        video {
            border-radius: 25px;
        }

        .list-group-item {
            background-color: #474787;
            color: #fff;
            padding-left: 10px;
            padding-right: 10px;
            padding-top: 12px;
            padding-bottom: 12px;
        }

        .sidebar-header img {
            border-radius: 50%;
            width: 50px;
        }

        a,
        a:hover,
        a:focus {
            color: inherit;
            text-decoration: none;
            transition: all 0.3s;
        }

        .navbar {
            padding: 0px;
            background: #dfe6e9;
            border: none;
            border-radius: 0;
            box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.1);
            border-radius: 50px;
            position: absolute;
            z-index: 1;
            margin-top: 50px;
            margin-left: 50px;
            width: 96%;
        }

        .navbar-btn {
            box-shadow: none;
            outline: none !important;
            border: none;
        }

        .line {
            width: 100%;
            height: 1px;
            border-bottom: 1px dashed #ddd;
            margin: 40px 0;
        }

        /* ---------------------------------------------------
    SIDEBAR STYLE
    ----------------------------------------------------- */
        #sidebar {
            width: 250px;
            position: fixed;
            top: 0;
            left: 0;
            height: 100vh;
            z-index: 999;
            background: #fff;
            color: #2d3436;
            transition: all 0.3s;
        }

        #sidebar .sidebar-header {
            padding: 20px;
            background: #fff;
        }

        #sidebar ul.components {
            padding: 20px 0;
        }

        #sidebar ul p {
            color: #fff;
            padding: 10px;
        }

        #sidebar ul li a {
            padding: 10px;
            font-size: 1.1em;
            display: block;
        }

        .ho1:hover {
            background: #b8ffff;
            color: #636e72;
        }

        .ho2:hover {
            background: #ffcdc2;
            color: #636e72;
        }

        .ho3:hover {
            background: #add6ff;
            color: #636e72;
        }

        .ho4:hover {
            background: #bbb6fa;
            color: #636e72;
        }

        ul ul a {
            font-size: 0.9em !important;
            padding-left: 30px !important;
            background: #6d7fcc;
        }

        ul.CTAs {
            padding: 20px;
        }

        ul.CTAs a {
            text-align: center;
            font-size: 0.9em !important;
            display: block;
            border-radius: 5px;
            margin-bottom: 5px;
        }

        #content {
            width: calc(100% - 250px);
            min-height: 100vh;
            transition: all 0.3s;
            position: absolute;
            top: 0;
            right: 0;
        }

        .sidebar-header h4 {
            float: right;
            transform: translate(-50px, 10px)
        }

        .navbar-default input[type="text"] {
            background: none;
            border: 0;
            padding: 10px 7px;
            width: 150px;
            outline: none;
            color: #6d7fcc;
            transform: translate(70px, -55px)
        }

        .rowc {
            height: 60px;
        }

        .rowec {
            margin-left: 0px;
            margin-right: 0px;
        }

        .act1 {
            background: #81ecec;
            color: #706fd3;
        }

        .act2 {
            background: #ff7675;
            color: #706fd3;
        }

        .act3 {
            background: #74b9ff;
            color: #706fd3;
        }

        .act4 {
            background: #a29bfe;
            color: #706fd3;
        }

        .box {
            background: #2c2c54;
        }

        .card-header h5 {
            color: #fff;
        }

        .btnc {
            margin-left: 25px;
            margin-top: 10px;
        }

        .bg {
            height: 100%;
            background-color: #2c2c54;
            border-radius: 25px;
        }

        .colc {
            padding: 0;
            ;
        }

        .uli {
            width: 35px;
            height: 27.31px;
            transform: translate(50%, 0%);
            margin-top: 10px;
            margin-bottom: 10px;
            margin-left: 7px;
        }

        .bar {
            margin-top: 25%;
        }
    </style>
    <title>Home</title>
</head>

<body>
    <div class="wrapper">
        <nav id="sidebar">
            <div class="sidebar-header">
                <img src="<?php echo base_url('assets/img/ahi2.jpg') ?>">
                <h4>Banyuaji</h4>
            </div>
            <ul class="list-unstyled bar">
                <li>
                    <div class="row">
                        <div class="col-md-3 colc act1"><img class="uli" src="<?php echo base_url('assets/img/home.png') ?>" alt=""></div>
                        <div class="col-md-9 colc"><a class="ho1" href="#">Home</a></div>

                        <div class="col-md-3 colc act2"><img class="uli" src="<?php echo base_url('assets/img/cart.png') ?>" alt=""></div>
                        <div class="col-md-9 colc"><a class="ho2" href="#">Lelang</a></div>

                        <div class="col-md-3 colc act3"><img class="uli" src="<?php echo base_url('assets/img/info.png') ?>" alt=""></div>
                        <div class="col-md-9 colc"><a class="ho3" href="#">Information</a></div>
                    </div>
                </li>
            </ul>
            <ul class="list-unstyled bar">
                <li>
                    <div class="row">
                        <div class="col-md-3 colc act4"><img class="uli" src="<?php echo base_url('assets/img/manage.png') ?>" alt=""></div>
                        <div class="col-md-9 colc"><a class="ho4" href="#">Manage</a></div>
                    </div>
                </li>
            </ul>
        </nav>
        <?php $this->load->view('home') ?>
    </div>
</body>
<script>
    // $(document).ready(function () {
    //     $('.carousel').carousel('pause')
    // });
</script>

</html>