<?php 
	require 'connect/connect.php';
	require 'query/query.php';
	$obj = new Query($pdo, 'person');
	$person = $obj->findData('driving_license_no', $_GET['id'])->fetch();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Nepal License</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link href="styles.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<div id="background">
			<div id="Flag"><img src="images/Flag.png"></div>
			<div id="image">
				<img src="<?php echo $person['image'] ?>">
			</div>
			<div id="signaturecopy3">
				<img src="images/signaturecopy3.png">
			</div>
			<div id="signaturecopy4"><img src="images/signaturecopy4.png"></div>
			<div id="signaturecopy5"><img src="images/signaturecopy5.png"></div>
			<div id="signaturecopy6"><img src="images/signaturecopy6.png"></div>
			<div id="layer_010600045334"><p><?php echo $person['driving_license_no']; ?></p></div>
			<div id="NEP"><img src="images/NEP.png"></div>
			<div id="date_issue">
				<p><?php echo $person['date_issue'] ?></p>
			</div>
			<div id="date_expire">
				<p><?php echo $person['date_expire'] ?></p>
			</div>
			<div id="category">
				<p><?php echo $person['category'] ?></p>
			</div>
			<div id="blood_group">
				<p><?php echo $person['blood_group'] ?></p>
			</div>
			<div id="name">
				<p><?php echo $person['name'] ?></p>
			</div>
			<div id="father_name">
				<p><?php echo $person['father_name'] ?></p>
			</div>
			<div id="citizenship">
				<p><?php echo $person['citizenship'] ?></p>
			</div>
			<div id="passport">
				<p><?php echo $person['passport'] ?></p>
			</div>
			<div id="phone_no">
				<p><?php echo $person['phone_no'] ?></p>
			</div>
			<div id="dob">
				<p><?php echo $person['dob'] ?></p>
			</div>
			<div id="issue_zone">
				<p><?php echo $person['issue_zone'] ?></p>
			</div>
			<div id="address">
				<p><?php echo $person['townVillage'].'- '.$person['ward'].'<br>'.$person['district'].', '.$person['zone'] ?></p>
			</div>
			<div id="uefjS"><img src="images/uefjS.png"></div>
			<div id="uefjScopy"><img src="images/uefjScopy.png"></div>
			<div id="uefjScopy2"><img src="images/uefjScopy2.png"></div>
		</div>
		<div class="row">
			<a class="btn btn-primary btn-lg" href="index.php"> Back </a>
			<button class="btn btn-success btn-lg" onclick="printDiv('background')"> Print </button>
		</div>

		<script type="text/javascript">
			function printDiv(divName) {
			    var printContents = document.getElementById(divName).innerHTML;
			    var originalContents = document.body.innerHTML;

			    document.body.innerHTML = printContents;

			    window.print();

			    document.body.innerHTML = originalContents;
			}
		</script>
 	</body>
 </html>