<html>
    <head>
        <title>Create an Item</title>
    </head>
    <body>
        <h1>Create an Item</h1>
        <form action='/home/create' method='post'>
            <label for='name'>Name</label>
            <input type='text' id='name' name='name' />
            <input type='submit' name='action' value='Create' />
        </form>
        <a href='/home/index'>Back To Items</a>
    </body>
</html>