<?php if ($usuario): ?>
    <h1>Perfil do Usuário</h1>
    <p>Nome: <?= htmlspecialchars($usuario['nomeCompleto']) ?></p>
    <p>Email: <?= htmlspecialchars($usuario['email']) ?></p>
    <p>Telefone: <?= htmlspecialchars($usuario['tel']) ?></p>
<?php else: ?>
    <p>Usuário não encontrado.</p>
<?php endif; ?>
