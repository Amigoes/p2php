

<form method = "POST" action = "/projeto/index.php/admin/inserir">
    Titulo: <input type = "text" name = "titulo"> <br>
    Desenvolverdora: <input type = "text" name = "desenvolvedora"> <br>
    Plataforma: <select name = "plataforma">
                    <option value = "PS4">PS4</option>
                    <option value = "Xbox One">Xbox One</option>
                    <option value = "Switch">Switch</option>
                </select> <br>
    Lançamento: <input type = "date" name = "lancamento"> <br>
    Estilo:  <br>
    <input type = "checkbox" name = "estilo" value = "acao">Ação <br>
    <input type = "checkbox" name = "estilo" value = "aventura">Aventura <br>
    <textarea name="descricao"></textarea>
    <input type="submit" value ="Enviar">
</form>


