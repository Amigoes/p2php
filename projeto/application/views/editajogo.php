

<form method = "POST" action = "/projeto/index.php/admin/inserir">
    Titulo: <input type = "text" name = "titulo" value="<?php echo $jogos->titulo ?>"> <br>
    Desenvolverdora: <input type = "text" name = "desenvolvedora" value="<?php echo $jogos->desenvolvedora?>"> <br>
    Plataforma: <select name = "plataforma">
                    <option value = "PS4" <?php echo ($jogos->plataforma == "PS4" ? 'selected="selected"' : ' ') ?> >PS4</option>
                    <option value = "Xbox One" <?php echo ($jogos->plataforma == "Xbox One" ? 'selected="selected"' : ' ') ?>>Xbox One</option>
                    <option value = "Switch" <?php echo ($jogos->plataforma == "Switch" ? 'selected="selected"' : ' ') ?>>Switch</option>
                </select> <br>
    Lançamento: <input type = "date" name = "lancamento" value="<?php echo $jogos->lancamento ?>"> <br>
    Estilo:  <br>
    <input type = "checkbox" name = "estilo" value = "acao">Ação <br>
    <input type = "checkbox" name = "estilo" value = "aventura">Aventura <br>
    <textarea name="descricao" placeholder="<?php echo $jogos->descricao ?>"></textarea>
    <input type="hidden" name="id" value = "<?php echo $jogos->id ?>">
    <input type="submit" value ="Enviar">
</form>


