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
            <?php include_once '../navs/manager.php'; ?>
        </div>
    </div>
    <div class="col-xs-12">
        <div class="row">
            <h1>Manager</h1>
        </div>
        <div class="panel panel-default">
            <!-- Default panel contents -->
            <div class="panel-heading">Verlofaanvragen</div>
            <!-- Table -->
            <table class="table">
                <thead>
                    <th colspan="2">Werknemer</th>
                    <th colspan="2">Verlofaanvraagdata</th>
                    <th>Akkoord</th>
                </thead>
                <tr>
                    <td>voornaam</td>
                    <td>achternaam</td>
                    <td>dd/mm/jjjj</td>
                    <td>dd/mm/jjjj</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </table>
        </div>
    </div>
</div>
</body>
</html>