<form method="post">
    <div class="form-group">
        <label for="exampleInputEmail1">Username</label>
        <input type="email" class="form-control" id="exampleInputEmail1" disabled value="<?php echo $user->getUsername(); ?>">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" name="password" class="form-control" id="exampleInputPassword1" value="<?php echo $user->getPassword(); ?>">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Email</label>
        <input type="email" name="email" class="form-control" aria-describedby="emailHelp" value="<?php echo $user->getEmail(); ?>">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Image</label>
        <input type="password" name="image" class="form-control" id="exampleInputPassword1" value="<?php echo $user->getImage(); ?>">
    </div>
    <button type="submit" class="btn btn-primary">Edit</button>
</form>