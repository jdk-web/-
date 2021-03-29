<!DOCTYPE html>
<meta charset="utf-8" />
<?php
$action = '';
if(isset($_POST['action']))$action = $_POST['action'];
if($action == 'form_submit') {
	$N=$_POST['N']; //N 출력
	$count = 0; //횟수 count 변수 초기화
	echo "N : " . $N . "<br>";
	
	for($h = '0' ; $h <= $N ; $h++)
	{
		for($m='0' ; $m<= '59' ; $m++)
		{
			for($s='0' ; $s <= '59' ; $s++)
			{
				if( strpos($h,'3')!==false || strpos($m,'3')!==false || strpos($s,'3')!==false ) {$count++;}
			}
		}
	}
	echo "횟수 : " . $count;
  exit;
}
?>
<form method="post" action="<?=$_SERVER['PHP_SELF']?>">
  <input type="hidden" name="action" value="form_submit" />
   N : <input type="text" name="N">
   
  <input type="submit" value="제출하기" />
</form>
