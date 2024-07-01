<!DOCTYPE html>
<html lang="en">
<head>
  <style>

    body {
 background-image: url("/template/template/assets/img/avatar/trans.jpg");
  background-color: #cccccc; /* Used if the image is unavailable */
  height: 150; /* You must set a specified height */
  background-position: center; /* Center the image */
  background-repeat: no-repeat; /* Do not repeat the image */
  background-size: cover; /* Resize the background image to cover the entire container */
}
  </style>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Admin Login</title>

   <!-- General CSS Files -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <link rel="stylesheet" href="<?=base_url()?>/template/template/node_modules/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?=base_url()?>/template/template/node_modules/@fortawesome/fontawesome-free/css/all.min.css">
  <!-- font awsome 6.2.0-->

<!-- put this link in header in html file-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<!-- visite this website 'https://fontawesome.com/' and select you icon is gonna be like that-->

  <!-- CSS Libraries -->

  <!-- Template CSS -->
  <link rel="stylesheet" href="<?=base_url()?>/template/template/assets/css/style.css">
  <link rel="stylesheet" href="<?=base_url()?>/template/template/assets/css/components.css">
<!-- Start GA -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-94034622-3');
</script>
<!-- /END GA --></head>

<body>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="login-brand">
            <img alt="image" src="<?=base_url()?>/template/template/assets/img/avatar/1.jpg" width="150" class="rounded-circle shadow p-3 mb-5 bg-body rounded">
            <h6 class="display-9">Transport Management System </h6>
            </div>

            <div class="card shadow p-3 mb-5 bg-body rounded">
              <?php 
     $errors= session()->getFlashdata('errors');
     if(!empty($errors)) {?>
     <div class="alert alert-danger" role="alert">
        <ul>
            <?php foreach ($errors as $error): ?>
            <li><?= esc($error) ?></li>
        <?php endforeach ?>
        </ul>
    </div>
    <?php } ?>
    <?php
    if (session()->getFlashdata('message')) {
      echo '<div class="alert alert-success" role="alert">';
      echo session()->getFlashdata('message');
      echo '</div>';
    }
       ?>
              <div class="card-header"><h4> <i class="fa-solid fa-star"></i> Login Admin</h4></div>
              <div class="card-body">
               <?php
                    echo form_open('auth/check_login');
                ?>
                  <div class="form-group">
                    <label for="emp_no">Employee Number</label>
                    <input id="emp_no" type="text" class="form-control" name="emp_no" tabindex="1"  autofocus>
                    <div class="invalid-feedback">
                      Please fill in your email
                    </div>
                  </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                      Login
                    </button>
                  </div>
                  <?php echo form_close();?>
                <div class="mt-5 text-muted text-center">
              Don't have an account? <a href="<?= base_url('register')?>">SignUp Now</a>
            </div>

              </div>
            </div>
          
            <div class="simple-footer">
             <p class="text-white bg-dark">Copyright &copy; Online Unit</p> 
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <!-- General JS Scripts -->

  <script src="<?=base_url()?>/template/template/node_modules/jquery/dist/jquery.min.js"></script>
  <script src="<?=base_url()?>/template/template/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="<?=base_url()?>/template/template/assets/js/scripts.js"></script>
  <script>
          window.setTimeout(function() {
            $('.alert').fadeTo(500,0).slideUp(500,function(){
              $(this).remove();
            });
          }, 3000);
  </script>
</body>
</html>