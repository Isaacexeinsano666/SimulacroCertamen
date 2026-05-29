
<div class="card">
    <div class="card-header bg-success text-white">
        <h4>Agregar nueva película</h4>
    </div>
    <div class="card-body">
        <form action="agregar.php" method="POST">
            <div class="mb-3">
            <label class="form-label">Título</label>
            <input type="text" name="titulo_enviado" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-success">Guardar</button>
            <a href="index.php" class="btn btn-secondary">← Volver</a>
        </form>
    </div>
</div>