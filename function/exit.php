<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?
    session_start(); 
	session_destroy(); 
    echo "<script>alert('已注销，返回登陆界面！');location.href='../login.html'</script>";
?>