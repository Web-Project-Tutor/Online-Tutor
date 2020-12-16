<?php

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
            <!-- <input type="text" name="valueToSearch" placeholder="Value To Search"><br><br>
            <input type="submit" name="search" value="Filter"><br><br> -->
            <!-- <input type="button" value="back"/> -->
            <a href="findstudent.php">refresh</a>
            <input type="text" name="search" placeholder="Searching elements"/>
            <input type="submit"  value=">>"/>
            <!-- <input type="button" name="btn" value="refresh" onclick="return RefreshWindow();"/>
            

            <script>
            function RefreshWindow()
            {
                window.location.reload(true);
            }
            </script> -->


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
       
    // if(isset($_POST['btn'])){
    // //     echo '<script type="text/javascript">',
    // //    'RefreshWindow();',
    // //    '</script>';
    // //header("refresh:2;url=findstudent.php");

    //     //   set_Logout();
    //     //   $_POST = array();
    //     //   //tests
    //     //   $page = $_SERVER['PHP_SELF'];
    //     //   echo '<meta http-equiv="Refresh" content="0;' . $page . '">';

    //     header('Location: '.$_SERVER['PHP_SELF']);
    //     Exit(); //optional

    // // $page = $_SERVER['PHP_SELF'];
    // // print "<a href=\"$page\">Reload this page</a>";   
    // }
        ?>
        
    </body>
</html>
