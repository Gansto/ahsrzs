<div class="header clearfix">
	<div class="search">
		<div class="search-o"></div>
		<div class="search-x"></div>
	</div>
	<form action="search.php" method="get" class="form-search">
		<input type="text" name="search_keyword" value="" required="required" placeholder="请输入搜索关键字" />
		<input type="submit" value="搜索" />
	</form>
	<div class="logo">
		<?
		    $sql = "select title, pic from banner where class_id = 2 and state>0 and pic<>'' order by sortnum desc";
		    $rst = $db->query($sql);
		    if ( $row = $db->fetch_array($rst) ) {
		?>
		<a href="./"><img src="<?=UPLOAD_PATH . $row["pic"]?>" alt="<?=$row["title"]?>" /></a>
		<?
			}
		?>
	</div>
	<div class="ico"></div>
</div>
<div class="nav">
	<ul class="clearfix">
		<li><a href="info.php?class_id=101"><img src="images/n1.png">作品案例</a></li>
		<li><a href="info.php?class_id=102"><img src="images/n2.png">设计团队</a></li>
		<li><a href="info.php?class_id=103"><img src="images/n3.png">在建工地</a></li>
		<li><a href="info.php?class_id=104"><img src="images/n4.png">服务体系</a></li>
		<li><a href="info.php?class_id=105"><img src="images/n5.png">新闻资讯</a></li>
		<li><a href="info.php?class_id=106"><img src="images/n6.png">关于我们</a></li>
		<li><a href="info.php?class_id=107"><img src="images/n7.png">艺术中心</a></li>
		<li><a href="info.php?class_id=108"><img src="images/n8.png">联系我们</a></li>
	</ul>
</div>
<div class="swiper-container swiper-container-1">
	<div class="swiper-wrapper">
		<?
		    $sql = "select url, title, pic from banner where class_id = 1 and state>0 and pic<>'' order by sortnum desc";
		    $rst = $db->query($sql);
		    while ( $row = $db->fetch_array($rst) ) {
	    ?>
		<div class="swiper-slide"><a href="<?=$row["url"]?>"><img src="<?=UPLOAD_PATH . $row["pic"]?>" alt="<?=$row["title"]?>" /></a></div>
		<?
			}
		?>
	</div>
	<div class="swiper-pagination swiper-pagination-1"></div>
</div>
<script>
var swiper1 = new Swiper('.swiper-container-1', {
	pagination: '.swiper-pagination-1',
	slidesPerView: 1,
	paginationClickable: true,
	spaceBetween: 0,
	loop: true,
	autoplay:3000
});
</script>