$login_user=“admin”;
$password_user=“admin”;
$login_user1=“admin2”;
$password_user1=“admin2”;
$login_user2=“admin3”;
$password_user2=“admin3”;

$login=$POST[‘login’];
$password=$POST[‘password’];
if
(
($login_user == $login) and ($password_user == $password)
or
($login_user1 == $login) and ($password_user1 == $password)
or
($login_user2 == $login) and ($password_user2 == $password)
)
{
echo “Cau”;
}
else
{
echo “Не правильный логин или пароль”;
}
?>
