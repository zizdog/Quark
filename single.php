<?php $this->need('header.php'); ?>
<div class="p s">
	<div class="pt">
	<h1><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h1>
	<div class="pm">发表于 <?php $this->date('Y-m-d'); ?> &nbsp; <?php if ($this->is('post')){echo " | &nbsp; 分类于 ";$this->category(' , ');} ?></div>
	</div>
	<div class="pp <?php if($this->is('page')){echo $this->slug();}?>">
		<?php $this->content(); ?>
	</div>
	<?php if($this->is('post')):?>
	<div class="ptg"><?php $this->tags(' ', true); ?></div>
	<div class="pnv"><div class="prev">&lt; <?php $this->thePrev('%s',''); ?></div><div class="next"><?php $this->theNext('%s',''); ?> &gt;</div></div>
	<?php endif; ?>
</div>
<?php if($this->allow('comment')){$this->need('comments.php');}?>
<?php $this->need('footer.php'); ?>