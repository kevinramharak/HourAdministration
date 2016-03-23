<html>
<?php include_once '../head.php'; ?>
<body>
<div class="container">
    <div class="col-xs-12">
        <div class="row">
            <?php include_once '../navs/manager.php'; ?>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-md-4 col-md-offset-4">
            <div class="row">
                <div class="panel panel-default">
                    <div class="panel-heading">Projecturen aanpassen</div>
                    <div class="panel-body">
                        <form>
                                <div class="col-xs-12 col-md-6">
                                    <div class="dropdown">
                                        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                            Project
                                            <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                            <li><a href="#">project</a></li>
                                            <li><a href="#">project</a></li>
                                            <li><a href="#">project</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="form-group col-xs-12 col-md-6">
                                    <input type="time" class="col-md-7 form-control"> 
                                </div>
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Wijzigen</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>