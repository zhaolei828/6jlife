<?php defined('IN_TS') or die('Access Denied.'); ?><div class="bbox weibo">
<div class="btitle">唠唠叨叨</div>
<div class="bc">
<div class="weiform">
<form id="comm-form" method="post" action="<?php echo SITE_URL;?>index.php?app=weibo&ac=add">
<textarea name="content"></textarea>
    <input type="hidden" name="token" value="<?php echo $_SESSION['token'];?>" />
<input type="submit" value="发送" />
</form>
</div>

<div class="clear"></div>
<ul id="weibolist" class="weilist">
<?php foreach((array)$arrWeibo as $key=>$item) {?>
<li>
<span class="portrait"><a href="<?php echo tsurl('user','space',array('id'=>$item['user']['userid']))?>"><img align="absmiddle" class="SmallPortrait img-circle" title="<?php echo $item['user']['username'];?>" alt="<?php echo $item['user']['username'];?>" src="<?php echo $item['user']['face'];?>"></a></span>
<span class="body">
<span class="user"><a href="<?php echo tsurl('user','space',array('id'=>$item['user']['userid']))?>"><?php echo $item['user']['username'];?></a>：</span><span class="log"><?php echo $item['content'];?></span>
<?php if($item['photo']) { ?>
<div style="padding:5px 0;"><a target="_blank" href="<?php echo tsurl('weibo','show',array('id'=>$item['weiboid']))?>"><img src="<?php echo tsXimg($item['photo'],'weibo',240,'',$item['path'])?>" width="120" alt="<?php echo $item['user']['username'];?>的唠叨图片" /></a>
</div>
<?php } ?>
<span class="time"><?php echo getTime(strtotime($item['addtime']),time())?> (<a href="<?php echo tsurl('weibo','show',array('id'=>$item['weiboid']))?>"><?php echo $item['count_comment'];?>评</a>)
</span>
</span>
<div class="clear"></div>
</li>
<?php }?>
</ul>
</div>
</div>