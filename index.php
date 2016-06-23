

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title></title>

    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
  </head>
  <body>
    <div class="container" style="background-color:#1C6FEF;">
        <h1 style="text-align:center;">RC 4</h1>
    </div>


      <div class="container"  style="margin-top:20px;">

          <div class="row">

            <div class="col-md-4">

            </div>
            <div class="col-md-4">
              <form  method="post" action="index.php">
              <div class="input-group">
                <span class="input-group-addon">plaintext</span>
                <input type="text" class="form-control" name="plaintext" placeholder="plaintext here!!!" aria-describedby="plaintext">
              </div>

              <div class="input-group" style="margin-top:5px;">
                <span class="input-group-addon">key</span>
                <input type="text" class="form-control" name="key" placeholder="key here!!!      " aria-describedby="key">
              </div>

              <input type="submit"  name="submit" class="btn btn-danger" value="Generate" style="margin-top:5px;">
            </form>
              <?php include "proses.php";?>

            </div>
            <div class="col-md-4">

            </div>
          </div>



      </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>
  </body>
</html>
