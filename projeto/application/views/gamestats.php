<?php include 'header.php';?>
			<div id = "engloba_media">
				
				<?php foreach ($jogos as $jogo) {
					echo '<div class = "mediaFraca">';
						echo '<a href = "/projeto/index.php/main/showjogo"><img class = "mediaFraca_img" src = "/projeto/imagens/est1.jpg"></a>';
							echo '<div class = "estatisticas">';
								echo '<h2><a href = "/projeto/index.php/AdminController/paginajogo/'.$jogo->id.'" class = "estatisticas_titulo">'.$jogo->titulo.'</a></h2>';
								echo '<div class = "estatisticas_nome">História Principal</div>';
								echo '<div class = "estatisticas_tempo">18 Horas</div>';
								echo '<div class = "estatisticas_nome">História 100%</div>';
								echo '<div class = "estatisticas_tempo">36 Horas</div>';
								echo '<div class = "estatisticas_nome">Combinado</div>';
								echo '<div class = "estatisticas_tempo">54 Horas</div>';
							echo '</div>';
					echo '</div>';
				}
			?>
				
			</div>
		<?php include 'footer.php';?>