<?php
	require('mvc/Model/Lotofacil/LotoFacil.php');
		$oquefazer = new lotofacil();
			// echo "<br><b>Function</b>: ". 
			$function = $_REQUEST['function'];

	if($function == 'ConfigQtdeSorteadas'){
		$oquefazer->ConfigQtdeSorteadas();
		require('mvc/View/Lotofacil/ConfigQtdeSorteadas.php');
	}

	if($function == 'ConfigQtdeConcurso'){
		$oquefazer->ConfigQtdeConcurso();
		require('mvc/View/Lotofacil/ConfigQtdeConcurso.php');
	}
	
	if($function == 'lotofacilSimularJogo'){
		$oquefazer->lotofacilNumerosSorteadosSimulacao();
		require('mvc/View/Lotofacil/lotofacilSimularJogo.php');
	}
	
	if($function == 'lotofacilConfig'){
		require('mvc/View/Lotofacil/lotofacilConfig.php');
	}
		if($function == 'formNovaAposta'){
		require('mvc/View/Lotofacil/formNovaAposta.php');
	}
	if($function == 'formNovoSorteio'){
		require('mvc/View/Lotofacil/formNovoSorteio.php');
	}
	
	if($function == 'lotofacilNumerosApostados'){
		$oquefazer->lotofacilNumerosApostados();
		require('mvc/View/Lotofacil/lotofacilNumerosApostados.php');
	}
	if($function == 'lotofacilNumerosRepetidos'){
		$oquefazer->lotofacilNumerosRepetidos();
		require('mvc/View/Lotofacil/lotofacilNumerosRepetidos.php');
	}
	
	if($function == 'lotofacilNumerosSorteados'){
		$oquefazer->lotofacilNumerosSorteados();
		require('mvc/View/Lotofacil/lotofacilNumerosSorteados.php');
	}
	
	if($function == 'lotofacilGravarAposta'){
		$oquefazer->lotofacilGravarAposta();
		$oquefazer->lotofacilNumerosApostados();
		require('mvc/View/Lotofacil/lotofacilNumerosApostados.php');
	}
	
	if($function == 'SalvarConfigQtdeSorteadas'){
		$oquefazer->SalvarConfigQtdeSorteadas();
		// $oquefazer->lotofacilConfig();
		require('mvc/View/Lotofacil/lotofacilConfig.php');
	}
	
	if($function == 'SalvarConfigQtdeConcurso'){
		$oquefazer->SalvarConfigQtdeConcurso();
		// $oquefazer->lotofacilConfig();
		require('mvc/View/Lotofacil/lotofacilConfig.php');
	}
	
	if($function == 'lotofacilGravarSimulacao'){
		$oquefazer->lotofacilGravarSimulacao();
		$oquefazer->lotofacilNumerosApostados();
		require('mvc/View/Lotofacil/lotofacilNumerosApostados.php');
	}

	if($function == 'lotofacilGravarSorteio'){
		$oquefazer->lotofacilGravarSorteio();
		$oquefazer->lotofacilGravarSorteioCopia();
		$oquefazer->lotofacilNumerosSorteados();
		require('mvc/View/Lotofacil/lotofacilNumerosSorteados.php');
	}
	
	if($function == 'formAlterarAposta'){
		$oquefazer->lotofacilAlterarAposta();
		require('mvc/View/Lotofacil/formAlterarAposta.php');
	}

	if($function == 'formAlterarSorteio'){
		$oquefazer->lotofacilAlterarSorteio();
		require('mvc/View/Lotofacil/formAlterarSorteio.php');
	}
	
	if($function == 'lotofacilGravarAltAposta'){
		$oquefazer->lotofacilGravarAltAposta();
		$oquefazer->lotofacilNumerosApostados();
		require('mvc/View/Lotofacil/lotofacilNumerosApostados.php');
	}

	if($function == 'lotofacilGravarAltSorteio'){
		$oquefazer->lotofacilGravarAltSorteio();
		$oquefazer->lotofacilGravarAltSorteioCp();
		$oquefazer->lotofacilNumerosSorteados();
		require('mvc/View/Lotofacil/lotofacilNumerosSorteados.php');
	}
	
	if($function == 'lotofacilExcluirAposta'){
		$oquefazer->lotofacilExcluirAposta();
		$oquefazer->lotofacilNumerosApostados();
		require('mvc/View/Lotofacil/lotofacilNumerosApostados.php');
	}

	if($function == 'lotofacilExcluirSorteio'){
		$oquefazer->lotofacilExcluirSorteio();
		$oquefazer->lotofacilNumerosSorteados();
		require('mvc/View/Lotofacil/lotofacilNumerosSorteados.php');
	}
?>