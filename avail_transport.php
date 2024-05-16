<?php
error_reporting(0);
?>
<?php
@include 'config.php';

session_start();

if ($conn->connect_error) {
	die('Connect Error (' .
	$conn->connect_errno . ') '.
	$conn->connect_error);
}
$sql = " SELECT * FROM avail_transport ORDER BY id DESC ";
$result = $conn->query($sql);
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<link href="avail_transport/style.css" rel="stylesheet">
	<meta charset="UTF-8">
	<title>Availabe transport</title>
	<script>
		function redirect()
		{
			window.location.href="https://checkout.stripe.com/c/pay/cs_test_a1E0QLdHQCwqHKa8e0rX8xkB3CJKLycqGnZ6bvqi3Uni3n0naGkQHVTQQo#fidkdWxOYHwnPyd1blpxYHZxWjA0SzdAQWxWTEhiNE5PbUpnZlZtaHVJUWlzXVxNb0ExY2xUMXROYmg9SVJtSkhoZH1PU0dccUhNNENxa2xUcjM1UlBcMn9DY0xQdW5tdl08YTN8Smp%2FZkZzNTV3d0lUcEBEMScpJ3VpbGtuQH11anZgYUxhJz8ncWB2cVo1NWI2YUEwaTdjTV1jb2Q2ZmYneCUl";
		}
	</script>
</head>
<body background-color:lightblue;>
	<section>
		<h1>Details of OWNERS</h1><br><br>
		<table>
			<tr>
				<th>VEHICLE NAME</th>
				<th>STARTING PLACE</th>
				<th>DESTINATION</th>
				<th>AVAILABLE SEATS</th>
				<th>BOOK NOW</th>
			</tr>
			<?php
				while($rows=$result->fetch_assoc())
				{
			?>
			<tr>
				<td><?php echo $rows['vehicle_name'];?></td>
				<td><?php echo $rows['start'];?></td>
				<td><?php echo $rows['destination'];?></td>
				<td><?php echo $rows['available_seats'];?></td>
				<td><button type="button" value="Book" id="v-btn" onclick="redirect()">BOOK</button></td>
			</tr>
			<?php
				}
			?>
		</table>
	</section>
</body>

</html>
