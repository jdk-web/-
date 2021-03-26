<!DOCTYPE html>
<meta charset="utf-8" />
<?php
$action = '';
if(isset($_POST['action']))$action = $_POST['action'];

if($action == 'form_submit') {
	$N=$_POST['N'];
	$M=$_POST['M']; //총 더할 횟수
	$K=$_POST['K']; //K번까지 더할 수 있음.
	$num=explode(' ', $_POST['number']);
	
	if($K > $M){echo "k와 m을 잘못 입력하셨습니다.";  return false;}
	
	echo "N : " . (int)$N . "   M : " . (int)$M . "   K : " . (int)$K; echo "<br>";
	
	for($i=0;$i<$N;$i++)
	{
		$r_num[$i] = $num[$i]; //number textarea에 많이 입력하더라도 N 카운터만큼 배열 선언
	}
	sort($r_num);
	$MAX = $r_num[$i-1];
	$SECOND_MAX = $r_num[$i-2];
	
	$count = (int)($M/($K+1))*$K;
	$count += $M % ($K+1);
	
	$result = 0;
	$result += ($count) * $MAX;
	echo $result += ($M-$count) * $SECOND_MAX;
  exit;
}
?>
<form method="post" action="<?=$_SERVER['PHP_SELF']?>">
  <input type="hidden" name="action" value="form_submit" />
   N : <input type="text" name="N">
   M : <input type="text" name="M">
   K : <input type="text" name="K"> <br><br>
   <textarea name="number"></textarea><br>
  <input type="submit" value="제출하기" />
</form>
