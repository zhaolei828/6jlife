<?php defined('IN_TS') or die('Access Denied.'); ?><?php include template("admin/header");?>

<div class="midder">

<?php include template("admin/menu");?>

<form method="POST" action="<?php echo SITE_URL;?>index.php?app=user&ac=admin&mg=options&ts=do">
<table  cellpadding="0" cellspacing="0">

<tr><td width="100">APP名称：</td><td><input style="width:300px;" name="option[appname]" value="<?php echo $strOption['appname'];?>" /></td></tr>
<tr><td>APP介绍：</td><td><textarea style="width:300px;" name="option[appdesc]"><?php echo $strOption['appdesc'];?></textarea></td></tr>

<tr><td>APP关键词：</td><td><input style="width:300px;" name="option[appkey]" value="<?php echo $strOption['appkey'];?>" /></td></tr>

<tr><td>APP是否启用:</td><td><input <?php if($strOption['isenable']=='0') { ?>checked="select"<?php } ?> name="option[isenable]" type="radio" value="0" />启用 <input <?php if($strOption['isenable']=='1') { ?>checked="select"<?php } ?> name="option[isenable]" type="radio" value="1" />关闭</td></tr>

<tr><td>默认加入小组 :</td><td><input style="width:300px;" name="option[isgroup]" value="<?php echo $strOption['isgroup'];?>" /> （输入小组的ID，不是小组名称，多个请用,号分开，如1,2,3）</td></tr>

<tr><td>禁止注册用户名 :</td><td><input style="width:300px;" name="option[banuser]" value="<?php echo $strOption['banuser'];?>" /> （禁止用户注册的用户名，多个用|分割）</td></tr>

<tr><td></td><td><input type="submit" value="提 交" /></td></tr>
</table>
</form>
</div>

<?php include template("admin/footer");?>