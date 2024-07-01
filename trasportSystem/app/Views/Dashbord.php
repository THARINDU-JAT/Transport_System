<?= $this->extend('layout/default') ?>

<?= $this->section('content') ?>

<section class="section">

          <div class="section-header">
            <ul>
            <h1><i class="fa-solid fa-house"></i> &nbsp;Dashboard</h1>
            </ul>
          </div>

                   <!-- START: Card Data-->
                <div class="row">
                    <div class="col-12 col-sm-6 col-xl-3 mt-3">
                        <div class="card shadow p-3 mb-5 bg-body rounded">
                            <div class="card-body">
                                <img src="<?=base_url()?>/template/template/assets/img/avatar/Admin.jpg" class="rounded-circle-lg" alt="admins" class="float-right" width="50" height="50" align = "right">
                                <h6 class="card-title font-weight-bold">Registered</h6>
                                <h6 class="card-subtitle mb-2 text-muted"><a href="<?= base_url('admins')?>">ADMINS</a> &nbsp; &nbsp;<i class="fa-solid fa-hand-point-left fa-beat" style= "color: #011ffe;"></i></h6>
                                 <div class="h5 mb-0 font-weight-bold text-gray-800">

                                 <?php

                                 $connection = mysqli_connect("localhost","root","","transport_db","3307");
                                 $query = "SELECT id FROM admins ORDER BY id";
                                 $query_run = mysqli_query($connection, $query);
                                 $row = mysqli_num_rows($query_run);

                                 echo '<h1> '.$row.'</h1>';
                                 
                                 ?>

                                 </div>
                            </div>
                        </div>
                    </div>
                   <div class="col-12 col-sm-6 col-xl-3 mt-3">
                        <div class="card shadow p-3 mb-5 bg-body rounded">
                            <div class="card-body">
                                 <img src="<?=base_url()?>/template/template/assets/img/avatar/users.jpg" class="rounded-circle-lg" alt="member" class="float-right" width="50" height="50" align = "right">
                                <h6 class="card-title font-weight-bold">Registered Staff</h6>
                                <h6 class="card-subtitle mb-2 text-muted"><a href="<?= base_url('staff')?>">MEMBERS</a>&nbsp; &nbsp;<i class="fa-solid fa-hand-point-left fa-beat" style= "color: #011ffe;"></i></h6>
                               
                                 <div class="h5 mb-0 font-weight-bold text-gray-800">

                                 <?php

                                 $connection = mysqli_connect("localhost","root","","transport_db","3307");
                                 $query = "SELECT id FROM staff ORDER BY id";
                                 $query_run = mysqli_query($connection, $query);
                                 $row = mysqli_num_rows($query_run);

                                 echo '<h1> '.$row.'</h1>';
                                 
                                 ?>

                                 </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-xl-3 mt-3">
                        <div class="card shadow p-3 mb-5 bg-body rounded">
                            <div class="card-body">
                                <img src="<?=base_url()?>/template/template/assets/img/avatar/visitors.jpeg" class="rounded-circle-lg" alt="admins" class="float-right" width="50" height="50" align = "right">
                                <h6 class="card-title font-weight-bold">Registered</h6>
                                <h6 class="card-subtitle mb-2 text-muted"><a href="<?= base_url('visitors')?>">VISITORS&nbsp; &nbsp;<i class="fa-solid fa-hand-point-left fa-beat" style= "color: #011ffe;"></i></h6></a>
                               <div class="h5 mb-0 font-weight-bold text-gray-800">

                                 <?php

                                 $connection = mysqli_connect("localhost","root","","transport_db","3307");
                                 $query = "SELECT id FROM visitors ORDER BY id";
                                 $query_run = mysqli_query($connection, $query);
                                 $row = mysqli_num_rows($query_run);

                                 echo '<h1> '.$row.'</h1>';
                                 
                                 ?>

                                 </div>
                            </div>
                        </div>
                    </div>
                   <div class="col-12 col-sm-6 col-xl-3 mt-3">
                        <div class="card shadow p-3 mb-5 bg-body rounded">
                            <div class="card-body">
                               <img src="<?=base_url()?>/template/template/assets/img/avatar/driver.jpg" class="rounded-circle-lg" alt="driver" class="float-right" width="50" height="50" align = "right">
                                <h6 class="card-title font-weight-bold">Registered</h6>
                                <h6 class="card-subtitle mb-2 text-muted"><a href="<?= base_url('drivers')?>">DRIVERS&nbsp; &nbsp;<i class="fa-solid fa-hand-point-left fa-beat" style= "color: #011ffe;"></i></h6></a>
                                  <div class="h5 mb-0 font-weight-bold text-gray-800">

                                 <?php

                                 $connection = mysqli_connect("localhost","root","","transport_db","3307");
                                 $query = "SELECT id FROM drivers ORDER BY id";
                                 $query_run = mysqli_query($connection, $query);
                                 $row = mysqli_num_rows($query_run);

                                 echo '<h1> '.$row.'</h1>';
                                 
                                 ?>

                                 </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-xl-3 mt-3">
                                            <div class="card shadow p-3 mb-5 bg-body rounded">
                                                <div class="card-body">
                                                    <img src="<?=base_url()?>/template/template/assets/img/avatar/1.webp" class="rounded-circle-lg" alt="car" class="float-right" width="60" height="60" align = "right">
                                                    <h6 class="card-title font-weight-bold">Registered</h6>
                                                    <h6 class="card-subtitle mb-2 text-muted"><a href="<?= base_url('vehicles')?>">VEHICLES&nbsp; &nbsp;<i class="fa-solid fa-hand-point-left fa-beat" style= "color: #011ffe;"></i></h6></a>
                     <div class="h5 mb-0 font-weight-bold text-gray-800">

                                 <?php

                                 $connection = mysqli_connect("localhost","root","","transport_db","3307");
                                 $query = "SELECT id FROM vehicles ORDER BY id";
                                 $query_run = mysqli_query($connection, $query);
                                 $row = mysqli_num_rows($query_run);

                                 echo '<h1> '.$row.'</h1>';
                                 
                                 ?>

                                 </div>
                            </div>
                        </div>
                    </div>
                    
        </section>

<?= $this->endSection() ?>