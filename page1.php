
<?php

  
  require 'pgConnect.php';
  var_dump($cnx);
  $query="select * from jeux";
  $result = $cnx->query($query);
  $data = $result->fetchAll();
  var_dump($data);
  $nbr = count($data);
  for($i=0;$i<$nbr;$i++){
      
      print "<br/>".$data[$i]['nom_jeux'];
      
  }
?>


