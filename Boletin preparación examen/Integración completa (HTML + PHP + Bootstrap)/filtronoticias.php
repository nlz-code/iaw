<?php
$noticias = [
    ["titulo"=>"Gol de última hora", "categoria"=>"deportes", "texto"=>"Partido épico..."],
    ["titulo"=>"Nuevo iPhone", "categoria"=>"tecnología", "texto"=>"Apple lanza..."],
    ["titulo"=>"Elecciones", "categoria"=>"política", "texto"=>"Resultados..."],
    ["titulo"=>"VAR polémico", "categoria"=>"deportes", "texto"=>"Decisión discutida..."],
    ["titulo"=>"AI avanza", "categoria"=>"tecnología", "texto"=>"Nuevos modelos..."],
    ["titulo"=>"Debate nacional", "categoria"=>"política", "texto"=>"Propuestas..."]
];

$filtro = $_GET["categoria"] ?? "";
?>
<form method="GET" class="card card-body my-4">
    <select name="categoria" class="form-select mb-2">
        <option value="">Todas</option>
        <option value="deportes">Deportes</option>
        <option value="tecnología">Tecnología</option>
        <option value="política">Política</option>
    </select>
    <button class="btn btn-primary">Filtrar</button>
</form>

<?php foreach ($noticias as $n): ?>
<?php if ($filtro === "" || $filtro === $n["categoria"]): ?>
<div class="card p-3 mb-3">
    <h4><?= $n["titulo"] ?></h4>
    <p><i><?= $n["categoria"] ?></i></p>
    <p><?= $n["texto"] ?></p>
</div>
<?php endif; ?>
<?php endforeach; ?>
