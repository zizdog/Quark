<!DOCTYPE html><html>
<head>
<title><?php $this->options->title(); ?><?php $this->archiveTitle(", ", ' - '); ?></title>
<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"/>
<style type="text/css">
*{margin:0;padding:0;border:0;max-width:100%!important;word-wrap:break-word;word-break:break-all}
body{font-family:Helvetica,"Microsoft YaHei",sans-serif;font-size:.9375rem;line-height:2;color:#444;background:#fff;letter-spacing:1px}
blockquote{padding:0 15px;color:#666;border-left:4px solid #ddd}
pre{background:#f7f7f7;margin:1.25rem 0;padding:.9375rem;overflow:auto;color:#4d4d4c;line-height:1.75}
pre code{background:0 0;text-shadow:none;padding:0;margin:0}
code{background:#eee;text-shadow:0 1px #fff;padding:0 .25rem;margin:0 .25rem;color:#555}
hr{margin:40px 0;height:3px;border:none;background-color:#ddd;background-image:repeating-linear-gradient(-45deg,#fff,#fff 4px,transparent 4px,transparent 8px)}
ol,ul{list-style:none}
a{color:#555;text-decoration:none}
a.active,a:hover{color:#000;outline:0;transition:.2s ease-in-out}
p{margin:0 0 25px 0}
h1,h2,h3,h4,h5,h6{margin:0;padding:0;font-weight:400;line-height:1.1rem}
h2,h3,h4,h5,h6{margin:20px 0 10px}
h1{font-size:1.625rem}
h2{font-size:1.375rem}
h3{font-size:1.1875rem}
h4{font-size:1rem;border-left:3px solid #777;padding-left:8px}
#h{height:124px;width:100%;background:#f5f5f5;border-bottom:1px solid #e1e2e3;font-size:.8125rem;margin:0 auto}
#comments,.p{padding:0 20px}
.w1{width:768px}
#nav{margin:auto;position:relative;height:100%}
#nav::after{clear:both;content:"";display:block}
.x{display:none}
.logo{position:absolute;top:42px;left:18px;font-size:1.5rem;font-weight:700;bottom:auto}
.logo a:hover{text-decoration:none}
#nav ul{position:absolute;right:10px;top:51px}
#nav ul li{display:inline-block;float:left}
#nav ul a{display:block;padding:2px 10px}
#nav ul a:hover{background:#ddd;text-decoration:none}
#m{margin:auto;padding-top:10px}
.p{margin:4.2rem 0}
.p ol,.p ul{list-style-type:circle;padding-left:1.5rem;margin-bottom:20px}
.p ol{list-style-type:decimal;padding-left:2rem}
.p u{color:#b00}
.s .pt{text-align:center;margin:3.75rem 0 3.25rem 0}
.pm,.pm a,small{font-size:.75rem;color:#888}
.pm{margin-top:1.75rem}
.pp{margin:1.5rem 0;text-align:justify;text-justify:inter-ideograph}
.pp img{display:block;margin:.875rem 0;max-width:100%;height:auto}
.pp h2,.pp h3,.pp h4{padding:10px 0 15px}
.s .pp a:before{content:' Link';vertical-align:super;color:#b00;font-size:.5625rem}
.s .pp a{border-bottom:1px dashed #c00}
.s .pp a:hover{border-bottom:1px solid #aaa}
.album img{display:block;max-width:75%;width:75%;margin:.875rem auto}
.ptg{margin:2rem 0 3rem 0}
.ptg a{font-size:.8125rem;margin-right:10px;background:#f5f5f5;padding:2px 6px}
.ptg a:before{content:'# '}
.ptg a:hover{background:#ccc}
.pnv{overflow:hidden;margin-top:60px;padding:10px;white-space:nowrap;border-top:1px solid #eee}
.pnv a:hover{font-weight:700}
.pnv .next,.pnv .prev{display:inline-block;width:50%;white-space:normal}
.pnv .prev{text-align:left}
.pnv .next{text-align:right}
.page-navigator{text-align:center;margin-bottom:3.2rem}
.page-navigator li{display:inline-block;margin-right:1px}
.page-navigator li a{padding:5px 1rem}
.page-navigator li a:hover,.page-navigator li.current a{background:#ddd;text-decoration:none;border-bottom:1px solid #aaa}
#f{border-top:1px solid #e1e2e3;padding:3.5rem 0;text-align:center;background:#f5f5f5;font-size:.8125rem}
@media only screen and (max-width:767px){.pm{margin-top:1.1rem}
h1{font-size:1.375rem}
h2{font-size:1.25rem}
h3{font-size:1.125rem}
.logo{top:12px}
.w1{width:auto}
#m{margin:0}
#h{height:72px}
#nav ul{z-index:2;display:none;top:72px;left:0;width:100%;box-shadow:0 14px 20px rgba(0,0,0,.2)}
#nav ul li{display:block;float:none}
.x{display:block;position:absolute;right:20px;top:25px;width:22px;height:22px;-webkit-tap-highlight-color:rgba(255,0,0,0);padding:0}
.x div{position:relative}
.x span{display:block;position:absolute;background-color:#25283D;height:2px;width:22px;transition:transform .2s;top:10px}
.x .t{top:4px}
.x .b{top:16px}
.o .t{top:10px;transform:rotate(45deg)}
.o .b{top:10px;transform:rotate(-45deg)}
.o .m{background:0}
.o #nav ul{display:block;background:#fff}
.o #nav ul li a{text-align:center;padding:6px 0;border-top:1px solid #f2f2f2}
.p{margin:2.2rem 0}
.page-navigator{margin-bottom:2.2rem}
.pt{text-align:center}
.s .pt{margin:0}
.album img{display:block;width:auto!important}
#f{padding:1.7rem 0}
}
@media screen and (min-width:1580px){html{font-size:135%}
.w1{width:68%}
#h{height:142px}
#nav ul{top:52px}
#nav ul a{display:block;padding:2px 15px}
}
@media screen and (min-width:2500px){html{font-size:150%}}
</style>
<?php $this->header(); ?>
</head>
<body>
<div id="h">
<div id="nav" class="w1">
    <a href="#" class="x" onclick = "tg_c('h','o');"><div><span class="t"></span><span class="m"></span><span class="b"></span></div></a>
    <div class="logo"><a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title() ?></a></div>
    <ul><li><a href="<?php $this->options->siteUrl(); ?>">首页</a></li><?php $this->widget('Widget_Contents_Page_List')->to($pages); ?><?php while($pages->next()): ?><li><a href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a></li><?php endwhile; ?></ul>
</div>
</div>
<div id="m" class="w1">
<script>function tg_c(id,nc){var e=document.getElementById(id);var c=e.className;if(!c){e.className=nc}else{var classArr=c.split(' ');var exist=false;for(var i=0;i<classArr.length;i++){if(classArr[i]===nc){classArr.splice(i,1);e.className=Array.prototype.join.call(classArr," ");exist=true;break}}if(!exist){classArr.push(nc);e.className=Array.prototype.join.call(classArr," ")}}}</script>