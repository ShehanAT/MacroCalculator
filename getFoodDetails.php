<?php
    /*
    203-protein
    204-fat
    205-carbs
    207-ash
    208-calories
    210-sugar
    291-fiber
   
    */
    $mysqli = mysqli_connect("localhost", "shehanat_Shehan", "Bqgr{/Z5+\[EB)wv", "shehanat_foodNames");
    if(mysqli_connect_errno($mysqli)){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }else{
        $foodId = $_REQUEST['foodId'];
        $res = $mysqli->query("SELECT * FROM NUT_DATA WHERE NDB_No = '".$foodId."'");
        if($res->num_rows){
            while($row = $res->fetch_assoc()){
                if($row['Nutr_No'] == 203){
                    echo "Protein: " . round($row['Nutr_Val'], 1) . "</br>";
                }
                if($row['Nutr_No'] == 204){
                    echo "Fat: " . round($row['Nutr_Val'], 1) . "</br>";
                }
                if($row['Nutr_No'] == 205){
                    echo "Carbs: " . round($row['Nutr_Val'], 1) . "</br>";
                }
            }
        }
    }
    
    
?>

