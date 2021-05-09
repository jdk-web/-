<?php
$action = '';
if(isset($_POST['action']))$action = $_POST['action'];
if($action == 'form_submit') {
	function fibo($n){
		if($n <=2) return 1;
		return fibo($n-1) + fibo($n-2);
	}

	$n = $this->input->post('n');

	echo fibo($n);
	

	
	
  exit;
}
?>
<form method="post" action="<?=$_SERVER['PHP_SELF']?>">
  <input type="hidden" name="action" value="form_submit" />
   n : <input type="text" name="n">


  <input type="submit" value="제출하기" />
</form>


// 메모 버전
$memo = array();
function fibo($n) {
  global $memo;
  if(array_key_exists($n, $memo)) {
    return $memo[$n];
  }
  else {
    if($n > 1) {
      $result = fibo($n-1) + fibo($n-2);
      $memo[$n] = $result;
      return $result;
    }
    return $n;
  }
