<!DOCTYPE html>
<html>
  <head>
    <title>Rekam Stok</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <link rel="stylesheet" href="Bootstrap/css/bootstrap.css">

    <style type="text/css">


      body {
        font-family: arial, verdana, sans-serif;
        color: #665544;
        padding: 10px;
      }

      .page{
        font-family: Courier;
        border: 1px solid #665544;
        background-color: #efefef;
        padding: inherit;
      }
    </style>


  </head>
  <body>
    <div class="page">
      <h1>Gudang Wimsoes</h1>

      <form >
        <fieldset class="form-group">
          <label for="exampleInputEmail1">Jumlah Adonan</label>
          <input type="number" class="form-control" id="inputAdonan" placeholder="input disini!">
          <small class="text-muted">input jumlah adonan di sini, jumlah kebutuhan bahan akan ditampilkan</small>
        </fieldset>

        <button onclick="calc()" type="button" class="btn btn-primary">Submit</button>
      </form>

    </br>

      <div class="tabel_bahan">
        <table class="table">

          <tbody>
            <tr>
              <th>Perkiraan pcs</th>
              <td id="pcs"></td>
            </tr>
            <tr>
              <th>Mentega</th>
              <td id="mtg">0</td>
            </tr>
            <tr>
              <th>Gula</th>
              <td id="gul">0</td>
            </tr>
            <tr>
              <th>Susu</th>
              <td id= "skm">0</td>
            </tr>
            <tr>
              <th>Maizena</th>
              <td id = "mzn">0</td>
            </tr>
            <tr>
              <th>Telur</th>
              <td id = "tlr">0</td>
            </tr>
            <tr>
              <th>Mika</th>
              <td id = "mka">0</td>
            </tr>
            <tr>
              <th>P.Segitiga</th>
              <td id = "pst">0</td>
            </tr>
            <tr>
              <th>Cup</th>
              <td id = "cup">0</td>
            </tr>
            <tr>
                <th>Gas</th>
                <td id = "gas">0</td>
            </tr>
          </tbody>
        </table>
      </div>

    </div>
    <script src="Bootstrap/jquery-3.4.1.min.js"></script>
    <script src="Bootstrap/popper.min.js"></script>
    <script src="Bootstrap/js/bootsrap.js"></script>
    <script type="text/javascript">
      function calc(){


        document.getElementById('pcs').innerHTML = Number(document.getElementById('inputAdonan').value) * 40

      document.getElementById('mtg').innerHTML = Number(document.getElementById('inputAdonan').value)   * 100;
      document.getElementById('gul').innerHTML = Number(document.getElementById('inputAdonan').value)   * 95;
      document.getElementById('skm').innerHTML = Number(document.getElementById('inputAdonan').value)   * 90;
      document.getElementById('mzn').innerHTML = Number(document.getElementById('inputAdonan').value)  * 37.5;
      document.getElementById('tlr').innerHTML = Number(document.getElementById('inputAdonan').value)   * 5;
      document.getElementById('mka').innerHTML = Number(document.getElementById('inputAdonan').value)   * 40;
      document.getElementById('pst').innerHTML = Number(document.getElementById('inputAdonan').value)   * 2;
      document.getElementById('cup').innerHTML = Number(document.getElementById('inputAdonan').value)   * 40;

      if(Number(document.getElementById('inputAdonan').value)%2 == 1){
        document.getElementById('gas').innerHTML = (Number(document.getElementById('inputAdonan').value) + 1 ) / 2;

      }else{
        document.getElementById('gas').innerHTML = (Number(document.getElementById('inputAdonan').value)) / 2;

      }
      }
    </script>
  </body>
</html>
