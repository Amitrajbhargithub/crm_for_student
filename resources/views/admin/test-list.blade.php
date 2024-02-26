
@include('admin/layout/header')
  <div class="content-wrapper">
    <div class="row">
      <h3>Test List</h3>
    </div>
    <div class="row">
      <div class="edit-btn"><a href="{{route('admin/add-test')}}"><button class="btn btn-success">Add Test</button></a></div>
    </div>
    <div class="row desktop p-2">
        <div class="container rounded bg-white mt-5 mb-5">
            <section>
                <div class="container">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Test Name</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(!empty($test))
                                @foreach($test as $key=>$value)
                                    <tr>
                                        <th scope="row">{{$key+1}}</th>
                                        <td>{{$value->language}}</td>
                                        <td><a href="{{url('admin/delete-test/'.$value->id)}}"><button class="btn btn-primary">Delete</button></a></td>
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
    
