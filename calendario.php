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
				<?php $w = date('d', strtotime( ($q+($l*7)).' days', strtotime($data_inicio) ) ); ?>
				<td><?php echo $w; ?></td>
			<?php endfor; ?>

		</tr>
	<?php endfor; ?>
	
</table>