
@include('student/layout/header')
  <div class="content-wrapper">
    <div class="row">
      <h3>Dashboard</h3>
    </div>
    <!-- <div class="row">
      <div class="edit-btn"><button class="btn btn-success">Edit</button></div>
    </div> -->
    <div class="row">
      <div class="col-md-12">
        <div class="d-flex flex-column align-items-center">
          <img id="profile-preview" class="rounded-circle mt-5" width="150px" @if(!empty(Auth::user()->image)) src="{{asset('upload/'.Auth::user()->image)}}" @else src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg" @endif>
          <span class="font-weight-bold">{{Auth::user()->name .' '.Auth::user()->last_name}}</span>
          <span class="text-black-50">Apply For : {{Auth::user()->apply_for}}</span>
          <span class="text-black-50">Email : {{Auth::user()->email}}</span>
          <span class="text-black-50">Contact : {{Auth::user()->contact}}</span>
          <span class="text-black-50">Course : {{Auth::user()->course}}</span>
          <span> Paid Fee : {{Auth::user()->fee}}</span>
      </div>
      </div>
    </div>
    <div class="row desktop p-2">
      <div class="container rounded bg-white mt-5 mb-5">
        <div class="row">
            <div class="col-md-12 border-right">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3"><h4 class="text-right">Profile Settings</h4></div>
                    @if(session()->has('success'))
                      <div class="alert alert-success">
                          {{ session()->get('success') }}
                      </div>
                  @endif
                    <form action="{{route('update-student-profile')}}" method="post" enctype="multipart/form-data">@csrf
                      <div class="row mt-2">
                        <div class="col-md-6">
                          <label class="labels">Name</label><input type="text" name="name" class="form-control" value="{{Auth::user()->name}}" placeholder="First name">
                        </div>
                        <div class="col-md-6">
                          <label class="labels">Last Name</label><input type="text" name="last_name" class="form-control" value="{{Auth::user()->last_name}}"  placeholder="Last Name">
                        </div>
                      </div>
                      <div class="row mt-2">
                        <div class="col-md-6">
                          <label class="labels">Apply For</label><input type="text" name="apply_for" class="form-control" value="{{Auth::user()->apply_for}}" placeholder="Apply For">
                        </div>
                        <div class="col-md-6">
                          <label class="labels">Course</label><input type="text" name="course" class="form-control"  value="{{Auth::user()->course}}"  placeholder="Course">
                        </div>
                      </div>
                      <div class="row mt-2">
                        <div class="col-md-6">
                          <label class="labels">College</label><input type="text" name="college" class="form-control" value="{{Auth::user()->college}}" placeholder="College">
                        </div>
                        <div class="col-md-6">
                          <label class="labels">Contact</label><input type="text" name="contact" value="{{Auth::user()->contact}}" class="form-control" placeholder="Contact">
                        </div>
                      </div>
                      <div class="row mt-2">
                        <div class="col-md-6">
                          <label class="labels">Image</label><input type="file" name="image" onchange="loadFile(event)" class="form-control"/>
                        </div>
                        <div class="col-md-6">
                          <label class="labels">Password</label><input type="password" name="password" class="form-control" placeholder="Password"/>
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
@include('student/layout/footer')
    
