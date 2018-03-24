<form action="?r=tarefas/update&id=<?= $tarefa->getId()?>" method="POST">
	<p>
		Usuario ID:
		<input type="number" name="idUsuario" value="<?= $tarefa->getIdusuario()?>">
	</p>
	<p> Descricao:
		<input type="text" name="descricao" value="<?= $tarefa->getDescricao()?>">
	</p>
	<p>Data de Inicio:
		<input type="date" name="dtInicio" value="<?= $tarefa->getDtinicio()?>">
	</p>
	<p>Data de Fim:
		<input type="date" name="dtFim" value="<?= $tarefa->getDtfim()?>">
	</p>
	<p>Status:
		<select name="status">
		<!-- Lógica para trazer o Status selecionado correto -->
			<?php $status = ['todo' => 'À Fazer','wip' => 'Fazendo','done' => 'Feito']; ?>
			<?php foreach ($status as $key => $value):?>
				<?php
					$selected = false; 
					if ($key == $tarefa->getStatus())
							$selected = 'selected';
				 ?>
				 <option value="<?=$key?>" <?= $selected?> ><?=$value?></option>
			<?php endforeach; ?>
		</select> 
	</p>
	<p><input type="submit" value="Salvar"></p>	
</form>
<a href="?r=tarefas">Voltar</a>