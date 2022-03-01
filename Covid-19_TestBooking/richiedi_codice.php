<!DOCTYPE html>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Ricerca </title> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
    <body>
<form class="row g-3" method="post" action="risultato_tampone.php">
    <div class="col-md-4">
        <label for="validationServer01" class="form-label">Codice fisacale</label>
        <input type="text" class="form-control is-valid" id="validationServer01" name="cod_fiscale" id="cod_fiscale" pattern="^[a-zA-Z]{6}[0-9]{2}[a-zA-Z][0-9]{2}[a-zA-Z][0-9]{3}[a-zA-Z]$" required="required">
        <div class="valid-feedback">
          Corretto!
        </div>
        <button type="submit" class="btn btn-primary">Invia</button>
      </div>

    
</form>

    </body>
</html>