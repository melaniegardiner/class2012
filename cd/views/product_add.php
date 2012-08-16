<?php


?>

<html><body>

<div id="main">
    <h1>Add Product</h1>
    <form action="index.php" method="post" id="add_product_form">
        <input type="hidden" name="action" value="add_product" />

        <label>ID:</label>
        <select name="id">
        <?php foreach ( $cds as $cd ) : ?>
            <option value="<?php echo $id['id']; ?>">
                <?php echo $id['id']; ?>
            </option>
        <?php endforeach; ?>
        </select>
        <br />

        <label>Name:</label>
        <input type="input" name="name" />
        <br />

        <input type="submit" value="Add CD" />
        <br />  <br />
    </form>
   

</div>

</body></html>