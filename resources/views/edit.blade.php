<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
        body {
            font-family: 'Nunito', sans-serif;
            background-color: Azure;
        }
    </style>
</head>
<body>
    <div class="container text-center p-4 mx-10 ">
      <h2 class="text-primary">Update works to do</h2>
         <form action="{{route('update', $todoedit->id)}}" method="post" autocomplete="off">
            @csrf
            @method('put')
          <input type="text" name="name" placeholder="{{ $todoedit->name }}" class="border-2 border-info">
          <button type="submit" class="bg-info rounded text-white ml-4 p-1">Update work</button>
        </form>
    </div>
</body>
</html>