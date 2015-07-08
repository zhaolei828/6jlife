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

<div class="system">
<ul>
<?php foreach((array)$arrMessage as $key=>$item) {?>
<li>
<span style="color:#42b475;"><?php echo date('H:i:s',$item['addtime'])?></span>
<br />
<?php echo $item['content'];?>
</li>
<?php }?>
</ul>
</div>


</div>
</div>
</div>


</div>

</div>
</div>
</div>

<?php include template('footer'); ?>