<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
$username=$_POST['username'];
$password=$_POST['password'];
$url=$_POST['url'];
$file;
$checkbox1=isset($_POST['checkbox1'])?'&#10003;':'&#10007;';
$checkbox2=isset($_POST['checkbox2'])?'&#10003;':'&#10007;';
$checkbox3=isset($_POST['checkbox3'])?'&#10003;':'&#10007;';
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
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
  <h1>Database Verifier</h1>
  <table border='1' id="table">

    <tr>
      <td><strong>Username</strong></td>
      <td><?php echo $username ?></td>
    </tr>

    <tr>
      <td><strong>password</strong></td>
      <td><?php echo  $password ?></td>
    </tr>

    <tr>
      <td><strong>url</strong></td>
      <td><?php echo !empty($url) ? $url : "Preferred not to give";?></td>
    </tr>

    <tr>
      <td><strong>file</strong></td>
      <td><?php echo isset($file)?$file:'Preferred not to give'; ?></td>
    </tr>

    <tr>
      <td><strong>Preferances</strong></td>
      <td>
        codes:<?php echo $checkbox1 ?><br>
        Films:<?php echo $checkbox2 ?><br>
        Songs:<?php echo $checkbox3 ?><br>
      </td>
    </tr>



</table>
  
</body>
</html>