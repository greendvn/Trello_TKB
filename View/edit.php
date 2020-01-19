<div class="container" style="height: 700px;width: 500px">
    <div class="card" style="margin-top: 100px;background-color: yellow; border-radius: 50px">
        <div class="container">
            <form method="post" enctype="multipart/form-data" style="height: 100%;font-size: 30px">
                <div class="container" style="margin-top: 20px">
                    <span style="color: mediumvioletred"><h2>Chỉnh sửa thông tin card</h2></span>
                </div>
                <div class="form-group" style="margin-top: 20px">
                    <label for="exampleInputEmail1"><i class="fa fa-user"></i>name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="name" style="width: 430px"
                           value="<?php echo $card->getname(); ?>">
                </div>
                <div class="form-group" style="margin-top: 20px">
                    <label for="exampleInputEmail1"><i class="fa fa-user"></i> description</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="description"
                           style="width: 430px"
                           value="<?php echo $card->getDescription(); ?>">
                </div>
                <div class="form-group">

                    <button type="submit" class="btn btn-primary">UPDATE
                    </button>

                    <a type="button" class="btn btn-primary"
                       href="homepage.php?page=deleteCard&cardId=<?php echo $card->getId(); ?>&dayId=<?php echo $card->getDayId() ?>">
                        DELETE
                    </a>
                </div>

            </form>
        </div>

    </div>
</div>


<!--<div class="row">-->
<!--    <form method="post">-->
<!--        <div class="form-control">-->
<!--            <label>User name</label>-->
<!--            <input type="text" name="name" value="--><?php //echo $card->getName(); ?><!--">-->
<!--        </div>-->
<!--        <div class="form-control">-->
<!--            <label>Description</label>-->
<!--            <textarea name="description"></textarea>-->
<!--        </div>-->
<!--        <div class="form-control">-->
<!--            <label>User ID</label>-->
<!--            <input type="number" name="user_id" value="--><?php //echo $card->getUserId(); ?><!--">-->
<!--        </div>-->
<!--        <div class="form-control">-->
<!--            <label>Status ID</label>-->
<!--            <input type="number" name="status_id" value="--><?php //echo $card->getStatusId(); ?><!--">-->
<!--        </div>-->
<!--        <div class="form-control">-->
<!--            <label>Day ID</label>-->
<!--            <input type="number" name="day_id" value="--><?php //echo $card->getDayId(); ?><!--">-->
<!--        </div>-->
<!---->
<!--    </form>-->
<!--</div>-->