<p> Here are all the fruits:
    <ul>
        <?php
        foreach($fruits as $key=>$value){
            echo "<li>". $value["name"] ." costs ".$value["price"]."$</li>";
        }
        ?>
    </ul>
</p>