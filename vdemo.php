<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
	table{
		width:100%;
		margin-left:0px;
	}
  </style>
</head>
<body>

<div class="container-fluid">           
  <table class="table table-hover">
    <thead>
      <tr>
        <th>DonarName</th>
        <th>Food Quantity</th>
        <th>Number of food Items</th>
		<th>Prepared time</th>
		<th>Expiray time</th>
		<th>Food category</th>
		<th>Nutrician Value</th>
		<th>Connect?</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Rupee</td>
        <td>3</td>
        <td>4</td>
		<td>3:00</td>
		<td>6:00</td>
		<td>NonVeg</td>
		<td>junk</td>
		<td><button type="button" class="btn btn-primary btn-sm">Accept</button></td>
      </tr>
      <tr>
        <td>Narasimha</td>
        <td>6</td>
        <td>8</td>
		<td>7:00</td>
		<td>3:00</td>
		<td>Veg</td>
		<td>semi junk</td>
		<td><button type="button" class="btn btn-primary btn-sm">Accept</button></td>
      </tr>
      <tr>
        <td>Thumma</td>
        <td>2</td>
        <td>8</td>
		<td>7:00</td>
		<td>9:00</td>
		<td>NonVeg</td>
		<td>Semi Nutricious</td>
		<td><button type="button" class="btn btn-primary btn-sm">Accept</button></td>
      </tr>
    </tbody>
  </table>
</div>

</body>
</html>