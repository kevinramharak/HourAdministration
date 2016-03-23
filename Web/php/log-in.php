<html>
<?php include 'head.php'; ?>
<body>
<div class="container">
<div class="col-xs-12 col-md-4 col-md-offset-4">
    <h1 class="title">HourAdministration</h1>
    <div class="row">
        <div class="panel panel-default">
            <form action="actions/login.php" method="post">
                <div class="panel-body">
                    <label>Gebruikersnaam:</label>
                    <input name="username" type="text" class="form-control" placeholder="Voer gebruikersnaam in">
                </div>
                <div class="panel-body">
                    <label>Wachtwoord:</label>
                    <input name="password" type="password" class="form-control" placeholder="Voer wachtwoord in">
                </div>
                <div class="panel-body">
                    <div class="col-xs-12">
                        <div class="row">
                            <button type="submit" class="btn btn-primary">Inloggen</button>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="col-xs-12">
                        <div class="row">
                            <button type="submit" class="btn btn-primary">Wachtwoord vergeten?</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
</body>
</html>