<?php





try{

$conn =new PDO("mysql:host=localhost;dbname=task6",'root','');
echo "connection success";

}
catch (PDOException $e)
{


    echo $e ;
}
