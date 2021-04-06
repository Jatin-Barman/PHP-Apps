<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Price</th>
        <th>Action</th>
    </tr>
    <tr>
        <?php
        include "partials/config.php";
        $sql="SELECT * FROM products";
        $result=mysqli_query($link,$sql);
        while($final=mysqli_fetch_assoc($result)){ ?>
            <td><?php echo $final['id'] ?></td>
            <td><?php echo $final['name'] ?></td>
            <td><?php echo $final['price'] ?></td>
            <td><a href="demoview.php?cart_id= <?php echo $final['id'] ?>">
                 <button>Add to Cart</button>
                </a>
            </td>
    </tr>
        <?php } ?>
</table>