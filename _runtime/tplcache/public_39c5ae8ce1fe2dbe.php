<?php if (!defined('THINK_PATH')) exit();?><div class="img-list clearfix">
  <ul id="ul_<?php echo ($unid); ?>">
		<li id="btn_<?php echo ($unid); ?>"><input style="display:none" id="uploadify_<?php echo ($unid); ?>" type="file" /></li>
  </ul>
</div>

<script type="text/javascript">
/**
 * Jquery多图上传Uploadify插件
 * @return void
 */
core.loadFile(THEME_URL+'/js/uploadify/jquery.uploadify.min.js', function () {
	var unid = "<?php echo ($unid); ?>",
			fileSizeLimit = "<?php echo ($fileSizeLimit); ?>",
			total = "<?php echo ($total); ?>";
	$('#uploadify_'+unid).uploadify({
		formData: {
			attach_type: 'feed_image',
			upload_type: 'image',
			thumb: 1,
			width: 100,
			height: 100,
			cut: 1,
			PHPSESSID: "<?php echo session_id(); ?>"
		},
		fileSizeLimit: fileSizeLimit,
		fileTypeDesc: 'Image Files',
    	fileTypeExts: "<?php echo $fileTypeExts; ?>",
		swf: THEME_URL + '/js/uploadify/uploadify.swf',
		uploader: U('widget/Upload/save'),
		width: 80,
		height: 80,
		buttonImage: THEME_URL + '/image/add-photo-multi.png',
		queueSizeLimit: 9,
		queueID: true,
		overrideEvents: ['onSelectError', 'onDialogClose'],
		onUploadSuccess : function(file, data, response) {
			// 解析JSON数据
			var jsondata = $.parseJSON(data);
			if (jsondata.status === 1) {
				// 添加附件ID表单项目
				var $sendAction = $('div[model-node="send_action"]');
				if ($sendAction.find('.attach_ids').length === 0) {
					$sendAction.append('<input id="attach_ids" class="attach_ids" type="hidden" name="attach_ids" feedtype="image" value="" />');
				}
				core.multimage.removeLoading(unid);
				$('#btn_'+unid).before($('<li id="li_'+unid+'_'+file.index+'"><img src="'+jsondata.data.src+'" width="80" height="80" /><a href="javascript:;" onclick="core.multimage.removeImage(\''+unid+'\', '+file.index+', '+jsondata.data.attach_id+')"><span class="del">删除</span></a></li>').fadeIn('slow'));
				// 动态设置数目
				core.multimage.upNumVal(unid, 'inc');
				// 设置附件的值
				core.multimage.upAttachVal('add', jsondata.data.attach_id);
			}
		},
		onSelectError: function (file, errorCode, errorMsg) {
			switch (errorCode) {
				case -100:
					ui.error('选择的上传数目超过，您还能上传'+errorMsg+'个图片');
					break;
				case -110:
					ui.error("文件 [" + file.name + "] 大小超出系统限制的" + $('#uploadify_'+unid).uploadify('settings', 'fileSizeLimit') + "大小", 4);
					break;
				case -120:
					ui.error("文件 [" + file.name + "] 大小异常");
					break;
				case -130:
					ui.error("文件 [" + file.name + "] 类型不正确");
					break;
			}
		},
		onFallback: function () {
			ui.error('您未安装FLASH控件，无法上传！请安装FLASH控件后再试');
		},
		onUploadStart: function (file) {
			core.multimage.addLoading(unid);
			// 验证是否能继续上传
			var len = $('#ul_'+unid).find('li').length - 1;
			if (len > total) {
				core.multimage.removeLoading(unid);
				ui.error('最多只能上传' + total + '个图片');
				// 停止上传
				$('#uploadify_'+unid).uploadify('stop');
				// 移除队列
				$('#uploadify_'+unid).uploadify('cancel', file.id);
			}
		}
	});
});
</script>