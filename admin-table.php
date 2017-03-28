<!doctype html>
<html class="no-js">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Amaze后台管理系统模板HTML 表格页面 - 源码之家</title>
  <meta name="description" content="这是一个 table 页面">
  <meta name="keywords" content="table">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <meta name="renderer" content="webkit">
  <meta http-equiv="Cache-Control" content="no-siteapp" />
  <link rel="icon" type="image/png" href="assets/i/favicon.png">
  <link rel="apple-touch-icon-precomposed" href="assets/i/app-icon72x72@2x.png">
  <meta name="apple-mobile-web-app-title" content="Amaze UI" />
  <link rel="stylesheet" href="assets/css/amazeui.min.css"/>
  <link rel="stylesheet" href="assets/css/admin.css">
</head>
<body>
<!--[if lte IE 9]>
<p class="browsehappy">你正在使用<strong>过时</strong>的浏览器，Amaze UI 暂不支持。 请 <a href="http://browsehappy.com/" target="_blank">升级浏览器</a>
  以获得更好的体验！</p>
<![endif]-->

<?
error_reporting(E_ALL ^ E_NOTICE);          //屏蔽警告函数
session_start();
$name=$_SESSION['name'];
include  "sql/sql.php";
include  "sql/conn.php";
if($_SESSION['name']==""){
	echo "<script>alert('非法登录');location.href='login.html'</script>";
}
	include "fragment/top.php";
	include "fragment/left.php";
?>

  <!-- content start -->
  <div class="admin-content">

    <div class="am-cf am-padding">
      <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">页面模块</strong> / <small>学生网络管理</small></div>
    </div>

    <div class="am-g">
      <div class="am-u-md-6 am-cf">
        <div class="am-fl am-cf">
          <div class="am-btn-toolbar am-fl">
            <div class="am-btn-group am-btn-group-xs">
              <button type="button" class="am-btn am-btn-default"><span class="am-icon-plus"></span> 新增</button>
              <button type="button" class="am-btn am-btn-default"><span class="am-icon-trash-o"></span> 删除</button>
            </div>

            <div class="am-form-group am-margin-left am-fl">
              <select>
                <option value="option1">所有类别</option>
                <option value="option2">IT业界</option>
                <option value="option3">数码产品</option>
                <option value="option3">笔记本电脑</option>
                <option value="option3">平板电脑</option>
                <option value="option3">只能手机</option>
                <option value="option3">超极本</option>
              </select>
            </div>
          </div>
        </div>
      </div>
      <div class="am-u-md-3 am-cf">
        <div class="am-fr">
          <div class="am-input-group am-input-group-sm">
            <input type="text" class="am-form-field">
                <span class="am-input-group-btn">
                  <button class="am-btn am-btn-default" type="button">搜索</button>
                </span>
          </div>
        </div>
      </div>
    </div>

    <div class="am-g">
      <div class="am-u-sm-12">
        <form class="am-form">
          <table class="am-table am-table-striped am-table-hover table-main">
            <thead>
              <tr>
                <th class="table-check"><input type="checkbox" /></th>
                <th class="table-id">ID</th>
                <th class="table-title">帐号</th>
                <th class="table-type">密码</th>
                <th class="table-author">网费余额</th>
                <th class="table-author">宿舍地址</th>
                <th class="table-date">修改日期</th>
                <th class="table-set">操作</th>
              </tr>
          </thead>
          <tbody>
          <?
        	  $res= page_id();
            $num = $res[0];
            $pagesize =10;
            $pages = ceil($num/$pagesize);
            $page =@$_GET['page'];
            $page = (isset($page))?($page):(1);
            $up= ($page-1)*$pagesize;
            $sql="select * from `user` ORDER BY `id` DESC LIMIT ".$up." , ".$pagesize."";
            $str = mysql_query($sql);
			      while($row = @mysql_fetch_array ($str)){
        	?>
            <tr>
              <td><input type="checkbox" /></td>
              <td>
              	<?
              		echo $row['Id'];
              	?>
              </td>
              <td>
              	<?
              		echo $row['name'];
              	?>
              </td>
              <td><a href="#">
              	<?
              		echo $row['pwd'];
              	?>
              </a></td>
              <td>
              	<?
              		echo $row['money'];
              	?>
              </td>
              <td>
              	<?
              		echo $row['apart'];
              	?>
              </td>
              <td>
              	<?
              		echo $row['time'];
              	?>
              </td>
              <td>
                <div class="am-btn-toolbar">
                  <div class="am-btn-group am-btn-group-xs">
                    <button class="am-btn am-btn-default am-btn-xs am-text-secondary"><span class="am-icon-pencil-square-o"></span> 
                    	<a href="">编辑</a></button>
                    <button class="am-btn am-btn-default am-btn-xs am-text-danger"><span class="am-icon-trash-o"></span> 
                    	<a href="function/delete-user.php?id=<?echo $row['Id']?>">删除</a></button>
                  </div>
                </div>
              </td>
            </tr>
            <?
            };
            ?>
          </tbody>
        </table>
          <div class="am-cf">
<div>共<i><?php echo $num; ?></i>条记录，当前显示第<i><?php  echo $page; //和数据分页不同的s?>&nbsp;</i>页</div>
  <div class="am-fr">
    <ul class="am-pagination">
      <li><a href="admin-table.php?page=<?php echo ($page>1)?($page-1):(1) ?>">«</a></li>
      <li><a href="admin-table.php?page=<?php  echo ($page<$pages)?($page+1):($pages)?>">»</a></li>
    </ul>
  </div>
</div>
          <hr />
          <p>注：管理员模式-------模式|开启</p>
        </form>
      </div>

    </div>
  </div>
  <!-- content end -->
</div>

<?
	include "fragment/bottom.php";
?>

<!--[if lt IE 9]>
<script src="assets/js/jquery1.11.1.min.js"></script>
<script src="assets/js/modernizr.js"></script>
<script src="assets/js/polyfill/rem.min.js"></script>
<script src="assets/js/polyfill/respond.min.js"></script>
<script src="assets/js/amazeui.legacy.js"></script>
<![endif]-->

<!--[if (gte IE 9)|!(IE)]><!-->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/amazeui.min.js"></script>
<!--<![endif]-->
<script src="assets/js/app.js"></script>
</body>
</html>
