<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
      integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
      integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
      crossorigin="anonymous"
    ></script>
    <title>Coba</title>
  </head>
  <body style="padding: 20px">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <?php 
    //// ganti disini
    $action = "on";
    ?>
    <div style="padding: 20px">
      <div class="row" style="text-align: center">
        <?php
        if($action == "on"){
?>
        <div class="col-md-12">
          <img
            src="7cdE.gif"
            style="width: 200px; height: 200px"
          />
          <div>Motor On</div>
        </div>
        <?php
        }else{
?>
        <div class="col-md-12">
          <img
            src="close.png"
            style="width: 200px; height: 200px"
          />
          <div>Motor Off</div>
        </div>
        <?php
        }
        ?>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
        <div class="card">
          <div class="card-header" style="text-align: center">Sensor 1</div>
          <div class="card-body">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Tegangan</th>
                  <th scope="col">Arus</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>322 V</td>
                  <td>0,67 A</td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>322 V</td>
                  <td>0,67 A</td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td>322 V</td>
                  <td>0,67 A</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <div class="card-header" style="text-align: center">Sensor 2</div>
          <div class="card-body">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Tegangan</th>
                  <th scope="col">Arus</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>322 V</td>
                  <td>0,67 A</td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>322 V</td>
                  <td>0,67 A</td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td>322 V</td>
                  <td>0,67 A</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <div class="card-header" style="text-align: center">Sensor 3</div>
          <div class="card-body">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Tegangan</th>
                  <th scope="col">Arus</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>322 V</td>
                  <td>0,67 A</td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>322 V</td>
                  <td>0,67 A</td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td>322 V</td>
                  <td>0,67 A</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
