<?php
session_start();
$con = mysqli_connect("localhost","root","","gbw");

if(isset($_POST['save_multiple_data']))
{
    $fname = $_POST['fname'];
    $mail = $_POST['mail'];
    $num = $_POST['num'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];

    foreach($name as $index => $names)
    {
        
        $s_name = $names;
        $s_phone = $phone[$index];
        $s_fname = $fname[$index];
        $s_num = $num[$index];
        $s_mail = $mail[$index];
            $date=date("d/m/Y") ;
            //$date=date("25/07/2022");
            $query = "INSERT INTO demo (fname,mail,num,odate,name,phone) VALUES ('$s_fname','$s_mail','$s_num',
            '$date','$s_name','$s_phone')";
        $query_run = mysqli_query($con, $query);
    }

    if($query_run)
    {
        $_SESSION['status'] = "Pre-ordered Successfully";
        header("Location: order.php");
        exit(0);
    }
    else
    {
        $_SESSION['status'] = "Data Not Inserted";
        header("Location: order.php");
        exit(0);
    }
}
?>




