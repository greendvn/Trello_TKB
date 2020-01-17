<div class="container" style="height: 700px;width: 500px">
    <div class="card" style="margin-top: 100px;background-color: yellow; border-radius: 50px">
                <div class="container">
                    <form method="post" enctype="multipart/form-data" style="height: 100%;font-size: 30px">
                        <div class="container" style="margin-top: 20px">
                            <span style="color: mediumvioletred"><h2>Chỉnh sửa thông tin cá nhân</h2></span>
                        </div>
                        <div class="form-group" style="margin-top: 20px">
                            <label for="exampleInputEmail1"><i class="fa fa-user"></i> Username</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" style="width: 430px"
                                   disabled value="<?php echo $user->getUsername(); ?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1"><i class="fa fa-key"></i>Password</label>
                            <input type="password" name="password" class="form-control" id="exampleInputPassword1"
                                   style="width: 430px" value="<?php echo $user->getPassword(); ?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1"><i class="fa fa-mail-forward"></i>Email</label>
                            <input type="email" name="email" class="form-control" aria-describedby="emailHelp"
                                   style="width: 430px" value="<?php echo $user->getEmail(); ?>">
                        </div>
                        <div class="form-group">
                            <label><i class="fa fa-image"></i>Avatar</label>
                            <input type="file" class="form-control-file" name="image">
                        </div>
                        <button type="submit" class="btn btn-primary"
                                style="margin-bottom: 50px;margin-top: 20px;margin-left: 165px ">UPDATE
                        </button>
                    </form>
                </div>

            </div>
        </div>


