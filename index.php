<?php 

	require 'connect/connect.php';
	require 'query/query.php';
	$obj = new Query($pdo, 'person');
	$person = $obj->findAllData();
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Nepal License</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="https://bootswatch.com/4/lux/bootstrap.min.css">
		<style type="text/css">
			th, td{
				border: 1px solid #111;
			}
		</style>
	</head>
	<body>
		<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
		  <a class="navbar-brand" href="/">Nepal License</a>
		</nav>

		<input class="form-control" type="text" placeholder="Search" id="myInput" onkeyup="myFunction()">
		<table class="table table-hover" id="myTable">
		  <thead>
		    <tr>
		      <th scope="col">Driving License Number</th>
		      <th scope="col">Name</th>
		      <th scope="col">Address</th>
		      <th scope="col">Blood Group</th>
		      <th scope="col">Print</th>
		    </tr>
		  </thead>
		  <tbody>

		    	<?php 
		    		foreach ($person as $key) {
		    			echo '<tr class="table-secondary">
		    				  <th scope="row">'.$key['driving_license_no'].'</th>
						      <td>'.$key['name'].'</td>
						      <td>'.$key['townVillage'].'- '.$key['ward'].'<br>'.$key['district'].', '.$key['zone'].'</td>
						      <td>'.$key['blood_group'].'</td>
						      <td><a href="print.php?id='. $key['driving_license_no'].'" class="btn btn-success">Print</a></td>
						      </tr>';
		    		}
		    	?>
		  </tbody>
		</table> 

		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
		<script type="text/javascript">
			function myFunction() {
				  // Declare variables 
				  var input, filter, table, tr, td, i;
				  input = document.getElementById("myInput");
				  filter = input.value.toUpperCase();
				  table = document.getElementById("myTable");
				  tr = table.getElementsByTagName("tr");

				  // Loop through all table rows, and hide those who don't match the search query
				  for (i = 0; i < tr.length; i++) {
				    td = tr[i].getElementsByTagName("td")[0];
				    if (td) {
				      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
				        tr[i].style.display = "";
				      } else {
				        tr[i].style.display = "none";
				      }
				    } 
				  }
				}
		</script>
	</body>
</html>