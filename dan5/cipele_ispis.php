<?php


 //include - za dohvatit drugi php- samo javlja grešku ako dokument nije pronađen
 //require - za dohvatit drugi php -baca fatalnu grešku, odnosno zaustavlja izvođenje aplikacije

require 'cipele.php';

echo '<pre>';
print_r($cipele);
echo '</pre>';

?>

<table border = "1">
    <tr>
        <th>Marka</th>
        <?php
        
        $counter = 0;
        foreach ($cipele as $key => $cipela) { 
            foreach ($cipela as $key => $value){
               if ($counter == 1){
                    break 2;
                }
                echo "<th>$key</th>";
            }
            $counter++;
        }
        ?>
    </tr>
    <?php
         foreach ($cipele as $marka => $cipela) {
            echo '<tr>';
                echo"<td>$marka</td>";
                echo"<td>$cipela[veličina]</td>";
                echo"<td>$cipela[boja]</td>";
                echo"<td>$cipela[materijal]</td>";
                /*
                foreach ($value as $key => $value) {
            echo"<td>$value</td>";
        }*/
            echo '</tr>';
        }
   
    ?>

    </table>
