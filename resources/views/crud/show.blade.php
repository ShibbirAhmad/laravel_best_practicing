<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <title>Document</title>

  <link rel="stylesheet" href="{{asset('public/css/bootstrap.min.css')}}">
</head>
<body class="btn-success">
              
          <div class="container">
            <h2>your Information</h2>

            <h3> 
                Your Name:{{$data->name}} <br/>
                Roll:{{$data->roll}} <br/>
                Registration:{{$data->registration}} <br/>
                Department:{{$data->department}} <br/>
            
            
            </h3>
          
          </div>

        
          
</body>
</html>