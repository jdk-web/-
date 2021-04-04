<?php
$arr = array(  //얼음 틀 
    	array(0,0,1,1,0),
	array(0,0,0,1,1),
	array(1,1,1,1,1),
	array(0,0,0,0,0)
);

$rowcount= sizeof($arr); //행 개수
$colcount=sizeof($arr[0]); // 열 개수

for($row = 0; $row < sizeof($arr); $row++) { // 얼음 틀 출력
    for($column = 0; $column < $colcount; $column++){
        echo $arr[$row][$column];
    }
	echo "<br>";
}

function dfs($x, $y, $arr, $rowcount, $colcount)
{
	static $arr = array( //global 적용 에러로 static 적용
		array(0,0,1,1,0),
		array(0,0,0,1,1),
		array(1,1,1,1,1),
		array(0,0,0,0,0)
	);
	
	if($x <= -1 || $x >= $rowcount || $y <= -1 || $y >= 5 ) // 범위를 벗어날 경우 false
	{
		return false;
	}
	
	if($arr[$x][$y] == 0 ) // 방문하지 않았다면?
	{
		$arr[$x][$y] = 1; // 해당 노드 방문처리
		dfs($x-1, $y, $arr, $rowcount, $colcount);
		dfs($x, $y-1, $arr, $rowcount, $colcount);
		dfs($x+1, $y, $arr, $rowcount, $colcount);
		dfs($x, $y+1, $arr, $rowcount, $colcount);
		return true;
	}
	return false;
}

$result=0;
for($row = 0; $row < $rowcount ; $row++) { // 음료수 채우기
	for($column = 0; $column < $colcount ; $column++){
		if( dfs($row, $column,$arr, $rowcount, $colcount) === true)
		{
			$result += 1;
		}
	}
}

echo $result;
?>
