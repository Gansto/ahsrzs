<?
require("init.php");

//提交表单
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
	$hxing		=	trim($_POST['hxing']);
	$area		=	trim($_POST['area']);
	$name		=	trim($_POST['name']);
	$phone		=	trim($_POST['phone']);

	$create_time=	date("Y:m:d H:s");
	$sortnum 	= 	$db->getMax("message", "sortnum") + 10;
	$id			=	$db->getMax("message", "id") + 1;
	
	if (empty($hxing) || empty($area) || empty($name) || empty($phone)) {
		$db->close();
		echo "<script>alert('请输入必填项！');history.back(-1);</script>";
		exit;
	}

	if(preg_match('/[A-Za-z]+/',$name)){
		$db->close();
		echo "<script>alert('姓名不能含有英文！');history.back(-1);</script>";
		exit;
	}

	if(preg_match('/\d/is',$name)){
		$db->close();
		echo "<script>alert('姓名不能含有数字！');history.back(-1);</script>";
		exit;
	}

	$sql = "insert into message(id, sortnum, hxing, area, name, phone, create_time, state) values($id, $sortnum, '$area', '$area', '$name', '$phone', '$create_time', 0)";
	if($rst = $db->query($sql))
	{
		$db->close();
		echo "<script>alert('提交成功，我们将第一时间与您取得联系！');self.location=document.referrer;</script>";
		exit;
	}
	else
	{
		$db->close();
		echo "<script>alert('提交失败，请稍后重试！');history.back(-1);</script>";
		exit;
	}
}
?>