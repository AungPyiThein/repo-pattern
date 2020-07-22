<div class="card mb-3">
  <img src="http://inventain.com/wp-content/uploads/2020/01/Children-And-Education-Are-Important-768x403.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">List of Students</h5>
    <p class="card-text">This is the information about list of students in the system</p>

<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">CNE</th>
      <th scope="col">FirstName</th>
      <th scope="col">SecondName</th>
      <th scope="col">Age</th>
      <th scope="col">Speciality</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>
  @foreach($students as $student)
    <tr>
      <td>{{ $student->cne }}</td>
      <td>{{ $student->firstName }}</td>
      <td>{{ $student->secondName }}</td>
      <td>{{ $student->age }}</td>
      <td>{{ $student->speciality }}</td>
      <td>
        <a href="{{url('/edit/'.$student->id)}}" class="btn btn-sm btn-warning">Edit</a>
        <a href="{{url('/delete/'.$student->id)}}" class="btn btn-sm btn-danger">Delete</a>
      </td>
    </tr>
  @endforeach
  </tbody>
</table>

  </div>
</div>

