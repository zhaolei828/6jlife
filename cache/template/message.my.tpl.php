<?php defined('IN_TS') or die('Access Denied.'); ?><?php include template('header'); ?>
<div class="container">


<div class="row">

<div class="col-md-2">
<div class="my_left">

<?php include pubTemplate("my")?>

</div>
</div>



<div class="col-md-10">

    <div class="panel panel-default">
        <div class="panel-body">
<?php include template('menu'); ?>


<div class="newmsg">
<ul>
<?php foreach((array)$arrMsg as $key=>$item) {?>
<li><?php if($item['userid']) { ?><img src="<?php echo $item['user']['face'];?>" width="16" align="absmiddle" /> <?php echo $item['user']['username'];?>：<?php echo $item['content'];?> <a href="<?php echo tsurl('message','user',array('touserid'=>$item['userid']))?>">[回复]</a><?php } else { ?>系统消息：<a href="<?php echo tsurl('message','system')?>">[查看]</a><?php } ?></li>
<?php }?>
</ul>
</div>


</div>
</div>
</div>

</div>
</div>

<?php include template('footer'); ?>