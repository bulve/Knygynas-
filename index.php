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
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1 style='text-align: center'>Knygos</h1>     
                <form action="" method="post" id="searchform" style='text-align: center'>  
                          <input type="text" name="string" id="string"  />
                         <input type="submit" name="submit" id="button" value="Ieškoti" />

                </form> 
            </div>
     <div class="panel-body">        
        <table class="table table-condensed">
          <thead>
              <tr>
              <th>Eilės nr.</th>
              <th><a href="index.php?sort=pav">Pavadinimas</a></th>
              <th><a href="index.php?sort=autor">Autorius</a></th> 
              <th><a href="index.php?sort=zan">Žanras</a></th>

            </tr>
          </thead>
          <tbody>
              <?php 

              include 'acc.php'; 

              $sql = "select CONCAT(autoriai.pavarde, ' ',autoriai.vardas) as 'autorius', knygos.pavadinimas, knygos.knygos_id, knygos.zanras from autoriaiknygos
                          join autoriai on autoriaiknygos.autoriu_id = autoriai.autoriaus_id
                          join knygos on autoriaiknygos.knygu_id = knygos.knygos_id ";

              if(isset($_POST['submit'])){    

                  if($_POST['string']){
                       $sql .=" WHERE pavadinimas LIKE '%".$_POST["string"]."%' OR pavarde LIKE '%".$_POST["string"]."%' OR zanras LIKE '%".$_POST["string"]."%' ";
                  }else{
                     $sql .="Group by pavadinimas ";
                  }
             }else {                     
                  $sql .="Group by pavadinimas ";
              }


             if(isset($_GET)){

              if (isset($_GET['sort']) && $_GET['sort'] == 'pav'){$sql .= " ORDER BY pavadinimas;"; $_SESSION["sort"] = 'pav'; }
              else if (isset($_GET['sort']) && $_GET['sort'] == 'autor'){$sql .= " ORDER BY autorius;"; $_SESSION["sort"] = 'autor';}
              else if(isset($_GET['sort']) && $_GET['sort'] == 'zan'){$sql .= " ORDER BY zanras;"; $_SESSION["sort"] = 'zan';}

             }else{$sql .= " Group BY pavadinimas;";}


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
    <div class="panel-footer" style="text-align: center">
         <a href="https://github.com/bulve/Knygynas-.git">To GitHub repository</a>
        <p>https://github.com/bulve/Knygynas-.git</p>       
    </div>       
</div>
    </div>

        
        
    </body>
</html>
