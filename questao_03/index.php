<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Questão 03</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>
    <form class="form-control" action="resultado.php">
        <label class="label-control" for="maca">Maça</label>
        <input class="form-control" type="number" step="0.01" name="valormaca" id="maca" placeholder="Informe o preço do Kg">
        <input class="form-control" type="number" step="0.01" name="kgmaca" id="maca" placeholder="Informe a quantidade em Kg">
        <br>

        <label class="label-control" for="melancia">Melancia</label>
        <input class="form-control" type="number" step="0.01" name="valormelancia" id="melancia" placeholder="Informe o preço do Kg">
        <input class="form-control" type="number" step="0.01" name="kgmelancia" id="melancia" placeholder="Informe a quantidade em Kg">
        <br>
        
        <label class="label-control" for="laranja">Laranja</label>
        <input class="form-control" type="number" step="0.01" name="valorlaranja" id="laranja" placeholder="Informe o preço do Kg">
        <input class="form-control" type="number" step="0.01" name="kglaranja" id="laranja" placeholder="Informe a quantidade em Kg">
        <br>
        
        <label class="label-control" for="repolho">Repolho</label>
        <input class="form-control" type="number" step="0.01" name="valorrepolho" id="repolho" placeholder="Informe o preço do Kg">
        <input class="form-control" type="number" step="0.01" name="kgrepolho" id="repolho" placeholder="Informe a quantidade em Kg">
        <br>
        
        <label class="label-control" for="cenoura">Cenoura</label>
        <input class="form-control" type="number" step="0.01" name="valorcenoura" id="cenoura" placeholder="Informe o preço do Kg">
        <input class="form-control" type="number" step="0.01" name="kgcenoura" id="cenoura" placeholder="Informe a quantidade em Kg">
        <br>
        
        <label class="label-control" for="batata">Batata</label>
        <input class="form-control" type="number" step="0.01" name="valorbatata" id="batata" placeholder="Informe o preço do Kg">
        <input class="form-control" type="number" step="0.01" name="kgbatata" id="batata" placeholder="Informe a quantidade em Kg">
        <br>

        <input type="submit" value="Enviar" name="enviar" class="btn btn-primary">

    </form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>