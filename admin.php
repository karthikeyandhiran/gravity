<?php
$hostname="localhost";
  $username="root";
  $password="";
  $dbname="gbw";
  $con = mysqli_connect($hostname, $username, $password, $dbname);

$query = "SELECT fname, mail, num, odate, name, phone FROM demo";
$demo = mysqli_query($con, $query);
?>
<form action="delete.php" method="post">
  <input type="text" name="dat" placeholder="DD/MM/YYY">
  <input type="submit" value="delete">
  </form>
<table border ="1" cellspacing="0" cellpadding="10">
  <tr>
    <th>Name</th>
    <th>Email_id</th>
    <th>Number</th>
    <th>Ordered_date</th>
    <th>Item_name</th>
    <th>Item_Quantity</th>
  </tr>
<?php
if (mysqli_num_rows($demo) > 0) {
  
  while($data = mysqli_fetch_assoc($demo)) {
 ?>
 <tr>
   
   <td><?php echo $data['fname']; ?> </td>
   <td><?php echo $data['mail']; ?> </td>
   <td><?php echo $data['num']; ?> </td>
   <td><?php echo $data['odate']; ?> </td>
   <td><?php echo $data['name']; ?> </td>
   <td><?php echo $data['phone']; ?> </td>
 <tr>
 <?php
  }} else { ?>
    <tr>
     <td colspan="4">No data found</td>
    </tr>

 <?php } ?>
 </table>