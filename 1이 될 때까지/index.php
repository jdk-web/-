<!DOCTYPE html>
<meta charset="utf-8" />
<?php
$action = '';
if(isset($_POST['action']))$action = $_POST['action'];

if($action == 'form_submit') {
	$N=(int)$_POST['N']; //
	$K=(int)$_POST['K']; //
	
	echo "N : " . $N . "<br>";
	echo "K : " . $K . "<br>";
	
	$count=0;
	while($N!==1)
	{
		if($N % $K !== 0){ $N -= 1;}
		else if($N % $K === 0) { $N /= $K; }
		$count++;
		echo $N; 
		if($count==10) break;
	}
	echo "횟수 : " . $count . "<br>";
	
  exit;
}
?>
<form method="post" action="<?=$_SERVER['PHP_SELF']?>">
  <input type="hidden" name="action" value="form_submit" />
   N : <input type="text" name="N">
   K : <input type="text" name="K"><br>
   
  <input type="submit" value="제출하기" />
</form>
