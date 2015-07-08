<?php defined('IN_TS') or die('Access Denied.'); ?><div class="container">
<?php doAction('pub_footer_top')?>
</div>

<div class="footer">
<p>
<a href="<?php echo tsurl('home','info',array('key'=>'about'))?>">关于我们</a> | <a href="<?php echo tsurl('home','info',array('key'=>'contact'))?>">联系我们</a> | <a href="<?php echo tsurl('home','info',array('key'=>'agreement'))?>">用户条款</a> | <a href="<?php echo tsurl('home','info',array('key'=>'privacy'))?>">隐私申明</a>
 | <a href="<?php echo tsurl('home','info',array('key'=>'job'))?>">加入我们</a>
</p>
<p>Powered by <a target="_blank" class="softname" title="开源社区" href="<?php echo $GLOBALS['TS_CF'][info][url];?>"><?php echo $GLOBALS['TS_CF'][info][name];?></a> <?php echo $GLOBALS['TS_CF'][info][version];?> & <a target="_blank" href="<?php echo $GLOBALS['TS_CF'][info][copyurl];?>" title="<?php echo $GLOBALS['TS_CF'][info][copyright];?>">QINIAO INC.</a>  Copyright ©  <?php echo $GLOBALS['TS_CF'][info][year];?>   <a target="_blank" href="<?php echo SITE_URL;?>"><?php echo $TS_SITE['base'][site_title];?></a> <?php echo $TS_SITE['base'][site_icp];?></p><p><span style="font-size:0.83em;">Processed in <?php echo $GLOBALS['TS_CF']['runTime'];?> second(s)</span></p></div>

<!--弹出窗口-->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">关闭</span></button>
        <h4 class="modal-title" id="myModalLabel">提示</h4>
      </div>
      <div class="modal-body">

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
        
      </div>
    </div>
  </div>
</div>

<?php if(intval($GLOBALS['TS_USER']['userid'])) { ?>
<script src="<?php echo SITE_URL;?>public/js/imbox/imbox.js" type="text/javascript"></script>
<script>
var siteUid=<?php echo intval($GLOBALS['TS_USER']['userid'])?>; //网站用户ID
evdata(siteUid);
</script>
<?php } ?>
<script src="<?php echo SITE_URL;?>public/js/common.js" type="text/javascript"></script>
<?php if(is_file('app/'.$GLOBALS['TS_URL']['app'].'/js/extend.func.js')) { ?>
<script src="<?php echo SITE_URL;?>app/<?php echo $GLOBALS['TS_URL']['app'];?>/js/extend.func.js" type="text/javascript"></script>
<?php } ?>
<?php doAction('pub_footer')?>
</body>
</html>
<?php if($GLOBALS['TS_SITE']['isgzip']==1) { ?><?php ob_end_flush();?><?php } ?>