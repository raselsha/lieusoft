<?php include('header.php'); ?>
			
	<div class="">
		<div class="title"><h4>Invoice #
			<?= rand(0,9).date('dHs');?> </h4>
		</div>
		<form method="post" action="invoice.php">
					<table class="table ">
						<tr>
							<td>Client Name:</td>
							<td><input type="text" name="client_name" class="form-control"></td>
						</tr>
						<tr>
							<td>Position:</td>
							<td><input type="text" name="client_position" class="form-control"></td>
						</tr>
						<tr>
							<td>Address</td>
							<td>
								<textarea name="client_address" class="form-control"></textarea>
							</td>
						</tr>
						<tr>
							<td>Item:</td>
							<td><input type="text" name="item_name" class="form-control"></td>
						</tr>
						<tr>
							<td>Price:</td>
							<td><input type="text" name="price" class="form-control"></td>
						</tr>
						<tr>
							<td>Discount:</td>
							<td><input type="text" name="discount" class="form-control"></td>
						</tr>
						<tr>
							<td>Paid:</td>
							<td><input type="text" name="paid" class="form-control"></td>
						</tr>
						<tr>
							<td>Due time <small>(days)</small>:</td>
							<td><input type="text" name="due_time" class="form-control"></td>
						</tr>
						<tr>
							<td></td>
							<td><input type="submit" name="submit" value="Print" class="btn btn-primary"></td>
						</tr>
					</table>
				</form>
	</div>
<?php include('footer.php'); ?>