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
                    echo "<input type='text' value=" . $row['Shrt_Desc'] . " style='width:250px' class='foodName'><button class='btn btn-primary' id='addFood' onclick='addFood()'>Add Food</button>" . "<br>";
                    
                }
            }else{
                echo "NOT FOUND";
            }
     

            //            $res = $mysqli->query("SELECT * FROM FOOD_DES WHERE Shrt_Desc = '".$id."'");
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
