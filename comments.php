<?php
function threadedComments($comments, $options) {
    $cby = $comments->authorId == $comments->ownerId ? '<span class="cby">admin</span>' : '';
    $clevel = $comments->levels > 0 ? 'c_c' : 'c_p';
    $author = $comments->url ? '<a href="' . $comments->url . '"'.'" target="_blank"' . ' rel="external">' . $comments->author . '</a>' : $comments->author;
?>
<li id="li-<?php $comments->theId(); ?>" class="<?php echo $clevel;?>">
<div id="<?php $comments->theId(); ?>">
<?php
    $t = 1209600*8;
    $a = Helper::options()->siteUrl . 'usr/uploads/avatar/' . md5(strtolower($comments->mail)) . '.jpg';
    $e = __TYPECHO_ROOT_DIR__ . '/' . 'usr/uploads/avatar/' . md5(strtolower($comments->mail)) . '.jpg';
    if ( !is_file($e) || (time() - filemtime($e)) > $t ){
    $a = 'https://secure.gravatar.com/avatar/' . md5(strtolower($comments->mail)) . '?s=80&r=X&d=';
    copy($a, $e);
        if (!is_file($e)){
            copy($d, $e);
        };
    };
    if ( filesize($e) < 900 ) copy($d, $e);
?>
    <img class="avatar" src="<?php echo $a ?>" alt="<?php echo $comments->author; ?>" />
    <div class="cp">
    <?php $comments->content(); ?>
        <div class="cm"><span class="ca"><?php echo $author ?></span>&nbsp;<?php echo $cby;?>&nbsp;<?php $comments->date(); ?><span class="cr"><?php $comments->reply(); ?></span></div>
    </div>
</div>
<?php if ($comments->children){ ?><div class="children"><?php $comments->threadedComments($options); ?></div><?php } ?>
</li>
<?php } ?>
<style type="text/css">
.cf{margin:1rem 0 3rem 0}
.cf .page-navigator{margin:3.75rem 0 3rem 0}
.response{margin:2rem 0}
.hinfo{display:none}
.cf a{color:#aaa}
.comment-list{padding-left:0;list-style-type:none;margin:0}
.avatar{display:block;float:left;width:40px;height:40px;margin:1.4rem 1rem 0 0;border-radius:50%}
.cp{overflow:hidden;padding:1rem 0;border-bottom:1px dotted #e0e0e0}
.cp p{margin:0}
.cr{float:right;display:none}
.cp:hover .cr{display:block}
.ccr,.cm{font-size:.766rem;margin-top:1rem;color:#aaa}
.ccr{text-align:right}
.ca,.cby{padding:.1rem .25rem;border-radius:2px;background:#eee;font-size:.7rem}
.ca a:hover{color:#f08f00!important}
.c_p>.children{margin-left:1rem;padding-left:40px}
.tbox{padding:0 0 0 18px}
.ci{font-size:14px;line-height:1.5;color:#555;height:30px;margin:10px 0;border:1px solid #ccc;border-radius:2px;width:100%;padding:3px 7px;margin-left:-18px;overflow:auto}
.ci:focus{border-color:#999;outline:0}
textarea.ci{padding-top:8px;height:10rem;resize:none}
.submit{font-size:1rem;border:1px solid #f0f0f0;padding:0 30px;line-height:36px;text-align:center;height:36px;margin:0 auto;display:block;background:#f5f5f5}
.submit:hover{color:#000;border-color:#ddd;background:#ddd;cursor:pointer}
@media only screen and (max-width:767px){.c_p .children{margin-left:0;padding-left:0}}
</style>
<div id="comments" class="cf">
<?php $this->comments()->to($comments); ?>
<?php if ($comments->have()): ?>
    <h4><?php $this->commentsNum(_t('暂无评论'), _t('仅有 1 条评论'), _t('已有 %d 条评论')); ?></h4><br>
    <?php $comments->listComments(); ?><?php $comments->pageNav('&laquo;', '&raquo;'); ?>
<?php endif; ?>
<div id="<?php $this->respondId(); ?>" class="respond">
    <div class="ccr"><?php $comments->cancelReply(); ?></div>
    <h3 class="response">发表新评论</h3>
<form method="post" action="<?php $this->commentUrl() ?>" id="cf" role="form">
<?php if($this->user->hasLogin()): ?>
    <span>已登入<a href="<?php $this->options->profileUrl(); ?>"><?php $this->user->screenName(); ?></a>. <a href="<?php $this->options->logoutUrl(); ?>" title="Logout">退出 &raquo;</a></span>
<?php else: ?>
    <?php if($this->remember('author',true) != "" && $this->remember('mail',true) != "") : ?>
        <span>欢迎【<?php $this->remember('author'); ?>】的归来 | <small style="cursor: pointer;" onclick = "tg_c('ainfo','hinfo');"> 编辑资料</small></span>
        <div id ="ainfo" class="ainfo hinfo">
    <?php else : ?>
        <div class="ainfo">
        <?php endif ; ?>
        <div class="tbox">
        <input type="text" name="author" id="author" class="ci" placeholder="称呼" value="<?php $this->remember('author'); ?>" required>
        <input type="email" name="mail" id="mail" class="ci" placeholder="邮箱" value="<?php $this->remember('mail'); ?>" required>
        <input type="url" name="url" id="url" class="ci" placeholder="http://" value="<?php $this->remember('url'); ?>">
        </div>
        </div>
    <?php endif; ?>
    <div class="tbox"><textarea name="text" id="textarea" class="ci" onkeydown="if(event.ctrlKey&&event.keyCode==13){document.getElementById('submit').click();return false};" placeholder="在这里输入你的评论" required ><?php $this->remember('text',false); ?></textarea></div>
    <button type="submit" class="submit" id="submit">提交评论 (Ctrl + Enter)</button>
</form>
</div>
</div>