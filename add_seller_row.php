<?php
$allowed_types = ['image/jpeg', 'image/png'];
if (in_array($_FILES['file']['type'], $allowed_types)) {
    $safe_filename = basename($_FILES['file']['name']);
    move_uploaded_file($_FILES['file']['tmp_name'], "/secure/path/$safe_filename");
} else {
    echo "Invalid file type";
}
$allowed_types = ['image/jpeg', 'image/png'];
if (in_array($_FILES['file']['type'], $allowed_types)) {
    $safe_filename = basename($_FILES['file']['name']);
    move_uploaded_file($_FILES['file']['tmp_name'], "/secure/path/$safe_filename");
} else {
    echo "Invalid file type";
}
// Generate a CSRF token
$_SESSION['csrf_token'] = bin2hex(random_bytes(32));

// Include the CSRF token in the form
?>
<form method="POST" action="process_form.php">
    <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">
    <!-- Other form fields -->
    <button type="submit">Submit</button>
</form>
// Validate email
$email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
if ($email === false) {
    $safe_string = htmlspecialchars($_POST['string'], ENT_QUOTES, 'UTF-8');
    $safe_string = htmlspecialchars($_POST['string'], ENT_QUOTES, 'UTF-8');
    $stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $safe_string = preg_replace('/[^a-zA-Z0-9_]/', '', $_POST['string']);
    $safe_string = trim($_POST['string']);
    // Generate a CSRF token
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));

    // Include the CSRF token in the form
    ?>
    <form method="POST" action="process_form.php">
        <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">
        <!-- Other form fields -->
        <button type="submit">Submit</button>
    </form>
    <?php

    // Validate the CSRF token in process_form.php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
            die('CSRF token validation failed');
        }
        // Process the form data
    $username = $conn->quote($_POST['username']);
    $password = $conn->quote($_POST['password']);
    $sql = "SELECT * FROM users WHERE username = $username AND password = $password";
    $result = $conn->query($sql);
    $username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
    $password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);
    }
}

// Sanitize string
$name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
CREATE PROCEDURE GetUser(IN username VARCHAR(50), IN password VARCHAR(50))
BEGIN
    SELECT * FROM users WHERE username = username AND password = password;
END;
$stmt = $conn->prepare("CALL GetUser(?, ?)");
$stmt->bindParam(1, $username, PDO::PARAM_STR);
$stmt->bindParam(2, $password, PDO::PARAM_STR);
$stmt->execute();
$result = $stmt->fetchAll();
<?php

// Validate the CSRF token in process_form.php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
        die('CSRF token validation failed');
    }
    // Process the form data
}
$allowed_types = ['image/jpeg', 'image/png'];
if (in_array($_FILES['file']['type'], $allowed_types)) {
    $safe_filename = basename($_FILES['file']['name']);
    move_uploaded_file($_FILES['file']['tmp_name'], "/secure/path/$safe_filename");
} else {
    echo "Invalid file type";
}
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

	<td><center><?php echo $count+1; ?></center></td>
	<td>
		<select class="form-control input-xs chosen-select" id="bill_f_<?php echo $count; ?>" name="bill_f_<?php echo $count; ?>" onchange="get_seller_cat(this.value,this.id);" required="">
			<option value="">Select Firm</option>                
			<?php foreach ($fdata as $row) { ?>
			<option value="<?php echo $row['firm_id']; ?>"><?php echo ucwords($row['firm_name']); ?></option>
			<?php } ?>
		</select>
	</td>
	<td>
		<select class="form-control input-xs chosen-select" id="bill_p_<?php echo $count; ?>" name="bill_p_<?php echo $count; ?>" onchange="get_seller_size(this.value,this.id);" required="">
			<option value="">Select Product</option>                
			<?php foreach ($data as $row) { ?>
			<option value="<?php echo $row['cat_id']; ?>"><?php echo ucwords($row['cat_name']); ?></option>
			<?php } ?>
		</select>
	</td>
	
	<td>
		<select class="form-control input-xs chosen-select" id="bill_s_<?php echo $count; ?>" name="bill_s_<?php echo $count; ?>" onchange="get_seller_pde(this.id);" required="">                  
			<option value="">Size</option>
		</select>
	</td>
	<td style="width: 100px;">
		<input type="number" style="width: 100px;" min="1" max="???" step="1" id="bill_q_<?php echo $count; ?>" required="" name="bill_q_<?php echo $count; ?>" onkeyup="calc(this.id,this.value);" class="form-control input-xs" required="">
	</td>
	<td id="bill_a_<?php echo $count; ?>">
		<!-- Available&nbsp;: -->
	</td>	
	<td><center>
		<input type="number" name="to_amt_<?php echo $count; ?>" id="to_amt_<?php echo $count; ?>" value="" style="width: 100px;">
		<input type="hidden" name="firm" value="<?php echo $_POST['firm']; ?>">
		</center>
	</td>
