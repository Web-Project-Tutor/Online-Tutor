

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
