<?php include 'header.php';?>
				<div id="wrapper">
                        <div id="login" class="animate form">
                            <form  action="mysuperscript.php" autocomplete="on"> 
                                <h2>Deixe sua mensagem</h2> 
                                <p> 
                                    <label for="nome_contato" class="nome_contato"> Nome</label>
                                    <input id="nome_contato" name="nome_contato" required="required" type="text" placeholder="João De Souza"/>
                                </p>
                                <p> 
                                    <label for="email_contato" class="email_contato"> Email </label>
                                    <input id="email_contato" name="email_contato" required="required" type="text" placeholder="seunome@gmail.com" /> 
                                </p>
								<label for="textarea"> Comentário </label>
								<textarea id = "textarea" placeholder = "Digite seu comentário aqui!"></textarea>
                                <p class="login button"> 
                                    <input type="submit" value="Enviar" /> 
								</p>
								
								
                            </form>
                        </div>

                        
                        </div>




			<?php include 'footer.php';?>


