<form action="" method="post">
    <input type="text" name="name" placeholder="Nhập tên sản phẩm" value="<?php echo $product->name ?>">

    <select name="sectors"  >
        <option  <?php echo $product->sectors == "Điện Thoại" ? "selected" : "" ?> value="Điện Thoại">Điện Thoại</option>
        <option  <?php echo $product->sectors == "Tủ Lạnh" ? "selected" : "" ?> value="Tủ Lạnh">Tủ Lạnh</option>
        <option  <?php echo $product->sectors == "Điều hòa" ? "selected" : "" ?> value="Điều hòa">Điều hòa</option>
        <option  <?php echo $product->sectors == "Máy Giặt" ? "selected" : "" ?> value="Máy Giặt">Máy Giặt</option>
    </select>
    <input type="text" name="price" placeholder="Nhập tên sản phẩm" value="<?php echo $product->price ?>">
    <input type="text" name="quantily" placeholder="Nhập tên sản phẩm" value="<?php echo $product->quantily ?>">
    <textarea name="description" value="<?php echo $product->description ?>"></textarea>
    <button type="submit">UpDate</button>
    <a href="index.php?page=product-list">Back</a>
</form>
