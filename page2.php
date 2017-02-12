<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
         include 'acc.php';
       
       
           
        $knygos_id = intval($_GET['id']);
        $sql = "Select knygos.pavadinimas, knygos.leidimo_metai, knygos.zanras, autoriai.vardas, autoriai.pavarde, autoriai.gimimo_metai from autoriaiknygos
    join autoriai on autoriaiknygos.autoriu_id = autoriaus_id
    join knygos on autoriaiknygos.knygu_id = knygos_id 
    where knygos_id = $knygos_id";
        //$sql = "SELECT * FROM knygos WHERE knygos_id = $knygos_id ";
        $result = $conn->query($sql);
        $values = $result->fetch_assoc();
        
        echo 'Knygos pavadinimas: '. $values['pavadinimas'].'<br>Knygos leidimo metai: ' . $values['leidimo_metai'] . '<br>Knygos zanras: ' . $values['zanras'] . '<br>Knygos autorius: ' . $values['pavarde'] .' '. $values['vardas']; 
        echo '<br><a href="index.php">Atgal į sarašą</a>';
        
          /*$sql = "select CONCAT(autoriai.pavarde, ' ',autoriai.vardas) as 'autorius', autoriai.gimimo_metai, knygos.pavadinimas, knygos.leidimo_metai knygos.zanras from autoriaiknygos
                    join autoriai on autoriaiknygos.autoriu_id = autoriai.autoriaus_id
                    join knygos on autoriaiknygos.knygu_id = knygos.knygos_id 
                    where pavadinimas = ".intval($_REQUEST['pavad']).";"*/
        ?>
        
    </body>
</html>
