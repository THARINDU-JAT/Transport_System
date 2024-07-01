<?= $this->extend('layout/default') ?>

<?= $this->section('content') ?>

<section class="section">
          <div class="section-header">
            <ul>
            <h1><i class="fa-solid fa-user"></i><i class="fa-solid fa-plus"></i>  &nbsp; Create Admins</h1>
            </ul>
           </div>
          <!-- START: Main Content-->
        <main>
            <div class="container-fluid">
                <div class="btn-group mb-2" style=" float: right;">
                                    <a href="<?= base_url('admins')?>"><button type="button" class="btn btn-outline-warning rounded-btn btn-medium"><i class="fa-solid fa-arrow-left"></i>  &nbsp;Back</button></a>
                                </div><br/>
                <!-- START: Breadcrumbs-->
               <!-- START: Card Data-->
                <div class="row">
                    <div class="col-12 mt-3">
                                <div class="w-sm-100 mr-auto"><h4 class="mb-0">Enter Information</h4></div><br/><br/>
                        <div class="card shadow p-3 mb-5 bg-white rounded">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="row">                                           
                                        <div class="col-12">
                                            <form name="createForm" id = "createForm" method="post">
                                                <div class="form-row">
                                                    <div class="col-md-4 mb-3">
                                                        <label for="validationCustom01"><b>First Name</b><span style="color:red; font-size: 20px;">*</span></label>
                                                        <input type="text" class="form-control <?php echo (isset($validation) && $validation->hasError('firstName'))? 'is-invalid' : '';?>" id="firstName" name = "firstName" value="<?php echo set_value('firstName')?>">
                                                  <?php
                                                                 if(isset($validation) && $validation->hasError('firstName')){
                                                                        echo '<p class = "invalid-feedback">'.$validation->getError('firstName').'</p>';
                                                                 }
                                                        
                                                        ?>
                                                    </div>
                                                    <div class="col-md-4 mb-3">
                                                        <label for="validationCustom02"><b>Last Name</b><span style="color:red; font-size: 20px;">*</span></label>
                                                        <input type="text" class="form-control <?php echo (isset($validation) && $validation->hasError('lastName'))? 'is-invalid' : '';?>" id="lastName" name= "lastName"value="<?php echo set_value('lastName')?>">
                                                       <?php
                                                                 if(isset($validation) && $validation->hasError('lastName')){
                                                                        echo '<p class = "invalid-feedback">'.$validation->getError('lastName').'</p>';
                                                                 }
                                                        
                                                        ?>
                                                    </div>
                                                    <div class="col-md-4 mb-3">
                                                        <label for="validationCustom02"><b>Email Address</b><span style="color:red;font-size: 20px;">*</span></label>
                                                        <input type="text" class="form-control <?php echo (isset($validation) && $validation->hasError('email'))? 'is-invalid' : '';?>" id="email" name="email" value="<?php echo set_value('email')?>">
                                <?php
                                                                 if(isset($validation) && $validation->hasError('email')){
                                                                        echo '<p class = "invalid-feedback">'.$validation->getError('email').'</p>';
                                                                 }
                                                        
                                                        ?>
                                                </div>
                                             
                                            
                                                    <div class="col-md-4 mb-3">
                                                        <label for="validationCustomUsername"><b>Phone Number</b><span style="color:red;font-size: 20px;">*</span></label>
                                                        <div class="input-group">
                                                            <input oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" type="text" class="form-control  <?php echo (isset($validation) && $validation->hasError('phone'))? 'is-invalid' : '';?>" id="phone" name="phone" value="<?php echo set_value('phone')?>">
                                         <?php
                                                                 if(isset($validation) && $validation->hasError('phone')){
                                                                        echo '<p class = "invalid-feedback">'.$validation->getError('phone').'</p>';
                                                                 }
                                                        
                                                        ?>
                                                    </div>
                                                    </div>
                                                          <div class="col-md-4 mb-3">
                                                        <label for="validationCustom02"><b>Address</b><span style="color:red;font-size: 20px;">*</span></label>
                                                        <input type="text" class="form-control <?php echo (isset($validation) && $validation->hasError('address'))? 'is-invalid' : '';?>" id="address" name="address" value="<?php echo set_value('address')?>">
                          <?php
                                                                 if(isset($validation) && $validation->hasError('address')){
                                                                        echo '<p class = "invalid-feedback">'.$validation->getError('address').'</p>';
                                                                 }
                                                        
                                                        ?>
                                                    </div>
                                                        <div class="col-md-4 mb-3">
                                                        <label for="validationCustom02"><b>Password</b><span style="color:red;font-size: 20px;">*</span></label>
                                                        <input type="text" class="form-control <?php echo (isset($validation) && $validation->hasError('pass'))? 'is-invalid' : '';?>" id="pass" name="pass" value="<?php echo set_value('pass')?>">
                               
                                                    <?php
                                                                 if(isset($validation) && $validation->hasError('pass')){
                                                                        echo '<p class = "invalid-feedback">'.$validation->getError('pass').'</p>';
                                                                 }
                                                        
                                                        ?>
                                                </div>
                                                 <div class="col-md-4 mb-3">
                                                        <label for="validationCustom02"><b>Confirm Password</b><span style="color:red;font-size: 20px;">*</span></label>
                                                        <input type="text" class="form-control <?php echo (isset($validation) && $validation->hasError('cpass'))? 'is-invalid' : '';?>" id="cpass" name="cpass" value="<?php echo set_value('cpass')?>">
                              <?php
                                                                 if(isset($validation) && $validation->hasError('cpass')){
                                                                        echo '<p class = "invalid-feedback">'.$validation->getError('cpass').'</p>';
                                                                 }
                                                        
                                                        ?>
                                                </div>
                                              <div class="col-md-4 mb-3">
                                                        <label for="validationDefault02"><b>Group</b><span style="color:red;font-size: 20px;">*</span></label>
                                                      <select id="groups" name = "groups" class="form-control  <?php echo (isset($validation) && $validation->hasError('groups'))? 'is-invalid' : '';?>">
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
                                                </div>             
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                
                <!-- END: Card DATA-->
                <button type="submit" class="btn btn-primary"><i class="fa-solid fa-save"></i>&nbsp; Save</button>
                                             </form>
            </div>
                
            </div>
        
            </div>
        </main>
        <!-- END: Content-->

<?= $this->endSection() ?>