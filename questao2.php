<?php
	function Primos($inicial,$final){
		$primos=array();
		for ($i=$inicial+1;$i<$final;$i++){
			$primo = true;
			for ($j=2;$j<$i/2;$j++){
				if($i%$j==0){
					$primo=false;
				}
			}
			if($primo==true){
				array_push($primos, $i);
			}
		}
		return $primos;
	}

	//var_dump(Primos(10, 29));
?>