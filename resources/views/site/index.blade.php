@extends('admin.master')

@section('content')
 
          <div class="container">
            <h2>All of registered Student list</h2>
          </div>

          <div class="container">
            <table class="table table-border">
          
                <thead>
                   
                    <td>Name</td>
                    <td>Roll</td>
                    <td>Registration</td>
                    <td>Department</td>
                    <td>Action</td>
                    
                </thead>
               
                <tbody>
                         @foreach ($student as $data)
                             <tr>
                                 <td>{{$data->name}}</td>
                                 <td>{{$data->roll}}</td>
                                 <td>{{$data->registration}}</td>
                                 <td>{{$data->department}}</td>
                                 <td><a href="">Edit</a> ||   <a href="">Delete</a></td>
                             </tr>
                         @endforeach
                </tbody>
              </table>
          </div>
          


@endsection