<html>
<?php include_once '../head.php'; ?>
<body>
<div class="container">
  <?php include '../navs/administrator.php'; ?>
  <div class="col-xs-12">
    <div class="row">
      <h1 class="title">Feestdagen toevoegen</h1>
    </div>
    <div class="row">
      <div class="col-xs-12 col-md-6 col-md-offset-3">
        <div class="row">
          <div class="panel panel-default">
            <div class="panel-heading">Feestdagen toevoegen</div>
            <div class="panel-body">
              <form>
                <div class="col-xs-12">
                  <div class="col-xs-12 col-md-6">
                    <label>Datum:</label>
                  </div>
                  <div class="form-group col-xs-12 col-md-6">
                    <input type="date" class="col-md-8 form-control" id="from">
                  </div>
                </div>
                <div class="col-xs-12">
                  <div class="col-xs-12 col-md-6">
                    <label>Naam van de feestdag:</label>
                  </div>
                  <div class="form-group col-xs-12 col-md-6">
                    <input type="text" class="col-md-6 form-control" id="until">
                  </div>
                </div>
                <div class="col-xs-12">
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary">Feestdag toevoegen</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>
