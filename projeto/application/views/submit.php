	<?php include 'header.php';?>
				<div id="wrapper">
						 <div id="busca-titulo">
                            <form  action="mysuperscript.php" autocomplete="on"> 
                                <h2>Insira o Nome do Jogo</h2> 
                                <p> 
                                    <label for="input-titulo" class="input-titulo"> Título do Jogo:</label>
                                    <input id="input-titulo" name="input-titulo" type="text" placeholder="Exemplo: God of War"/>
                                </p>
                            
                            </form>
                        </div>
                        <div id="login-escondido">
                            <form id = "form-escondido" action="mysuperscript.php" autocomplete="on"> 
                                <h2>Nome do Jogo</h2> 
                                <p> 
                                    <label for="plataforma" class="Plataforma"> Plataforma</label>
                                    <select id = "plataforma">
										<option>Playstation 4</option>
										<option>Xbox One</option>
										<option>Switch</option>
									</select>
                                </p>
                                <p> 
									<h3>Status do Jogo</h3>
									<div class = "wrap-select">
										<label for="andamento" class= "andamento"> Em Andamento</label>
										<input id="andamento" name="status-jogo" required="required" value = "andamento" type="checkbox">
									</div>
									<div class = "wrap-select">
										<label for="completado" class = "completado"> Completado</label>
										<input id="completado" name="status-jogo" value="completado" required="required" type="checkbox">
									</div>
								
                                </p>
								<p id = "mudar"> 
                                    <label for="data-jogo" class="data-jogo"> Data de Conclusão</label>
                                    <input id="data-jogo" name="data-jogo" type="date">
                                </p>
								<p>
									<h3>História Principal</h3>
									<div class = "wrap-time">
										<input type = "number" name ="hora-principal" class = "engloba-tempo" placeholder = "HHH">
										<input type = "number" name = "minuto-principal" class = "engloba-tempo" placeholder = "MMM">
										<input type = "number" name = "segundo-principal" class = "engloba-tempo" placeholder = "SSS">
									</div>
								</p>
								<p>
									<h3>História 100%</h3>
									<div class = "wrap-time">
										<input type = "number" name = "hora-completo" class = "engloba-tempo" placeholder = "HHH">
										<input type = "number" name = "minuto-completo" class = "engloba-tempo" placeholder = "MMM">
										<input type = "number" name = "segundo-completo" class = "engloba-tempo" placeholder = "SSS">
									</div>
								</p>
                                <p class="login button"> 
                                    <input type="submit" value="Enviar" /> 
								</p>
								
								
                            </form>
                        </div>

                        
                        </div>




			<?php include 'footer.php';?>