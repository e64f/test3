<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TASKS</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a0c43f9093.js" crossorigin="anonymous"></script>
    <link href="css/style.css" rel="stylesheet">
</head>

<body>


<div class="navbar navbar-default navbar-static-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
              <div class="navbar-brand">TASKS</div>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li{if $mod == ''} class="active"{/if}><a href="/">Home</a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                {if $session.auth == 1}
                    <li><a href="/index.php?mod=exit">Exit</a></li>
                {else}
                    <li><a  href="/index.php?mod=auth">Auth</a></li>
                {/if}
            </ul>
        </div>
    </div>
</div>


<div class="container">
    <div class="main">
        {$content}
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>
