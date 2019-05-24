<?php

    $connect = mysqli_connect("localhost", "shehanat_Shehan", "Bqgr{/Z5+\[EB)wv", "shehanat_foodNames");
        $data = array();
        $request = $_REQUEST['query'];
        $query = "SELECT * FROM FOOD_DES WHERE Shrt_Desc LIKE '%". $request ."%'";
        $result = mysqli_query($connect, $query);
    
        while($row = mysqli_fetch_assoc($result)){
            $data[] = $row['Shrt_Desc'];
        }
        echo json_encode($data);
        mysqli_close($connect);
    
?>
