
@include('admin/layout/header')
  <div class="content-wrapper">
    <div class="row">
      <h3>Admin Dashboard</h3>
    </div>
    <div class="row">
      <div class="edit-btn"><a href="{{route('admin/student-list')}}"><button class="btn btn-success">Student List</button></a></div>
    </div>
    <div class="row desktop p-2">
      <div class="container rounded bg-white mt-5 mb-5">
        <div class="row">
            <div class="col-md-12 border-right">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3"><h4 class="text-right">Edit Student</h4></div>
                    @if(session()->has('success'))
                        <div class="alert alert-success">
                            {{ session()->get('success') }}
                        </div>
                    @endif
                    @if(session()->has('error'))
                        <div class="alert alert-danger">
                            {{ session()->get('error') }}
                        </div>
                    @endif
                    <form action="{{route('admin/update-student-data')}}" method="post" enctype="multipart/form-data">@csrf
                      <div class="row mt-2">
                        <div class="col-md-6">
                            <input type="hidden" name="id" value="{{$student->id}}">
                          <label class="labels">Name</label><input type="text" name="name" value="{{$student->name}}" class="form-control" placeholder="First name">
                          @error('name')
                          <p class="alert alert-danger">{{$message}}</p>
                          @enderror
                        </div>
                        <div class="col-md-6">
                          <label class="labels">Last Name</label><input type="text" value="{{$student->last_name}}" name="last_name" class="form-control" placeholder="Last Name">
                          @error('last_name')
                          <p class="alert alert-danger">{{$message}}</p>
                          @enderror
                        </div>
                      </div>
                      <div class="row mt-2">
                            <div class="col-md-6">
                                <label class="labels">Email</label><input type="email" value="{{$student->email}}" name="email" class="form-control"  placeholder="Email"/>
                                @error('email')
                                <p class="alert alert-danger">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label class="labels">Password</label><input type="password" name="password" class="form-control" placeholder="Password"/>
                                @error('password')
                                <p class="alert alert-danger">{{$message}}</p>
                                @enderror
                            </div>
                        </div>
                      <div class="row mt-2">
                        <div class="col-md-6">
                          <label class="labels">Apply For</label><input type="text" value="{{$student->apply_for}}" name="apply_for" class="form-control" placeholder="Apply For">
                          @error('apply_for')
                          <p class="alert alert-danger">{{$message}}</p>
                          @enderror
                        </div>
                        <div class="col-md-6">
                          <label class="labels">Course</label><input type="text" value="{{$student->course}}" name="course" class="form-control"  placeholder="Course">
                          @error('course')
                          <p class="alert alert-danger">{{$message}}</p>
                          @enderror
                        </div>
                      </div>
                      <div class="row mt-2">
                        <div class="col-md-6">
                          <label class="labels">College</label><input type="text"  value="{{$student->college}}" name="college" class="form-control" placeholder="College">
                          @error('college')
                          <p class="alert alert-danger">{{$message}}</p>
                          @enderror
                        </div>
                        <div class="col-md-6">
                          <label class="labels">Contact</label><input type="text"  value="{{$student->contact}}" name="contact" class="form-control" placeholder="Contact">
                          @error('contact')
                          <p class="alert alert-danger">{{$message}}</p>
                          @enderror
                        </div>
                      </div>
                        <div class="row mt-2">
                            <div class="col-md-6">
                              <label class="labels">Image</label><input type="file" name="image" onchange="loadFile(event)" class="form-control"/>
                            </div>
                            <div class="col-md-6">
                              <label class="labels">Fee</label><input type="text" name="fee" value="{{ $student->fee }}" class="form-control" placeholder="Fee">
                              @error('fee')
                              <p class="alert alert-danger">{{$message}}</p>
                              @enderror
                            </div>
                        </div>
                      <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="submit">Save Profile</button></div>
                    </form>
                </div>
            </div>
        </div>
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
    
