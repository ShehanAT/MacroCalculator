<?php
  

    if(isset($_POST['foodName2'])){
        $mysqli = mysqli_connect("localhost", "shehanat_Shehan", "Bqgr{/Z5+\[EB)wv", "shehanat_foodNames");
        if (mysqli_connect_errno($mysqli)) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
        else{
            $foodName = $_REQUEST['foodName2'];
            $res = "INSERT INTO AddedFood (food_name) VALUES ('".$foodName."')";
            if(mysqli_query($mysqli, $res)){
                echo "<li>'". $foodName ."'</li><button class='btn btn-danger' id='deleteFood'>Delete Food</button>";
            }else{
                echo "Error: " . $res . "<br>" . mysqli_error($mysqli);
            }
            //            if($res->num_rows){
            //
            //                while($row = $res->fetch_assoc()){
            //                    echo "<input type='text' value=" . $row['Shrt_Desc']. " style='width:250px' id='foodName'><button class='btn btn-primary' id='addFood'>Add Food</button>" . "<br>";
            //                }
            //            }else{
            //                echo "NOT FOUND";
            //            }
            
        }
    }


    
    
    
?>
