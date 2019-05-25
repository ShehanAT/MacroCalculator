<?php


    if(isset($_POST['foodName'])){
        $mysqli = mysqli_connect("localhost", "shehanat_Shehan", "Bqgr{/Z5+\[EB)wv", "shehanat_foodNames");
        if (mysqli_connect_errno($mysqli)) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
        else{
         
            $foodName = $_REQUEST['foodName'];
            $res = $mysqli->query("SELECT * FROM FOOD_DES WHERE Shrt_Desc = '".$foodName."'");
            if($res->num_rows){
                while($row = $res->fetch_assoc()){
                    echo $row['NDB_No'];
                }
            }else{
                echo "NOT FOUND";
            }
            
            
            
            
        }
    }
    if(isset($_POST['foodName2'])){
        $mysqli = mysqli_connect("localhost", "shehanat_Shehan", "Bqgr{/Z5+\[EB)wv", "shehanat_foodNames");
        if (mysqli_connect_errno($mysqli)) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
        else{
            $foodName = $_REQUEST['foodName2'];
            $foodDetails = $_REQUEST['foodDetails'];
            $res = "INSERT INTO AddedFood (food_name) VALUES ('".$foodName."')";
            if(mysqli_query($mysqli, $res)){
                echo "<li>'". $foodName . "</br>" .$foodDetails ."'</li><button class='btn btn-danger' id='deleteFood'>Delete Food</button>";
            }else{
                echo "Error: " . $res . "<br>" . mysqli_error($mysqli);
            }
            
        }
    }



?>
