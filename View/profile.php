<div class="container" style="margin-top: 50px; height: 700px;width: 600px;">
    <div class="flip-card" style="height: 100%;width: 100%; ">
        <div class="flip-card-inner">
            <div class="flip-card-front" style="border-radius: 50px">

                <img src="../images/profile-img.png" style="height: 80%">
                <hr>
                <h1 style="color: black">Information</h1>

            </div>
            <div class="flip-card-back"
                 style="background-color: palevioletred;border-radius: 50px; text-align: center;">

                <img src="<?php echo $user->getImage(); ?>" alt="avatar"
                     style="width: 80%; height: 50%;margin-top: 40px;border-radius: 100%">


                <h1 class="info-user" style="font-style: oblique ;color: blue;"><span><i class="fa fa-user"></i> Username :</span>
                </h1>
                <h2 class="info-user" style="color: black;"><?php echo $user->getUsername() ?></h2>
                <h1 class="info-user" style="font-style: oblique;color: blue;"><span><i class="fa fa-mail-forward"></i> Email :</span>
                </h1>
                <h2 class="info-user" style="color: black"><?php echo $user->getEmail() ?></h2>
                <div class="container" style="margin-left: -280px">
                    <button type="button" class="btn btn-primary btn-lg info-user"
                            onclick="window.location.href ='homepage.php?page=edit&username=<?php echo $user->getUsername() ?>'">
                        Edit
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

