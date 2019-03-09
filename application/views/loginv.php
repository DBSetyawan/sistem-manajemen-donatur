<!DOCTYPE html>
<html>
  <head>
        <link rel="shortcut icon" type="assets/x-icon" href="<?php echo base_url('/assets/zas.png')?>"> 
        <link href="<?php echo base_url('assets/alerty/alertify.bootstrap.css')?>" rel="stylesheet">
        <link href="<?php echo base_url('assets/alerty/alertify.core.css')?>" rel="stylesheet">
        <link href="<?php echo base_url('assets/alerty/alertify.default.css')?>" rel="stylesheet"> 
    <meta charset="UTF-8">
    <title>.:: Single Sign On | YDSF ::.</title>
        <script src="<?php echo base_url('assets/jquery/jquery-2.1.4.min.js')?>"></script>
        <script src="<?php echo base_url('assets/jquery/alertify.min.js')?>"></script>
        <link rel="stylesheet" href="<?php echo base_url();?>/assets/login/css/style.css"> 
        <script type="text/javascript">
            var hashChangedCount = -2;
            $(window).on("hashchange", function () {
                hashChangedCount++;

                    if (top.location.hash == "?url=login" && hashChangedCount > 0) {
                        console.log("dinon-aktifkan.");
                    }

                    top.location.hash = '?url=login';
                });
                
                top.location.hash = "?url=";

            $(document).ready(function() {
                 if (!("autofocus" in document.createElement("input"))) {
                document.getElementById("username").focus();
              }
            });

        	function cekform() {
        		if (!$("#username").val()) {
        			$("#username").focus();
                    alertify.error("Maaf Username tidak boleh kosong.");

        			return false;
        		}

        		if (!$("#password").val()) {
        			$("#password").focus();
                    alertify.error("Maaf Password tidak boleh kosong.");

        			return false;
        		}

        	}
    </script>
  </head>
  <body>
  </body>
  <body oncopy="return false" oncut="return false" onpaste="return false">
    <div class="wrapper">
	<div class="container">
    <img style="margin-top:-22%;" src="<?php echo base_url('/assets/logo.png')?>">
    <h2 style="align-content:10%;color:green;height:100px;font-family:Bradley Hand ITC;font-size:40px">Sistem Informasi Manajemen Yayasan Dana Sosial Al-Falah</h2>
		<!-- <h1 style="font-family:Bradley Hand ITC;color:green;height:25px">Selamat Datang</h1> -->
		<form method="post" action="<?php echo base_url(); ?>index.php/Ydsfku/Asynchronous" onsubmit="return cekform()">
			<input type="text" name="username" id="username" placeholder="Username" autofocus="autofocus">
			<input type="password" name="password" id="password" placeholder="Password">
			<button type="submit" id="btnlogin">Login</button>
		</form>
	</div>
	<ul class="bg-bubbles">
    <li style="background:transparent;"><img style="height:50px;width:100px" src="<?php echo base_url('/assets/logo.png')?>"></li>
    <li style="background:transparent;"><img style="height:50px;width:100px" src="<?php echo base_url('/assets/logo.png')?>"></li>
    <li style="background:transparent;"><img style="height:50px;width:100px" src="<?php echo base_url('/assets/logo.png')?>"></li>
    <li style="background:transparent;"><img style="height:50px;width:100px" src="<?php echo base_url('/assets/logo.png')?>"></li>
    <li style="background:transparent;"><img style="height:50px;width:100px" src="<?php echo base_url('/assets/logo.png')?>"></li>
    <li style="background:transparent;"><img style="height:50px;width:100px" src="<?php echo base_url('/assets/logo.png')?>"></li>
    <li style="background:transparent;"><img style="height:50px;width:100px" src="<?php echo base_url('/assets/logo.png')?>"></li>
    <li style="background:transparent;"><img style="height:50px;width:100px" src="<?php echo base_url('/assets/logo.png')?>"></li>
    <li style="background:transparent;"><img style="height:50px;width:100px" src="<?php echo base_url('/assets/logo.png')?>"></li>
    <li style="background:transparent;"><img style="height:50px;width:100px" src="<?php echo base_url('/assets/logo.png')?>"></li>
    <li style="background:transparent;"><img style="height:50px;width:100px" src="<?php echo base_url('/assets/logo.png')?>"></li>
    <li style="background:transparent;"><img style="height:50px;width:100px" src="<?php echo base_url('/assets/logo.png')?>"></li>
    <li style="background:transparent;"><img style="height:50px;width:100px" src="<?php echo base_url('/assets/logo.png')?>"></li>
    <li style="background:transparent;"><img style="height:50px;width:100px" src="<?php echo base_url('/assets/logo.png')?>"></li>
    <li style="background:transparent;"><img style="height:50px;width:100px" src="<?php echo base_url('/assets/logo.png')?>"></li>
    <li style="background:transparent;"><img style="height:50px;width:100px" src="<?php echo base_url('/assets/logo.png')?>"></li>
    <li style="background:transparent;"><img style="height:50px;width:100px" src="<?php echo base_url('/assets/logo.png')?>"></li>
    <li style="background:transparent;"><img style="height:50px;width:100px" src="<?php echo base_url('/assets/logo.png')?>"></li>
    <li style="background:transparent;"><img style="height:50px;width:100px" src="<?php echo base_url('/assets/logo.png')?>"></li>
    <li style="background:transparent;"><img style="height:50px;width:100px" src="<?php echo base_url('/assets/logo.png')?>"></li>
    <li style="background:transparent;"><img style="height:50px;width:100px" src="<?php echo base_url('/assets/logo.png')?>"></li>
    <li style="background:transparent;"><img style="height:50px;width:100px" src="<?php echo base_url('/assets/logo.png')?>"></li>
</div>
        <script src="<?php echo base_url();?>/assets/login/js/index.js"></script>
  </body>
</html>