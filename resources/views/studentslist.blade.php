<div class="card mb-3">
  <img class="card-img-top" style="height: 300px; width:100%" src="https://thumbs.dreamstime.com/z/university-education-icons-university-academy-education-concept-icons-student-s-hands-top-view-learning-career-113049418.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">List of Students</h5>
    <p class="card-text">Information about all students are here.</p>
  
  <table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">Image</th>
        <th scope="col">CNE</th>
        <th scope="col">First Name</th>
        <th scope="col">Last Name</th>
        <th scope="col">Age</th>
        <th scope="col">Speciality</th>
        <th scope="col">Operation</th>
      </tr>
    </thead>
    <tbody>
      @foreach($students as $student)
        <tr>
          <!-- <td>{{$student->image}}</td> -->
          <td><img width="100px" src="{{asset('storage/media')}}/{{$student->image}}" /></td>  
          <td>{{$student->cne}}</td>
          <td>{{$student->firstName}}</td>
          <td>{{$student->lastName}}</td>
          <td>{{$student->age}}</td>
          <td>{{$student->speciality}}</td>
          <td>
          <a href="{{route('delete',$student->id)}}" class="btn btn-sm btn-danger">Delete</a>
          <a href="{{route('edit',$student->id)}}" class="btn btn-sm btn-warning">Edit</a>
          </td>
        </tr>
      @endforeach
    </tbody>
</table>
  
  </div>
</div>


