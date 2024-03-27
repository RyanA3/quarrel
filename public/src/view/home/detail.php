<html>
    <head>
        <title>Item Detail</title>
    </head>
    <body>
        <h1>Item Detail</h1>
        <dl>
            <?php
                $reflect = new ReflectionClass($data);
                $properties = $reflect->getProperties(ReflectionProperty::IS_PUBLIC);

                foreach($properties as $property) { 
                    $name = $property->getName();
                    $value = $property->getValue($data);
                    echo "<dt>$name</dt><dd>$value</dd>";
                } 
            ?> 
        </dl>
    </body>
</html>