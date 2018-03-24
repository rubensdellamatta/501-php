<h2>Lista de Tarefas</h2>

<a href="?r=tarefas/new">Novo Tarefa</a>
<table>
	<tr>
		<th>Descrição</th>
		<th>Data Inicio</th>
		<th>Data Fim</th>
		<th>Status</th>
		<th>Ações</th>
	</tr>
	<?php if ($tarefas) : ?>
		<?php foreach($tarefas as $tarefa): ?>
			<tr>
				<td><?=$tarefa->getDescricao() ?></td>
				<td><?=$tarefa->getDtInicio() ?></td>
				<td><?=$tarefa->getDtFim() ?></td>
				<td><?=$tarefa->getStatus() ?></td>
				<td><a href="?r=tarefas/edit&id=<?= $tarefa->getId();?>">Editar Tarefa</a></td>
			</tr>
		<?php endforeach; ?>
	<?php endif; ?>
</table>