<html>
    <table width="100%" border="1" style="border-collapse:collapse">
    <div class="row">
               <div class="col-sm-12">
                  <h1 class="product_taital">Our Products</h1>
               </div>
            </div>


        <?php
            require_once ("admin/DatabaseConnect.php");
            $sql = "SELECT * FROM product";
            $result = $conn -> query($sql);
            $i = 0;
            while($row = mysqli_fetch_assoc($result)){
                if($i % 3 == 0)
                    echo "<tr>";
                        echo "<td width='33%'><a href='index.php?page=ProductDetail&id={$row['product_id']}'>
                                <center>
                                    <b>{$row['product_name']}</b><br/>
                                    <img src=\"admin/{$row['product_image']}\" height='100px'><br/>
                                    "?> <?php echo number_format($row['product_price'],0) ?> <?php echo "VND
                                </center></a>
                            </td>";
                if($i % 3 == 2)
                    echo "</tr>";
                $i++;
            }
            if($i % 3 != 0)
                    echo "</tr>";
        ?>
    </table>
</html>








