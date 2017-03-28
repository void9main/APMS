<meta charset="utf-8" />
<?
include "../sql/conn.php";
include "../sql/sql.php";
$name=$_POST['name'];
$pwd=$_POST['pwd'];
$apart=$_POST['apart'];
$row=add_user($name, $pwd,$apart);
if($row==FALSE){
	echo "<script>alert('添加成功！');location.href='../login.html'</script>";
}else{
	echo "<script>alert('添加失败，请重新添加。');location.href='../login.html'</script>";
}
?>