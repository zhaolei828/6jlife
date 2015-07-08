<?php defined('IN_TS') or die('Access Denied.'); ?><ul class="nav nav-tabs" role="tablist">
<li role="presentation" <?php if($ac=='index') { ?>class="active"<?php } ?>><a href="<?php echo tsurl('photo')?>">最新专辑</a></li>
<?php if($ac=='album' && $ts=='user') { ?>
<li role="presentation" class="active"><a href="<?php echo tsurl('photo','album',array(ts=>user,userid=>$userid))?>"><?php echo $title;?></a></li>
<?php } ?>
<?php if($ts!='user' && intval($TS_USER['userid']) > '0') { ?>
<li role="presentation"><a href="<?php echo tsurl('photo','album',array(ts=>user,userid=>$TS_USER['userid']))?>">我的专辑</a></li>
<?php } ?>
<li role="presentation" <?php if($ac=='create') { ?>class="active"<?php } ?>><a href="<?php echo tsurl('photo','create')?>">创建新专辑</a></li>
</ul>

<div style="height:30px;"></div>