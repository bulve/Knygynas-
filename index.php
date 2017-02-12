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
        
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container">
  <h2>Knygos</h2>     
  <form action="" method="post" id="searchform" >  
            Search:<input type="text" name="string" id="string"  />
           <input type="submit" name="submit" id="button" value="Filter" />
           <a href="index.php?sort=pav">reset</a>
  </form> 
  <table class="table table-condensed">
    <thead>
        <tr>
        <th>Eiles nr.</th>
        <th><a href="index.php?sort=pav">Pavadinimas</a></th>
        <th><a href="index.php?sort=autor">Autorius</a></th> 
        <th><a href="index.php?sort=zan">Žanras</a></th>
        
      </tr>
    </thead>
    <tbody>
        <?php 
        include 'acc.php'; //connecting to database server
       
        
       
        if(isset($_POST['submit'])){    
            
            if($_POST['string']){
                 $sql = "select CONCAT(autoriai.pavarde, ' ',autoriai.vardas) as 'autorius', knygos.pavadinimas,knygos.knygos_id, knygos.zanras from autoriaiknygos
                    join autoriai on autoriaiknygos.autoriu_id = autoriai.autoriaus_id
                    join knygos on autoriaiknygos.knygu_id = knygos.knygos_id 
                    WHERE pavadinimas LIKE '%".$_POST["string"]."%' OR pavarde LIKE '%".$_POST["string"]."%' OR zanras LIKE '%".$_POST["string"]."%' ";
                
          //$sql = "SELECT * FROM Knygos WHERE pavadinimas LIKE '%".$_POST["string"]."%' OR autorius LIKE '%".$_POST["string"]."%' OR zanras LIKE '%".$_POST["string"]."%';" ;
            }
            
       }else{
                     
            $sql = "select CONCAT(autoriai.vardas, ' ',autoriai.pavarde) as 'autorius', knygos.pavadinimas, knygos.knygos_id, knygos.zanras from autoriaiknygos
                    join autoriai on autoriaiknygos.autoriu_id = autoriai.autoriaus_id
                    join knygos on autoriaiknygos.knygu_id = knygos.knygos_id ";
            

       }
       if(isset($_GET)){
       // $sorting = $_GET['sort'];
        
        if (isset($_GET['sort']) && $_GET['sort'] == 'pav'){                  
            $sql .= " ORDER BY pavadinimas;";
        }
        else if (isset($_GET['sort']) && $_GET['sort'] == 'autor'){                        
            $sql .= " ORDER BY autorius;";
        }
        else if(isset($_GET['sort']) && $_GET['sort'] == 'zan'){                          
            $sql .= " ORDER BY zanras;";
        }
       }else{
           $sql .= " ORDER BY pavadinimas;";
       }
        
       
          $sql_result = $conn->query($sql);
          $eile = 0;
            if($sql_result ->num_rows > 0){
                   while($row = $sql_result->fetch_assoc()) {
                       $eile++;
                         echo "<tr><td>".$eile."</td><td>".'<a href="page2.php?id='.$row["knygos_id"].'">'.$row["pavadinimas"].'</a>'."</td><td> ".$row["autorius"]."</td><td> ".$row["zanras"]."</td></tr>";
                                           
                    }    
            }else {
                echo '0 result';
            }
        ?>
     
     
    </tbody>
  </table>
</div>
        

         <?php 
         /*
         $sql = 'SELECT * FROM Knygos';
          $result = $conn->query($sql);
            if($result ->num_rows > 0){
                   while($row = $result->fetch_assoc()) {
                         echo "<tr><td>".$row["id"]."</td><td>".'<a href="page2.php?id='.$row['id'].'">'.$row["pavadinimas"].'</a>'."</td><td> ".$row["autorius"]."</td><td> ".$row["zanras"]."</td></tr>";
                        // echo '<a href="page2.php?ID='.$row['ID'].'">View Details</a>';//'.$row["pavadinimas"].';                   
                    }    
            }else {
                echo '0 result';
            }*/
        ?>
    </body>
</html>
