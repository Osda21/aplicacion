<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mi primera aplicacion</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script> src"js/bootstrap.min.js"</script>

</head>
<body>
<form>
  <div class="mb-3">
    <label for="identificador" class="form-label">identificacion</label>
    <input type="email" class="form-control" id="identificador" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="nombre" class="form-label">nombre</label>
    <input type="password" class="form-control" id="nombre">
  </div>
  <div class="mb-3">
    <label for="detalle" class="form-label">detalle</label>
    <input type="password" class="form-control" id="detalle">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">reguistrar</button>
</form>
</body>
</html>