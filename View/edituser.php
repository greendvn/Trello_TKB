<div class="container" style="height: 700px;width: 500px">
    <div class="card" style="margin-top: 100px">
        <div class="container">
            <form method="post" enctype="multipart/form-data" style="height: 100%">
                <div class="container" style="margin-top: 20px">
                    <span style="color: orangered"><h2>Chỉnh sửa thông tin cá nhân</h2></span>
                </div>
                <div class="form-group" style="margin-top: 20px">
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
                    <label>Avatar</label>
                    <input type="file" class="form-control-file" name="image">
                </div>
                <button type="submit" class="btn btn-primary" style="margin-bottom: 100px ">UPDATE</button>
            </form>
        </div>

    </div>
</div>

