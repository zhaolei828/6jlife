<?php defined('IN_TS') or die('Access Denied.'); ?><?php include template('header'); ?>
<div class="container">

<ol class="breadcrumb">
  <li><a href="<?php echo SITE_URL;?>">首页</a></li>
  <li class="active">资料</li>
</ol>

<div class="bbox mh400">


<div class="bc">

<?php include template('menu'); ?>

<div style="height:20px"></div>

    <div class="row">
        <?php foreach((array)$arrAlbum as $key=>$item) {?>
        <div class="col-xs-12 col-md-3">


            <div class="panel panel-default">
                <div class="panel-heading"><a href="<?php echo tsurl('attach','album',array('id'=>$item['albumid']))?>"><?php echo $item['title'];?></a></div>
                <div class="panel-body">
                    <p>作者：<?php echo $item['user']['username'];?></p>
                    <p>时间：<?php echo date('Y-m-d',strtotime($item['addtime']))?></p>
                    <p>资料：<?php echo $item['count_attach'];?>个</p>
                </div>
            </div>


        </div>
        <?php }?>
    </div>




</div>

</div>


</div>

<?php include template('footer'); ?>