<?php include 'header.php'; ?>

<main>
    <a href="../controller/nuevo.php" class="btn">➕ Nuevo Artículo</a>

    <?php if (empty($articulos)): ?>
        <p>No hay artículos publicados todavía.</p>
    <?php else: ?>
        <?php foreach ($articulos as $art): ?>
            <article>
                <h2><?= htmlspecialchars($art->getTitulo()) ?></h2>
                <small>Publicado el <?= $art->getFecha() ?></small>
                <p><?= nl2br(htmlspecialchars($art->getContenido())) ?></p>
                <a href="../controller/editar.php?id=<?= $art->getId() ?>" class="btn">✏️ Editar</a>
                <a href="../controller/borrar.php?id=<?= $art->getId() ?>" class="btn btn-danger"
                   onclick="return confirm('¿Deseas eliminar este artículo?')">🗑 Eliminar</a>
            </article>
        <?php endforeach; ?>
    <?php endif; ?>
</main>

<?php include 'footer.php'; ?>
