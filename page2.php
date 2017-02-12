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
            
        <?php
       
         include 'acc.php';
       
        $knygos_id = intval($_GET['id']);
        $sql = "Select knygos.pavadinimas, knygos.leidimo_metai, knygos.zanras, autoriai.vardas, autoriai.pavarde, autoriai.gimimo_metai from autoriaiknygos
    join autoriai on autoriaiknygos.autoriu_id = autoriaus_id
    join knygos on autoriaiknygos.knygu_id = knygos_id 
    where knygos_id = $knygos_id";
        
        $result = $conn->query($sql);
        $values = $result->fetch_assoc();
        
        $lipsum = simplexml_load_file('http://www.lipsum.com/feed/xml?amount=1&what=paras&start=0')->lipsum;
     
        ?>
              <div class="panel panel-default" >
                  <div class="panel-heading" style='text-align: center'><h1><?php echo $values['pavadinimas']?></h1> </div>
                  <div class="panel-body" style='display: flex; padding: 50px' >
                      <div style='width:200px;'>
                          <div style='height:220px; width:180px; text-align: center; border:solid black 1px; margin: 10px'><h4>Image</h4></div>
                          <div style='margin-top:20px; font-size: 16px'><?php echo 'Autorius: ' . $values['pavarde'] .' '. $values['vardas']. '<br>Žanras: ' . $values['zanras'] . '<br>Išleista: ' . $values['leidimo_metai'] . 'm.' ?></div>
                      </div>
                        
                      <div style='margin:20px 5px 5px 10px; font-size: 20px'>
                          
                          <p style='text-indent: 50px'><?php echo $lipsum ?></p>
                      </div>
                   </div>
                      
                  </div>
                  <div class="panel-footer">
                      <form action="index.php" method="post" id="searchform" style='text-align: center' >  
                            <input type="text" name="string" id="string"  />
                           <input type="submit" name="submit" id="button" value="Ieškoti" />
                           <input action="index.php?sort=<?php echo $_SESSION['sort']?>'" type="submit" value="Atgal"/>
                        </form>
                  </div>
            </div>
              
              <br>
        
              
              
          </div>
    </body>
</html>
