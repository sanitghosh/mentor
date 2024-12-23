<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Pluto - Responsive Bootstrap Admin Panel Templates</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- site icon -->
      <link rel="icon" href="<?php echo base_url('assets/admin/images/fevicon.png');?>" type="image/png" />
      <!-- bootstrap css -->
      <link rel="stylesheet" href="<?php echo base_url('assets/admin/css/bootstrap.min.css');?>" />
      <!-- site css -->
      <link rel="stylesheet" href="<?php echo base_url('assets/admin/css/style.css');?>" />
      <!-- responsive css -->
      <link rel="stylesheet" href="<?php echo base_url('assets/admin/css/responsive.css');?>" />
      <!-- color css -->
      <link rel="stylesheet" href="<?php echo base_url('assets/admin/css/colors.css');?>" />
      <!-- select bootstrap -->
      <link rel="stylesheet" href="<?php echo base_url('assets/admin/css/bootstrap-select.css');?>" />
      <!-- scrollbar css -->
      <link rel="stylesheet" href="<?php echo base_url('assets/admin/css/perfect-scrollbar.css');?>" />
      <!-- custom css -->
      <link rel="stylesheet" href="<?php echo base_url('assets/admin/css/custom.css');?>" />
      <!-- calendar file css -->
      <link rel="stylesheet" href="<?php echo base_url('assets/admin/js/semantic.min.css');?>" />
      <!-- Font Awesome 6.0+ (latest version) -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
   </head>
<body class="inner_page login">
      <div class="full_container">
         <div class="container">
            <div class="center verticle_center full_height">
               <div class="login_section">
                  <div class="logo_login" style="background: url('<?php echo base_url('assets/admin/images/layout_img/login_image.jpg');?>');">
                     <div class="center">
                        <img width="210" src="<?php echo base_url('assets/admin/images/logo/logo.png');?>" alt="#" />
                     </div>
                  </div>
                  <div class="login_form">
                        <!-- Display validation errors -->
                     <?php $errors = session()->getFlashdata('errors'); ?>
                     <?php if (isset($errors) && !empty($errors)): ?>
                        <script>
                           Swal.fire({
                              icon: 'error',
                              title: 'Oops...',
                              html: '<ul><?php foreach ($errors as $error): ?><li><?= esc($error) ?></li><?php endforeach; ?></ul>'
                           });
                        </script>
                     <?php endif; ?>
                     <form method="post" action="/admin/adduser">
                     <?= csrf_field() ?>
                        <fieldset>
                        <div class="field">
                              <label class="label_field">Full Name</label>
                              <input type="text" placeholder="Fullname" name="fullname" value="<?= old('fullname') ?>"/>
                           </div>
                           <div class="field">
                              <label class="label_field">Email Address</label>
                              <input type="email" name="email" placeholder="E-mail" value="<?= old('email') ?>" />
                           </div>
                           <div class="field">
                              <label class="label_field">Password</label>
                              <input type="password" name="password" placeholder="Password" />
                           </div>
                           <div class="field">
                              <label class="label_field">Password</label>
                              <input type="password" name="cpass" placeholder="Confirm Password" />
                           </div>
                           <div class="field">
                              <label class="label_field hidden">hidden label</label>
                              <label class="form-check-label"><input type="checkbox" class="form-check-input"> Remember Me</label>
                              <a class="forgot" href="">Forgotten Password?</a>
                           </div>
                           <div class="field margin_0">
                              <label class="label_field hidden">hidden label</label>
                              <button class="main_bt">Sing In</button>
                           </div>
                        </fieldset>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
<!-- jQuery -->
<script src="<?php echo base_url('assets/admin/js/jquery.min.js');?>"></script>
      <script src="<?php echo base_url('assets/admin/js/popper.min.js');?>"></script>
      <script src="<?php echo base_url('assets/admin/js/bootstrap.min.js');?>"></script>
      <!-- wow animation -->
      <script src="<?php echo base_url('assets/admin/js/animate.js');?>"></script>
      <!-- select country -->
      <script src="<?php echo base_url('assets/admin/js/bootstrap-select.js');?>"></script>
      <!-- nice scrollbar -->
      <script src="<?php echo base_url('assets/admin/js/perfect-scrollbar.min.js');?>"></script>
      <script>
         var ps = new PerfectScrollbar('#sidebar');
      </script>
      <!-- custom js -->
      <script src="<?php echo base_url('assets/admin/js/custom.js');?>"></script>
   </body>
</html>