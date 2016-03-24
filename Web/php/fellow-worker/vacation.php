<html>
<?php include_once '../head.php'; ?>
<body>
<div class="container">
    <?php include '../navs/fellowworker.php'; ?>
    <div class="col-xs-12">
        <div class="row">
            <h1 class="title">Vakantie of verlof aanvragen</h1>
        </div>
        <div class="row">
            <div class="col-xs-12 col-md-6 col-md-offset-3">
                <div class="row">
                    <div class="panel panel-default">
                        <div class="panel-heading">Vakantie of verlof aanvragen</div>
                        <div class="panel-body">
                            <form action="../actions/request_holiday.php" method="get">
                                <div class="col-xs-12">
                                    <div class="col-xs-12 col-md-4">
                                        <label>Van:</label>
                                    </div>
                                    <div class="form-group col-xs-12 col-md-8">
                                        <input type="datetime-local" class="col-md-8 form-control" name="from">
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="col-xs-12 col-md-4">
                                        <label>Tot:</label>
                                    </div>
                                    <div class="form-group col-xs-12 col-md-8">
                                        <input type="datetime-local" class="col-md-8 form-control" name="until">
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">Vakantie/verlof melden</button>
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
