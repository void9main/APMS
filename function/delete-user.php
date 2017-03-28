<meta charset="utf-8" />
<?//删除会员
include "../sql/sql.php";
include "../sql/conn.php";
$id=$_GET['id'];
echo $id;
$str=delete_user($id);
if($id!=""){
if($str==true){
	 echo "<script>alert('删除成功！');location.href='../admin-table.php'</script>";
}else{
	 echo "<script>alert('删除失败！请重新操作');location.href='../admin-table.php'</script>";
}
}else{
	 echo "<script>alert('获取参数失败请重新校准优先级！');location.href='../admin-table.php'</script>";
}
?>