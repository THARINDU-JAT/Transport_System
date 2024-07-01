<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Dashboard</title>

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
   <!-- START: Template CSS-->
        <link rel="stylesheet" href="dist\vendors\bootstrap\css\bootstrap.min.css">
        <link rel="stylesheet" href="dist\vendors\jquery-ui\jquery-ui.min.css">
        <link rel="stylesheet" href="dist\vendors\jquery-ui\jquery-ui.theme.min.css">
        <link rel="stylesheet" href="dist\vendors\simple-line-icons\css\simple-line-icons.css">        
        <link rel="stylesheet" href="dist\vendors\flags-icon\css\flag-icon.min.css"> 
        <link rel="stylesheet" href="dist\vendors\flag-select\css\flags.css">
        <!-- END Template CSS-->   

        <!-- START: Page CSS-->
        <link rel="stylesheet" href="dist\vendors\datatable\css\dataTables.bootstrap4.min.css">
        <link rel="stylesheet" href="dist\vendors\datatable\buttons\css\buttons.bootstrap4.min.css">
        <!-- END: Page CSS-->

        <!-- START: Custom CSS-->
        <link rel="stylesheet" href="dist\css\main.css">
        <!-- END: Custom CSS-->
  <!-- Template CSS -->
  <link rel="stylesheet" href="<?=base_url()?>/template/template/assets/css/style.css">
  <link rel="stylesheet" href="<?=base_url()?>/template/template/assets/css/components.css">

  <!-- START: Template CSS-->
        <link rel="stylesheet" href="dist\vendors\bootstrap\css\bootstrap.min.css">
        <link rel="stylesheet" href="dist\vendors\jquery-ui\jquery-ui.min.css">
        <link rel="stylesheet" href="dist\vendors\jquery-ui\jquery-ui.theme.min.css">
        <link rel="stylesheet" href="dist\vendors\simple-line-icons\css\simple-line-icons.css">        
        <link rel="stylesheet" href="dist\vendors\flags-icon\css\flag-icon.min.css"> 
        <link rel="stylesheet" href="dist\vendors\flag-select\css\flags.css">
        <!-- END Template CSS-->      

        <!-- START: Custom CSS-->
        <link rel="stylesheet" href="dist\css\main.css">
        <!-- END: Custom CSS-->



</head>

<body>
  <div id="app">
    <div class="main-wrapper" >
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
          </ul>
          <div class="search-element">
            <input class="form-control" type="search" placeholder="Search" name = "keyword" value = "" aria-label="Search" data-width="250">
            <button class="btn" type="submit"><i class="fas fa-search"></i></button>
          </div>
        </form>
        
         <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            <img alt="image" src="<?=base_url()?>/template/template/assets/img/avatar/avatar-1.png" class="rounded-circle mr-1"> &nbsp;
            <div class="d-sm-none d-lg-inline-block"><?= session()->get('emp_no ')?></div></a>
            <div class="dropdown-menu dropdown-menu-right">
              <div class="dropdown-title text-center text-lowercase"><?= session()->get('email')?><br/>
              <div class="dropdown-title text-center">
              </div>
            </div> 
              <div class="dropdown-divider"></div>
              <a href="<?= base_url('auth/logout')?>" class="dropdown-item has-icon text-danger">
                <i class="fas fa-sign-out-alt"></i> Logout
              </a>
            </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">

          <a href="https://www.doenets.lk/" title="www.donets.lk"style="font-size:x-small"> Transport Management System</a>
          <img alt="image" src="<?=base_url()?>/template/template/assets/img/avatar/1.jpg" class="shadow p-3 mb-5 bg-body rounded-circle" height="100px" width="100px">
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="https://www.doenets.lk/" title="www.donets.lk"><img alt="image" src="<?=base_url()?>/template/template/assets/img/avatar/1.jpg"  class="rounded-circle" height="50px" width="50px">TMS</a>
          </div>
          <br/><br/>  <br/>
          <ul class="sidebar-menu">
            <?= $this->include('layout/menu')?>
          </ul>
       
        </aside>
      </div>

      <!-- Main Content -->
      <div class="main-content">
        <?= $this->renderSection('content') ?>
      </div>
      <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; 2023 <div class="bullet"></div> Developed By <a href="">Online Unit</a>
        </div>
      </footer>
    </div>
  </div>

  <!-- General JS Scripts -->
  <script src="<?=base_url()?>/template/template/node_modules/jquery/dist/jquery.min.js"></script>
  <script src="<?=base_url()?>/template/template/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="<?=base_url()?>/template/template/node_modules/jquery.nicescroll/dist/jquery.nicescroll.min.js"></script>
  <!-- <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script> -->
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script> -->
  <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script> -->
  <script src="<?=base_url()?>/template/template/assets/js/stisla.js"></script>

  <!-- JS Libraies -->

  <!-- Template JS File -->
  <script src="<?=base_url()?>/template/template/assets/js/scripts.js"></script>
  <script src="<?=base_url()?>/template/template/assets/js/custom.js"></script>
 <!-- START: Template JS-->
        <script src="dist\vendors\jquery\jquery-3.3.1.min.js"></script>
        <script src="dist\vendors\jquery-ui\jquery-ui.min.js"></script>
        <script src="dist\vendors\moment\moment.js"></script>
        <script src="dist\vendors\bootstrap\js\bootstrap.bundle.min.js"></script>    
        <script src="dist\vendors\slimscroll\jquery.slimscroll.min.js"></script>
        <script src="dist\vendors\flag-select\js\jquery.flagstrap.min.js"></script> 
        <!-- END: Template JS-->

        <!-- START: APP JS-->
        <script src="dist\js\app.js"></script>
        <!-- END: APP JS-->
  <!-- Page Specific JS File -->


  <!-- START: Template JS-->
        <script src="dist\vendors\jquery\jquery-3.3.1.min.js"></script>
        <script src="dist\vendors\jquery-ui\jquery-ui.min.js"></script>
        <script src="dist\vendors\moment\moment.js"></script>
        <script src="dist\vendors\bootstrap\js\bootstrap.bundle.min.js"></script>    
        <script src="dist\vendors\slimscroll\jquery.slimscroll.min.js"></script>
        <script src="dist\vendors\flag-select\js\jquery.flagstrap.min.js"></script> 
        <!-- END: Template JS-->
        
        <!-- START: APP JS-->
        <script src="dist\js\app.js"></script>
        <!-- END: APP JS-->

        <!-- START: Page Vendor JS-->
        <script src="dist\vendors\datatable\js\jquery.dataTables.min.js"></script> 
        <script src="dist\vendors\datatable\js\dataTables.bootstrap4.min.js"></script>
        <script src="dist\vendors\datatable\jszip\jszip.min.js"></script>
        <script src="dist\vendors\datatable\pdfmake\pdfmake.min.js"></script>
        <script src="dist\vendors\datatable\pdfmake\vfs_fonts.js"></script>
        <script src="dist\vendors\datatable\buttons\js\dataTables.buttons.min.js"></script>
        <script src="dist\vendors\datatable\buttons\js\buttons.bootstrap4.min.js"></script>
        <script src="dist\vendors\datatable\buttons\js\buttons.colVis.min.js"></script>
        <script src="dist\vendors\datatable\buttons\js\buttons.flash.min.js"></script>
        <script src="dist\vendors\datatable\buttons\js\buttons.html5.min.js"></script>
        <script src="dist\vendors\datatable\buttons\js\buttons.print.min.js"></script>
        <!-- END: Page Vendor JS-->

        <!-- START: Page Script JS-->        
        <script src="dist\js\datatable.script.js"></script>
        <!-- END: Page Script JS-->


        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        
        <script>
            $(document).ready(function() {
              <?php if(session()->getFlashdata('status')){?>
swal({
  title: "<?=session()->getFlashdata('status')?>",
  text: "<?=session()->getFlashdata('status_text')?>",
  icon: "<?=session()->getFlashdata('status_icon')?>",
  button: "OK",
});
                <?php } ?>

              });
        </script>



<script>
$(document).ready(function() {

  $('.confirm_del_btn').click(function(e){

    e.preventDefault();

    var id = $(this).val();

        swal({
          title: "Are you sure?",
          text: "Once deleted, you will not be able to recover this records!",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          if (willDelete) {
              $.ajax({

                url: "/admin/confirm-delete/"+id,
                success: function(response) {
                          swal({
                  title: response.status,
                  text: response.status_text,
                  icon: response.status_icon,
                  button: "OK",
                }).then((confirmed) =>{

                  window.location.reload();
                });
                }
              });

          
          } else {
            swal("You have cancelled on deleting this data");
          }
        });

          });
        });

</script>

<script>
$(document).ready(function() {

  $('.confirm_del_staff_btn').click(function(e){

    e.preventDefault();

    var id = $(this).val();

        swal({
          title: "Are you sure?",
          text: "Once deleted, you will not be able to recover this records!",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          if (willDelete) {
              $.ajax({

                
                url: "/staff/confirm-delete/"+id,
                success: function(response) {
                          swal({
                  title: response.status,
                  text: response.status_text,
                  icon: response.status_icon,
                  button: "OK",
                }).then((confirmed) =>{

                  window.location.reload();
                });
                }
              });

          
          } else {
            swal("You have cancelled on deleting this data");
          }
        });

          });
        });

</script>

<script>
$(document).ready(function() {

  $('.confirm_del_visitor_btn').click(function(e){

    e.preventDefault();

    var id = $(this).val();

        swal({
          title: "Are you sure?",
          text: "Once deleted, you will not be able to recover this records!",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          if (willDelete) {
              $.ajax({

                
                url: "visitor/confirm-delete/"+id,
                success: function(response) {
                          swal({
                  title: response.status,
                  text: response.status_text,
                  icon: response.status_icon,
                  button: "OK",
                }).then((confirmed) =>{

                  window.location.reload();
                });
                }
              });

          
          } else {
            swal("You have cancelled on deleting this data");
          }
        });

          });
        });

</script>
    
<script>
$(document).ready(function() {

  $('.confirm_del_vehicle_btn').click(function(e){

    e.preventDefault();

    var id = $(this).val();

        swal({
          title: "Are you sure?",
          text: "Once deleted, you will not be able to recover this records!",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          if (willDelete) {
              $.ajax({

                
                url: "vehicle/confirm-delete/"+id,
                success: function(response) {
                          swal({
                  title: response.status,
                  text: response.status_text,
                  icon: response.status_icon,
                  button: "OK",
                }).then((confirmed) =>{

                  window.location.reload();
                });
                }
              });

          
          } else {
            swal("You have cancelled on deleting this data");
          }
        });

          });
        });

</script>

<script>
$(document).ready(function() {

  $('.confirm_del_driver_btn').click(function(e){

    e.preventDefault();

    var id = $(this).val();

        swal({
          title: "Are you sure?",
          text: "Once deleted, you will not be able to recover this records!",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          if (willDelete) {
              $.ajax({

                
                url: "driver/confirm-delete/"+id,
                success: function(response) {
                          swal({
                  title: response.status,
                  text: response.status_text,
                  icon: response.status_icon,
                  button: "OK",
                }).then((confirmed) =>{

                  window.location.reload();
                });
                }
              });

          
          } else {
            swal("You have cancelled on deleting this data");
          }
        });

          });
        });

</script>
</body>
</html>
    