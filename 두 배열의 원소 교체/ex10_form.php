<?php
$action = '';
if(isset($_POST['action']))$action = $_POST['action'];
if($action == 'form_submit') {

	$K = $this->input->post('K');
	$Array_A = $this->input->post('Array_A'); $A = explode(" ",$Array_A); // A 배열 공백으로 구분
	$Array_B = $this->input->post('Array_B'); $B = explode(" ",$Array_B); // B 배열 공백으로 구분
	
	$i=1;
	$tmp=null;
	
	while($i<=$K)
	{
		
		echo $MIN=MIN($A); //최소값 가져오기
		echo $MAX=MAX($B); //최대값 가져오기
		if($MAX > $MIN) // 각 배열을 비교하고 원소 교체
		{ 
			$tmp1=array_search($MIN, $A);
			$tmp2=array_search($MAX, $B);
			$tmp=$A[$tmp1];
			$A[$tmp1]=$B[$tmp2];
			$B[$tmp2]=$tmp;
		}
		$i++;
	}

	echo array_sum($A); //최종 

  exit;
}
?>
<form method="post" action="<?=$_SERVER['PHP_SELF']?>">
  <input type="hidden" name="action" value="form_submit" />
   K : <input type="text" name="K">
   A : <input type="text" name="Array_A"> <!--A배열 원소 입력-->
   B : <input type="text" name="Array_B"> <!--B배열 원소 입력-->

  <input type="submit" value="제출하기" />
</form>
