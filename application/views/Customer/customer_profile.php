<div class="content-wrapper">
 <section class="content">
 <h1> Customer Profile View</h1>
<div class="row">
<?php  ?>

 <table class="table-hover table">
 	<thead>
 		<th>Key</th>
 		<th>value</th>
 		
 	</thead>
 	<tbody>
 	     
         <?php  
         
          foreach ($customer[0] as $key=> $value) {
            echo "<tr><td>".$key."</td>";
            echo "<td>".$value."</td></tr>";
            
           }?>
          
        
     <div class="row">
     <div class="col-md-4">
     <img src="<?php echo base_url('uploads/customers/').$customer[0]->image;?>" width=200 alt=""/>
     </div>
     <div class="col-md-8"></div>    
 		<div class='dropdown col-md-4'>
    <button class='btn btn-xs btn-primary dropdown-toggle' type='button' data-toggle='dropdown'>
    <span class='caret'></span></button>
    <ul class='dropdown-menu'>
      <li><a href='<?php echo base_url('customer')."/".$customer[0]->id; ?>'><span class='fa fa-eye' aria-hidden='true'></span>view</a></li>
      <li><a href='<?php echo base_url('customer')."/".$customer[0]->id; ?>/edit'><span class='fa fa-pencil-square-o' aria-hidden='true'></span>edit</a></li>
      <li><a href='<?php echo base_url('remove/').$customer[0]->id?>'><span class='fa fa-trash' aria-hidden='true'></span>delete</a></li>
      
    </ul>
  </div>
</div>
 		</div> 
 	</tbody>
 </table>
</div>

</section>
</div>
