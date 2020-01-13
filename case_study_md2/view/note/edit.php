<div class="col-12 mt-4">
    <form action="" method="POST" class="form-group mt-4">
        <label for="">Tiêu đề: </label>
        <input type="text" name="title" class="form-control" value="<?php echo $note->getTitle() ?>">
        <label for="">Nội dung:</label>
        <textarea name="content" class="form-control" rows="3"> <?php echo $note->getContent() ?></textarea>
        <label for="">Phân loại: </label>
        <select name="type_id" class="form-control">
            <?php foreach ($types as $type): ?>
                <option value="<?php echo $type->getId(); ?>" <?php if ($note->getTypeId() == $type->getId()) echo "selected" ?>>
                    <?php echo $type->getName(); ?>
                </option>
            <?php endforeach; ?>
        </select>
        <input type="reset" value="Hủy" class="btn btn-danger mt-3"
               onclick="return confirm('bạn có chắc chắn muốn xóa các thay đổi vừa nhập ?')">
        <input type="submit" value="Lưu" class="btn btn-success mt-3"
               onclick="return confirm('bạn có chắn chắn sửa thông tin của ghi chú này ?')">
    </form>
</div>