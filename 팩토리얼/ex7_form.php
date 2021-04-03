<?php
$action = '';
if(isset($_POST['action']))$action = $_POST['action'];

function Factorial_function( $num){
	if($num<=1) {return 1;}
	return $num * Factorial_function($num-1);
}

if($action == 'form_submit') {
	echo "입력 팩토리얼 : ". $num=$_POST['num']; //팩토리알 변수
	$result=Factorial_function($num);
	echo "<br>";
	echo "결과 : " . $result;

  exit;
}
?>
<form method="post" action="<?=$_SERVER['PHP_SELF']?>">
  <input type="hidden" name="action" value="form_submit" />
   X : <input type="text" name="num">

  <input type="submit" value="제출하기" />
</form>