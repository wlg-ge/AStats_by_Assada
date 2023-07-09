	  <h3>
		<a href="index.php?id=<?=$server_id?> " title="Назад на главную">Toп лучших игpoкoв </a> > Статистика: <?=$name?>
	  </h3>
	<div class="row">
	  <div class="col-md-4">
		<table class="table table-striped">
		  <thead>
			<tr>
			  <th colspan="2">
				<center>
				  Основная статистика
				</center>
			  </th>
			</tr>
		  </thead>
		  <tbody>
			<tr>
			  <td>
				<center>
				  <strong>
					Убитo
				  </strong>
				</center>
			  </td>
			  <td>
				<center>
				  <?=$kills?>
				</center>
			  </td>
			</tr>
			<tr>
			  <td>
				<center>
				  <strong>
					В голову
				  </strong>
				</center>
			  </td>
			  <td>
				<center>
				  <?=$head?>
				</center>
			  </td>
			</tr>
			<tr>
			  <td>
				<center>
				  <strong>
					Смертей
				  </strong>
				</center>
			  </td>
			  <td>
				<center>
				  <?=$deaths?>
				</center>
			  </td>
			</tr>
			<tr>
			  <td>
				<center>
				  <strong>
					Урон
				  </strong>
				</center>
			  </td>
			  <td>
				<center>
				  <?=$damage?>
				</center>
			  </td>
			</tr>
			<tr>
			  <td>
				<center>
				  <strong>
					Выстрелов
				  </strong>
				</center>
			  </td>
			  <td>
				<center>
				  <?=$shots?>
				</center>
			  </td>
			</tr>
			<tr>
			  <td>
				<center>
				  <strong>
					Попаданий
				  </strong>
				</center>
			  </td>
			  <td>
				<center>
				  <?=$hits?>
				</center>
			  </td>
			</tr>
			<tr>
			  <td>
				<center>
				  <strong>
					Точность
				  </strong>
				</center>
			  </td>
			  <td>
				<center>
				  <?=ceil(($hits/$shots)*100)?>
				  %
				</center>
			  </td>
			</tr>
		  </tbody>
		</table>
	  </div>
	  <div class="col-md-4">
		<table class="table table-striped">
		  <thead>
			<tr>
			  <th>
				<center>
				  Часть тела
				</center>
			  </th>
			  <th>
				<center>
				  Попаданий
				</center>
			  </th>
			  <th>
				<center>
				  Меткость
				</center>
			  </th>
			</tr>
		  </thead>
		  <tbody>
			<tr>
			  <td>
				<center>
				  <strong>
					Голова
				  </strong>
				</center>
			  </td>
			  <td>
				<center>
				  <?=$head?>
				</center>
			  </td>
			  <td>
				<center>
				  <?=ceil(($head/$hits)*100)?>%
				</center>
			  </td>
			</tr>
			<tr>
			  <td>
				<center>
				  <strong>
					Плечи
				  </strong>
				</center>
			  </td>
			  <td>
				<center>
				  <?=$chest?>
				</center>
			  </td>
			  <td>
				<center>
				  <?=ceil(($chest/$hits)*100)?>%
				</center>
			  </td>
			</tr>
			<tr>
			  <td>
				<center>
				  <strong>
					Живот
				  </strong>
				</center>
			  </td>
			  <td>
				<center>
				  <?=$stomach?>
				</center>
			  </td>
			  <td>
				<center>
				  <?=ceil(($stomach/$hits)*100)?>%
				</center>
			  </td>
			</tr>
			<tr>
			  <td>
				<center>
				  <strong>
					Левая рука
				  </strong>
				</center>
			  </td>
			  <td>
				<center>
				  <?=$leftarm?>
				</center>
			  </td>
			  <td>
				<center>
				  <?=ceil(($leftarm/$hits)*100)?>%
				</center>
			  </td>
			</tr>
			<tr>
			  <td>
				<center>
				  <strong>
					Правая рука
				  </strong>
				</center>
			  </td>
			  <td>
				<center>
				  <?=$rightarm?>
				</center>
			  </td>
			  <td>
				<center>
				  <?=ceil(($rightarm/$hits)*100)?>%
				</center>
			  </td>
			</tr>
			<tr>
			  <td>
				<center>
				  <strong>
					Левая нога
				  </strong>
				</center>
			  </td>
			  <td>
				<center>
				  <?=$leftleg?>
				</center>
			  </td>
			  <td>
				<center>
				  <?=ceil(($leftleg/$hits)*100)?>%
				</center>
			  </td>
			</tr>
			<tr>
			  <td>
				<center>
				  <strong>
					Правая нога
				  </strong>
				</center>
			  </td>
			  <td>
				<center>
				  <?=$rightleg?>
				</center>
			  </td>
			  <td>
				<center>
				  <?=ceil(($rightleg/$hits)*100)?>%
				</center>
			  </td>
			</tr>
		  </tbody>
		</table>
	  </div>
	  <div class="col-md-4">
		<table class="table table-striped">
		  <thead>
			<tr>
			  <th colspan="2">
				<center>
				  Статистика взрывов/обезвреживания
				</center>
			  </th>
			</tr>
		  </thead>
		  <tbody>
			<tr>
			  <td>
				<center>
				  <strong>
					Обезвреживаний
				  </strong>
				</center>
			  </td>
			  <td>
				<center>
				  <?=$defusions?>
				</center>
			  </td>
			</tr>
			<tr>
			  <td>
				<center>
				  <strong>
					Обезврежено
				  </strong>
				</center>
			  </td>
			  <td>
				<center>
				  <?=$defused?>
				</center>
			  </td>
			</tr>
			<tr>
			  <td>
				<center>
				  <strong>
					Установок бомб
				  </strong>
				</center>
			  </td>
			  <td>
				<center>
				  <?=$plants?>
				</center>
			  </td>
			</tr>
			<tr>
			  <td>
				<center>
				  <strong>
					Взорвано
				  </strong>
				</center>
			  </td>
			  <td>
				<center>
				  <?=$explosions?>
				</center>
			  </td>
			</tr>
		  </tbody>
		</table>
	  </div>
	</div>

	<script type="text/javascript">
		google.load("visualization", "1", {
			packages:["corechart"]
		});
	  google.setOnLoadCallback(drawChart);
	function drawChart() {
		var data = google.visualization.arrayToDataTable([
		  ['Часть тела', 'Попаданий'],
		  ['Голова',     <?=$head?>],
		   ['Плечи',      <?=$chest?>],
			['Живот',  <?=$stomach?>],
			 ['Левая рука', <?=$leftarm?>],
			  ['Правая рука',    <?=$rightarm?>],
			   ['Правая нога',    <?=$leftleg?>],
				['Правая нога',    <?=$rightleg?>]
				]);
				
				var options = {
					title: 'График попаданий',
					backgroundColor: {
						fill:'#fff', 
						stroke: '#889180', 
						strokeWidth: 0
					},
					colors: ['#2a6496', '#3071a9', '#357ebd', '#428bca', '#5697d0', "#6aa3d5", "#7eb0db"],
					titleTextStyle: {
						color: '#000', 
						fontSize: "14"
					},
					legend: {
						position: 'none'
					},
					is3D: true,
			   };
			   
			   var chart = new google.visualization.PieChart(document.getElementById('piechart'));
			   chart.draw(data, options);
	}
	</script>
	<br />
	<div class="row">
	  <div class="col-md-4">
		<div id="piechart" style="width: 100%; height: 340px;">
		</div>
	  </div>
	</div>