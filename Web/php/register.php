<html>
<?php include 'head.php'; ?>
<body>
<div class="col-xs-12 col-md-2 col-md-offset-5">
    <div class="row">
        <img src="../img/logo.png" alt="logo" class="logo">
    </div>
</div>
<div class="col-xs-12 col-md-2 col-md-offset-5">
    <div class="row">
        <div class="panel panel-default">
            <form action="http://daan-janssen.nl/ha/?action=registerAccount" method="post">
                <div class="col-xs-4">
                    <div class="row">
                        <div class="panel-body">
                            <input name="firstname" type="text" class="form-control" placeholder="Jonas">
                        </div>
                    </div>
                </div>
                <div class="col-xs-4">
                    <div class="row">
                        <div class="panel-body">
                            <input name="prefix" type="text" class="form-control" placeholder="van der">
                        </div>
                    </div>
                </div>
                <div class="col-xs-4">
                    <div class="row">
                        <div class="panel-body">
                            <input name="surname" type="text" class="form-control" placeholder="Velden">
                        </div>
                    </div>
                </div>
                <div class="col-xs-8">
                    <div class="row">
                        <div class="panel-body">
                            <input name="birthdate" type="text" class="form-control" placeholder="dd-mm-jjjj">
                        </div>
                    </div>
                </div>
                <div class="col-xs-4">
                    <div class="row">
                        <div class="panel-body">
                            <input name="sex" type="text" class="form-control" placeholder="m/v">
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="col-xs-12">
                        <div class="row">
                            <button type="submit" class="col-xs-12 btn btn-primary">Maak account</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>