

<?php

session_start();
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'userreg');
// session_start();
// mysql_connect("localhost", "root", "") or die("Could not connect");
// mysql_select_db("userreg") or die("could not find databse");
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
print("$output");


?>
<html>
    <head></head>
    <body>
        <h1>Search</h1>
        <form action="findStudent.php" method="POST">
            <a href="../../finding/findStudent.php">refresh</a>
            <input type="text" id='search' name="search" placeholder="Searching elements"/>
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

$con1=mysqli_connect('localhost','root','');
mysqli_select_db($con1,'userreg');

$selectquery="select * from student";
$query=mysqli_query($con1,$selectquery);
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

        <?php print("$output");?>
    </body>


</html>
