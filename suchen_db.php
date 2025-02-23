<?php

//mysqli-connection is provided by login_db.php
function suchen_db($mysqli, $keyword){
    if(!empty($keyword)){
        // echo  "$keyword";
        
        $result = $mysqli->query("Select distinct name, preis from tierfutter where name like '%$keyword%' order by preis desc");

        if(mysqli_num_rows($result)==0){
            echo "</br>"."Es wrude leider nichts Passendes zu deiner Suche gefunden!";
        }else{
            
            echo "Deine Suche für '$keyword' ergab so viele Treffer: ".mysqli_num_rows($result)."</br>";
            //establish simple table
            echo "</br>";
            echo "<table border=1>";
            //establish header of table
            echo "<tr>";
            echo "<th>Bezeichnung</th>\n";
            echo "<th>Preis</th>\n";
            // while($data = $result->fetch_object()){
                
                //  echo "<th> $data->bezeichnung</th>\n";
                //  echo "<th> $data->preis</th>\n";
            // }
            echo "</tr>\n";
            while($data = $result->fetch_assoc()){
                echo "<tr><td>".$data["name"]."</td><td>".$data["preis"]."</td></tr>";
            }


            ///////////// working with one column:
            // echo "Deine Suche ergab so viele Treffer: ".mysqli_num_rows($result)."</br>";
            // //establish simple table
            // echo "</br>";
            // echo "<table border=1>";
            // //establish header of table
            // echo "<tr>";
            // echo "<th>Produkt-Treffer</th>";
            // echo "</tr>\n";
            //insert all hits
            // while($data = $result->fetch_object()){
            //     foreach($data as $key => $value){
            //         echo "<tr><td> $value</td></tr>\n";
            //     }
            // }
        }
    }else{
        echo "</br>"."Bitte keine Leerzeichen abschicken";
    }
}


?>