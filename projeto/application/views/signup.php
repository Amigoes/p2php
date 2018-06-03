<?php include 'header.php';?>
			
				  <div id="wrapper">
                        <div id="login" class="animate form">
                            <form  action="mysuperscript.php" autocomplete="on"> 
                                <h2>Registre-se</h2> 
                                <p> 
                                    <label for="registro_email" class="registro_email"> Email</label>
                                    <input id="registro_email" name="registro_email" required="required" type="text" placeholder="Exemplo: seuemail@gmail.com"/>
                                </p>
								<p> 
                                    <label for="registro_nome" class="registro_nome"> Nome de Usuário</label>
                                    <input id="registro_nome" name="registro_nome" required="required" type="text" placeholder="Exemplo: QTL"/>
                                </p>
                                <p> 
                                    <label for="registro_passwd" class="registro_passwd"> Senha </label>
                                    <input id="registro_passwd" name="registro_passwd" required="required" type="password" placeholder="Exemplo: 123" /> 
                                </p>
								<p> 
                                    <label for="passwd_again" class="passwd_again" data-icon="p"> Repita sua Senha </label>
                                    <input id="passwd_again" name="passwd_again" required="required" type="password" placeholder="Exemplo: 123" /> 
                                </p>
 
                                <p class="login button"> 
                                    <input type="submit" value="Enviar" /> 
								</p>
								
                            </form>
                        </div>

                        
                        </div>
						




		<?php include 'footer.php';?>


