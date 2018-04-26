<?php
$db = mysqli_connect ('eu-cdbr-west-02.cleardb.net','b579b0d570201d','0288fa8e','heroku_033b3c3b3f6a2b6') ;

if(mysqli_connect_errno()) {
  echo 'Database connection failed with following errors : '. mysqli_connect_error();
  die();
}
