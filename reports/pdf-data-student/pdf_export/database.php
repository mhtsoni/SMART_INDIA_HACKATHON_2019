<?php
/*connecting to a database*/
$link=mysqli_connect("localhost","root","","coddictors");
if(mysqli_connect_error()){
    echo "couldnot connect";
}

?>