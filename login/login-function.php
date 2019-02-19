<?php 
function auth ( $user, $pass ) {
  global $db;

  //$pass = sha1($pass);  
  $s = "select * from A where user = '$user' and pass='$pass' " ;
  echo "<br>SQL statement is: $s<br>";
  ($t = mysqli_query( $db, $s )) or die(mysqli_error($db));
  $num = mysqli_num_rows($t);
  if($num == 0) {return false ;}
  return true;
  
}

function getdata( $arg ) {
  global $db;
  
  $temp = $_GET[$arg];
  //$temp = mysqli_real_escape_string ($db , $temp);
  echo "<br>temp is: $temp";
  return $temp;

}
?>