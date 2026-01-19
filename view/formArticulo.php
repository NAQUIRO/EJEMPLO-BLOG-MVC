<?php include 'header.php'; ?>

<main>
    <h2><?= isset($articulo) ? "Editar Artículo" : "Nuevo Artículo" ?></h2>

    <form method="POST" action="<?= isset($articulo) ? '../controller/actualizar.php' : '../controller/grabar.php' ?>">
        <?php if (isset($articulo)): ?>
            <input type="hidden" name="id" value="<?= $articulo->getId() ?>">
        <?php endif; ?>

        <label>Título:</label>
        <input type="text" name="titulo" required value="<?= isset($articulo) ? htmlspecialchars($articulo->getTitulo()) : '' ?>">

        <label>Contenido:</label>
        <textarea name="contenido" rows="6" required><?= isset($articulo) ? htmlspecialchars($articulo->getContenido()) : '' ?></textarea>

        <button type="submit"><?= isset($articulo) ? 'Actualizar' : 'Guardar' ?></button>
        <a href="../controller/index.php" class="btn">Cancelar</a>
    </form>
</main>

<?php include 'footer.php'; ?>
