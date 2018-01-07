<hr><h3>Concursos</h3>
<form method="POST" action="index.php">
<div class="form-group">
	<button class="btn btn-primary" autofocus type="submit"><i class="glyphicon glyphicon-plus"></i> Novo Concurso</button>
	<input type="hidden" value="formNovoSorteio" name="view"/>
	<input type="hidden" value="formNovoSorteio" name="function"/>
</form>	
	<div class="col-md-12">
	<table class="table">
		<thead>
			<tr>
				<th>Sorteios Repetidos</th>
			</tr>
		</thead>
		<tbody>
				<tr>
					<td>
<?php
	$conn = mysql_connect("localhost", "root", ""); 
	$ok = mysql_select_db("loteria", $conn); 
	$sql = mysql_query("
		SELECT 	b.`LFNSCP_CODIGO`
		FROM `lotofacil_numeros_sorteados` AS a
		INNER JOIN `lotofacil_numeros_sorteados_cp` AS b 
		ON (a.`LFNS_B1` = b.`LFNSCP_B1`)
		AND (a.`LFNS_B2` = b.`LFNSCP_B2`)
		AND (a.`LFNS_B3` = b.`LFNSCP_B3`)
		AND (a.`LFNS_B4` = b.`LFNSCP_B4`)
		AND (a.`LFNS_B5` = b.`LFNSCP_B5`)
		AND (a.`LFNS_B6` = b.`LFNSCP_B6`)
		AND (a.`LFNS_B7` = b.`LFNSCP_B7`)
		AND (a.`LFNS_B8` = b.`LFNSCP_B8`)
		AND (a.`LFNS_B9` = b.`LFNSCP_B9`)
		AND (a.`LFNS_B10` = b.`LFNSCP_B10`)
		AND (a.`LFNS_B11` = b.`LFNSCP_B11`)
		AND (a.`LFNS_B12` = b.`LFNSCP_B12`)
		AND (a.`LFNS_B13` = b.`LFNSCP_B13`)
		AND (a.`LFNS_B14` = b.`LFNSCP_B14`)
		AND (a.`LFNS_B15` = b.`LFNSCP_B15`)
		WHERE a.`LFNS_B1` = b.`LFNSCP_B1`
		AND a.`LFNS_B2` = b.`LFNSCP_B2`
		AND a.`LFNS_B3` = b.`LFNSCP_B3`
		AND a.`LFNS_B4` = b.`LFNSCP_B4`
		AND a.`LFNS_B5` = b.`LFNSCP_B5`
		AND a.`LFNS_B6` = b.`LFNSCP_B6`
		AND a.`LFNS_B7` = b.`LFNSCP_B7`
		AND a.`LFNS_B8` = b.`LFNSCP_B8`
		AND a.`LFNS_B9` = b.`LFNSCP_B9`
		AND a.`LFNS_B10` = b.`LFNSCP_B10`
		AND a.`LFNS_B11` = b.`LFNSCP_B11`
		AND a.`LFNS_B12` = b.`LFNSCP_B12`
		AND a.`LFNS_B13` = b.`LFNSCP_B13`
		AND a.`LFNS_B14` = b.`LFNSCP_B14`
		AND a.`LFNS_B15` = b.`LFNSCP_B15`

		GROUP BY LFNSCP_CODIGO
		HAVING COUNT(*) > 1
	");
	while ($linhas = mysql_fetch_array($sql)) :
		echo "Concurso: ". $linhas['LFNSCP_CODIGO']."<br/>";
	endwhile;
?>
					 </td>
				</tr>
		</tbody>
	</table>
	</div>
	<table class="table table-striped">
		<thead>	
			<tr>
				<th>Concurso</th>
				<th align="center" colspan="15">Bolas Sorteadas</th>
				<th colspan="1">Opções</th>
			</tr>
		</thead>
		<tbody>
			<?php
			while($oquefazer->registros = $oquefazer->resultado->FetchNextObject()):
				$lfns_codigo	= $oquefazer->registros->LFNS_CODIGO;
				$lfns_b1	= $oquefazer->registros->LFNS_B1;
				$lfns_b2	= $oquefazer->registros->LFNS_B2;
				$lfns_b3	= $oquefazer->registros->LFNS_B3;
				$lfns_b4	= $oquefazer->registros->LFNS_B4;
				$lfns_b5	= $oquefazer->registros->LFNS_B5;
				$lfns_b6	= $oquefazer->registros->LFNS_B6;
				$lfns_b7	= $oquefazer->registros->LFNS_B7;
				$lfns_b8	= $oquefazer->registros->LFNS_B8;
				$lfns_b9	= $oquefazer->registros->LFNS_B9;
				$lfns_b10	= $oquefazer->registros->LFNS_B10;
				$lfns_b11	= $oquefazer->registros->LFNS_B11;
				$lfns_b12	= $oquefazer->registros->LFNS_B12;
				$lfns_b13	= $oquefazer->registros->LFNS_B13;
				$lfns_b14	= $oquefazer->registros->LFNS_B14;
				$lfns_b15	= $oquefazer->registros->LFNS_B15;
			?>
				<tr>
					<td><?php echo $lfns_codigo;?></td>
					<td><input class="form-control" type="text" value="<?php echo $lfns_b1;?>" disabled></td>
					<td><input class="form-control" type="text" value="<?php echo $lfns_b2;?>" disabled></td>
					<td><input class="form-control" type="text" value="<?php echo $lfns_b3;?>" disabled></td>
					<td><input class="form-control" type="text" value="<?php echo $lfns_b4;?>" disabled></td>
					<td><input class="form-control" type="text" value="<?php echo $lfns_b5;?>" disabled></td>
					<td><input class="form-control" type="text" value="<?php echo $lfns_b6;?>" disabled></td>
					<td><input class="form-control" type="text" value="<?php echo $lfns_b7;?>" disabled></td>
					<td><input class="form-control" type="text" value="<?php echo $lfns_b8;?>" disabled></td>
					<td><input class="form-control" type="text" value="<?php echo $lfns_b9;?>" disabled></td>
					<td><input class="form-control" type="text" value="<?php echo $lfns_b10;?>" disabled></td>
					<td><input class="form-control" type="text" value="<?php echo $lfns_b11;?>" disabled></td>
					<td><input class="form-control" type="text" value="<?php echo $lfns_b12;?>" disabled></td>
					<td><input class="form-control" type="text" value="<?php echo $lfns_b13;?>" disabled></td>
					<td><input class="form-control" type="text" value="<?php echo $lfns_b14;?>" disabled></td>
					<td><input class="form-control" type="text" value="<?php echo $lfns_b15;?>" disabled></td>

					<td>
						<a class="btn btn-warning"	href="index.php?view=formAlterarSorteio&function=formAlterarSorteio&lfns_codigo=<?php echo $lfns_codigo;?>"><i class="glyphicon glyphicon-pencil"></i>
						</a>
					</td>
					<!--td>
						 <a class="btn btn-info" href="index.php?view=lotofacilVerSorteio&function=lotofacilVerSorteio&lfns_codigo=<?php //echo $lfns_codigo;?>" disabledx><i class="glyphicon glyphicon-eye-open"></i> 
						</a>
					</td-->
				</tr>
			<?php endwhile; ?>
		</tbody>
	</table>
</div>