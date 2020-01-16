<a href="?page=add"><input type="button" value="add"></a>
<div class="row">
    <table border="1px">
        <tr>
            <th>STT</th>
            <th>Name</th>
            <th>UserID</th>
            <th>StatusID</th>
            <th>DayID</th>
        </tr>
        <?php foreach ($cards as $key => $card) : ?>
            <tr>
                <td><?php echo ++$key; ?></td>
                <td>
                    <a href="index.php?page=description&id=<?php echo $card->getId(); ?>"><?php echo $card->getName();?>
                    </a>
                </td>
                <td>
                    <a href="index.php?page=description&id=<?php echo $card->getId(); ?>"><?php echo $card->getUserId();?>
                    </a>
                </td>
                <td>
                    <a href="index.php?page=description&id=<?php echo $card->getId(); ?>"><?php echo $card->getStatusId();?>
                    </a>
                </td>
                <td>
                    <a href="index.php?page=description&id=<?php echo $card->getId(); ?>"><?php echo $card->getDayId();?>
                    </a>
                </td>
                <td>
                    <a href="index.php?page=edit&id=<?php echo $card->getId() ?>">
                        <input type="button" value="edit">
                    </a></td>
                <td>
                    <a href="index.php?page=delete&id=<?php echo $card->getId() ?>">
                        <input type="button" value="delete" onclick="return confirm('Ban Co Chac Chan Muon Xoa Khong')">
                    </a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>