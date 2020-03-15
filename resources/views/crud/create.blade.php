<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <title>Document</title>

  <link rel="stylesheet" href="{{asset('public/css/bootstrap.min.css')}}">
</head>
<body background="#f6eead">
              
          <div class="container">
            <h2>Register New Students Records</h2>

            @if (Session::has('success'))
                <p>{{Session::get('success')}}</p>
            @endif


            @if (count($errors) > 0)

                <ul>
                   @foreach ($errors->all() as $error)
                       <li>{{$error}}</li>
                   @endforeach

                </ul>
                
            @endif


           
          </div>

          <div class="container">
            
             <form class="text-center border border-light p-5" action="{{route('crud.store')}}" method="POST" >
                     @csrf

                     <input type="text" class="form-control" name="name" placeholder="student name" />
                     <input type="number" class="form-control" name="roll" placeholder="student roll" />
                     <input type="number" class="form-control" name="registration" placeholder="student registraton " />
                     <input type="text" class="form-control" name="department" placeholder="student department" />
                     <input type="submit" class="form-control" name="submit" value="submit">
            </form>

          </div>
          
</body>
</html>