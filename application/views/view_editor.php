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
		// print_r($visiters);
		$sr_no = 1;
		foreach($visiters as $key_visit){
			
			echo form_open('hotel/update');
	?>
	<tr class="table-secondary">
	<td>
		<?php echo $sr_no++;?>
	</td>
	<?php		
			if($key_visit['status'] == 'inactive'){
	?>
				<input type="hidden" class="form-control" name="u_id" value="<?php echo $key_visit['id'] ?>" disabled>
				<td>
					<input type="text" class="form-control" name="u_name" value="<?php echo $key_visit['name'] ?>" disabled>
				</td>
				<td>
					<input type="text" class="form-control" name="u_room_no" value="<?php echo $key_visit['room_no'] ?>" disabled>
				</td>
				<td>
					<input type="text" class="form-control" name="u_members" value="<?php echo $key_visit['members'] ?>" disabled>
				</td>
				<td>
					<input type="text" class="form-control" name="u_check_in_date" value="<?php echo $key_visit['check_in_date'] ?>" disabled>
				</td>
				<td>
					<input type="text" class="form-control" id="datepicker" name="u_check_out_date" value="<?php echo $key_visit['check_out_date'] ?>" disabled>
				</td>
				<td>
					<input type="text" class="form-control" name="u_total_amount" value="<?php echo $key_visit['total_amount'] ?>" disabled>
				</td>
				<td>
					<input type="text" class="form-control" name="u_status" value="<?php echo $key_visit['status'] ?>" disabled>
				</td>
				<td>
					<input type="submit" class="btn btn-outline-primary" name="u_update" value="UPDATE" />
				</td>	
				<?php	
			}else{
				?>
				<input type="hidden" class="form-control" name="u_id" value="<?php echo $key_visit['id'] ?>">
				<td>
					<input type="text" class="form-control" name="u_name" value="<?php echo $key_visit['name'] ?>" disabled>
				</td>
				<td>
					<input type="text" class="form-control" name="u_room_no" value="<?php echo $key_visit['room_no'] ?>" disabled>
				</td>
				<td>
					<input type="text" class="form-control" name="u_members" value="<?php echo $key_visit['members'] ?>" disabled>
				</td>
				<td>
					<input type="text" class="form-control" name="u_check_in_date" value="<?php echo $key_visit['check_in_date'] ?>" disabled>
				</td>
				<td>
					<input type="text" class="form-control datepicker" name="u_check_out_date" value="<?php echo $key_visit['check_out_date'] ?>">
				</td>
				<td>
					<input type="text" class="form-control" name="u_total_amount" value="<?php echo $key_visit['total_amount'] ?>">
				</td>
				<td>
					<input type="text" class="form-control" name="u_status" value="<?php echo $key_visit['status'] ?>" disabled>
				</td>
				<td>
					<input type="submit" class="btn btn-outline-primary" name="u_update" value="UPDATE" />
				</td>
				<?php	
			}	
			echo  form_close(); 
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