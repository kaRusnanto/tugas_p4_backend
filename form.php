<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Registrasi</title>

<style>
body {
  min-height: 100vh;
  margin: 0;
  display: flex;
  align-items: center;
  justify-content: center;
  font-family: Arial, sans-serif;
  background-color: #f8f9fa; 
}

.container {
  width: 50%;
  margin: 20px;
}

.form-horizontal {
  background-color: #ffffff;
  padding: 20px;
  border-radius: 10px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

legend {
  font-size: 24px;
  font-weight: bold;
  color: #007bff; 
}

.form-group {
  margin-bottom: 25px;
}

.control-label {
  font-weight: bold;
}

.input-md {
  width: 100%;
  padding: 10px;
  box-sizing: border-box;
}

.radio-inline,
.checkbox {
  margin-right: 200px;
}

.btn-success {
  background-color: #28a745;
  color: #fff;
  border: none;
  padding: 10px 20px;
  border-radius: 5px;
  cursor: pointer;
}

.btn-success:hover {
  background-color: #00FFFF; 
}

</style>
</head>
<body>

<div class="d-flex align-items-center justify-content-center">
  <form class="form-horizontal" role="form" action="p_form.php" method="POST">
    <fieldset>

      <!-- Form Name -->
      <legend>Form Registrasi</legend>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="nama_lengkap">Nama Lengkap</label>
        <div class="col-md-8">
          <input id="nama_lengkap" name="nama_lengkap" type="text" placeholder="" class="form-control input-md" required>
        </div>
      </div>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="umur">Umur</label>
        <div class="col-md-8">
          <input id="umur" name="umur" type="text" placeholder="" class="form-control input-md" required>
        </div>
      </div>

      <!-- Multiple Checkboxes (inline) -->
      <div class="form-group">
        <label class="col-md-4 control-label" for="radios">Gender</label>
        <div class="col-md-4"> 
          <label class="radio-inline" for="radios-0">
            <input type="radio" name="radios" id="radios-0" value="" checked>
            Laki-laki
          </label> 
          <label class="radio-inline" for="radios-1">
            <input type="radio" name="radios" id="radios-1" value="">
            Perempuan
          </label>
        </div>
      </div>

      <!-- Select Basic -->
      <div class="form-group">
        <label class="col-md-4 control-label" for="pendidikan">Pendidikan</label>
        <div class="col-md-8">
          <select id="pendidikan" name="pendidikan" class="form-control">
            <option value="0"></option>
            <option value="1">SD/MI</option>
            <option value="2">SMP/MTS</option>
            <option value="3">SMA/MA</option>
            <option value="4">D1</option>
            <option value="5">D2</option>
            <option value="6">D3</option>
            <option value="7">D4</option>
            <option value="8">S1</option>
            <option value="9">S2</option>
            <option value="10">S3</option>
          </select>
        </div>
      </div>

      <!-- Multiple Checkboxes -->
      <div class="form-group">
        <label class="col-md-4 control-label" for="hobi">Hobi</label>
        <div class="col-md-8">
          <div class="checkbox">
            <label for="hobi-0">
              <input type="checkbox" name="hobi" id="hobi-0" value="1"> Membaca Buku
            </label>
          </div>
          <div class="checkbox">
            <label for="hobi-1">
              <input type="checkbox" name="hobi" id="hobi-1" value="2"> Traveling
            </label>
          </div>
          <div class="checkbox">
            <label for="hobi-2">
              <input type="checkbox" name="hobi" id="hobi-2" value="3"> Olahraga
            </label>
          </div>
          <div class="checkbox">
            <label for="hobi-3">
              <input type="checkbox" name="hobi" id="hobi-3" value="4"> Nonton
            </label>
          </div>
          <div class="checkbox">
            <label for="hobi-4">
              <input type="checkbox" name="hobi" id="hobi-4" value="5"> Hiking
            </label>
          </div>
          <div class="checkbox">
            <label for="hobi-5">
              <input type="checkbox" name="hobi" id="hobi-5" value="6"> Mancing
            </label>
          </div>
        </div>
      </div>

      <!-- Button -->
      <div class="form-group">
        <div class="col-md-8">
          <button id="daftar" name="daftar" class="btn btn-success">Daftar</button>
        </div>
      </div>

    </fieldset>
  </form>
</div>

<!-- Add Bootstrap JS and Popper.js scripts here if needed -->

</body>
</html>
