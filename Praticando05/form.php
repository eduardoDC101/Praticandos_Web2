<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Praticando 4 - Gerador de tabela</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</head>

<body class="container mt-4">

<h1>Praticando 4 - Gerador de tabela</h1>
<hr>

<form action="gerar-tabela.php" method="post" class="row g-3">

    <div class="col-md-3">
        <label>Linhas</label>
        <input type="number" name="linhas" class="form-control" required>
    </div>

    <div class="col-md-3">
        <label>Colunas</label>
        <input type="number" name="colunas" class="form-control" required>
    </div>

    <div class="col-md-3">
        <label>Estilo</label>
        <select name="estilo" class="form-select">

            <option value="table-primary">Azul</option>
            <option value="table-success">Verde</option>
            <option value="table-danger">Vermelho</option>
            <option value="table-warning">Amarelo</option>
            <option value="table-dark">Preto</option>

        </select>
    </div>

    <div class="col-12">
        <button type="submit" class="btn btn-success">Enviar</button>
        <button type="reset" class="btn btn-warning">Limpar</button>
    </div>

</form>

</body>
</html>