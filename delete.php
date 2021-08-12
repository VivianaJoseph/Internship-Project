<?php

			$connect = mysqli_connect("localhost","root","","adminlogin");
           $query="Delete from booking WHERE SL='$_GET[sl]'";

           if (mysqli_query($connect,$query))
           {
           	header("refresh:1; url=ADMINVIEWREAL.php");
           }
           else{
           	 echo "error";
           }
?>
            