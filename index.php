$uname=$_POST['usr'];
$pass=$_POST['pwd'];

if(empty($_POST["ok"])){echo "Could not insert data!";}
 else
{$file=fopen("user.txt","w");
echo fwrite($file,$uname);
fclose($file);}
