<form action="?r=tarefas/create" method="POST">
	<p>
		Usuario ID:
		<input type="number" name="idUsuario">
	</p>
	<p> Descricao:
		<input type="text" name="descricao">
	</p>
	<p>Data de Inicio:
		<input type="date" name="dtInicio">
	</p>
	<p>Data de Fim:
		<input type="date" name="dtFim">
	</p>
	<p>Status:
		<select name="status">
			<option value="todo">À Fazer</option>
			<option value="wip">Fazendo</option>
			<option value="done">Feito</option>
		</select> 
	</p>
	<p><input type="submit" value="Salvar"></p>	
</form>
<a href="?r=tarefas">Voltar</a>