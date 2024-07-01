<?= $this->extend('layout/default') ?>

<?= $this->section('content') ?>

<section class="section">
          <div class="section-header">
            <ul>
            <h1><i class="fa-solid fa-user-tie"></i><i class="fa-solid fa-pen"></i>  &nbsp; Edit Visitors</h1>
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
                                    <a href="<?= base_url('visitors')?>"><button type="button" class="btn btn-outline-warning rounded-btn btn-medium"><i class="fa-solid fa-arrow-left"></i> &nbsp; Back</button></a>
                                </div>
                         </div>

                    </div>
                    
                </div>
                <!-- END: Breadcrumbs-->

                <!-- START: Card Data-->
                <div class="row">
                    <div class="col-9 mt-4">
                        <div class="card shadow p-3 mb-5">
                          <div class="card-content">
                                <div class="card-body">
                                    <div class="row">                                           
                                        <div class="col-12">
                                            </div>
                                             <form action="<?=base_url('visitor/update/'.$visitor['id'])?>" name="createForm" id = "createForm" method="post">
                                                <div class="form-row">
                                                    <div class="col-md-4 mb-3">
                                                        <label for="validationCustom01"><b>NIC Number</b><span style="color:red; font-size: 20px;">*</span></label>
                                                        <input type="text" class="form-control rounded <?php echo (isset($validation) && $validation->hasError('nic'))? 'is-invalid' : '';?>" id="nic" name = "nic" value="<?=$visitor['nic']?>">
                                                        <?php
                                                                 if(isset($validation) && $validation->hasError('nic')){
                                                                        echo '<p class = "invalid-feedback">'.$validation->getError('nic').'</p>';
                                                                 }
                                                        
                                                        ?>
                                                    </div>
                                                    <div class="col-md-4 mb-3">
                                                        <label for="validationCustom01"><b>Visitor's Name</b><span style="color:red; font-size: 20px;">*</span></label>
                                                        <input type="text" class="form-control <?php echo (isset($validation) && $validation->hasError('name'))? 'is-invalid' : '';?>" id="name" name= "name"value="<?=$visitor['name']?>">

                                                         <?php
                                                                 if(isset($validation) && $validation->hasError('name')){
                                                                        echo '<p class = "invalid-feedback">'.$validation->getError('name').'</p>';
                                                                 }
                                                        
                                                        ?>
                                                    </div>
                                                <div class="col-md-4 mb-3">
                                                        <label for="validationCustom01"><b>Visitor's Address</b><span style="color:red; font-size: 20px;">*</span></label>
                                                        <input type="text" class="form-control rounded <?php echo (isset($validation) && $validation->hasError('address'))? 'is-invalid' : '';?>" id="address" name = "address" value="<?=$visitor['address']?>">
                                                        <?php
                                                                 if(isset($validation) && $validation->hasError('address')){
                                                                        echo '<p class = "invalid-feedback">'.$validation->getError('address').'</p>';
                                                                 }
                                                        
                                                        ?>
                                                    </div>
                                                      <div class="col-md-4 mb-3">
                                                        <label for="validationCustom01"><b>Contact N0.</b><span style="color:red; font-size: 20px;">*</span></label>
                                                        <input type="text" class="form-control <?php echo (isset($validation) && $validation->hasError('phone'))? 'is-invalid' : '';?>" id="phone" name= "phone"value="<?=$visitor['phone']?>">

                                                         <?php
                                                                 if(isset($validation) && $validation->hasError('phone')){
                                                                        echo '<p class = "invalid-feedback">'.$validation->getError('phone').'</p>';
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
                </div>
                <!-- END: Card DATA-->
            </div>
        </main>
        <!-- END: Content-->

<?= $this->endSection() ?>