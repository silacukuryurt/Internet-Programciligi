<?php

try
{
    $db=new PDO("mysql:host=localhost;
    dbname=bos;charset=utf8","root","");
    echo"kayıt başarılı";
}
catch(PODException $e)
{
    echo $e->getMessage();
}

?>