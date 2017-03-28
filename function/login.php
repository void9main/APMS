<meta http-equiv="Content-Type" content="text/php; charset=utf-8" />
<?
error_reporting(E_ALL ^ E_NOTICE);          //屏蔽警告函数
include "../sql/conn.php";
include "../sql/sql.php";
$name=$_POST['name'];                      //获取用户名
$pwd=$_POST['pwd'];                       //获取密码
session_start();                         //启动session
$_SESSION['name']=$name;                  //session赋值   
if($name||$pwd!=""){             
	$row = login_db($name,$pwd);
	if($row['pwd']==$pwd){
        if($row['type']=='0'){
            echo "<script>alert('欢迎管理员登录！');location.href='../admin-index.php'</script>";
        }else{
            echo "<script>alert('欢迎同学登录');location.href='../index.html'</script>";
        }
    }else {
            echo "<script>alert('密码或用户名错误！');location.href='../login.html'</script>";
    }
}else{
	 echo "<script>alert('账号密码填写不完整，请重新填写');location.href='../login.html'</script>";
} 
?>