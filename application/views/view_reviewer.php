<?php defined('BASEPATH') or exit('Scripts access does not allowed'); ?>

<table class="table table-hover">
  <thead>
    <tr class="table-primary">
      <th scope="col">SN</th>
      <th scope="col">Username</th>
      <th scope="col">Room No</th>
      <th scope="col">Members</th>
      <th scope="col">Check In Date</th>
      <th scope="col">Check Out Date</th>
      <th scope="col">Total Amount</th>
      <th scope="col">Status</th>
      <th scope="col">#</th>
    </tr>
  </thead>
  <tbody>

	<?php
		$sr_no = 1;
		// print_r($visiters);
		foreach($visiters as $key_visit){

	// form handling multiple
	echo form_open('hotel/delete');	
	?>
	<tr class="table-secondary">
	<td>
		<?php echo $sr_no++;?>
	</td>

	<input type="hidden" class="form-control" name="d_id" value="<?php echo $key_visit['id'] ?>" />
	<td>
		<input type="text" class="form-control" name="d_name" value="<?php echo $key_visit['name'] ?>"  disabled/>
	</td>
	<td>
		<input type="text" class="form-control" name="d_room_no" value="<?php echo $key_visit['room_no']  ?>"  disabled/>
	</td>
	<td>
		<input type="text" class="form-control" name="d_members" value="<?php echo $key_visit['members'] ?>"   disabled/>
	</td>
	<td>
		<input type="text" class="form-control" name="d_check_in_date" value="<?php echo $key_visit['check_in_date'] ?>"   disabled/>
	</td>
	<!--<input type="text" class="form-control" name="d_check_out_date" value="<?php echo $key_visit['check_out_date'] ?>"   />
	<input type="text" class="form-control" name="d_total_amount" value="<?php echo $key_visit['total_amount'] ?>"   />-->	
	<?php
	if($key_visit['status'] == 'inactive'){
	?>
	<td>
		<input type="text" class="form-control datepicker" name="d_check_out_date" value="<?php echo $key_visit['check_out_date'] ?>"   disabled/>
	</td>
	<td>
		<input type="text" class="form-control" name="d_total_amount" value="<?php echo $key_visit['total_amount'] ?>"   disabled/>
	</td>

	<td>
		<input type="text" class="form-control" name="d_status" value="<?php echo $key_visit['status'] ?>" disabled>
	</td>
	<?php	
	}elseif($key_visit['status'] == 'active'){
	?>
	<td>
		<input type="text" class="form-control datepicker" name="d_check_out_date" value="<?php echo $key_visit['check_out_date'] ?>"   />
	</td>
	<td>
		<input type="text" class="form-control" name="d_total_amount" value="<?php echo $key_visit['total_amount'] ?>"   />
	</td>

	<td>
		<select class="form-control" name="d_status">
		<option class="form-control" value="<?php echo $key_visit['status'] ?>" ><?php echo $key_visit['status'] ?></option>
		<option class="form-control" value="inactive" >inactive</option>
		</select>
	</td>	
	<?php	
	}  
	?>	
	<td>
		<input type="submit" class="btn btn-outline-primary" name="d_delete" value="deactive" />
	</td>
	<?php echo form_close();
	}
	?>

	</tbody>
</table>


<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="/resources/demos/style.css">
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script>
		$(function(){
	 	 	$( ".datepicker" ).datepicker({dateFormat: "yy-mm-dd" });
		});
	</script>
</body>
</html>