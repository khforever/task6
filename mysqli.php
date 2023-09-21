<?php









$conn =new mysqli('localhost','root','');
if ($conn -> connect_error )
{
die ("failed");

}
echo "connected successfuly";



?>