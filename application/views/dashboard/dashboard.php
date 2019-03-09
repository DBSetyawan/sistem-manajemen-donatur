<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="<?=base_url();?>assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>YDSF</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="<?=base_url();?>assets/dashboard/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="<?=base_url();?>assets/dashboard/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="<?=base_url();?>assets/dashboard/css/light-bootstrap-dashboard.css" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="<?=base_url();?>assets/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/dashboard/css/pe-icon-7-stroke.css" rel="stylesheet" />

</head>
<body>

<div class="wrapper">
    <?php $this->load->view('dashboard/sidebar') ?>

    <div class="main-panel">
        
       <?php $this->load->view('dashboard/navbar'); ?> 


       <?php $this->load->view('person_view'); ?> 
</div>
<?php $this->load->view('dashboard/footer') ?>

</body>

    <!--   Core JS Files   -->
    <script src="<?=base_url();?>assets/dashboard/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="<?=base_url();?>assets/dashboard/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="<?=base_url();?>assets/dashboard/js/bootstrap-checkbox-radio-switch.js"></script>

	<!--  Charts Plugin -->
	<script src="<?=base_url();?>assets/dashboard/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="<?=base_url();?>assets/dashboard/js/bootstrap-notify.js"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="<?=base_url();?>assets/dashboard/js/light-bootstrap-dashboard.js"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="<?=base_url();?>assets/dashboard/js/demo.js"></script>

	<script type="text/javascript">
    	$(document).ready(function(){

        	demo.initChartist();

        	$.notify({
            	icon: 'pe-7s-gift',
            	message: "Selamat datang"

            },{
                type: 'info',
                timer: 4000
            });

    	});
	</script>

</html>
