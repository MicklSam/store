<?php
echo $_SERVER ["REQUEST_METHOD"]. ' request', '<br>';
if ($_SERVER ["REQUEST_METHOD"]=="POST")
{

echo "user email is". $_POST['emaill' ]. "<br>";
echo "passovwd is ".$_POST ['pass' ]."<br>";
Sadmin=array ("asmaa", "salma", "reem");
$name=$_POST [ 'emaill' ];
if (in_array ($name , $admin))
{
echo "hi". $name ."<br>";
}
else{
    echo"sorry u r not user";
}
}
else{echo "u cant enter this page directly" ;
}
?>