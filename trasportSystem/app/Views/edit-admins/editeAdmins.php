<?= $this->extend('layout/default') ?>

<?= $this->section('content') ?>

<section class="section">
          <div class="section-header">
            <ul>
            <h1><i class="fa-solid fa-user-edit"></i>  &nbsp; Edit Admins</h1>
            </ul>
          </div>

          <!-- START: Main Content-->
        <main>
            <div class="container-fluid">
                <!-- START: Breadcrumbs-->
                <div class="row ">
                    <div class="col-12  align-self-center">
                        <div class="sub-header mt-3 py-3 px-3 align-self-center d-sm-flex w-100 rounded">
                            <div class="w-sm-100 mr-auto"><h4 class="mb-0">Edit Information</h4></div>

                              <div class="btn-group mb-2">
                                    <a href="<?= base_url('admins')?>"><button type="button" class="btn btn-outline-warning rounded-btn btn-medium"><i class="fa-solid fa-arrow-left"></i>  &nbsp;Back</button></a>
                                </div>
                         </div>

                    </div>
                    
                </div>
                <!-- END: Breadcrumbs-->

                <!-- START: Card Data-->
                <div class="row">
                    <div class="col-12 mt-4">
                        <div class="card shadow p-3 mb-5">
                          <div class="card-content">
                                <div class="card-body">
                                    <div class="row">                                           
                                        <div class="col-12">

                                            </div>
                                             <form action="<?=base_url('admins/update/'.$admin['id'])?>" method="post">
                                                <div class="form-row">
                                                    <div class="col-md-4 mb-3">
                                                        <label for="validationCustom01"><b>First Name</b><span style="color:red; font-size: 20px;">*</span></label>
                                                        <input type="text" class="form-control rounded <?php echo (isset($validation) && $validation->hasError('firstName'))? 'is-invalid' : '';?>" id="firstName" name = "firstName" value="<?=$admin['firstName']?>">
                                                        <?php
                                                                 if(isset($validation) && $validation->hasError('firstName')){
                                                                        echo '<p class = "invalid-feedback">'.$validation->getError('firstName').'</p>';
                                                                 }
                                                        
                                                        ?>
                                                    </div>
                                                    <div class="col-md-4 mb-3">
                                                        <label for="validationCustom02"><b>Last Name</b><span style="color:red; font-size: 20px;">*</span></label>
                                                        <input type="text" class="form-control <?php echo (isset($validation) && $validation->hasError('lastName'))? 'is-invalid' : '';?>" id="lastName" name= "lastName"value="<?=$admin['lastName']?>">

                                                         <?php
                                                                 if(isset($validation) && $validation->hasError('lastName')){
                                                                        echo '<p class = "invalid-feedback">'.$validation->getError('lastName').'</p>';
                                                                 }
                                                        
                                                        ?>
                                                    </div>
                                                    <div class="col-md-4 mb-3">
                                                  <label for="validationCustom02"><b>Email Address</b><span style="color:red;font-size: 20px;">*</span></label>
                                                    <input type="text" class="form-control <?php echo (isset($validation) && $validation->hasError('email'))? 'is-invalid' : '';?>" id="email" name="email" value="<?=$admin['email']?>">
                                                     <?php
                                                                 if(isset($validation) && $validation->hasError('email')){
                                                                        echo '<p class = "invalid-feedback">'.$validation->getError('email').'</p>';
                                                                 }
                                                        
                                                        ?>
                                                </div>
                                                </div>
                                                
                                                <div class="form-row">
                                                    <div class="col-md-4 mb-3">
                                                       <label for="validationCustomUsername"><b>Phone Number</b><span style="color:red;font-size: 20px;">*</span></label>
                                                        <input type="text" class="form-control rounded <?php echo (isset($validation) && $validation->hasError('phone'))? 'is-invalid' : '';?>" id="phone" name="phone" value="<?=$admin['phone']?>">

                                                        <?php
                                                                 if(isset($validation) && $validation->hasError('phone')){
                                                                        echo '<p class = "invalid-feedback">'.$validation->getError('phone').'</p>';
                                                                 }
                                                        
                                                        ?>
                                                    </div>
                                                    <div class="col-md-4 mb-3">
                                                            <label for="validationCustom02"><b>Address</b><span style="color:red;font-size: 20px;">*</span></label>
                                                        <input type="text" class="form-control <?php echo (isset($validation) && $validation->hasError('address'))? 'is-invalid' : '';?>" id="address" name="address" value="<?=$admin['address']?>">

                                                        <?php
                                                                 if(isset($validation) && $validation->hasError('address')){
                                                                        echo '<p class = "invalid-feedback">'.$validation->getError('address').'</p>';
                                                                 }
                                                        
                                                        ?>
                                                    </div>
                                                    <div class="col-md-4 mb-3">
                                                     <label for="validationCustom02"><b>Password</b><span style="color:red;font-size: 20px;">*</span></label>
                                                    <input type="password" class="form-control <?php echo (isset($validation) && $validation->hasError('pass'))? 'is-invalid' : '';?>" id="pass" name="pass" value="<?=$admin['pass']?>">

                                                    <?php
                                                                 if(isset($validation) && $validation->hasError('pass')){
                                                                        echo '<p class = "invalid-feedback">'.$validation->getError('pass').'</p>';
                                                                 }
                                                        
                                                        ?>
                                                </div>
                                                 <div class="col-md-4 mb-3">
                                                    <label for="validationCustom02"><b>Confirm Password</b><span style="color:red;font-size: 20px;">*</span></label>
                                                    <input type="password" class="form-control <?php echo (isset($validation) && $validation->hasError('cpass'))? 'is-invalid' : '';?>" id="cpass" name="cpass" value="<?=$admin['cpass']?>">
                                                    <?php
                                                                 if(isset($validation) && $validation->hasError('cpass')){
                                                                        echo '<p class = "invalid-feedback">'.$validation->getError('cpass').'</p>';
                                                                 }
                                                        
                                                        ?>
                                                </div>
                                                   

                                                <div class="col-md-4 mb-3">
                                                     <label for="validationDefault02"><b>Group</b><span style="color:red;font-size: 20px;">*</span></label>
                                                      <select class="form-control  <?php echo (isset($validation) && $validation->hasError('groups'))? 'is-invalid' : '';?>" id="groups" name = "groups" value="<?=$admin['groups']?>">
                                                         <option selected disabled value="">--Select--</option>
                                                                <option value="SUPER ADMIN">SUPER ADMIN</option>
                                                                <option value="ADMIN">ADMIN</option>
                                                                <option value="PROJECT MANAGER">PROJECT MANAGER</option>
                                                                </select>
                               <?php
                                                                 if(isset($validation) && $validation->hasError('groups')){
                                                                        echo '<p class = "invalid-feedback">'.$validation->getError('groups').'</p>';
                                                                 }
                                                        
                                                        ?>
                                                    </div>
                                                        <!-- <label for="validationDefault02"><b>Group</b><span style="color:red;font-size: 20px;">*</span></label>
                                                        <input type="text" class="form-control rounded <?php echo (isset($validation) && $validation->hasError('groups'))? 'is-invalid' : '';?>" id="groups" name = "groups" value="<?=$admin['groups']?>">
                                                        <?php
                                                                 if(isset($validation) && $validation->hasError('groups')){
                                                                        echo '<p class = "invalid-feedback">'.$validation->getError('groups').'</p>';
                                                                 }
                                                        
                                                        ?>
                                                    </div> -->
                                                </div>
                                                 
                                               
                                        </div>
                                    </div>
                                </div>
                                 
                            </div>
                             <button type="submit" class="btn btn-primary"><i class="fa-solid fa-edit"></i>&nbsp; Update</button>
                                             </form>
                        </div>
                       
                    </div>
                </div>
                <!-- END: Card DATA-->
                
            </div>
            
        </main>
        <!-- END: Content-->

<?= $this->endSection() ?>