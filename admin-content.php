<!doctype html>
<html class="no-js">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Amaze后台管理系统模板HTML日志页面 - 源码之家</title>
  <meta name="description" content="这是一个log页面">
  <meta name="keywords" content="log">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <meta name="renderer" content="webkit">
  <meta http-equiv="Cache-Control" content="no-siteapp" />
  <link rel="icon" type="image/png" href="assets/i/favicon.png">
  <link rel="apple-touch-icon-precomposed" href="assets/i/app-icon72x72@2x.png">
  <meta name="apple-mobile-web-app-title" content="Amaze UI" />
  <script type="text/javascript" src="edit/jquery/jquery-1.4.4.min.js"></script>
  <script type="text/javascript" src="edit/xheditor-1.2.2.min.js"></script>
  <script type="text/javascript" src="edit/xheditor_lang/zh-cn.js"></script> 
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
include "sql/sql.php";
include "sql/conn.php";
if($_SESSION['name']==""){
	echo "<script>alert('非法登录');location.href='login.html'</script>";
}
	include "fragment/top.php";
	include "fragment/left.php";
?>
  <!-- content start -->
  <div class="am-u-md-6">
        <div class="am-panel am-panel-default">
          <div class="am-panel-hd am-cf" data-am-collapse="{target: '#collapse-panel-4'}">留言置顶<span class="am-icon-chevron-down am-fr" ></span></div>
          <div id="collapse-panel-4" class="am-panel-bd am-collapse am-in">
            <ul class="am-comments-list admin-content-comment">
            	<?
        	  $res= page_id_mess();
            $num = $res[0];
            $pagesize =2;
            $pages = ceil($num/$pagesize); //分页页数
            $page =@$_GET['page'];
            $page = (isset($page))?($page):(1);
            $up= ($page-1)*$pagesize;
            $sql="select * from `content` ORDER BY `id` DESC LIMIT ".$up." , ".$pagesize."";
            $str = mysql_query($sql);
			      while($row = @mysql_fetch_array ($str)){
        	    ?>
              <li class="am-comment">
                <div class="am-comment-main">
                  <header class="am-comment-hd">
                    <div class="am-comment-meta">发布者： 发布时间： <time>2014-7-12 15:30</time></div>
                  </header>
                  <div class="am-comment-bd"><p><?
                  	echo $row['content'];
                  ?></p>
                  </div>
                </div>
              </li>
              <?
				     }
              ?>
            </ul>
          </div>
        </div>
<!--留言板分割线 -->
        <div class="am-panel am-panel-default">
          <div class="am-panel-hd am-cf" data-am-collapse="{target: '#collapse-panel-3'}">留言板<span class="am-icon-chevron-down am-fr" ></span></div>
          <div class="am-panel-bd am-collapse am-in am-cf" id="collapse-panel-3">
            <ul class="am-list admin-content-task">
            	<?
        	  $res= page_id_mess();
            $num = $res[0];
            $pagesize =5;
            $pages = ceil($num/$pagesize); //分页页数
            $page =@$_GET['page'];
            $page = (isset($page))?($page):(1);
            $up= ($page-1)*$pagesize;
            $sql="select * from `content` ORDER BY `id` DESC LIMIT ".$up." , ".$pagesize."";
            $str = mysql_query($sql);
			      while($row = @mysql_fetch_array ($str)){
        	    ?>
              <li>
                <div class="admin-task-meta">发布者：  时间：</div>
                <div class="admin-task-bd">
                  <?
                  	echo $row['content'];
                  ?>
                </div>
                <div class="am-cf">
                  <div class="am-btn-toolbar am-fl">
                    <div class="am-btn-group am-btn-group-xs">
                      <button type="button" class="am-btn am-btn-default"><span class="am-icon-pencil"></span></button>
                      <button type="button" class="am-btn am-btn-default"><span class="am-icon-times"></span></button>
                    </div>
                  </div>
                  <div class="am-fr">
                    <button type="button" class="am-btn am-btn-default am-btn-xs">删除</button>
                  </div>
                </div>
              </li>
              <?
              }
              ?>
            </ul>
            <ul class="am-pagination am-fr admin-content-pagination">
            	<li>共有<?php echo $num; ?> 条留言,目前在<?php echo $page; ?>&nbsp;页</li>
              <li><a href="admin-content.php"page=<?php echo ($page>1)?($page-1):(1) ?>>&laquo;</a></li>
              <li><a href="admin-content.php?page=<?php  echo ($page<$pages)?($page+1):($pages)?>">&raquo;</a></li>
              
            </ul>
          </div>
        </div> 
        <div>
        <div class="am-panel am-panel-default am-fr" style="width: 100%;height: 115px;">
        <form method="post" action="">
        <textarea style="width: 98%;height: 10%;margin-left: 1%;margin-top: 10px;"></textarea>
        <button type="button" class="am-btn am-btn-default am-btn-xs" style="margin-left: 85%;margin-top: 10px;">发布留言</button>
        </form>
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
