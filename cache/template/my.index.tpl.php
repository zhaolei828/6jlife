<?php defined('IN_TS') or die('Access Denied.'); ?><?php include template('header'); ?>

<div class="container">



<div class="row">


<div class="col-md-2">
<div class="my_left">

<?php include pubTemplate("my")?>

</div>
</div>



<div class="col-md-10">


    <div class="panel panel-default">
        <div class="panel-heading">我的小组</div>
        <div class="panel-body">

            <div class="row">

                <?php foreach((array)$arrGroup as $key=>$item) {?>
                <div class="col-sm-6 col-md-2">
                    <div class="thumbnail">
                        <a href="<?php echo tsurl('group','show',array('id'=>$item['groupid']))?>"><img src="<?php echo $item['photo'];?>" alt="<?php echo $item['groupname'];?>" width="120" height="120"></a>
                        <div class="caption">
                            <h3><?php echo cututf8($item['groupname'],0,8,false)?></h3>

                            <p><a href="<?php echo tsurl('group','add',array('id'=>$item['groupid']))?>" class="btn btn-default btn-block" role="button">发帖</a> </p>
                        </div>
                    </div>
                </div>
                <?php }?>


            </div>

        </div>
    </div>


    <div class="panel panel-default">
        <div class="panel-heading">我的帖子</div>
        <div class="panel-body">

            <table class="table">
                <thead>
                <tr><th>发布时间</th><th>标题</th><th>浏览/评论</th><th>操作</th></tr>
                </thead>
                <tbody>
                <?php foreach((array)$arrTopic as $key=>$item) {?>
                <tr><td><?php echo date('Y-m-d',$item['addtime'])?></td><td><a href="<?php echo tsurl('group','topic',array('id'=>$item['topicid']))?>"><?php echo $item['title'];?></a></td><td><?php echo $item['count_view'];?>/<?php echo $item['count_comment'];?></td><td><a href="<?php echo tsurl('group','topicedit',array('topicid'=>$item['topicid']))?>">修改</a></td></tr>
                <?php }?>
                </tbody>
            </table>

        </div>
    </div>


    <div class="panel panel-default">
        <div class="panel-heading">我的文章</div>
        <div class="panel-body">

            <table class="table">
                <thead>
                <tr><th>发布时间</th><th>标题</th><th>浏览/评论</th><th>操作</th></tr>
                </thead>
                <tbody>
                <?php foreach((array)$arrArticle as $key=>$item) {?>
                <tr><td><?php echo date('Y-m-d',strtotime($item['addtime']))?></td><td><a href="<?php echo tsurl('article','show',array('id'=>$item['articleid']))?>"><?php echo $item['title'];?></a></td><td><?php echo $item['count_view'];?>/<?php echo $item['count_comment'];?></td><td><a href="<?php echo tsurl('article','edit',array('articleid'=>$item['articleid']))?>">修改</a></td></tr>
                <?php }?>
                </tbody>
            </table>

        </div>
    </div>


    <div class="panel panel-default">
        <div class="panel-heading">我的资料</div>
        <div class="panel-body">



            <div class="row">
                <?php foreach((array)$arrAttach as $key=>$item) {?>
                <div class="col-xs-12 col-md-3">


                    <div class="panel panel-default">
                        <div class="panel-heading"><a href="<?php echo tsurl('attach','album',array('id'=>$item['albumid']))?>"><?php echo $item['title'];?></a></div>
                        <div class="panel-body">
                            <p>时间：<?php echo date('Y-m-d',strtotime($item['addtime']))?></p>
                            <p>资料：<?php echo $item['count_attach'];?>个</p>
                        </div>
                    </div>


                </div>
                <?php }?>
            </div>



        </div>
    </div>


</div>




</div>



</div>

<!--
<div class="qiandao"><?php if($TS_USER['signin']<strtotime(date('Y-m-d 00:00:00'))) { ?><a href="javascript:void('0');" onclick="qianDao();">每日签到+5积分</a><?php } else { ?>今日已签到<?php } ?></div>-->
<?php include template('footer'); ?>