<?php defined('BASEPATH') or exit('Scripts access does not allowed'); ?>
<?php
echo br(2);
?>
<div class="container">

	<!-- <form> -->

	<?php echo form_open('hotel/insert'); ?>
	  	<fieldset>
	    <h3 style="text-align: center;">Visitor Entry</h3>

	    <div class="form-group">
	      	<input type="text" name="name" class="form-control" id="name" aria-describedby="" placeholder="Enter Visiter Name">
	    </div>
    	<?php if (form_error('name')){?>
    	<div class="alert alert-danger" role="alert">
  			<?php echo form_error('name');?>
		</div>
		<?php }?>
    	
    	<div class="form-group">
	      	<input type="text" name="room_no" class="form-control" id="room_no" aria-describedby="" placeholder="Enter Visiter Room No">
    	</div>
    	<?php if (form_error('room_no')){?>
    	<div class="alert alert-danger" role="alert">
  			<?php echo form_error('room_no');?>
		</div>
		<?php }?>

    	<div class="form-group">
	      	<input type="number" name="members" class="form-control" id="members" aria-describedby="" placeholder="Enter No of Members">
    	</div>
    	<?php if (form_error('members')){?>
    	<div class="alert alert-danger" role="alert">
  			<?php echo form_error('members');?>
		</div>
		<?php }?>

    	<div class="form-group">
	      	<input type="number" name="total_amount" class="form-control" id="total_amount" aria-describedby="" placeholder="Enter Entry Amount">
    	</div>
    	<?php if (form_error('total_amount')){?>
    	<div class="alert alert-danger" role="alert">
  			<?php echo form_error('total_amount');?>
		</div>
		<?php }?>

		<input type="submit" name="enter" value="Enter" class="btn btn-primary"/>
	<?php echo form_close(); ?>

    <!-- <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
	  </fieldset>
	</form> -->
</div>

