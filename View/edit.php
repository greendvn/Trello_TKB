
<div class="row">
    <form method="post">
        <div class="form-control">
            <label>User name</label>
            <input type="text" name="name" value="<?php echo $card->getName(); ?>">
        </div>
        <div class="form-control">
            <label>Description</label>
            <textarea name="description"></textarea>
        </div>
        <div class="form-control">
            <label>User ID</label>
            <input type="number" name="user_id" value="<?php echo $card->getUserId(); ?>">
        </div>
        <div class="form-control">
            <label>Status ID</label>
            <input type="number" name="status_id" value="<?php echo $card->getStatusId(); ?>">
        </div>
        <div class="form-control">
            <label>Day ID</label>
            <input type="number" name="day_id" value="<?php echo $card->getDayId(); ?>">
        </div>

    </form>
</div>