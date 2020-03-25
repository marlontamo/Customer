<div class="content-wrapper">
<div class="box box-default">
<?php
foreach($customers as $key){

 // var_dump($key);
}
?>
  



        <div class="box-header with-border">
        <form action="<?php echo base_url('/update');?>" method="post" enctype="multipart/form-data" >
          <h3 class="box-title">Edit Customer Form</h3>
             <input type="hidden" name="cust_id" value="<?php echo $key->id; ?>">
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Lastname</label>
              <input type="text" name="lastname" value="<?php echo $key->lastname; ?>" id="inputEmail3" placeholder="Lastname" size="50" class="form-control">
              </div>
              <!-- /.form-group -->
              <div class="form-group">
                <label>Firstname</label>
                <input type="text" name="firstname" value="<?php echo $key->firstname; ?>" id="inputEmail3" placeholder="Firstname" class="form-control">
              </div>
              <!-- /.form-group -->
              <div class="form-group">
              <label>Image</label>
                   
                    <!-- <input type="file" name="image" value="" id="inputEmail3" placeholder="image" class="form-control"> -->
                    <img src="<?php echo base_url('uploads/customers/').$key->image; ?>" width=100 alt="">
              </div>
              
            </div>
            <!-- /.col -->
            <div class="col-md-6">
              <div class="form-group">
              <label>Email</label>
                   
                    <input type="email" name="email" value="<?php echo $key->email; ?>" id="inputEmail3" placeholder="Email ex: john@example.com" class="form-control">
             
              </div>
              <div class="form-group">
              <label>City</label>
                   
                    <input type="text" name="city" value="<?php echo $key->city; ?>" id="inputEmail3" placeholder="city" class="form-control">
             
              </div>
              <div class="form-group">
              <label>registered Country</label>
                   
                    <input type="text" name="country-foredit" value="<?php echo $key->country; ?>" id="inputEmail3" placeholder="country" class="form-control">
             
              </div>
              <div class="form-group">
                  <label>Country</label>
                  <select name="country" class="form-control">
                    <option value="USA">USA</option>
                    <option value="ASIA">ASIA</option>
                    <option value="EUROPE">EUROPE</option>
                    <option value="JAPAN">JAPAN</option>
                    <option value="SINGAPORE">SINGAPORE</option>
                  </select>
                </div>
              <!-- /.form-group -->
              <div class="form-group">

                <div class="col-sm-10">
                      <input type="submit" name="addcustomer" value="Update Customer" id="inputEmail3" class="btn btn-sm btn-primary pull-right">
                      <a href="<?php echo base_url('/template');?>" class="btn btn-sm btn-danger pull-right">Cancel</a>
                </div>

              </div>
              
              <!-- /.form-group -->
            </div>
            <!-- /.col -->
             
          </div>
          <!-- /.row -->
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          <b>Brute Force</b>
        </div>
      </div>
      <!-- box -->
      </form>

      <div>
  </div>
  </div>
  