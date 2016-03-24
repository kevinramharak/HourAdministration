<html>
<?php include_once '../head.php'; ?>
<body>
<div class="container">
  <?php include '../navs/administrator.php'; ?>
  <div class="col-xs-12">
    <div class="row">
      <h1 class="title">Medewerker toevoegen</h1>
    </div>
    <div class="row">
      <div class="col-xs-12 col-md-6 col-md-offset-3">
        <div class="row">
          <div class="panel panel-default">
            <div class="panel-heading">Medewerker toevoegen</div>
            <div class="panel-body">
              <form action="../actions/addEmployee.php">
                <div class="col-xs-12">
                  <div class="col-xs-12 col-md-6">
                    <label>Naam:</label>
                  </div>
                  <div class="form-group col-xs-12 col-md-6">
                    <input type="text" class="col-md-8 form-control">
                  </div>
                </div>
                <div class="col-xs-12">
                  <div class="col-xs-12 col-md-6">
                    <label>Tussenvoegsel:</label>
                  </div>
                  <div class="form-group col-xs-12 col-md-6">
                    <input type="text" class="col-md-6 form-control">
                  </div>
                </div>
                <div class="col-xs-12">
                  <div class="col-xs-12 col-md-6">
                    <label>Achternaam:</label>
                  </div>
                  <div class="form-group col-xs-12 col-md-6">
                    <input type="text" class="col-md-6 form-control">
                  </div>
                </div>
                <div class="col-xs-12">
                  <div class="col-xs-12 col-md-6">
                    <label>Geboortedatum:</label>
                  </div>
                  <div class="form-group col-xs-12 col-md-6">
                    <input type="date" class="col-md-6 form-control">
                  </div>
                </div>
                <div class="col-xs-12">
                  <div class="col-xs-12 col-md-6">
                    <label>Geslacht:</label>
                  </div>
                  <div class="form-group col-xs-12 col-md-6">
                    <input type="text" class="col-md-6 form-control">
                  </div>
                </div>
                <div class="col-xs-12">
                  <div class="col-xs-12 col-md-6">
                    <label>Werknemer nummer:</label>
                  </div>
                  <div class="form-group col-xs-12 col-md-6">
                    <input type="text" class="col-md-6 form-control">
                  </div>
                </div>
                <div class="col-xs-12">
                  <div class="col-xs-12 col-md-6">
                    <label>Deelfactortijd:</label>
                  </div>
                  <div class="form-group col-xs-12 col-md-6">
                    <input type="text" class="col-md-6 form-control">
                  </div>
                </div>
                <div class="col-xs-12">
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary">Werknemer toevoegen</button>
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
