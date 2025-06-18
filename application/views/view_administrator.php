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
    </tr>
  </thead>
  <tbody>
    <?php
		$sr_no = 1;
		foreach($visiters as $key_visit){
		echo form_open('hotel/delete');	
	?>
	<tr class="table-secondary">
	<td>
		<?php 	echo $sr_no++;?>
		<input type="hidden" name="d_id" class="form-control" value="<?php echo $key_visit['id'] ?>" disabled />
	</td>
	<td>
		<input type="text" class="form-control" name="d_name" value="<?php echo $key_visit['name'] ?>"  disabled />
	</td>
	<td>
		<input type="text" class="form-control" name="d_room_no" value="<?php echo $key_visit['room_no']  ?>"  disabled />
	</td>
	<td>
		<input type="text" class="form-control" name="d_members" value="<?php echo $key_visit['members'] ?>"   disabled />
	</td>
	<td>
		<input type="text" class="form-control" name="d_check_in_date" value="<?php echo $key_visit['check_in_date'] ?>"   disabled />
	</td>
	<td>
		<input type="text" class="form-control" name="d_check_out_date" value="<?php echo $key_visit['check_out_date'] ?>"   disabled />
	</td>
	<td>
		<input type="text" class="form-control" name="d_total_amount" value="<?php echo $key_visit['total_amount'] ?>"   disabled />
	</td>
	<td>
		<input class="form-control" name="d_status" value="<?php echo $key_visit['status'] ?>" value="<?php echo $key_visit['status'] ?>" disabled />
	</td>
	<?php echo form_close(); ?>

	</tr>
	<?php 
	}
	?>
	
	  </tbody>
	</table> 
</div>	
</body>
</html>