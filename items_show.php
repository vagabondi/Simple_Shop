 <li class="item_in_list">
    <div>
        <img src="<?php
            if (isset($row['url'])) {
                echo $row['url'];
            } else {
                echo "img/noimage.png";
            }?>"/>
        <p><?php echo $row['itemName']; ?></p>
        <p><?php echo $row['description']; ?></p>
    </div>
 </li>