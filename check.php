  <?php
 session_start();
 ?>
 <?php
if($_POST){

include 'database.php';
$y=$_POST[username];
$query="SELECT*FROM login WHERE username LIKE '$_POST[username]'";
$ans=mysqli_query($link,$query);
$row=mysqli_fetch_array($ans);
if(md5(md5($row['id']).$_POST['password'])==$row['password']){
    $_SESSION["user"]="$_POST[username]";
   echo "<script type='text/javascript'>  window.location='home.php'; </script>";
 }

    else{
        echo "<h1>Incorrect Username Or Password</h1>";
           

    }
}

    ?>