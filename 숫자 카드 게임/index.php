<!DOCTYPE html>
<meta charset="utf-8" />
<?php
$action = '';
if(isset($_POST['action']))$action = $_POST['action'];

if($action == 'form_submit') {
	$N=(int)$_POST['N']; // 행
	$M=(int)$_POST['M']; // 열
	$NUMBER=explode(" ", $_POST['number']); // 숫자 카드 공백으로 구분하여 입력받기
	$num = array();
	$result = array(); // 행에서 최소값 넣을 배열
	$k=0;
	for($i=0; $i<$N ; $i++) 
	{
		for($j=0;$j<$M;$j++)
		{
			$num[$i][$j]=$NUMBER[$k]; //N X M 행렬 만들기
			$k++;
		}
		array_push($result,MIN($num[$i])); // 각 행에서 최소값 넣기
	}
	echo "행 : " . $N. "<br>";
	echo "열 : " . $M. "<br>";
	echo "최대값 : " . MAX($result). "<br>";
	print_r($num);
	print_r($result);

  exit;
}
?>
<form method="post" action="<?=$_SERVER['PHP_SELF']?>">
  <input type="hidden" name="action" value="form_submit" />
   N : <input type="text" name="N">
   M : <input type="text" name="M"><br>
   NUMBER : <br>
   <textarea name="number"></textarea>
   
  <input type="submit" value="제출하기" />
</form>
