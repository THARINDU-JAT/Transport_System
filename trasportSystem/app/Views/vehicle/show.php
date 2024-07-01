<?= $this->extend('layout/default') ?>

<?= $this->section('content') ?>

<section class="section">
          <div class="section-header">
            <ul>
            <h1><i class="fa-solid fa-car"></i> &nbsp;  Vehicles</h1>
            </ul>
          </div>

           <!-- START: Breadcrumbs-->
                <div class="row ">
                    <div class="col-12  align-self-center">
                        <div class="sub-header mt-3 py-3 px-3 align-self-center d-sm-flex w-100 rounded">
                            <div class="w-sm-100 mr-auto"><h4 class="mb-0">Vehicles' Information</h4></div>
                              <div class="btn-group mb-2">
                                    <a href="<?= base_url('vehicle/create')?>"><button type="button"class="btn btn-primary p-2 rounded mx-3 h4 mb-0 line-height-1 d-none d-lg-block"><span class="text-white font-weight-bold h4"><i class="fa-solid fa-file"></i>&nbsp;+</span></button></a>
                                </div>
                                <!-- <div class="btn-group mb-2">
                                    <a href="<?= base_url('vehicle/create')?>"><button type="button" class="btn btn-outline-primary rounded-btn btn-lg"><i class="fa-solid fa-plus"></i> &nbsp; New</button></a>
                                </div> -->
                         </div>
                    </div>
                    
                </div>
                <!-- END: Breadcrumbs-->
     <!-- START: Main Content-->
        <main>
            <div class="container-fluid">
                                <!-- START: Card Data-->
                <div class="row">
                    <div class="col-12 mt-3">
                        <div class="card shadow p-3 mb-5">
                            <div class="card-body shadow p-3 mb-5">
                                <div class="table-responsive">
                                    <table id="example" class="display table dataTable table-striped table-bordered">
                                        <thead>
                                            <tr>
                                             
                                                <th>License Plate No.</th>
                                                <th>Chassis No.</th>
                                                <th>Engine No.</th>
                                                <th>Model</th>
                                                <th>Color</th>
                                                <th>Manufacture Year</th>
                                                <th>Mileage</th>
                                                <th>Date</th>
                                                <th width = "200"><center>Manage</center></th>
                                            </tr>
                                            <?php if(!empty($vehicles)){
                                                
                                                foreach($vehicles as $vehicle){
                                                
                                                
                                                ?>
                                        </thead>
                                        <tbody>
                                            <tr>
                                             
                                             
                                                <td><?php echo $vehicle['license_plate_no']?></td>
                                                <td><?php echo $vehicle['chassis_no']?></td>
                                                <td><?php echo $vehicle['engine_no']?></td>
                                                <td><?php echo $vehicle['model']?></td>
                                                  <td><?php echo $vehicle['color']?></td>
                                             <td><?php echo $vehicle['m_year']?></td>
                                                 <td><?php echo $vehicle['mileage']?></td>
                                                   <td><?php echo $vehicle['date']?></td>
                                                    <td>
                                                        <a href="<?= base_url('vehicle/edit/'.$vehicle['id'])?>"  class="btn btn-primary"> <i class="fa fa-edit"></i>&nbsp; Edit</a>
                                                         <button type="button" value="<?= $vehicle['id']; ?>"  class="confirm_del_vehicle_btn btn btn-danger"> <i class="fa fa-trash"></i>&nbsp; Delete</button>
                                                                                                                                                                                                                   
                                                    </td>
                                            </tr>
                                            <?php } 
                                            }
                                            else{?>
                                                <tr>
                                                    <td colspan="9">Records not found</td>
                                                </tr>
                                                <?php }?>
                                    </table>
                                </div>
                            </div>
                        </div> 

                    </div>                  
                </div>
                <!-- END: Card DATA-->
            </div>
        </main>
        <!-- END: Content-->

<?= $this->endSection() ?>