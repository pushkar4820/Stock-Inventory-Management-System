<+++++++++

?php
<td>
	<button data-toggle="modal" data-target="#edit-product" class="btn btn-space md-trigger btn-danger" onclick="edit_pro("
		<script>
			$(docu
			ment).ready(function() {
			$(".chosen-select").chosen({
			width: "100%"
			});
			});
		</script>
		<?php
require 'config.php';
// echo $_REQUEST['firm']; die;
$count = $_POST['count'];
$conn = connection();
$firm = "SELECT firm_id,firm_name FROM firm ORDER BY firm_name ASC";
$fdata = $conn->query($firm);

$sql = "SELECT cat_id,cat_name FROM product p inner join category c on c.cat_id=p.pro_grpid inner join type t on t.ty_id=p.pro_typeid inner join firm f on f.firm_id = p.pro_firmid
    ORDER BY cat_name ASC";
$data = $conn->query($sql);

?>

		<td>
			<center>
				<?php echo $count+1; ?>
			</center>
		</td>
		<td>
			<select class="form-control input-xs chosen-select" id="bill_f_"
				<?php echo $count; ?>" name="bill_f_<?php echo $count; ?>" onchange="get_cat(this.value,this.id);" required="">
				<option value="">Select Firm</option>
				<?php foreach ($fdata as $row) { ?>
				<option value=""
					<?php echo $row['firm_id']; ?>"><?php echo ucwords($row['firm_name']); ?>
				</option>
				<?php } ?>
			</select>
		</td>
		<td>
			<select class="form-control input-xs chosen-select" id="bill_p_"
				<?php echo $count; ?>" name="bill_p_<?php echo $count; ?>" onchange="get_size(this.value,this.id);" required="">
				<option value="">Select Product</option>
				<?php foreach ($data as $row) { ?>
				<option value=""
					<?php echo $row['cat_id']; ?>"><?php echo ucwords($row['cat_name']); ?>
				</option>
				<?php } ?>
			</select>
		</td>
		<td>
			<select class="form-control input-xs chosen-select" id="bill_s_"
				<?php echo $count; ?>" name="bill_s_<?php echo $count; ?>" onchange="get_pde(this.id);" required="">
				<option value="">Size</option>
			</select>
		</td>
		<td style="width: 100px;">
			<input type="number" style="width: 100px;" min="1" max="???" step="1" id="bill_q_"<?php echo $count; ?>" required="" name="bill_q_<?php echo $count; ?>" onkeyup="calc(this.id,this.value);" class="form-control input-xs" required="">
		</td>
		<td id="bill_a_"
			<?php echo $count; ?>">
			<!-- Available&nbsp;: -->
		</td>
		<td>
			<center>
				<input type="number" name="to_amt_"<?php echo $count; ?>" id="to_amt_<?php echo $count; ?>" value="" style="width: 100px;">
				<input type="hidden" name="firm" value=""<?php echo $_POST['firm']; ?>">
			</center>
		</td>
		<?php
require 'config.php';
// echo $_REQUEST['firm']; die;
$count = $_POST['count'];
$conn = connection();
$firm = "SELECT firm_id,firm_name FROM firm ORDER BY firm_name ASC";
$fdata = $conn->query($firm);

$sql = "SELECT cat_id,cat_name FROM product p inner join category c on c.cat_id=p.pro_grpid inner join type t on t.ty_id=p.pro_typeid inner join firm f on f.firm_id = p.pro_firmid
    ORDER BY cat_name ASC";
$data = $conn->query($sql);

?>

		<td>
			<center>
				<?php echo $count+1; ?>
			</center>
		</td>
		<td>
			<select class="form-control input-xs chosen-select" id="bill_f_"
				<?php echo $count; ?>" name="bill_f_<?php echo $count; ?>" onchange="get_cat(this.value,this.id);" required="">
				<option value="">Select Firm</option>
				<?php foreach ($fdata as $row) { ?>
				<option value=""
					<?php echo $row['firm_id']; ?>"><?php echo ucwords($row['firm_name']); ?>
				</option>
				<?php } ?>
			</select>
		</td>
		<td>
			<select class="form-control input-xs chosen-select" id="bill_p_"
				<?php echo $count; ?>" name="bill_p_<?php echo $count; ?>" onchange="get_size(this.value,this.id);" required="">
				<option value="">Select Product</option>
				<?php foreach ($data as $row) { ?>
				<option value=""
					<?php echo $row['cat_id']; ?>"><?php echo ucwords($row['cat_name']); ?>
				</option>
				<?php } ?>
			</select>
		</td>
		<td>
			<select class="form-control input-xs chosen-select" id="bill_s_"
				<?php echo $count; ?>" name="bill_s_<?php echo $count; ?>" onchange="get_pde(this.id);" required="">
				<option value="">Size</option>
			</select>
		</td>
		<td style="width: 100px;">
			<input type="number" style="width: 100px;" min="1" max="???" step="1" id="bill_q_"<?php echo $count; ?>" required="" name="bill_q_<?php echo $count; ?>" onkeyup="calc(this.id,this.value);" class="form-control input-xs" required="">
		</td>
		<td id="bill_a_"
			<?php echo $count; ?>">
			<!-- Available&nbsp;: -->
		</td>
		<td>
			<center>
				<input type="number" name="to_amt_"<?php echo $count; ?>" id="to_amt_<?php echo $count; ?>" value="" style="width: 100px;">
				<input type="hidden" name="firm" value=""<?php echo $_POST['firm']; ?>">
			</center>
		</td>
		.chosen-container .chosen-results li.highlighted {
		background-color: #d0d0d0; /* Change to your desired highlight color */
		color: #000; /* Change to your desired text color */
		}
		.chosen-container .chosen-results li.no-results {
		background-color: #f8f8f8; /* Change to your desired background color */
		color: #999; /* Change to your desired text color */
		}
		.chosen-container-multi .chosen-choices li.search-choice {
		background-color: #e0e0e0; /* Change to your desired background color */
		border-color: #ccc; /* Change to your desired border color */
		color: #333; /* Change to your desired text color */
		}
		.chosen-container-multi .chosen-choices li.search-choice {
		background-color: #e0e0e0; /* Change to your desired background color */
		border-color: #ccc; /* Change to your desired border color */
		color: #333; /* Change to your desired text color */
		}
		<?php echo $row['pro_id']; ?>);"><i class="icon icon-left mdi mdi-eyedropper"></i> EDIT
	</button>
</td> 1
$id = $_REQUEST['id'];
// echo $id;

// die;
$price = $_REQUEST['price'];
$cgst = $_REQUEST['cgst'];
$igst = $_REQUEST['igst'];
$sgst = $_REQUEST['sgst'];


require 'config.php';
$conn = connection();
$pro_info = "UPDATE `product` SET `pro_price` = $price, `cgst` = $cgst, `igst` = $igst, `sgst` = $sgst WHERE `pro_id` = $id" ;
$inf = $conn->query($pro_info);

$sql = "SELECT * FROM product p inner join category c on c.cat_id=p.pro_grpid inner join type t on t.ty_id=p.pro_typeid inner join firm f on f.firm_id=p.pro_firmid
WHERE 0=0 ORDER BY cat_name ASC";
$data = $conn->query($sql);
$conn=null;

?>


<table class="table table-condensed table-hover table-bordered table-striped">
	<thead>
		<tr>
			<th>
				<center>S. no.</center>
			</th>
			<!-- <th><center>Name</center></th> -->
			<th>
				<center>Firm</center>
			</th>
			<th>
				<center>Category</center>
			</th>
			<th>
				<center>Type</center>
			</th>
			<th>
				<center>Price</center>
			</th>
			<th>
				<center>CGST</center>
			</th>
			<th>
				<center>IGST</center>
			</th>
			<th>
				<center>SGST</center>
			</th>
			<th>
				<center>Quantity</center>
			</th>
			<th>
				<center>Status</center>
			</th>
			<th>
				<center>Edit</center>
			</th>
		</tr>
	</thead>
	<tbody style="color:black;">
		<?php $s=0;
		foreach ($data as $row){ $s++; ?>
		<tr>
			<td>
				<center>
					<?php echo $s; ?>
				</center>
			</td>
			<!-- <td><?php echo ucwords($row['pro_name']); ?></td> -->
			<td>
				<?php echo ucwords($row['firm_name']); ?>
			</td>
			<!-- <td><?php echo ucwords($row['pro_des']); ?></td> -->
			<td>
				<?php echo ucwords($row['cat_name']); ?>
			</td>
			<td>
				<?php echo ucwords($row['ty_name']); ?>
			</td>
			<td>
				<?php echo ucwords($row['pro_price']); ?>
			</td>
			<td>
				<?php echo ucwords($row['cgst'])."%"; ?>
			</td>
			<td>
				<?php echo ucwords($row['igst'])."%"; ?>
			</td>
			<td>
				<?php echo ucwords($row['sgst'])."%"; ?>
			</td>
			<td>
				<?php echo ucwords($row['pro_qty']); ?>
			</td>
			<td>
				<?php
			if ($row['pro_qty'] > 0) {
				echo "Available";
			}else{
				echo "<span style='color:red;'>Out of stock</span>";
			}
			?>
			</td>
			<td>
				<button data-toggle="modal" data-target="#edit-product" class="btn btn-space md-trigger btn-danger" onclick="edit_pro("
					<?php echo $row['pro_id']; ?>);"><i class="icon icon-left mdi mdi-eyedropper"></i> EDIT
				</button>
			</td>
		</tr>
		<?php   } ?>
	</tbody>
</table>