<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">CNE</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Age</th>
      <th scope="col">Speciality</th>
      <th scope="col">Image</th>
      <th scope="col">Operation</th>
    </tr>
  </thead>
  <tbody>
  @foreach($students as $student)
    <tr>
      <td>{{$student->cne}}</td>
      <td>{{$student->firstName}}</td>
      <td>{{$student->lastName}}</td>
      <td>{{$student->age}}</td>
      <td>{{$student->Speciality}}</td>
      <td>{{$student->image}}</td>
      <td>
      
      <a href="#" class="btn btn-sm btn-info">Show</a>
      <a href="{{url('/edit/'.$student->id)}}" class="btn btn-sm btn-info"></a>
      <a href="" class="btn btn-sm btn-danger">Delete</a>
      
      </td>
      
    </tr>
 @endforeach
  </tbody>
</table>

