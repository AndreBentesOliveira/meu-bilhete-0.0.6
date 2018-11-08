<?php

  define('localhost');

  define('root');

  define('');

  define('meubilhetedatabse');

  $con = mysqli_connect('localhost','root','','meubilhetedatabase');

   if (!$con){

                 die('Erro na Conexão' . mysqli_connect_error()) ;

  }

?>