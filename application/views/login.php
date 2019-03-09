<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/normalize.css')?>" >
        <link rel="stylesheet" href="<?php echo base_url('/assets/css/style.css')?>">
        <script src="<?php echo base_url('assets/jquery/jquery-2.1.4.min.js')?>"></script>
    <title>Donatur Al-Falah</title>
  </head>
  
  <body style="background:#0000213;">
    <div class="login">
  <h3>.:: YDSF ::.</h3>
   <?php echo form_open('person/proseslogin'); ?>
            <fieldset>
      <div class="form-group">
       <label for="username">ID</label>
       <input type="text" class="form-control" id="username" name="username" placeholder="Enter Username">
                    </div>
        <div class="form-group">
       <label for="password">Password</label>
       <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password">
       </div>
            </fieldset>
            <input type="submit" value="masuk"/>
      </div>
  </body>
</html>

