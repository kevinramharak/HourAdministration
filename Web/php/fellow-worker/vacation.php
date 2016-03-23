<html>
<?php include_once '../head.php'; ?>
<body>
<div class="container">
    <div class="col-xs-10 col-xs-offset-1 col-md-1 col-md-offset-0">
        <div class="row">
            <img src="../../img/logo.png" class="logo">
        </div>
    </div>
    <div class="col-xs-12">
        <div class="row">
            <?php include_once '../navs/fellowworker.php'; ?>
        </div>
    </div>
    <div class="col-xs-12">
        <div class="row">
            <h1 class="title">Vakantie</h1>
        </div>
        <div class="row">
            <div class="col-xs-12 col-md-4 col-md-offset-4">
                <div class="row">
                    <div class="panel panel-default">
                        <div class="panel-heading">Vakantie</div>
                        <div class="panel-body">
                            <form>
                                <div class="col-xs-12">
                                    <div class="col-xs-12 col-md-6">
                                        <label>Van:</label>
                                    </div>
                                    <div class="form-group col-xs-12 col-md-6">
                                        <input type="datetime" class="col-md-7 form-control">
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="col-xs-12 col-md-6">
                                        <label>Tot:</label>
                                    </div>
                                    <div class="form-group col-xs-12 col-md-6">
                                        <input type="datetime" class="col-md-7 form-control">
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">Vakantie melden</button>
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
<?php include_once 'body.php'; ?>
</body>
</html>
