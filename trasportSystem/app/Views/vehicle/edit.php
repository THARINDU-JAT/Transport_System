<?= $this->extend('layout/default') ?>

<?= $this->section('content') ?>

<section class="section">
          <div class="section-header">
            <ul>
            <h1><i class="fa-solid fa-car"></i><i class="fa-solid fa-pen"></i>  &nbsp; Edit Vehicle</h1>
            </ul>
          </div>

          <!-- START: Main Content-->
        <main>
            <div class="container-fluid">
                <!-- START: Breadcrumbs-->
                <div class="row ">
                    <div class="col-12  align-self-center">
                        <div class="sub-header mt-3 py-3 px-3 align-self-center d-sm-flex w-100 rounded">
                            <div class="w-sm-100 mr-auto"><h4 class="mb-0">Enter Information</h4></div>

                              <div class="btn-group mb-2">
                                    <a href="<?= base_url('vehicles')?>"><button type="button" class="btn btn-outline-warning rounded-btn btn-medium"><i class="fa-solid fa-arrow-left"></i> &nbsp; Back</button></a>
                                </div>
                         </div>

                    </div>
                    
                </div>
                <!-- END: Breadcrumbs-->
                <!-- Start: Card DATA-->
                <div class="row">
                    <div class="col-12 mt-4">
                        <div class="card shadow p-3 mb-5">
                          <div class="card-content">
                                <div class="card-body">
                                    <div class="row">                                           
                                        <div class="col-12">

                                            </div>
                                            <form action="<?=base_url('vehicle/update/'.$vehicle['id'])?>" name="createForm" id = "createForm" method="post">
                                                <div class="form-row">
                                                    <div class="col-md-4 mb-3">
                                                        <label for="validationCustom01"><b>License Plate No</b><span style="color:red; font-size: 20px;">*</span></label>
                                                        <input type="text" class="form-control rounded <?php echo (isset($validation) && $validation->hasError('license_plate_no'))? 'is-invalid' : '';?>" id="license_plate_no" name = "license_plate_no" value="<?=$vehicle['license_plate_no']?>">
                                                    <?php
                                                                 if(isset($validation) && $validation->hasError('license_plate_no')){
                                                                        echo '<p class = "invalid-feedback">'.$validation->getError('license_plate_no').'</p>';
                                                                 }
                                                        
                                                        ?>
                                                    </div>
                                                   
                                                    <div class="col-md-4 mb-3">
                                                        <label for="validationCustom02"><b>Chassis No</b><span style="color:red; font-size: 20px;">*</span></label>
                                                        <input type="text" class="form-control <?php echo (isset($validation) && $validation->hasError('chassis_no'))? 'is-invalid' : '';?>" id="chassis_no" name= "chassis_no"value="<?=$vehicle['chassis_no']?>">

                                                          <?php
                                                                 if(isset($validation) && $validation->hasError('chassis_no')){
                                                                        echo '<p class = "invalid-feedback">'.$validation->getError('chassis_no').'</p>';
                                                                 }
                                                        
                                                        ?>
                                                    </div>
                                                    <div class="col-md-4 mb-3">
                                                  <label for="validationCustom02"><b>Engine No</b><span style="color:red;font-size: 20px;">*</span></label>
                                                    <input type="text" class="form-control <?php echo (isset($validation) && $validation->hasError('engine_no'))? 'is-invalid' : '';?>" id="engine_no" name="engine_no" value="<?=$vehicle['engine_no']?>"">
                                                      <?php
                                                                 if(isset($validation) && $validation->hasError('engine_no')){
                                                                        echo '<p class = "invalid-feedback">'.$validation->getError('engine_no').'</p>';
                                                                 }
                                                        
                                                        ?>
                                                </div>
                                                    <div class="col-md-4 mb-3">
                                                            <label for="validationCustom02"><b>Model</b><span style="color:red;font-size: 20px;">*</span></label>
                                                        <input type="text" class="form-control <?php echo (isset($validation) && $validation->hasError('model'))? 'is-invalid' : '';?>" id="model" name="model" value="<?=$vehicle['model']?>">
  <?php
                                                                 if(isset($validation) && $validation->hasError('model')){
                                                                        echo '<p class = "invalid-feedback">'.$validation->getError('model').'</p>';
                                                                 }
                                                        
                                                        ?>
                                                    </div>
                                                               
                                                    <div class="col-md-4 mb-3">
                                                     <label for="validationCustom02"><b>Color</b><span style="color:red;font-size: 20px;">*</span></label>
                                                    <input type="text" class="form-control <?php echo (isset($validation) && $validation->hasError('color'))? 'is-invalid' : '';?>" id="color" name="color" value="<?=$vehicle['color']?>">

                                                    <?php
                                                                 if(isset($validation) && $validation->hasError('color')){
                                                                        echo '<p class = "invalid-feedback">'.$validation->getError('color').'</p>';
                                                                 }
                                                        
                                                        ?>
                                                    </div>
                                                 <div class="col-md-4 mb-3">
                                                    <label for="validationCustom02"><b>Manufacture Year</b><span style="color:red;font-size: 20px;">*</span></label>
                                                    <input type="text" class="form-control <?php echo (isset($validation) && $validation->hasError('m_year'))? 'is-invalid' : '';?>" id="m_year" name="m_year" value="<?=$vehicle['m_year']?>">
                                                     <?php
                                                                 if(isset($validation) && $validation->hasError('m_year')){
                                                                        echo '<p class = "invalid-feedback">'.$validation->getError('m_year').'</p>';
                                                                 }
                                                        
                                                        ?>
                                                </div>
                                                       <div class="col-md-4 mb-3">
                                                    <label for="validationCustom02"><b>Mileage</b><span style="color:red;font-size: 20px;">*</span></label>
                                                    <input type="text" class="form-control <?php echo (isset($validation) && $validation->hasError('mileage'))? 'is-invalid' : '';?>" id="mileage" name="mileage" value="<?=$vehicle['mileage']?>">
                                               <?php
                                                                 if(isset($validation) && $validation->hasError('mileage')){
                                                                        echo '<p class = "invalid-feedback">'.$validation->getError('mileage').'</p>';
                                                                 }
                                                        
                                                        ?>
                                                </div>
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

                
                <!-- END: Card DATA-->
            </div>
        </main>
        <!-- END: Content-->

<?= $this->endSection() ?>