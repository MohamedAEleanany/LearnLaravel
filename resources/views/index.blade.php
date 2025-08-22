<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2> Hello from index file</h2>
    <!-- <a href="{{ url('/printName/ahmed') }}" style="color:red"> print My name</a> -->
    <a href="{{ route('test.printMyNameRoute' , ['name' => 'Yasser']) }}" style="color:red"> print My name</a>
</body>

</html>