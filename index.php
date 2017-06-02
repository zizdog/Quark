<?php
/**
 * 简 ● 爱
 * 
 * @package Quark
 * @author 孙华
 * @version 2.0
 * @link http://sunhua.me
 */
 $this->need('header.php');?>
<?php while($this->next()): ?>
<div class="p i">
	<div class="pt">
	<h1><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h1>
	<div class="pm">发表于 <?php $this->date('Y-m-d'); ?> &nbsp; | &nbsp; 分类于 <?php $this->category(' , '); ?></div>
	</div>
	<div class="pp"><?php $this->content('阅读全文 »'); ?></div>
</div>
<?php endwhile; ?>
<?php $this->pageNav('&laquo;', '&raquo;'); ?>
<?php $this->need('footer.php'); ?>