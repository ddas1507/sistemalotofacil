<?php 
//<a href="index.php?view=login&function=visualizar">Login</a>
	  require('config/conexao/conecta.php');
		  // echo "<b>View</b>: ".
		  @$view = $_REQUEST['view'];
///////////////////////////////////////////////////////////////////////
		if($view == "SalvarConfigQtdeSorteadas")require('mvc/Controller/Lotofacil/Lotofacil.php');
		if($view == "ConfigQtdeSorteadas")require('mvc/Controller/Lotofacil/Lotofacil.php');
		if($view == "SalvarConfigQtdeConcurso")require('mvc/Controller/Lotofacil/Lotofacil.php');
		if($view == "ConfigQtdeConcurso")require('mvc/Controller/Lotofacil/Lotofacil.php');
		if($view == "lotofacilConfig")require('mvc/Controller/Lotofacil/Lotofacil.php');
		if($view == "formNovaAposta")require('mvc/Controller/Lotofacil/Lotofacil.php');
		if($view == "formNovoSorteio")require('mvc/Controller/Lotofacil/Lotofacil.php');
		if($view == "lotofacilNumerosRepetidos")require('mvc/Controller/Lotofacil/Lotofacil.php');
		if($view == "lotofacilNumerosSorteados")require('mvc/Controller/Lotofacil/Lotofacil.php');
		if($view == "lotofacilNumerosApostados")require('mvc/Controller/Lotofacil/Lotofacil.php');
		if($view == "lotofacilSimularJogo")require('mvc/Controller/Lotofacil/Lotofacil.php');
		if($view == "lotofacilGravarAposta")require('mvc/Controller/Lotofacil/Lotofacil.php');
		if($view == "lotofacilGravarSimulacao")require('mvc/Controller/Lotofacil/Lotofacil.php');
		if($view == "lotofacilGravarSorteio")require('mvc/Controller/Lotofacil/Lotofacil.php');
		if($view == "formAlterarAposta")require('mvc/Controller/Lotofacil/Lotofacil.php');
		if($view == "formAlterarSorteio")require('mvc/Controller/Lotofacil/Lotofacil.php');
		if($view == "lotofacilGravarAltAposta")require('mvc/Controller/Lotofacil/Lotofacil.php');
		if($view == "lotofacilGravarAltSorteio")require('mvc/Controller/Lotofacil/Lotofacil.php');
		if($view == "lotofacilExcluirAposta")require('mvc/Controller/Lotofacil/Lotofacil.php');
		if($view == "lotofacilExcluirSorteio")require('mvc/Controller/Lotofacil/Lotofacil.php');
////////////////////////////////////////////////////////////////////////
		else
			require('mvc/View/Lotofacil/main.php');
?>	