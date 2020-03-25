<div class="content-wrapper">
<div class="box box-default">
        <div class="box-header with-border">
        <form action="<?php echo base_url('/addcustomer');?>" method="post" enctype="multipart/form-data" >
          <h3 class="box-title">Add Customer Form</h3>

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
              <input type="text" name="lastname" value="" id="inputEmail3" placeholder="Lastname" size="50" class="form-control">
              </div>
              <!-- /.form-group -->
              <div class="form-group">
                <label>Firstname</label>
                <input type="text" name="firstname" value="" id="inputEmail3" placeholder="Firstname" class="form-control">
              </div>
              <!-- /.form-group -->
              <div class="form-group">
              <label>Image</label>
                   
                    <input type="file" name="image" value="" id="inputEmail3" placeholder="image" class="form-control">
                    
              </div>
              
            </div>
            <!-- /.col -->
            <div class="col-md-6">
              <div class="form-group">
              <label>Email</label>
                   
                    <input type="email" name="email" value="" id="inputEmail3" placeholder="Email ex: john@example.com" class="form-control">
             
              </div>
              <div class="form-group">
              <label>City</label>
                   
                    <input type="text" name="city" value="" id="inputEmail3" placeholder="city" class="form-control">
             
              </div>
              <!-- <div class="form-group">
              <label>Country</label>
                   
                    <input type="text" name="country" value="" id="inputEmail3" placeholder="country" class="form-control">
             
              </div> -->
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
                      <input type="submit" name="addcustomer" value="Add Customer" id="inputEmail3" class="btn btn-sm btn-primary pull-right">
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
  <form action="addview" method="post">
  <input type="hidden" name="cust_id" value="1">
  <input type="hidden" name="action" value="insert">
  <input type="submit" value="insert">
  </form>
  <form action="addview" method="post">
  <input type="hidden" name="cust_id" value="12">
  <input type="hidden" name="action" value="edit">
  <input type="submit" value="edit">
  </form>
  </div>
  </div>
  