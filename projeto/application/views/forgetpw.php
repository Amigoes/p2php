<?php include 'header.php';?>	
			
					 <div id="wrapper">
                        <div id="redefinir" class="animate form">
                            <form  action="mysuperscript.php" autocomplete="on"> 
                                <h2>Redefina sua senha</h2> 
                                <p> 
									<div id ="icone-passwd"></div>
                                    <label for="passwd_forget" class="passwd_forget"> Email</label>
                                    <input id="passwd_forget" name="passwd_forget" required="required" type="text" placeholder="Exemplo: seuemail@gmail.com"/>
                                </p>
                                <p>
                                <p class="login button"> 
                                    <input type="submit" value="Enviar" /> 
								</p>
                                <p class="aviso">
								Um link para definir uma nova senha será enviado no seu email em até 24 horas.
								</p>
                            </form>
                        </div>
                       </div>

			<?php include 'footer.php';?>