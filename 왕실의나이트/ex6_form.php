<!DOCTYPE html>
<meta charset="utf-8" />
<?php
$action = '';
if(isset($_POST['action']))$action = $_POST['action'];

if($action == 'form_submit') {
	$X=$_POST['X']; //X 출력
	$Y=(int)ord($_POST['Y'])-(int)ord('a')+1; // 문자열을 아스키 코드로 

	echo "X좌표 : " . $X;
	echo "Y좌표 : " . $Y; echo "<br>";
	$dx=[-2, -1, 1, 2, 2, 1, -1, -2];
	$dy=[-1, -2, -2, -1, 1, 2, 2, 1];
	$count = 0;
	for($i=0;$i<8; $i++)
	{
		$NextRow = $X + $dx[$i];
		$NextColumn = $Y +$dy[$i];
		
		if($NextRow >= 1 && $NextRow <= 8 && $NextColumn >= 1 && $NextColumn <=8)
		{
			$count += 1;
		}
	}
	echo $count; //경우의 수 출력
	
  exit;
}
?>
<form method="post" action="<?=$_SERVER['PHP_SELF']?>">
  <input type="hidden" name="action" value="form_submit" />
   X : <input type="text" name="X">
   Y : <input type="text" name="Y">
  <input type="submit" value="제출하기" />
</form>
