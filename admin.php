<!DOCTYPE html>
<html lang="en">
<head>

<style>
  a {
  background-color: red;
  box-shadow: 0 5px 0 darkred;
  color: white;
  padding: 1em 1.5em;
  position: relative;
  text-decoration: none;
  text-transform: uppercase;
}

a:hover {
  background-color: #ce0606;
}

a:active {
  box-shadow: none;
  top: 5px;
}

</style>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>

<style>
    .table{
      border-collapse: collapse;
      margin: 25px 0;
      font-size: 0.9em;
      min-width: 400px;
      border-radius: 5px 5px 0 0;
      overflow: hidden;
      box-shadow: 0 0 20px rgba(0,0,0,0.15);
      /* justify-content: center;
      text-align: center; */
      margin-left:auto; margin-right:auto;
    
    }
    
    .table thead tr{
      background: #009879;
      color: #ffffff;
      text-align: left;
      font-weight: bold;
    }
    
    .table tr,
    .table td
    {
      padding: 12px 15px;
    }

    .table tbody tr {
      border-bottom: 1px solid #dddddd;
    }


    .table tbody tr:nth-of-type(even){
      background: #f3f3f3;
    }

    .table tbody tr:last-of-type {
      border-bottom: 2px solid #009879;
    }
    h1{
      text-align: center;
      color: #FFFFFF !important;
      background-color:#AA5555;
    }

</style>

</head>
<body>
    <h1>Login Successful!</h1>
    
<?php
      $link = mysqli_connect("localhost", "root", "", "final");
      $result = mysqli_query($link,"SELECT * FROM oxirgisi");

            if (mysqli_num_rows($result) > 0) {
?>
<table class="table">
  <thead class="thead">
<tr>
    <td>ID</td>
    <td>Name</td>
    <td>Email</td>
</tr>
    </thead>
  <?php
    $i=0;
    while($row = mysqli_fetch_array($result)) {
  ?>
  <tbody>
<tr>
    <td><?php echo $row["id"]; ?></td>
    <td><?php echo $row["name"]; ?></td>
    <td><?php echo $row["email"]; ?></td>
</tr>
    </tbody>
  <?php
    $i++;
  }
}

?>
</table>

<a href="index.php">Back to main page</a>
</body>
</html>
