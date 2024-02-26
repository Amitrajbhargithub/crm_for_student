
@include('admin/layout/header')
  <div class="content-wrapper">
    <div class="row">
      <h3>Student List</h3>
    </div>
    <div class="row">
      <div class="edit-btn"><a href="{{route('admin/add-student')}}"><button class="btn btn-success">Add Student</button></a></div>
    </div>
    <div class="row desktop p-2">
        <div class="container rounded bg-white mt-5 mb-5">
            <section>
                <div class="container">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Name</th>
                                <th scope="col">Last Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Course</th>
                                <th scope="col">College</th>
                                <th scope="col">Fee</th>
                                <th scope="col">Password</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(!empty($student))
                                @foreach($student as $key=>$value)
                                    <tr>
                                        <th scope="row">{{$key+1}}</th>
                                        <td>{{$value->name}}</td>
                                        <td>{{$value->last_name}}</td>
                                        <td>{{$value->email}}</td>
                                        <td>{{$value->course}}</td>
                                        <td>{{$value->college}}</td>
                                        <td>{{$value->fee}}</td>
                                        <td>{{$value->show_password}}</td>
                                        <td><a href="{{url('admin/edit-student/'.$value->id)}}"><button class="btn btn-primary">edit</button></a></td>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </section>
        </div>
    </div>
    </div>
    </div>
  </div>
  <script>
    var loadFile = function(event) {
      var output = document.getElementById('profile-preview');
      output.src = URL.createObjectURL(event.target.files[0]);
      output.onload = function() {
        URL.revokeObjectURL(output.src) // free memory
      }
    };
</script>
@include('admin/layout/footer')
    
