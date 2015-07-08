<?php defined('IN_TS') or die('Access Denied.'); ?><div class="user_info">
<div class="photo"><img src="<?php echo $strUser['face'];?>" width="48" /></div>
<div class="info">
<div class="username"><a target="_blank" href="<?php echo tsurl('user','space',array('id'=>$strUser['userid']))?>"><?php echo $strUser['username'];?></a></div>
<div class="rolename"><a target="_blank" class="btn btn-default btn-sm" href="<?php echo tsurl('user','space',array('id'=>$strUser['userid']))?>">访问空间</a></div>
</div>
</div>

<div class="stats-mod">
<ul class="user-stats clearfix">
<li><a href="<?php echo tsurl('my','score')?>"><strong><?php echo $strUser['count_score'];?></strong>积分</a></li>
<!--<li><a href="#"><strong>1</strong>T币</a></li>-->
</ul>
</div>



<div class="menu-mod clearfix">
<ul class="menus">
    
<li <?php if($GLOBALS['TS_URL']['app']=='my' && $GLOBALS['TS_URL']['ac']=='index') { ?>class="active"<?php } ?>><a href="<?php echo tsurl('my')?>">我的社区</a></li>

<li <?php if($GLOBALS['TS_URL']['app']=='group' && $GLOBALS['TS_URL']['my']=='index') { ?>class="active"<?php } ?>><a href="<?php echo tsurl('group','my')?>">小组</a></li>
    
<li <?php if($GLOBALS['TS_URL']['app']=='group' && $GLOBALS['TS_URL']['my']=='topic') { ?>class="active"<?php } ?>><a href="<?php echo tsurl('group','my',array('my'=>'topic'))?>">帖子</a></li>
    
    <li <?php if($GLOBALS['TS_URL']['app']=='article') { ?>class="active"<?php } ?>><a href="<?php echo tsurl('article','my')?>">文章</a></li>
    
<li <?php if($GLOBALS['TS_URL']['app']=='photo') { ?>class="active"<?php } ?>><a href="<?php echo tsurl('photo','my')?>">相册</a></li>
    
<li <?php if($GLOBALS['TS_URL']['app']=='attach') { ?>class="active"<?php } ?>><a href="<?php echo tsurl('attach','my')?>">资料</a></li>



</ul>


<ul class="menus">

<li <?php if($GLOBALS['TS_URL']['app']=='message' && $GLOBALS['TS_URL']['ac']=='my' || $GLOBALS['TS_URL']['app']=='message' && $GLOBALS['TS_URL']['ac']=='system') { ?>class="active"<?php } ?>><a href="<?php echo tsurl('message','my')?>">消息</a></li>
    
    <li <?php if($GLOBALS['TS_URL']['app']=='my' && $GLOBALS['TS_URL']['ac']=='score') { ?>class="active"<?php } ?>><a href="<?php echo tsurl('my','score')?>">积分</a></li>

    <li <?php if($GLOBALS['TS_URL']['app']=='redeem') { ?>class="active"<?php } ?>><a href="<?php echo tsurl('redeem','my')?>">兑换</a></li>




</ul>



<ul class="menus">

<li <?php if($GLOBALS['TS_URL']['app']=='my' && $GLOBALS['TS_URL']['ac']=='setting') { ?>class="active"<?php } ?>><a href="<?php echo tsurl('my','setting',array('ts'=>'base'))?>">账户设置</a></li>

</ul>
    
    <div style="height: 30px"></div>
    
</div>
