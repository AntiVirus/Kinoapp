<div class="view">
	<br />
	
		<?php $seans = Seans::model()->findByPk($_GET['seans']); ?>
		<?php $sala = Sala::model()->findByPk($seans->idSali); ?>
	
		<?php
			
			$bilety = Array();
			for ($i=1; $i<=$sala->rzedy; ++$i) $bilety[$i] = Array();
		
			foreach($seans->bileties as $bilet)
			{
				$bilety[Ord($bilet->rzad)-64][$bilet->miejsce] = true;
			}
		
		?>

		<script type="text/javascript">
			var il_rzedow = <?php echo $sala->rzedy; ?>;
			var il_miejsc = <?php echo $sala->miejsca; ?>;
			var bilety = null;
			
			function rezerwuj(pole, i, j)
			{
				if (bilety==null) przygotuj_bilety();
			
				var zarezerwowaneDiv = document.getElementById('zarezerwowaneBilety');
				
				if (bilety[i][j]==null)
				{
					bilety[i][j] = 1;
					pole.style.backgroundColor = "#FFFF00";
					pole.style.color = "#000000";
				}
				else
				{
					bilety[i][j] = null;
					pole.style.backgroundColor = "#66CC33";
					pole.style.color = "#FFFFFF";
				}
				
				wyswietl_bilety(zarezerwowaneDiv);
			}
			
			function przygotuj_bilety()
			{
				bilety = new Array();
				for (var i=1; i<=il_rzedow; ++i)
				{
					bilety[i] = new Array();
					for (var j=1; j<=il_miejsc; ++j)
					{
						bilety[i][j] = null;
					}
				}
			}
			
			function wyswietl_bilety(elementDiv)
			{
				var zawartoscFormularza = "";
				for (var i=1; i<=il_rzedow; ++i)
				{
					for (var j=1; j<=il_miejsc; ++j)
					{
						if (bilety[i][j]!=null)
						{
							zawartoscFormularza += 'Rząd: ' + String.fromCharCode(i+64) + ', Miejsce: ' + j + ', Bilet: ';
							zawartoscFormularza += '<select name="bilet' + i + 'm' + j + '" onChange="aktualizujBilet(this, ' + i + ', ' + j + ');">';
							zawartoscFormularza += '<option value="1" ' + (bilety[i][j]==1?'selected="selected"':'') + '>Normalny (22.00 zł)</option>';
							zawartoscFormularza += '<option value="2" ' + (bilety[i][j]==2?'selected="selected"':'') + '>Ulgowy (16.00 zł)</option>';
							zawartoscFormularza += '<option value="3" ' + (bilety[i][j]==3?'selected="selected"':'') + '>Studencki (16.00 zł)</option>';
							zawartoscFormularza += '<option value="4" ' + (bilety[i][j]==4?'selected="selected"':'') + '>Seniorski (10.00 zł)</option>';
							
							zawartoscFormularza += '</select><br />';
						}
					}
				}
				
				elementDiv.innerHTML = zawartoscFormularza;
			}
			
			function aktualizujBilet(pole, i, j)
			{
				bilety[i][j] = pole.options[pole.selectedIndex].value;
			}
		</script>
		
		<h2>Wybierz miejsca:</h2><br />
		
			<br />
			
			<table align="center" style="margin: 0px auto 0px auto; text-align: center;">
				<?php
					echo '<tr>';
					echo '<td colspan="'.($sala->miejsca+1).'" style="padding: 2px 2px 8px 2px; color: lightgray; background-color: white; height: 20px; font-size: 20px;">ekran</td>';
					echo '</tr>';
					for ($i=1; $i<=$sala->rzedy; ++$i)
					{
						echo '<tr>';
						echo '<td style="padding: 2px 2px 2px 2px; color: black; background-color: white; width: 30px; height: 20px;">'.chr($i+64).'</td>';
						for ($j=1; $j<=$sala->miejsca; ++$j)
						{
							echo '<td style="padding: 1px 1px 1px 1px;"><input id="pole'.$i.'m'.$j.'" type="button" style="border: 1px solid blue; color: white; background-color: '.((!($bilety[$i][$j]))?'#66CC33':'red').'; width: 30px; height: 20px;" '.((($bilety[$i][$j]))?'disabled="disabled"':'').' onClick="rezerwuj(this, '.$i.','.$j.');" value="'.$j.'"></td>';
						}
						echo '</tr>';
					}
				?>
			</table>
		
		<form method="POST" action="index.php?r=site/page&view=daneWidza&seans=<?php echo $seans->idSeansu; ?>">
		
			<div id="zarezerwowaneBilety" style="text-align: center; border: 0px solid black; float: none; margin: 10px auto 10px auto; width: auto; height: auto;">
				
			</div>
			
			<div style="text-align: right">
			<?php echo CHtml::submitButton('Zarezerwuj bilety'); ?>
			</div>
		</form>
		
		<br />
	
	<br />

</div>
