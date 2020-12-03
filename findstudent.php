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

