<?php if (!defined('THINK_PATH')) exit();?><feed app='public' type='postimage' info='发图片微博'>
	<title> 
		<![CDATA[<?php echo ($actor); ?>]]>
	</title>
	<body>
		<![CDATA[ 
			<?php echo (replaceurl(t($body))); ?>
			<br/>
			<div class="feed_img_lists" rel='small' >
			<ul class="small">
			<?php if(count($attachInfo) == 1): ?>
			<?php if(is_array($attachInfo)): ?><?php $i = 0;?><?php $__LIST__ = $attachInfo?><?php if( count($__LIST__)==0 ) : echo "" ; ?><?php else: ?><?php foreach($__LIST__ as $key=>$vo): ?><?php ++$i;?><?php $mod = ($i % 2 )?><li ><a href="javascript:void(0)" event-node='img_small'>
					<img class="imgicon" src='<?php echo ($vo["attach_small"]); ?>' title='点击放大' width="100" height="100"></a>
				</li><?php endforeach; ?><?php endif; ?><?php else: echo "" ;?><?php endif; ?>
			<?php else: ?>
			<?php if(is_array($attachInfo)): ?><?php $i = 0;?><?php $__LIST__ = $attachInfo?><?php if( count($__LIST__)==0 ) : echo "" ; ?><?php else: ?><?php foreach($__LIST__ as $key=>$vo): ?><?php ++$i;?><?php $mod = ($i % 2 )?><li ><a onclick="core.weibo.showBigImage(<?php echo ($feedid); ?>, <?php echo ($i); ?>)" href="javascript:void(0)">
					<img class="imgicon" src='<?php echo ($vo["attach_small"]); ?>' title='点击放大' width="100" height="100"></a>
				</li><?php endforeach; ?><?php endif; ?><?php else: echo "" ;?><?php endif; ?>
			<?php endif; ?>
			</ul>
			</div>
			<div class="feed_img_lists" rel='big' style='display:none'>
			<ul class="feed_img_list big" >
			<span class='tools'>
				<a href="javascript:;" event-node='img_big'><i class="ico-pack-up"></i>收起</a>
				<a target="_blank" href="<?php echo ($vo["attach_url"]); ?>"><i class="ico-show-big"></i>查看大图</a>
				<a href="javascript:;" onclick="revolving('left', <?php echo ($feedid); ?>)"><i class="ico-turn-l"></i>向左转</a>
				<a href="javascript:;" onclick="revolving('right', <?php echo ($feedid); ?>)"><i class="ico-turn-r"></i>向右转</a>
			</span>
			<?php if(is_array($attachInfo)): ?><?php $i = 0;?><?php $__LIST__ = $attachInfo?><?php if( count($__LIST__)==0 ) : echo "" ; ?><?php else: ?><?php foreach($__LIST__ as $key=>$vo): ?><?php ++$i;?><?php $mod = ($i % 2 )?><li title='<?php echo ($vo["attach_url"]); ?>'>
				<!-- <a onclick="core.weibo.showBigImage(<?php echo ($feedid); ?>);" target="_blank" class="ico-show-big" title="查看大图" ></a> -->
				<a href="javascript:void(0)" event-node='img_big'><img maxwidth="557" id="image_index_<?php echo ($feedid); ?>" class="imgsmall" src='<?php echo ($vo["attach_middle"]); ?>' title='点击缩小' ></a>
			</li><?php endforeach; ?><?php endif; ?><?php else: echo "" ;?><?php endif; ?>
			</ul>
			</div>
		 ]]>
	</body>
	<feedAttr comment="true" repost="true" like="false" favor="true" delete="true" />
</feed>