<?php defined('IN_TS') or die('Access Denied.'); ?><?php include template('header'); ?>

<script type="text/javascript" src="<?php echo SITE_URL;?>public/js/jquery.upload.v2.js"></script>
<SCRIPT LANGUAGE="JavaScript">
function doUpload() {
	var contents = $("#content").val();
	$("#upload").upload({
		action: "<?php echo SITE_URL;?>index.php?app=weibo&ac=photo", //上传地址
		fileName: "filedata",    //文件名称。用于后台接收
		params: {content: contents,token:'<?php echo $_SESSION["token"];?>'},         //参数
		accept: ".jpg,.png,.gif",     //文件类型
		complete: function () {  //上传完成
			window.location.reload()
		},
		submit: function () {   //提交之前
			//alert("submit");
		}
	});

}
</SCRIPT>

<div class="container">

<ol class="breadcrumb">
  <li><a href="<?php echo SITE_URL;?>">首页</a></li>
  <li class="active">唠叨</li>
</ol>

<div class="row">


<div class="col-md-8">


<div class="bbox">
<div class="bc">

<div>
<form id="comm-form" method="post" class="form text-form" action="<?php echo SITE_URL;?>index.php?app=weibo&ac=add" enctype="multipart/form-data">
<textarea class="form-control" rows="3" id="content" name="content"></textarea>

<div style="padding:5px 0;">

<input type="hidden" name="token" value="<?php echo $_SESSION['token'];?>" />

<a href="javascript:void('0');" id="upload" onclick="doUpload()">[图片]</a> 

<div class="fr"><button  class="btn btn-success"  type="submit">唠叨一下</button></div>

</div>
</form>
</div>

<div class="clear"></div>

<ul>
<?php foreach((array)$arrWeibo as $key=>$item) {?>
<li class="mbtl">
<a href="<?php echo tsurl('user','space',array('id'=>$item['user'][userid]))?>"><img class="img-circle" title="<?php echo $item['user'][username];?>" alt="<?php echo $item['user'][username];?>" src="<?php echo $item['user'][face];?>" width="48" /></a>
</li>
<li class="mbtr">
<div class="author"><a href="<?php echo tsurl('user','space',array('id'=>$item['user'][userid]))?>"><?php echo $item['user'][username];?></a> <?php echo $item['addtime'];?></div>
<div class="title"><a href="<?php echo tsurl('group','topic',array('id'=>$item['topicid']))?>"><?php echo $item['title'];?></a></div>
<div class="content">
<?php if($item['photo']) { ?><a target="_blank" href="<?php echo SITE_URL;?>uploadfile/weibo/<?php echo $item['photo'];?>"><img src="<?php echo tsXimg($item['photo'],'weibo',240,'',$item['path'])?>" /></a><?php } ?>
<?php echo $item['content'];?>
</div>
<p style="text-align:right;">

<a href="<?php echo tsurl('weibo','show',array('id'=>$item['weiboid']))?>"><?php if($item['count_comment'] > '0') { ?>(<?php echo $item['count_comment'];?>)<?php } ?>回复</a>

<?php if($GLOBALS['TS_USER']['isadmin'] == 1) { ?>
<a href="<?php echo tsurl('weibo','deleteweibo',array('weiboid'=>$item['weiboid']))?>">删除</a>
<?php } ?>

</p>
</li>
<div class="clear"></div>
<?php }?>
</ul>

<div class="clear"></div>
<div class="page"><?php echo $pageUrl;?></div>
<div>

</div>

</div>
</div>


</div>


<div class="col-md-4">
<div class="panel panel-default">
  <div class="panel-body">

<!--广告位-->
<?php doAction('gobad','300')?>

</div>
</div>
</div>


</div>
</div>		
<?php include template('footer'); ?>