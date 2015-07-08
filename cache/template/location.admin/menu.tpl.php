<?php defined('IN_TS') or die('Access Denied.'); ?><h2>区域管理</h2>
<div class="tabnav">
<ul>
<li <?php if($mg=='options') { ?>class="select"<?php } ?>><a href="<?php echo SITE_URL;?>index.php?app=location&ac=admin&mg=options">配置</a></li>
<li <?php if($mg=='location' && $ts=='list') { ?>class="select"<?php } ?>><a href="<?php echo SITE_URL;?>index.php?app=location&ac=admin&mg=location&ts=list">同城列表</a></li>
<li <?php if($mg=='location' && $ts=='add') { ?>class="select"<?php } ?>><a href="<?php echo SITE_URL;?>index.php?app=location&ac=admin&mg=location&ts=add">添加同城</a></li>



</ul>
</div>