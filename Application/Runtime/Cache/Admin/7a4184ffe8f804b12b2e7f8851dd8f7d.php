<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <title>操作中心</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/Application/Admin/View/Pulbic//css/bootstrap.min.css" />
    <link rel="stylesheet" href="/Application/Admin/View/Pulbic//css/bootstrap-responsive.min.css" />
    <link rel="stylesheet" href="/Application/Admin/View/Pulbic//css/fullcalendar.css" />
    <link rel="stylesheet" href="/Application/Admin/View/Pulbic//css/matrix-style.css" />
    <link rel="stylesheet" href="/Application/Admin/View/Pulbic//css/matrix-media.css" />
    <link href="/Application/Admin/View/Pulbic//font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" href="/Application/Admin/View/Pulbic//css/jquery.gritter.css" />
    <link rel="stylesheet" href="/Application/Admin/View/Pulbic//css/uniform.css" />
    <link rel="stylesheet" href="/Application/Admin/View/Pulbic//css/select2.css" />

</head>
<body>
<!--Header-part-->
<div id="header">
    <h1><a href="<?php echo U('Index/index');?>">操作中心</a></h1>
</div>
<!--close-Header-part-->
<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">
    <ul class="nav">
        <li class=""><a title="" href="#"><i class="icon icon-cog"></i> <span class="text">Settings</span></a></li>
        <li class=""><a title="" href="<?php echo U('Index/loginout');?>"><i class="icon icon-share-alt"></i> <span class="text">Logout</span></a></li>
    </ul>
</div>
<!--close-top-Header-menu-->
<!--start-top-serch-->
<div id="search">
    <input type="text" placeholder="Search here..."/>
    <button type="submit" class="tip-bottom" title="Search"><i class="icon-search icon-white"></i></button>
</div>
<!--close-top-serch-->
<!--sidebar-menu-->
<div id="sidebar">
    <ul>
        <?php if(is_array($allmean)): $i = 0; $__LIST__ = $allmean;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if(($vo["sid"]) == "0"): ?><li <?php if(($now["id"]) == $vo['id']): ?>class="submenu active open" <?php else: ?>class="submenu"<?php endif; ?>   > <a href="#"><i class="icon icon-home"></i> <span><?php echo ($vo["title"]); ?></span></a>
                    <ul>
                        <?php if(is_array($allmean)): $i = 0; $__LIST__ = $allmean;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo1): $mod = ($i % 2 );++$i; if(($vo1["sid"]) == $vo['id']): $temp=$vo1["controller"]."/".$vo1["function"];?>
                                <li
                                    <?php if($vo1["controller"]==$controller && $vo1["function"]==$function) { echo 'class="active"'; } ?>
                                >
                                <a href="<?php echo U($temp); echo ($vo1["parm"]); ?>"><?php echo ($vo1["title"]); ?></a></li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                </li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
    </ul>
</div>
<!--sidebar-menu-->
<style>
    .table th, .table td {
        text-align: center;
        height:38px;
    }
</style>
<div id="content">
    <div id="content-header">
        <div id="breadcrumb">
            <a href="{U('Index/index')}" title="返回首页" class="tip-bottom"><i class="icon-home"></i> 首页</a>
            <a href="#" class="current">文章管理</a>

        </div>
    </div>
    <div class="widget-content">
        <div><a href="/index.php/Admin/Article/one" class="btn btn-success">添加文章</a></div>
        <table class="table">
            <thead>
            <tr>
                <th><input type="checkbox" class="checkbox"></th>
                <th>文章标题</th>
                <th>文章栏目</th>
                <th>文章发布时间</th>
                <th>文章排序</th>
                <th>是否显示</th>
                <th>操作</th>
            </tr>
            </thead>
            <tbody aria-relevant="all">
            <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                    <td><input type="checkbox" name="id[]" value="<?php echo ($vo["id"]); ?>"/></td>
                    <td><?php echo ($vo["title"]); ?></td>
                    <td><?php echo ($vo["col"]); ?></td>
                    <td><?php echo (date("Y-m-d",$vo["time"])); ?></td>
                    <td><?php echo ($vo["sort"]); ?></td>
                    <td>
                        <?php if(($vo["status"]) == "1"): ?>是
                            <?php else: ?>
                            否<?php endif; ?>
                    </td>
                    <td><a href="/index.php/Admin/Article/one?id=<?php echo ($vo["id"]); ?>" class="btn btn-primary btn-mini">修改</a><a
                            href="javascript:if(confirm('确实要删除该内容吗?'))location='/index.php/Admin/Article/del?id=<?php echo ($vo["id"]); ?>'"
                            class="btn btn-danger btn-mini">删除</a></td>
                </tr><?php endforeach; endif; else: echo "" ;endif; ?>
            </tbody>
        </table>
    </div>
</div>
</div>
</div>
<!--Footer-part-->

<div class="row-fluid">
    <div id="footer" class="span12"> 2013 &copy; Matrix Admin. More Templates <a href="http://www.cssmoban.com/" target="_blank" title="模板之家">模板之家</a> - Collect from <a href="http://www.cssmoban.com/" title="网页模板" target="_blank">网页模板</a> </div>
</div>

<!--end-Footer-part-->
<script src="/Application/Admin/View/Pulbic//js/jquery.min.js"></script> 
<script src="/Application/Admin/View/Pulbic//js/select2.min.js"></script>
<script src="/Application/Admin/View/Pulbic//js/jquery.ui.custom.js"></script> 
<script src="/Application/Admin/View/Pulbic//js/bootstrap.min.js"></script> 
<script src="/Application/Admin/View/Pulbic//js/matrix.js"></script>
</body>
</html>