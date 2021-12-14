<a href="index.php?page=product-create">Thêm mặt hàng</a>
<form action=""method="get">
    <table>
        <tr>
            <td>Nhập tên hàng
                <input type="text" name="search">
            </td>
            <td>
               <button type="submit">Tìm Kiếm</button>
            </td>
        </tr>
    </table>
</form>
<table border="1px">
    <thead>
    <tr>
        <th>ID</th>
        <th>Tên Hàng</th>
        <th>Loại Hàng</th>
        <th colspan="2">Action</th>
    </tr>
    </thead>
    <tbody>
    <?php if (isset($products)): ?>
    <?php foreach ($products as $product): ?>
        <tr>
            <td><?php echo $product->id ?></td>
            <td><?php echo $product->name ?></td>
            <td><?php echo $product->sectors ?></td>
            <td><a href="index.php?page=product-update&id=<?php echo $product->id ?>">Update</a></td>
            <td><a onclick="return confirm('Bạn chắc chắn muốn xóa không?')" href="index.php?page=product-delete&id=<?php echo $product->id ?>">Delete</a></td>
        </tr>
    <?php endforeach; ?>
    <?php else:?>
    <tr>
        <td colspan="4">Không có sản phẩm nào</td>
    </tr>
    <?php endif; ?>
    </tbody>
</table>
