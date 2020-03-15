<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <title>Document</title>

  <link rel="stylesheet" href="{{asset('public/css/bootstrap.min.css')}}">
</head>
<body style="background:#f6eead ">
              
          <div class="container">
            <h2>All of registered Student list</h2>
            <h3><a href="{{route('crud.create')}}">create New Student</a></h3>
          </div>

          <div class="container">
            <table class="text-center border border-light p-5 table table-border">
          
                <thead>
                   
                    <td>Name</td>
                    <td>Roll</td>
                    <td>Registration</td>
                    <td>Department</td>
                    <td>Action</td>
                    
                </thead>
               
                <tbody>
                  
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
                         @foreach ($student as $data)
                             <tr>
                                 <td>{{$data->name}}</td>
                                 <td>{{$data->roll}}</td>
                                 <td>{{$data->registration}}</td>
                                 <td>{{$data->department}}</td>
                                 <td><a href="{{route('crud.show',$data->id)}}">Show</a> || 
                                    <a href="{{route('crud.edit',$data->id)}}">Edit</a> ||
                                  <div style="margin-top:-24px;margin-left:180px;">
                                    <form onclick="return confirm('Are you sure to Delete');"  action="{{route('crud.destroy',$data->id)}}" method="post">
                                      @csrf   
                                      @method('DELETE')
                                          <button style="cursor:pointer;" >Delete</button>
                                  </form> 
                                  
                                  </div>
                                  
                                  </td> 
                             </tr>
                         @endforeach
                </tbody>
              </table>
          </div>
          
</body>
</html>