<!-- 
    // session_start();
    // $con=mysqli_connect('localhost','root','');
    // mysqli_select_db($con,'userreg');
    // $sid = $_SESSION["id"];
    // $query = mysqli_query($con, "SELECT * FROM connectionTeacher WHERE sid='$sid'");
    // $res = mysqli_query($sql, $str);
    // $num_rows = mysqli_num_rows($query);
    // $row=mysqli_fetch_array($query);
    // $_SESSION["sid"]=$row['sid'];
    // $_SESSION["tid"]=$row['tid'];
    // $_SESSION["response"]=$row['response'];
    // echo "hello";
    // echo $sid;
    // echo $_SESSION["sid"]; -->

    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "userreg";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    $sid = $_SESSION['id'];
    
    $sql = "SELECT * FROM connectionTeacher ";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["sid"]. " - tid: " . $row["tid"]. " " . $row["response"]. "<br>";
    }
    } else {
    echo "0 results";
    }
    $conn->close();
?>