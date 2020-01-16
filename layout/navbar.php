<nav class="navbar navbar-expand-lg navbar-light btn-secondary">
    <a class="navbar-brand" href="#" style="padding-left: 250px">Monk-Eyes</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse"
            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#"><span>Home</span> <span class="sr-only">(current)</span></a>
            </li>

        </ul>
        <div class="mx-auto" style="width: 300px;">
            <h3><img src="../images/2.png" class="rounded-circle z-depth-0" alt="avatar image" height="35">TiCo
            </h3>
        </div>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
            <li class="nav-item dropdown navbar-nav ml-auto nav-flex-icons">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="../images/1.png" class="rounded-circle z-depth-0"
                         alt="avatar image" height="35">
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="homepage.php?page=profile&username=<?php echo $_GET['username'] ?>">Profile</a>
                    <a class="dropdown-item" href="homepage.php">Home</a>
                    <a class="dropdown-item" href="#">Review</a>
                    <a class="dropdown-item" href="#">Menu</a>
                    <a class="dropdown-item" href="logout.php">Log Out</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
    </div>
</nav>
