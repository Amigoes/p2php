 
 <?php include 'header.php'; ?>
 
 <div class="component">
	<table>
		<thead>
			<tr>
			    <th>Título</th>
			    <th>Ações</th>
			</tr>
		</thead>
	    <tbody>
            <?php
                foreach($jogos as $jogo){
                    echo '<tr>';         
                    echo '<td class="game-name">'.$jogo->titulo.'</td>';
                    echo '<td class="game-name"><a href = "/projeto/index.php/AdminController/editar/'.$jogo->id.'">Teste</a></td>';
                    echo '</tr>';
                }
            ?>
        </tbody>
  </div>              
