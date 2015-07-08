<?php defined('IN_TS') or die('Access Denied.'); ?><?php include template('header'); ?>

<div class="container">


<ol class="breadcrumb">
  <li><a href="<?php echo SITE_URL;?>">首页</a></li>
  <li class="active">相册</li>
</ol>

<div class="panel panel-default">
  <div class="panel-body">
  
<?php include template('menu'); ?>


<div class="row">
<?php foreach((array)$arrAlbum as $key=>$item) {?>
  <div class="col-xs-6 col-md-2">
    <a href="<?php echo tsurl('photo','album',array('id'=>$item['albumid']))?>" class="thumbnail">
      <img src="<?php if($item['albumface'] == '') { ?><?php echo SITE_URL;?>app/<?php echo $app;?>/skins/<?php echo $skin;?>/photo_album.png<?php } else { ?><?php echo tsXimg($item['albumface'],'photo',170,'170',$item['path'],1)?><?php } ?>" alt="<?php echo $item['albumname'];?>" width="170" height="170">
    </a>
	
 <div class="caption">
        <h3><?php echo $item['albumname'];?></h3>
        <p> <?php echo $item['count_photo'];?>张照片&nbsp;
           <?php echo $item['addtime'];?>创建</p>
      </div>
	
  </div>
<?php }?>
</div>



 <div class="clear"></div>
 <div class="page"><?php echo $pageUrl;?></div>

</div>
</div>
</div>

<?php include template('footer'); ?>