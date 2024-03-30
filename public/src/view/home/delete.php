<html>
    <head>
        <title>Confirm Deletion</title>
    </head>
    <body>
        <h1>Are you sure you want to delete this item?</h1>
        <form action='/home/delete/<?=$data->ItemID?>' method='post'>
            <label for='name'>Name</label>
            <input type='text' id='name' name='name' value='<?=$data->name?>' disabled />
            <input type='submit' name='action' value='Yes' />
        </form>
        <a href='/home/index'>Back To Items</a>
    </body>
</html>