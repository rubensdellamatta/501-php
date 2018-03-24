<h2>Lista de Usuários</h2>

<a href="?r=usuarios/new">Novo Usuario</a>
<ul>
	<?php foreach($usuarios as $usuario): ?>
		<li><?=$usuario->getNome() ?></li>
	<?php endforeach; ?>
</ul>