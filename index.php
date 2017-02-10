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
  <form action="" method="post">  
            Search:<input type="text" name="term"><br>   
            <input type="submit" value="Submit">
  </form> 
  <table class="table table-condensed">
    <thead>
        <tr>
        <th>ID</th>
        <th>Pavadinimas</th>
        <th>Autorius</th>
        <th>Zanras</th>
      </tr>
    </thead>
    <tbody
 
            
      <?php
        //include 'search.php';
        include 'acc.php';
        $searchBoolean = true;
        
       $conn = new mysqli($servername, $username, $password, $database);
       if(mysqli_error($conn)){
           echo 'Erorr' . mysqli_error($conn);
           exit();
       } else {
           echo 'All is fine';
           
           if($_POST["submit"]){ 
               if(!empty($_REQUEST['term'])){
                   $term = mysql_real_escape_string($_REQUEST['term']);
                   $sql = 'SELECT id,pavadinimas,autorius,zanras FROM Knygos WHERE pavadinimas LIKE '%" . $search . "%' OR autorius LIKE '%" . $search  ."%'";';  
               }
           }else{
             $sql = 'SELECT id,pavadinimas,autorius,zanras FROM Knygos';
           }
           
           
           $result = $conn->query($sql);
           
           if($result ->num_rows > 0){
               while($row = $result->fetch_assoc()) {
                    echo "<tr><td>".$row["id"]."</td><td>".'<a href="page2.php?id='.$row['id'].'">'.$row["pavadinimas"].'</a>'."</td><td> ".$row["autorius"]."</td><td> ".$row["zanras"]."</td></tr>";
                   // echo '<a href="page2.php?ID='.$row['ID'].'">View Details</a>';//'.$row["pavadinimas"].';
                
                    
               }
           }else {
               echo '0 result';
           }
          }
        ?>
    </tbody>
  </table>
</div>

        <?php
        

        ?>
    </body>
</html>
