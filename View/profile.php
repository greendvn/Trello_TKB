<?php include "../layout/boostraps.php"?>
<div class="container" style="margin-top: 50px; height: 700px;width: 600px;">
    <div class="flip-card" style="height: 100%;width: 100%" >
        <div class="flip-card-inner">
            <div class="flip-card-front">
                <img src="<?php echo $user->getImage();?>" alt="avatar" style="width:100%">
            </div>
            <div class="flip-card-back" style="background-color: lightskyblue">
                <h1 class="info-user" style="font-style: oblique;color: blue;"><span>Username :</span></h1>
                <h2 class="info-user"><?php echo $user->getUsername() ?></h2>
                <h1 class="info-user" style="font-style: oblique;color: blue;"><span>Email :</span></h1>
                <h2 class="info-user"><?php echo $user->getEmail() ?></h2>
                <div class="container" style="margin: 5% auto">
                    <button type="button" class="btn btn-primary btn-lg info-user" onclick="window.location.href ='homepage.php?page=edit&username=<?php echo $user->getUsername()?>'">Edit</button>
                </div>
            </div>
        </div>
</div>