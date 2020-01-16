<div class="container" style="text-align: center">
    <span style="font-style: oblique;color: red">Username: </span><span><?php echo $user->getUsername() ?></span><br>
    <span style="font-style: oblique;color: red">Email: </span><span><?php echo $user->getEmail() ?></span><br>
    <button type="button" class="btn btn-primary btn-lg" onclick="window.location.href ='homepage.php?page=edit&username=<?php echo $user->getUsername()?>'">Edit</button>
</div>
