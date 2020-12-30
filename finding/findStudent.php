<?php
session_start();
mysql_connect("127.0.0.1", "root", "") or die("Could not connect");
mysql_select_db("userreg") or die("could not find databse");
$output='';


if(isset($_POST['search']))
{
    $searchq=$_POST['search'];
    $searchq=preg_replace("#[^0-9a-z]#i","",$searchq);

    $query=mysql_query("select * from student where sfname like '%$searchq%' or slname like '%$searchq%' or saddress like'%$searchq%'") or die("could not seach");
    $count=mysql_num_rows($query);
    if($count==0){
        $output='there was no search result';

    }
    else{
        while($row=mysql_fetch_array($query)){
            
            $fname=$row['sfname'];
            $lname=$row['slname'];
            $mail=$row['semailid'];
            $phone=$row['sphone'];
            $address=$row['saddress'];
            

            $output .='<div> '.$fname.' '.$lname.' '.$mail.' '.$phone.' '.$address.'</div>';
        }
    }
}



?>

<!DOCTYPE html>
<html>
    <head>
        <title>PHP HTML TABLE DATA SEARCH</title>
        <style>
            table,tr,th,td
            {
                border: 1px solid black;
            }
        </style>
    </head>
    <body>
        
        <form action="#findstudent.php" method="post">
           
            <a href="findstudent.php">refresh</a>
            <input type="text" name="search" placeholder="Searching elements"/>
            <input type="submit"  value=">>"/>
            


            <table border="1">
    <tr>
        <th>FirstName</th>
        <th>SecondName</th>
        <th>email</th>
        <th>phone</th>
        <th>address</th>
    </tr>
<?php

$con=mysqli_connect('127.0.0.1','root','');
mysqli_select_db($con,'userreg');

$selectquery="select * from student";
$query=mysqli_query($con,$selectquery);
$num=mysqli_num_rows($query);

while($res=mysqli_fetch_array($query)){
    echo "<tr>";
    echo  "<td>";
    echo $res['sfname'];
    echo "</td>";

    echo  "<td>";
    echo $res['slname'];
    echo "</td>";

    echo  "<td>";
    echo $res['semailid'];
    echo  "</td>";

    echo  "<td>";
    echo $res['sphone'];
    echo  "</td>";

    echo  "<td>";
    echo $res['saddress'];
    echo  "</td>";

    echo  "</tr>";
    echo "<br>";
}
?>
</table>        
        </form>
        <?php print("$output");
       
   
        ?>
        
    </body>
</html>
