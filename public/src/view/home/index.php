<html>
    <head>
        <title>List of Items</title>
    </head>
    <body>
        <h1>Item List</h1>
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach($data['items'] as $item) {
                        echo "<tr>
                            <td>$item->name</td>
                            <td><a href='/home/detail/$item->ItemID'>Info</a></td>
                            <td><a href='/home/edit/$item->ItemID'>Edit</a></td>
                            <td><a href='/home/delete/$item->ItemID'>Delete</a></td>
                            </tr>";
                    }
                ?>

            </tbody>
        </table>
        <a href='/home/create'>Create an Item</a>
    </body>
</html>