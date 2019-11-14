<?php

 $Server = "localhost";
 $User = "root";
 $Password = "";
 $Database = "pontopet";

 $conexao =mysqli_connect($Server, $User, $Password, $Database);
  if (!$conexao){
      echo "erro";
  }
  ?>