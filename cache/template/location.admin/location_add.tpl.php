<?php defined('IN_TS') or die('Access Denied.'); ?><?php include template("admin/header");?>
<!--main-->
<div class="midder">
<?php include template("admin/menu");?>

<form method="POST" action="<?php echo SITE_URL;?>index.php?app=location&ac=admin&mg=location&ts=adddo" enctype="multipart/form-data">
<table  cellpadding="0" cellspacing="0">
<tr><td width="100">名称：</td><td><input style="width:300px;" name="title" value="" /></td></tr>

<tr><td>内容：</td><td><textarea style="width:300px;" name="content"></textarea></td></tr>

<tr><td>图片：</td><td><input type="file" name="photo" /></td></tr>

<tr><td>排序ID：</td><td><input name="orderid" value="0" /></td></tr>
<tr><td></td><td>
<input type="submit" value="添加" />
</td></tr>
</table>
</form>

</div>

<?php include template("admin/footer");?>