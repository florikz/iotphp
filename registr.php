$login_user=“admin”;
$password_user=“admin”;
$login=$POST[‘login’];
$password=$POST[‘password’];
if( ($login_user == $login) and ($password_user == $password) )
{
echo “Добро пожаловать”;
}
else
{
echo “Не правильный логин или пароль”;
}
?>