<html>
    <head>
        <title>List of Items</title>
    </head>
    <body>
        <h1>Item List</h1>
        <ul>
            <?php
                foreach($data['items'] as $item) {
                    echo "<li>$item->name</li>";
                }
            ?>
        </ul>
    </body>
</html>