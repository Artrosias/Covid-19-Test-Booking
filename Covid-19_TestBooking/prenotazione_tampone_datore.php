<?php
include_once('database.php');
$query= "SELECT nome, indirizzo FROM Lab_analisi";
$risultato = mysqli_query($conn, $query);
?>

<!DOCTYPE html>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Prenotazione </title> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
    <body>
        <form class="row g-3" method="post" action = "prenotazione_datore.php">
            <option selected>Scegli laboratorio</option>
        <select  class="form-select" aria-label="Default select" id="lab" name="lab">
            <?php while($row1 = mysqli_fetch_array($risultato)):;?>
            <option  value="<?php echo $row1[0]; ?>"> <?php echo $row1[0]; echo" "; echo $row1[1]; ?> </option>
            <?php endwhile;?>
                <div class="col-md-4">
                  <label for="validationServer01" class="form-label">Codice fisacale</label>
                  <input type="text" class="form-control is-valid" id="validationServer01" placeholder="Codice fiscale" pattern="^[a-zA-Z]{6}[0-9]{2}[a-zA-Z][0-9]{2}[a-zA-Z][0-9]{3}[a-zA-Z]$" required="required">
                  <div class="valid-feedback">
                    Corretto!
                  </div>
                </div>

                <div class="col-md-4">
                  <label for="validationServerUsername" class="form-label">E-mail</label>
                  <div class="input-group has-validation">
                    <span class="input-group-text" id="inputGroupPrepend3">@</span>
                    <input type="text" class="form-control is-invalid" id="validationServerUsername" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required>
                    <div id="validationServerUsernameFeedback" class="invalid-feedback">
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <label for="validationServer03" class="form-label">Numero  telefonico</label>
                  <input type="text" class="form-control is-invalid" id="validationServer03" aria-describedby="validationServer03Feedback" required>
                  <div id="validationServer03Feedback" class="invalid-feedback">
                  </div>
                </div>
                <div class="col-md-3">
                    <input type="datetime" class="form-control is-invalid" id="data" name="data" placeholder="Data" aria-describedby="validationServer03Feedback" required>

                    <div class="col-12">
                        <div class="form-check">
                          <input class="form-check-input is-invalid" type="checkbox" value="" id="invalidCheck3" aria-describedby="invalidCheck3Feedback" required>
                          <label class="form-check-label" for="invalidCheck3">
                            Accettare i termini e le condizioni.
                          </label>
                          <div id="invalidCheck3Feedback" class="invalid-feedback">
                            Devi essere d'accordo prima di inviare.
                          </div>
                        </div>
                      </div>

                <div class="col-12">
                  <button class="btn btn-primary" type="submit">Conferma</button>
                </div>
            </select>
            </form>
    </body>
</html>