<html>
    <head>
        <title>Create an Item</title>
    </head>
    <body>
        <h1>Edit Item</h1>
        <form action='/home/edit/<?=$data->ItemID?>' method='post'>
            <label for='name'>Name</label>
            <input type='text' id='name' name='name' value='<?=$data->name?>' />
            <input type='submit' name='action' value='Save Changes' />
        </form>
        <a href='/home/index'>Back To Items</a>
    </body>
</html>