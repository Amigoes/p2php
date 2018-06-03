<?php include 'header.php';?>
			
                        <div class="component">
							<div id = "imagem-descricao">
								<img src = "/projeto/imagens/2.jpg">
								<div id = "titulo-descricao"><?php echo $jogos->titulo ?></div>
								<p><?php echo $jogos->desenvolvedora ?></p>
							</div>
							
							<div class = "content-jogo">
								<div class = "content-medias">
									<h2>História Principal</h2>
									<div class = "content-medias-tempo">18 Horas</div>
								</div>
								<div class = "content-medias">
									<h2>História 100%</h2>
									<div class = "content-medias-tempo">36 Horas</div>
								</div>
								<div class = "content-medias">
									<h2>Combinado</h2>
									<div class = "content-medias-tempo">54 Horas</div>
								</div>
							</div>
							<div class = "content-descricao">
								<p><?php echo $jogos->descricao ?></p>
								
								<div class = "content-descricao-info">
									<strong>Desenvolvedora: </strong> <?php echo $jogos->desenvolvedora ?>
								</div>
								<div class = "content-descricao-info">
									<strong>Plataformas: </strong> <?php echo $jogos->plataforma ?>
								</div>
								<div class = "content-descricao-info">
									<strong>Data de Lançamento: </strong> <?php echo $jogos->lancamento ?>
								</div>
								<div class = "content-descricao-info">
									<strong>Estilos: </strong> <?php echo $jogos->estilo ?>
								</div>
							</div>
							<table>
								<thead>
									<tr>
										<th>Single - Player</th>
										<th>Contados</th>
										<th>Média</th>
										<th>Corrido</th>
										<th>Sem pressa</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>História Principal</td>
										<td>1k</td>
										<td>18h</td>
										<td>12h</td>
										<td>21h</td>
									</tr>
									<tr>
										<td>História 100%</td>
										<td>500</td>
										<td>36h</td>
										<td>42h</td>
										<td>48h</td>
									</tr>
									<tr>
										<td>Combinado</td>
										<td>100</td>
										<td>54h</td>
										<td>50h</td>
										<td>60h</td>
									</tr>
								
									</tbody>	
							</table>	
							
							<table>
								<thead>
									<tr>
										<th>Plataforma</th>
										<th>Contados</th>
										<th>História Principal</th>
										<th>100%</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>PS4</td>
										<td>1k</td>
										<td>18h</td>
										<td>12h</td>
									
									</tr>
									<tr>
										<td>Pc</td>
										<td>500</td>
										<td>36h</td>
										<td>42h</td>
										
									</tr>
									<tr>
										<td>Xbox One</td>
										<td>100</td>
										<td>54h</td>
										<td>50h</td>
										
									</tr>
								
									</tbody>	
							</table>
						</div>
		<?php include 'footer.php';?>