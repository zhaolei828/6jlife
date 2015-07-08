<?php defined('IN_TS') or die('Access Denied.'); ?><?php include template("admin/header");?>
<!--main-->
<div class="midder">

<?php include template("admin/menu");?>

<table  cellpadding="0" cellspacing="0">
<tr class="old"><td>ID</td><td>名称</td><td>排序</td><td>操作</td></tr>


<?php foreach((array)$arrLocation as $key=>$item) {?>

<tr class="odd"><td><?php echo $item['locationid'];?></td><td><?php echo $item['title'];?></td>

<td><?php echo $item['orderid'];?></td>

<td>



<a href="<?php echo SITE_URL;?>index.php?app=location&ac=admin&mg=location&ts=edit&locationid=<?php echo $item['locationid'];?>">[修改]</a> <a href="<?php echo SITE_URL;?>index.php?app=location&ac=admin&mg=location&ts=delete&locationid=<?php echo $item['locationid'];?>" onclick="return confirm('确定删除?')">[删除]</a></td></tr>


<?php }?>
</table>

</div>
<?php include template("admin/footer");?>