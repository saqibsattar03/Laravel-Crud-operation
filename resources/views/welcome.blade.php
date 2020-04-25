@extends ('layouts.main')


@section('content')

<h1>welcome</h1>

@if(session('Msg'))
<div class="alert alert-success" role="alert">
  {{session('Msg')}}
</div>

@endif


<div class="container">
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Phone</th>
      <th scope="col">Email</th>
      <th scope="col">Designation</th>
      <th scope="col">Age</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($jobs as $job)

    <tr>
      <th scope="row">{{$job->id}}</th>
      <td>{{$job->first_name}}</td>
      <td>{{$job->last_name}}</td>
      <td>{{$job->phone}}</td>
      <td>{{$job->email}}</td>
      <td>{{$job->designation}}</td>
      <td>{{$job->age}}</td>
      
      <td><a href="{{route('edit',$job->id)}}">
      <button type="button" class="btn btn-warning">Edit</button></a>
      ||
      <form method="POST" id="delete-form-{{$job->id}}" action="{{route('delete',$job->id)}}" style="display:none;">
      @csrf
      {{method_field('delete')}}
      </form>

      <button onclick="if(confirm('Are you sure to delete this data?'))
      {
        event.preventDefault();
        document.getElementById('delete-form-{{$job->id}}').submit();
      }
      else{
        event.preventDefault();
      }
      "
       type="button" class="btn btn-danger"
      
      
      > 

    Delete
     </button>
      
      </td>
    </tr>
    @endforeach
    
  </tbody>
</table>

{{ $jobs->links() }}
</div>

@endsection