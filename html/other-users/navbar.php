<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="/mediabazarweb/html/events.php">Events</a></li>
                <li><a href="birthdays.php">Birthdays</a></li>
                <li><a href="workerContracts.php">Contracts</a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false"><?= strtoupper($_SESSION["username"]) ?> <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="/mediabazarweb/html/changeProfileInformation.php">Change profile information</a></li>
                        <li><a href="/mediabazarweb/html/changePassword.php">Change password</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="/mediabazarweb/php/signout.php">Sign out </a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
