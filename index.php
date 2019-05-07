<?
require("init.php");
$menu = "default";
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
<title><?=$config_title?></title>
<meta name="keywords" content="<?=$config_keyword?>" />
<meta name="description" content="<?=$config_description?>" />
<link href="images/base.css" rel="stylesheet" />
<link href="images/home.css" rel="stylesheet" />
<link href="images/swiper.min.css" rel="stylesheet" />
<script src="js/jquery.min.js"></script>
<script src="js/jquery.SuperSlide.2.1.2.js"></script>
<script src="js/swiper.min.js"></script>
<script src="js/common.js"></script>
<? echo $config_webJavascriptHead;?>
</head>
<body>
<?
	require("nav.php");
?>
<div id="g-wp" class="g-wp">
 	<?
	require("begin.php");
	?>
	<div class="container">
		<div class="sz-1">
			<div class="hd">
				<h2>我们的作品案例</h2>
				<p>Our Case</p>
			</div>
			<div class="hds">
				<ul>
					<li>居住空间</li>
					<li>商业空间</li>
					<li>办公空间</li>
				</ul>
			</div>
			<div class="bds">
				<ul class="clearfix">
					<?
					    $sql = "select id, title, pic from info where class_id like '101___' and state>0 and pic<>'' order by state desc, sortnum desc limit 12";
					    $rst = $db->query($sql);
					    while ( $row = $db->fetch_array($rst) ) {
				    ?>
					<li><a href="display.php?id=<?=$row["id"]?>"><img src="images/p.jpg" alt="<?=$row["title"]?>" /><p><?=utf8substr(strip_tags(str_replace("&nbsp;","",$row["title"])),10)?></p></a></li>
					<?
						}
					?>
				</ul>
				<ul class="clearfix">
					<?
					    $sql = "select id, title, pic from info where class_id like '101___' and state>0 and pic<>'' order by state desc, sortnum desc limit 12";
					    $rst = $db->query($sql);
					    while ( $row = $db->fetch_array($rst) ) {
				    ?>
					<li><a href="display.php?id=<?=$row["id"]?>"><img src="images/p.jpg" alt="<?=$row["title"]?>" /><p><?=utf8substr(strip_tags(str_replace("&nbsp;","",$row["title"])),10)?></p></a></li>
					<?
						}
					?>
				</ul>
				<ul class="clearfix">
					<?
					    $sql = "select id, title, pic from info where class_id like '101___' and state>0 and pic<>'' order by state desc, sortnum desc limit 12";
					    $rst = $db->query($sql);
					    while ( $row = $db->fetch_array($rst) ) {
				    ?>
					<li><a href="display.php?id=<?=$row["id"]?>"><img src="images/p.jpg" alt="<?=$row["title"]?>" /><p><?=utf8substr(strip_tags(str_replace("&nbsp;","",$row["title"])),10)?></p></a></li>
					<?
						}
					?>
				</ul>
			</div>
			<script>
				$('.sz-1 .hds li').click(function(){
					var index = $(this).index();
					$(this).addClass('on').siblings().removeClass('on');
					$('.sz-1 .bds ul').eq(index).fadeIn().siblings().hide();
				}).eq(0).trigger("click");
			</script>
			<div class="m"><a href="info.php?class_id=101">查看更多装修案例</a></div>
		</div>
		<div class="sz-2">
			<?
			    $sql = "select url, title, pic from banner where class_id = 3 and state>0 and pic<>'' order by sortnum desc";
			    $rst = $db->query($sql);
			    if ( $row = $db->fetch_array($rst) ) {
			?>
			<a href="<?=$row["url"]?>"><img src="<?=UPLOAD_PATH . $row["pic"]?>" alt="<?=$row["title"]?>" /></a>
			<?
				}
			?>
		</div>
		<div class="sz-3">
			<h3>今日已有11352人免费获取报价</h3>
			<script type="text/javascript">
				function check(form)
				{
					var phone = document.getElementById('phone').value;
					if (form.hxing.value == "")
					{
						alert("请输入您的户型！");
						form.hxing.focus();
						return false;
					}
					if (form.area.value == "")
					{
						alert("请输入您的面积！");
						form.area.focus();
						return false;
					}
					if (form.name.value == "")
					{
						alert("请输入您的姓名！");
						form.name.focus();
						return false;
					}
					if(form.phone.value == "")
					{
						alert("请输入您的手机号码!");
						form.phone.focus();
						return false;
					}
					if(!(/^(((13[0-9]{1})|(15[0-9]{1})|(18[0-9]{1}))+\d{8})$/.test(phone))){
				        alert("请输入正确的手机号码！");
				        form.phone.focus();
				        return false;
				    }
				}
			</script>
			<form class="form-panel" action="mesok.php" method="post" onSubmit="return check(this);">
				<ul>
					<li><input class="text" name="hxing" type="text" value="" maxlength="10" placeholder="户型" required="required" /></li>
					<li><input class="text" name="area" type="text" value="" maxlength="10" placeholder="面积" required="required" /></li>
					<li><input class="text" name="name" type="text" value="" maxlength="4" placeholder="姓名" required="required" /></li>
					<li><input class="text" id="phone" name="phone" type="text" value="" maxlength="11" placeholder="电话" required="required" /></li>
				</ul>
				<input type="submit" class="ibtn" value="点击免费获取报价" />
			</form>
		</div>
		<div class="sz-4">
			<div class="hd">
				<h2>我们的设计团队</h2>
				<p>Our Team</p>
			</div>
			<div class="bd">
				<ul>
					<?
					    $sql = "select id, title, pic, content from info where class_id like '101___' and state>0 and pic<>'' order by state desc, sortnum desc limit 4";
					    $rst = $db->query($sql);
					    while ( $row = $db->fetch_array($rst) ) {
				    ?>
					<li class="clearfix">
						<div class="p"><a href="display.php?id=<?=$row["id"]?>"><img src="<?=UPLOAD_PATH . $row["pic"]?>" alt="<?=$row["title"]?>" /></a></div>
						<div class="t">
							<h3>姓名：<a href="display.php?id=<?=$row["id"]?>"><?=utf8substr(strip_tags(str_replace("&nbsp;","",$row["title"])),4)?></a></h3>
							<div class="i">
								<p><?=utf8substr(strip_tags(str_replace("&emsp;","",$row["content"])),30)?></p>
							</div>
						</div>
					</li>
					<?
						}
					?>
				</ul>
				<div class="m"><a href="info.php?class_id=102">查看更多设计师</a></div>
			</div>
		</div>
	</div>
    <?
	require("end.php");
	?>
</div>
</body>
</html>