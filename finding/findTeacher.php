<?php

mysql_connect("127.0.0.1", "root", "") or die("Could not connect");
mysql_select_db("userreg") or die("could not find databse");
$output='';


if(isset($_POST['search']))
{
    $searchq=$_POST['search'];
    $searchq=preg_replace("#[^0-9a-z]#i","",$searchq);

    $query=mysql_query("select * from teacher where tfname like '%$searchq%' or tlname like '%$searchq%' or taddress like'%$searchq%'") or die("could not seach");
    $count=mysql_num_rows($query);
    if($count==0){
        $output='there was no search result';

    }
    else{
        while($row=mysql_fetch_array($query)){
            
            $fname=$row['tfname'];
            $lname=$row['tlname'];
            $mail=$row['tmail'];
            $phone=$row['tphone'];
            $address=$row['taddress'];
            

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
        
        <form action="#findteacher.php" method="post">
            <a href="findteacher.php">refresh</a>
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
session_start();
$con=mysqli_connect('127.0.0.1','root','');
mysqli_select_db($con,'userreg');

$selectquery="select * from teacher";
$query=mysqli_query($con,$selectquery);
$num=mysqli_num_rows($query);

while($res=mysqli_fetch_array($query)){
    echo "<tr>";
    echo  "<td>";
    echo $res['tfname'];
    echo "</td>";

    echo  "<td>";
    echo $res['tlname'];
    echo "</td>";

    echo  "<td>";
    echo $res['tmail'];
    echo  "</td>";

    echo  "<td>";
    echo $res['tphone'];
    echo  "</td>";

    echo  "<td>";
    echo $res['taddress'];
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
