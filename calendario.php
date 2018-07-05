<?php 

/*
echo "PRIMEIRO DIA: ".$dia1."<br/>";
echo "TOTAL DIAS: ".$dias."<br>";
echo "LINHAS: ".$linhas."<br>";
echo "DATA INICIO: ".$data_inicio."<br>";
echo "DATA FIM: ".$data_fim."<br>";
*/
?>
<table border="1">

	<tr>
		<th>Dom</th>
		<th>Seg</th>
		<th>Ter</th>
		<th>Qua</th>
		<th>Qui</th>
		<th>Sex</th>
		<th>Sáb</th>
	</tr>

	<?php for($l=0; $l<$linhas; $l++): ?>
		<tr>

			<?php for($q=0;$q<7;$q++): ?>
				<?php 
				$t =  strtotime( ($q+($l*7)).' days', strtotime($data_inicio) ) ;
				$w = date('Y-m-d', $t);
				 ?>
				<td><?php
				 echo date('d/m', $t)."<br><br>"; 
				$w = strtotime($w);
				 foreach($lista as $item){
				 	$dr_inicio = strtotime($item['data_inicio']);
				 	$dr_fim = strtotime($item['data_fim']);
				 	

				 	if($w >= $dr_inicio && $w <= $dr_fim){
				 		echo $item['pessoa']."<br>";
				 	}
				 }

				 ?></td>
			<?php endfor; ?>

		</tr>
	<?php endfor; ?>
	
</table>