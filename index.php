<?php

$firstname=$_REQUEST['firstname'];
$secondname=$_REQUEST['secondname'];
$address=$_REQUEST['address'];

if(isset($_POST['btntestt']))
{

    $host="localhost";
    $user="root"; 
    $password= "";
    $db="marieem_image";
    
    $con =mysqli_connect($host,$user, $password, $db);


    $insert="insert into photo values('$firstname','$secondname','$address')";

mysqli_query($con,$insert);

 
if($con){
    echo("<h1 style='color:green;' >  your rigersration is Done!</h1>");

    
}
else{
    echo("<h1 'style=color:red;' >  your rigersration is failed!</h1>"); 

}

}

?>
<a href="http://localhost/marieem/index.html">image galary web</a>


















?>


