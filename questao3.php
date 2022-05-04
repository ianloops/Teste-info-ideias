<?php
	function preencherArray($tamanho, $min, $max){
		$sorteado=array();
		for($i=0;$i<$tamanho;$i++){
			$sorteado[$i]=rand($min,$max);
		}
		return $sorteado;
	}
	function naoRepete($sorteado){
		$unicos=array();
		for($i=0;$i<count($sorteado)-1;$i++){
			$unico=true;
			for($j=0;$j<count($sorteado);$j++){
				if($sorteado[$i]==$sorteado[$j] && $i!=$j){
					$unico=false;
				}
			}
			if($unico==true){
				array_push($unicos, $sorteado[$i]);
			}
		}
		return $unicos;
	}

	$sorteado=array();
	$sorteado=preencherArray(20, 1, 10);
	$unicos=array();
	$unicos=naoRepete($sorteado);
	print_r($sorteado);
	echo '<br>';
	echo '<br>';
	print_r($unicos);
?>