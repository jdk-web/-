<?php
function sortBycard($a, $b) {
    return $a['score'] > $b['score'];
}
$reportcard=[
    ["score"=>74,"name"=>"홍길동"],
    ["score"=>92,"name"=>"이순신"],
    ["score"=>91,"name"=>"세종대왕"],
	["score"=>81,"name"=>"이이"],
	["score"=>71,"name"=>"이황"],
	["score"=>81,"name"=>"신사임당"],
	["score"=>61,"name"=>"이방원"]
];

usort($reportcard, 'sortBycard'); //$people is now sorted by age (ascending)

for($i=0; $i<count($reportcard) ; $i++)
{
	echo $reportcard[$i]['name']. ":". $reportcard[$i]['score']."<br>";
}
?>