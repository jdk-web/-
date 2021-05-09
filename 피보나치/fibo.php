<?php
$action = '';
if(isset($_POST['action']))$action = $_POST['action'];
if($action == 'form_submit') {
	function fibo($n){
		if($n <=2) return 1;
		return fibo($n-1) + fibo($n-2);
	}

	$n = $this->input->post('n'); // 요청한 떡의 길이

	echo fibo($n);
	

	
	
  exit;
}
?>
<form method="post" action="<?=$_SERVER['PHP_SELF']?>">
  <input type="hidden" name="action" value="form_submit" />
   n : <input type="text" name="n">


  <input type="submit" value="제출하기" />
</form>