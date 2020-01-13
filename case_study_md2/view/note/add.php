<div class="col-12 mt-4">
    <form action="" method="POST" class="form-group mt-4">
        <label for="">Tiêu đề: </label>
        <input type="text" name="title" class="form-control" placeholder="tiêu đề">
        <label for="">Nội dung:</label>
        <textarea name="content" class="form-control" rows="3" placeholder="nội dung"></textarea>
        <label for="">Phân loại: </label>
        <select name="type_id" class="form-control">
            <?php foreach ($types as $type): ?>
                <option value="<?php echo $type->getId(); ?>"><?php echo $type->getName(); ?></option>
            <?php endforeach; ?>
        </select>
        <input type="reset" value="Hủy" class="btn btn-danger mt-3" onclick="return confirm('bạn có chắc chắn muốn xóa các nhập liệu ở trên ?')">
        <input type="submit" value="Lưu" class="btn btn-success mt-3">
    </form>
</div>