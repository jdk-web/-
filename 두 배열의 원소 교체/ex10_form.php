<?php
$action = '';
if(isset($_POST['action']))$action = $_POST['action'];
if($action == 'form_submit') {

	$K = $this->input->post('K');
	$Array_A = $this->input->post('Array_A'); $A = explode(" ",$Array_A);
	$Array_B = $this->input->post('Array_B'); $B = explode(" ",$Array_B);
	
	$i=1;
	$tmp=null;
	
	while($i<=$K)
	{
		
		echo $MIN=MIN($A);
		echo $MAX=MAX($B);
		if($MAX > $MIN)
		{ 
			$tmp1=array_search($MIN, $A);
			$tmp2=array_search($MAX, $B);
			$tmp=$A[$tmp1];
			$A[$tmp1]=$B[$tmp2];
			$B[$tmp2]=$tmp;
		}
		$i++;
	}
	
	print_r($A);
	print_r($B);
	echo array_sum($A);

  exit;
}
?>
<form method="post" action="<?=$_SERVER['PHP_SELF']?>">
  <input type="hidden" name="action" value="form_submit" />
   K : <input type="text" name="K">
   A : <input type="text" name="Array_A">
   B : <input type="text" name="Array_B">

  <input type="submit" value="제출하기" />
</form>