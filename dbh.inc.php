/*<?php
    $dbServername = "localhost:3306";
    $dbUsername = "root";
    $dbPassword = "Bqgr{/Z5+\[EB)wv";

    
    $conn = mysql_connect($dbhost, $dbuser, $dbpass);
    
    if(!$conn){
        die('Could not connect: ' . mysql_error());
    }
    
    $sql = 'SELECT * FROM food1';
    mysql_select_db('foodData');
    $retval = mysql_query($sql, $conn);
    
    if(!$retval){
        die('Could not get data: ' . mysql_error());
    }
    while($row = mysql_fetch_array($retval, MYSQL_ASSOC)){
        echo "name: {$row['food_name']}";
    }
    
    echo "Fetched data successfully";
    
    mysql_close($conn);

?>
 */
<?php
    $servername = "localhost";
    $username = "username";
    $password = "password";
    $dbname = "myDB";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    $sql = "SELECT id, firstname, lastname FROM MyGuests";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
        }
    } else {
        echo "0 results";
    }
    $conn->close();
    ?>
