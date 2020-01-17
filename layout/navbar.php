<?php
$userController = new UserController();
$user = $userController->getUser();
?>
<nav class="navbar navbar-inverse navbar-expand-xl">
    <div id="navbarCollapse" class="collapse navbar-collapse justify-content-start">
        <div class="nav navbar-nav navbar-collapse">
            <li class="nav-item"><a href="homepage.php?username=<?php echo $_GET['username']?>" class="nav-link"><i class="fa fa-keyboard-o" aria-hidden="true"></i><span>Monk_Eyes</span></a></li>
            <li class="nav-item" style="padding-left: 50px"><a href="homepage.php?username=<?php echo $_GET['username']?>" class="nav-link"><i
                        class="fa fa-home"></i><span>Home</span></a></li>
            <li class="nav-item"><a href="#" class="nav-link"><i class="fa fa-gears"></i><span>Projects</span></a></li>
            <li class="nav-item"><a href="#" class="nav-link"><i class="fa fa-users"></i><span>Team</span></a></li>
            <li class="nav-item"><a href="#" class="nav-link"><i class="fa fa-bell"></i><span>Notifications</span></a>
            </li>
            <li style="padding-left: 800px">
                <form class="navbar-form form-inline">
                    <div class="input-group search-box">
                        <input type="text" id="search" class="form-control" placeholder="Search here...">
                        <span class="input-group-addon"><i class="material-icons">&#xE8B6;</i></span>
                    </div>
                </form>
            </li>
            <li class="nav-item dropdown" >
                <a href="homepage.php?page=profile&username=<?php echo $_GET['username']?>" data-toggle="dropdown" class="nav-link dropdown-toggle user-action"><img
                        src="<?php echo $user->getImage();?>" class="avatar" alt="Avatar"><?php echo $_GET['username']?><b class="caret"></b></a>
                <ol class="dropdown-menu">
                    <li><a href="homepage.php?page=profile&username=<?php echo $_GET['username']?>" class="dropdown-item"><i class="fa fa-user-o"></i> Profile</a></li>
                    <li><a href="#" class="dropdown-item"><i class="fa fa-calendar-o"></i> Calendar</a></li>
                    <li><a href="#" class="dropdown-item"><i class="fa fa-sliders"></i> Setting</a></li>
                    <li><a href="homepage.php?username=<?php echo $_GET['username']?>" class="dropdown-item"><i class="fa fa-home"></i> Home</a></li>
                    <li class="divider dropdown-divider"></li>
                    <li><a href="logout.php" class="dropdown-item"><i class="material-icons">&#xE8AC;</i> Logout</a></li>
                </ol>
            </li>
        </div>
    </div>
</nav>

