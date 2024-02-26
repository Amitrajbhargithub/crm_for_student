
@include('admin/layout/header')
  <div class="content-wrapper">
    <div class="row">
      <h3>Admin Dashboard</h3>
    </div>
    <div class="row">
      <div class="edit-btn"><a href="{{route('admin/test-series-list')}}"><button class="btn btn-success">Test List</button></a></div>
    </div>
    <div class="row desktop p-2">
        <div class="container rounded bg-white mt-5 mb-5">
        
            <div class="row">
                <div class="col-xl-12 col-xxl-12 col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <form method="POST" action="{{route('admin/save-test-series')}}" enctype="multipart/form-data">
                                @csrf


                                <div class="row">
                                    
                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                        <div class="form-group">
                                            <label class="form-label">Language Name</label>
                                            <input type="text" class="form-control" name="language" required>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-4 col-sm-12">
                                        <div class="form-group">
                                            <label class="form-label">Series Title</label>
                                            <input type="text" class="form-control" name="series_title" required>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <label class="form-label">Question</label>
                                            <input type="text" class="form-control" name="questions[]" required>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-md-3 col-sm-12">
                                        <div class="form-group">
                                            <label class="form-label">Option-01</label>
                                            <input type="text" class="form-control" name="option_1[]" required>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-md-3 col-sm-12">
                                        <div class="form-group">
                                            <label class="form-label">Option-02</label>
                                            <input type="text" class="form-control" name="option_2[]" required>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-md-3 col-sm-12">
                                        <div class="form-group">
                                            <label class="form-label">Option-03</label>
                                            <input type="text" class="form-control" name="option_3[]" required>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-md-3 col-sm-12">
                                        <div class="form-group">
                                            <label class="form-label">Option-04</label>
                                            <input type="text" class="form-control" name="option_4[]" required>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <label class="form-label">Right Answer</label>
                                            <input type="text" class="form-control" name="right_answer[]" required>
                                        </div>
                                    </div>

                                    <div id="addmoreS">
                                        <div class="row"></div>
                                    </div> 
                                    <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="submit">Add Test Series</button></div>
                                </form>
                    <div>
                    <button style="float: right;" type="button" id="addMoreQ" class="btn btn-danger btn-sm">Add more Question</button>    
                </div>
            </div>
        </div>
    </div>
</div>
  </div>
 
<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>

<script>
    var count=0;
    var Q=1;
    $("#addMoreQ").click(function (e) {

        e.preventDefault()

        count++;
        Q++;
        // right side form

        newRowAdd="";

        newRowAdd ='<div id="addQuestionRow'+count+'" class="mb-1 row">' +

        '<div class="col-lg-12 col-md-12 col-sm-12"><div class="form-group"><label class="form-label">Question-0'+Q+'</label><input type="text" data-change_id="questions'+count+'" class="form-control" name="questions[]" required></div></div>' +

        '<i class="fa fa-trash remove_btnn text-danger" data-remove="'+count+'" style="position: relative;top: -85px;left: 110px;font-size: 14px;"></i>'+ 

        '<div class="col-lg-3 col-md-3 col-sm-12"><div class="form-group"><label class="form-label">Option-01</label><input type="text" data-change_id="option_1'+count+'" class="form-control" name="option_1[]" required></div></div>'+

        '<div class="col-lg-3 col-md-3 col-sm-12"><div class="form-group"><label class="form-label">Option-02</label><input type="text" data-change_id="option_2'+count+'" class="form-control" name="option_2[]" required></div></div>'+

        '<div class="col-lg-3 col-md-3 col-sm-12"><div class="form-group"><label class="form-label">Option-03</label><input type="text" data-change_id="option_3'+count+'" class="form-control" name="option_3[]" required></div></div>' +

        '<div class="col-lg-3 col-md-3 col-sm-12"><div class="form-group"><label class="form-label">Option-04</label><input type="text" data-change_id="option_4'+count+'" class="form-control" name="option_4[]" required></div></div>'+

        '<div class="col-lg-12 col-md-12 col-sm-12"><div class="form-group"><label class="form-label">Right Answer</label><input type="text" data-change_id="right_answer'+count+'" class="form-control" name="right_answer[]" required></div></div>'+

        '</div>';

        $('#addmoreS').append(newRowAdd);

    });

    $("body").on("click", ".remove_btnn", function () {

    var removeCount=$(this).data('remove');

    $('#addQuestionRow'+removeCount).remove();

    $(this).remove();

    });
</script>
@include('admin/layout/footer')
    
