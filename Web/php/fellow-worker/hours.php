<html>
<?php include_once '../head.php'; ?>
<body>
<div class="container">
    <?php include '../navs/fellowworker.php'; ?>
    <div class="col-xs-12">
        <div class="row">
            <h1 class="title">Uren registreren</h1>
        </div>
        <div class="row">
            <div class="col-xs-12 col-md-4 col-md-offset-4">
                <div class="row">
                    <div class="panel panel-default">
                        <div class="panel-heading">Uren registreren</div>
                        <div class="panel-body">
                            <form action="../actions/registerHour.class.php" method="get">
                                <div class="col-xs-12">
                                    <div class="col-xs-12 col-md-6">
                                        <label>Datum:</label>
                                    </div>
                                    <div class="form-group col-xs-12 col-md-6">
                                        <?php echo date("d-m-Y"); ?>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="col-xs-12 col-md-6">
                                        <label>Uren:</label>
                                    </div>
                                    <div class="form-group col-xs-12 col-md-6">
                                        <input type="number" min="1" max="24" class="col-md-7 form-control" name="uren">
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">Ziek melden</button>
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
