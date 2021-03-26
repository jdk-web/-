<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Ex1 extends CI_Controller { 
    public function __construct() {
        parent::__construct();
    }
	
    public function index() {
		$this->load->view('/form');
    }
	
    public function result(){
		$change = $_POST['money'];
		echo "거스름 돈 : " . $change. "<br>";
		
		if($change <= 0 ) {echo "거스름 돈이 없습니다."; return false;}
		if($change % 10 != 0 ) {echo "거스름 돈 입력을 잘못하셨습니다."; return false;}
		
		$coin = array(500,100,50,10,0);
		
		for($i=0; $coin[$i]!=0 ; $i++)
		{
			$count=$change / $coin[$i];
			echo $coin[$i]."원 : " . (int)$count . "<br>";
			$change=($change % $coin[$i]);
		}
	}
}

//VIEW페이지
<form method="post" action="/ex1/result">
  거스름돈 입력 : <input type="text" size="5" name="money">원 넣습니다.
  <input type="submit" >
</form> 
