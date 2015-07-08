<?php defined('IN_TS') or die('Access Denied.'); ?><?php include template("admin/header");?>
<!--main-->
<div class="midder">

<?php include template("admin/menu");?>

<div class="page"><?php echo $pageUrl;?></div>

<table  cellpadding="0" cellspacing="0">
<tr class="old"><td>专辑ID</td><td>名字</td><td>介绍</td><td>话题数</td><td>操作</td></tr>

<?php foreach((array)$arrAlbum as $key=>$item) {?>
<tr><td><?php echo $item['albumid'];?></td><td><?php echo $item['albumname'];?></td><td><?php echo $item['albumdesc'];?></td><td><?php echo $item['count_topic'];?></td><td><a onclick="return  confirm('确定删除？')" href="<?php echo SITE_URL;?>index.php?app=group&ac=admin&mg=album&ts=delete&albumid=<?php echo $item['albumid'];?>">删除</a></td></tr>
<?php }?>
</table>

</div>
<?php include template("admin/footer");?>