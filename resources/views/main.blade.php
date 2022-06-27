<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>{{$title}}</title>
    @include('partials/bootstrap')
</head>
<body style="background-image: linear-gradient(to bottom left , #000106,#34dee2 ">
    
    @include('partials/sidebar')
    

   
    
</body>
</html>