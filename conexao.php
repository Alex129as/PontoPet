<?php

 $Server = "localhost";
 $Port = 3307;
 $User = "root";
 $Password = "";
 $Database = "pets.net";

 $conexao =mysqli_connect($Server, $User, $Password, $Database, $Port);
  if (!$conexao){
      echo "erro";
  }