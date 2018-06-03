<?php include 'header.php';?>
			
				  <div id="wrapper">
                        <div id="login" class="animate form">
                            <form  action="mysuperscript.php" autocomplete="on"> 
                                <h2>Entre com sua conta</h2> 
                                <p> 
									<div id ="icone"></div>
                                    <label for="username" class="uname"> Email</label>
                                    <input id="username" name="username" required="required" type="text" placeholder="Exemplo: seuemail@gmail.com"/>
                                </p>
                                <p> 
								<div id ="iconpass"></div>
                                    <label for="password" class="youpasswd" data-icon="p"> Senha </label>
                                    <input id="password" name="password" required="required" type="password" placeholder="Exemplo: 123" /> 
                                </p>
                                <p class="keeplogin"> 
									<input type="checkbox" name="loginkeeping" id="loginkeeping" value="loginkeeping" /> 
									<label for="loginkeeping">Mantenha-se contectado</label>
								</p>
                                <p class="login button"> 
                                    <input type="submit" value="Login">
								</p>
								<p id = "esquecida">
								Esqueceu sua senha?
									<a href = "/projeto/index.php/main/showforgetpw"> Clique aqui </a>	
								</p>
                                <p class="change_link">
									
									Ainda não é um membro?
									<a href="/projeto/index.php/main/showsignup" class="to_register">Cadastre-se</a>
								</p>
                            </form>
                        </div>

                        
                        </div>
						




			<?php include 'footer.php';?>


