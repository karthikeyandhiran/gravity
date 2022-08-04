<!DOCTYPE html>
 <html>
 <head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link
    href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
    integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" href="styles.css">
  

   <nav class="navbar  sticky-top navbar-expand-lg navbar-dark  " style="background-color: #3b5249;">
    <a class="navbar-brand" href="#">  Admin's
      Section </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
    
        <li class="nav-item active">
          <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
        </li>
        

        <li class="nav-item active">
          <a class="nav-link" href="about.html">About Us</a>
        </li>

        
        <li class="nav-item active">
          <a class="nav-link" href="gallery.html">Gallery</a>
        </li>


        <li class="nav-item dropdown active">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            Products
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="writercorner.html">Teacher's Corner</a>
            <a class="dropdown-item" href="artistcorner.html">Student's Corner</a>
            <a class="dropdown-item" href="essentials.html">Others</a>
          </div>
        </li>

        

        <li class="nav-item active">
          <a class="nav-link other" href="index.html" tabindex="-1" aria-disabled="true">Log Out</a>
        </li>
      </ul>

    </div>
  </nav>
<br><br>

   <style type="text/css">
     .hi{
      float: right;
      padding: 3px;
      border: 3px solid blue;
      background-color: lightblue;
      margin: 10px;
      font-weight: bolder;
     }

     .hii{
      float: right;
      padding: 3px;
      border: 3px solid blue;
      background-color: lightblue;
      margin: 10px;
      font-weight: bolder;
     }
     table{
      margin-left: auto;
      margin-right: auto;

     }
     th{
      border: 2px solid black;
     }
     td{
      border: 2px solid black;
     }
     tr{
      border: 2px solid black;
     }


   </style>
 </head>
 <body>
 
 </body>


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
  <input class="hi" type="submit" value="Delete">
  <input class="hii" type="text" name="dat" placeholder="DD/MM/YYY">
  
  
  </form>
<table border ="3" cellspacing="0" cellpadding="15">
  <tr>
    <th>Name</th>
    <th>Email id</th>
    <th>Number</th>
    <th>Ordered date</th>
    <th>Item name</th>
    <th>Item Quantity</th>
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

 <?php }  ?>

 </table>
 <br><br><br>
 <p style="border:2px"></p>
 </html>

