<div class="row col-12 mt-4">
    <div class="card col-12">
        <div class="card-body">

            <a href="index.php?page=add" class="btn btn-primary nav-item active">Thêm ghi chú mới</a>
            <h3 class="card-title text-center">Các ghi chú</h3>

            <div class="card-title ">

                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container">
                        <form class="col-7" action="">
                            <select name="type_id" class="form-control col-3" onchange="this.form.submit()">
                                <option selected="selected" value="">--Thể loại--</option>
                                <?php foreach ($types as $type): ?>
                                    <option value="<?php echo $type->getId(); ?>" <?php if ($type->getId() == $_GET['type_id']) echo "selected" ?>><?php echo $type->getName(); ?></option>
                                <?php endforeach; ?>
                            </select>
                        </form>

                        <form class="form-inline my-2 my-lg-0" method="GET"
                              action="?&keyword=<?php echo $_GET['keyword'] ?>">
                            <input class=" form-control mr-sm-2" type="search" placeholder="Title" aria-label="Search" name="keyword">
                            <input class="btn btn-outline-success my-sm-0" type="submit" value="Search">
                        </form>
                    </div>
                </nav>

            </div>

            <table class="table table-striped">
                <thead class="thead-dark">
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Note Type</th>
                    <th></th>
                </tr>
                </thead>
                <?php foreach ($noteList as $key => $note): ?>
                    <tr>
                        <td><?php echo ++$key ?></td>
                        <td>
                            <a href="index.php?page=detail&id=<?php echo $note->getId(); ?>"><?php echo $note->getTitle(); ?></a>
                        </td>
                        <td><?php echo $note->getTypeId(); ?></td>
                        <td>
                            <a href="index.php?page=edit&id=<?php echo $note->getId(); ?>" class="btn btn-success"
                               onclick="return confirm('bạn có chắn chắn sửa thông tin của ghi chú này ?')">Edit</a>
                            <a href="index.php?page=delete&id=<?php echo $note->getId(); ?>" class="btn btn-danger"
                               onclick="return confirm('bạn có chắc chắn muốn xóa ghi chú này ?')">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>

        </div>
    </div>
</div>