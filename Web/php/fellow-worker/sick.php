<html>
<?php include_once '../head.php'; ?>
<body>
<div class="container">
    <?php include '../navs/fellowworker.php'; ?>
    <div class="col-xs-12">
        <div class="row">
            <h1 class="title">Ziek</h1>
        </div>
        <div class="row">
            <div class="col-xs-12 col-md-4 col-md-offset-4">
                <div class="row">
                    <div class="panel panel-default">
                        <div class="panel-heading">Ziek</div>
                        <div class="panel-body">
                            <form>
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
                                        <label>Vanaf:</label>
                                    </div>
                                    <div class="form-group col-xs-12 col-md-6">
                                        <input type="time" class="col-md-7 form-control">
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
