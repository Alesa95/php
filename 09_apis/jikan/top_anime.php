<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Top Anime</title>
	<link rel="stylesheet" href="../../recursos/98.css">
</head>

<body>
	<?php
	$url = "https://api.jikan.moe/v4/top/anime";

	$curl = curl_init();
	curl_setopt($curl, CURLOPT_URL, $url);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	$respuesta = curl_exec($curl);
	curl_close($curl);

	$datos = json_decode($respuesta, true);
	$animes = $datos["data"];
	?>
	<div class="window" style="margin: 32px; width: 500px">
		<div class="title-bar">
			<div class="title-bar-text">
				Top Animes
			</div>
		</div>
		<div class="window-body">
			<p>Welcome to the best anime page</p>
		</div>
		<div class="sunken-panel" style="width: 97.5%;">
			<table class="interactive">
				<thead>
					<tr>
						<th>Posición</th>
						<th>Título</th>
						<th>Nota</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					<?php
					$posicion = 1;
					foreach ($animes as $anime) { ?>
						<tr>
							<td><?php echo $posicion ?></td>
							<td><?php echo $anime["title"] ?></td>
							<td><?php echo $anime["score"] ?></td>
							<td><img width="100px" src="<?php echo $anime["images"]["jpg"]["image_url"] ?>"></img></td>
						</tr>
						<?php
						$posicion++;
					} ?>
				</tbody>
			</table>
		</div>
		<script>
			document.querySelectorAll('table.interactive').forEach(element => {
				element.addEventListener('click', (event) => {
					const highlightedClass = 'highlighted';
					const isRow = element => element.tagName === 'TR' && element.parentElement.tagName === 'TBODY';
					const newlySelectedRow = event.composedPath().find(isRow);
					const previouslySelectedRow = Array.from(newlySelectedRow.parentElement.children).filter(isRow).find(element => element.classList.contains(highlightedClass));
					if (previouslySelectedRow) {
						previouslySelectedRow.classList.toggle(highlightedClass);
					}

					if (newlySelectedRow) {
						newlySelectedRow.classList.toggle(highlightedClass);
					}
				})
			});
		</script>
	</div>
</body>
</html>