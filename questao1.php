<?php
	function SeculoAno($ano){
		if($ano%100==0){
			$seculo=intdiv($ano, 100);
		} else {
			$seculo=intdiv($ano, 100)+1;
		}
		return $seculo;
	}
	
	//$ano=1905;
	//$seculo=SeculoAno($ano);
	//echo "Ano $ano = século $seculo";
?>