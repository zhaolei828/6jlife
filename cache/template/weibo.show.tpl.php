<?php defined('IN_TS') or die('Access Denied.'); ?><?php include template('header'); ?>


<div class="container">

<ol class="breadcrumb">
  <li><a href="<?php echo SITE_URL;?>">首页</a></li>
  <li><a href="<?php echo tsurl('weibo')?>">唠叨</a></li>
  <li class="active"><?php echo $title;?></li>
</ol>

<div class="row">

<div class="col-md-8">


<div class="bbox">
<div class="bc">
<li class="mbtl">
<a href="<?php echo tsurl('user','space',array('id'=>$strWeibo['user'][userid]))?>"><img class="img-circle" title="<?php echo $strWeibo['user'][username];?>" alt="<?php echo $strWeibo['user'][username];?>" src="<?php echo $strWeibo['user'][face];?>" width="48" /></a>
</li>
<li class="mbtr">
<div class="author"><a href="<?php echo tsurl('user','space',array('id'=>$strWeibo['user'][userid]))?>"><?php echo $strWeibo['user'][username];?></a> <?php echo $strWeibo['addtime'];?></div>
<div class="content">
<?php if($strWeibo['photo']) { ?><a target="_blank" href="<?php echo SITE_URL;?>uploadfile/weibo/<?php echo $strWeibo['photo'];?>"><img src="<?php echo tsXimg($strWeibo['photo'],'weibo',240,'',$strWeibo['path'])?>" /></a><?php } ?>
<?php echo $strWeibo['content'];?>
</div>
<p style="text-align:right;">
<?php if($GLOBALS['TS_USER']['isadmin'] == 1) { ?>
<a href="<?php echo tsurl('weibo','deleteweibo',array('weiboid'=>$strWeibo['weiboid']))?>">删除</a>
<?php } ?>

</p>
</li>
</div>
</div>


<div class="bbox">

<div class="btitle">回复(<?php echo $strWeibo['count_comment'];?>)</div>

<div class="bc">
<ul class="comment">
<?php foreach((array)$arrComment as $key=>$item) {?>
<li class="clearfix">
<div class="user-face">
<a href="<?php echo tsurl('user','space',array('id'=>$item['user'][userid]))?>"><img class="img-circle" title="<?php echo $item['user'][username];?>" alt="<?php echo $item['user'][username];?>" src="<?php echo $item['user'][face];?>" width="48" /></a>
</div>
<div class="reply-doc">
<h4>
<?php echo $item['addtime'];?> 
<a href="<?php echo tsurl('user','space',array('id'=>$item['userid']))?>"><?php echo $item['user'][username];?></a>
</h4>
<p><?php echo $item['content'];?></p>
<?php if($GLOBALS['TS_USER'][user][userid] == $item['userid'] || $GLOBALS['TS_USER']['isadmin']==1) { ?>
<div class="group_banned">
<span><a class="j a_confirm_link" href="<?php echo tsurl('weibo','deletecomment',array('commentid'=>$item['commentid']))?>" rel="nofollow">删除</a>
</span>
</div>
<?php } ?>
</div>
</li>
<?php }?>
</ul>


<div>
<form method="post" class="form text-form" action="<?php echo SITE_URL;?>index.php?app=weibo&ac=addcomment" enctype="multipart/form-data">
<textarea class="form-control" rows="3" name="content"></textarea>
<div style="padding:5px 0;">
<input type="hidden" name="weiboid" value="<?php echo $strWeibo['weiboid'];?>" />
<input type="hidden" name="token" value="<?php echo $_SESSION['token'];?>" />
<button  class="btn btn-success"  type="submit">回复</button>
</div>
</form>
</div>
</div>


</div>




</div>


<div class="col-md-4">

<div class="facebox bbox">
<div class="bc">
<div class="face">
<a href="<?php echo tsurl('user','space',array('id'=>$strWeibo['user'][userid]))?>" rel="face" uid="<?php echo $strWeibo['user'][userid];?>"><img class="img-circle" title="<?php echo $strWeibo['user'][username];?>" alt="<?php echo $strWeibo['user'][username];?>" src="<?php echo $strWeibo['user'][face];?>" width="48"></a>
</div>

<div class="info">
<h3><a href="<?php echo tsurl('user','space',array('id'=>$strWeibo['user'][userid]))?>"><?php echo $strWeibo['user'][username];?></a></h3>
<div><a class="btn btn-success btn-sm" href="javascript:void('0')" onclick="follow('<?php echo $strWeibo['user']['userid'];?>','<?php echo $_SESSION['token'];?>');">关注</a></div>
</div>
</div>
</div>

<!--广告位-->
<?php doAction('gobad','300')?>


</div>

</div>

</div>


<?php include template('footer'); ?>