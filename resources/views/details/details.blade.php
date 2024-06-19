<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pet details</title>
</head>
<body>

    <!-- This function should be used in controller to obtain output from db:

    
-->
    <div>

            <h4>pet's name: <h4>
            <h3>{{ $animal->name }}</h3>
            <br>

            <h4>id: <h4>
            <h3>{{ $animal->id }}</h3>
            <br>

            <h4>species: <h4>
            <h3>{{ $animal->species }}</h3>
            <br>
            
            <h4>breed: <h4>
            <h3>{{ $animal->breed }}</h3>
            <br>
            
            <h4>age: <h4>
            <h3>{{ $animal->age }}</h3>
            <br>

            <h4>weight: <h4>
            <h3>{{ $animal->weight }}</h3>
            <br>       
            
            <h4>first visit: <h4>
            <h3>{{ $animal->created_at }}</h3>
            <br>     

            <h4>last visit: <h4>
            <h3>{{ $animal->updated_at }}</h3>
            <br> 

        
            <h3>owner: </h3>
            <p>{{ $animal->owner->id }}</p>
            <br> 

            <h3>owner: </h3>
            <p>{{ $animal->owner->first_name }}</p>
            <br> 

            <h3>owner: </h3>
            <p>{{ $animal->owners->surname }}</p>
             
            <img src="./public/images/pets/{{ $animal->image->path }}
            " alt="{{ $animal->image->path }}">

            <p>{{ $animal->owners->surname }}</p>

    </div>    

    

</body>
</html>