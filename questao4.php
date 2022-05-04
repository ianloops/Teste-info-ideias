<?php
	function NovoArray($array, $removido){

		$novoArray=array();

		for ($i=0;$i<count($array);$i++){

			if($i!=$removido){

			array_push($novoArray, $array[$i]);	

			}
		}
		return $novoArray;
	}
	function Crescente($array){	

		$cresce=true;
		for($i=0;$i<count($array)-1;$i++){
			if($array[$i]>=$array[$i+1]){
				$cresce=false;
			}
		}
		return $cresce;
	}
	function SequenciaCrescente($array){
		$arrayTeste=array();

		for($i=0;$i<count($array);$i++){

			$arrayTeste=NovoArray($array, $i);

			if(Crescente($arrayTeste)===true){
				return 'true';
			}
		}
		return 'false';
	}

	$array=array(3, 5, 67, 98, 3);
	$x=SequenciaCrescente($array);
	echo $x;
?>