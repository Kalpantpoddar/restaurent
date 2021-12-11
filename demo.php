<!DOCTYPE html>
<html>
<head>
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
  <meta charset="utf-8">
  <title>Example</title>
  <style type="text/css">
    body{padding:200px;}
    table tbody tr.items input, .amount{margin:0px 5px 10px;width: 70px;height: 40px;border: 1px solid #801b86;display: block;}
  </style>
</head>
<body>
  <?php
include'function.php';

$date = new DateTime('now', new DateTimeZone('Asia/Kolkata'));
 $o_date = $date->format('d-m-Y H:i:s');
orderDate();
?>

</body>
</html>