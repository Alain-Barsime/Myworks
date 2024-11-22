
  <?php
  if($_SERVER["REQUEST_METHOD"]=='POST'){
  $name=$_POST['names'];
  $email=$_POST['email'];
  $date=$_POST['date'];
  $telephone=$_POST['telephone'];
  $range=$_POST['range'];
  $color=$_POST['color'];
  $radio=$_POST['radios'];
  $username=$_POST['username'];
  $password=$_POST['password'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    #table {
      background-color: rgb(221, 221, 45);
      border-collapse: collapse;
      padding:8px;
      border-width
    }
      </style>
</head>
<body>
  <h1>DATABASE VERIFICATION</h1>
<table border='1' id="table">
  <tr>
  <td><strong>Names</strong></td>
  <td><?php echo $name?></td>
  </tr>

  <tr>
  <td><strong>Email</strong></td>
  <td><?php echo $email ?></td>
  </tr>

<tr>
  <td><strong>Username</strong></td>
  <td><?php echo $username ?></td>
  </tr>

  <tr>
  <td><strong>Password</strong></td>
  <td><?php echo $password ?></td>
  </tr>

  <tr>
  <td><strong>Confirmation</strong></td>
  <td><?php echo $password ?></td>
  </tr>

  <tr>
  <td><strong>Date</strong></td>
  <td><?php echo $date?></td>
  </tr>

  <tr>
  <td><strong>Telephone</strong></td>
  <td><?php echo $telephone ?></td>
  </tr>

  <tr>
  <td><strong>Age</strong></td>
  <td><?php echo $range ?></td>
  </tr>

  <tr>
  <td><strong>color</strong></td>
  <td><?php echo $color ?></td>
  </tr>

 <tr>
  <td><strong>Language</strong></td>
  <td><?php echo $radio ?></td>
  </tr>

  </table>
   
</body>
</html>