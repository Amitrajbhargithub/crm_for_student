
     <footer class="footer">
            <div class="card">
                <div class="card-body">
                    <div class="d-sm-flex justify-content-center justify-content-sm-between">
                        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © <?php echo date("Y"); ?> <a href="#" class="text-muted" target="_blank">Ekana Technologies</a>. All rights reserved.</span>
                    </div>
                </div>    
            </div>        
        </footer>
      </div>
    </div>
  </div>

<script src="{{ asset('admin/assets/js/vendor.bundle.base.js')}}"></script>
<script src="{{ asset('admin/assets/js/Chart.min.js')}}"></script>
<script src="{{ asset('admin/assets/js/off-canvas.js')}}"></script>
<script src="{{ asset('admin/assets/js/hoverable-collapse.js')}}"></script>
<script src="{{ asset('admin/assets/js/template.js')}}"></script>
<script src="{{ asset('admin/assets/js/settings.js')}}"></script>
<script src="{{ asset('admin/assets/js/todolist.js')}}"></script>
<script src="{{ asset('admin/assets/js/dashboard.js')}}"></script>
<script src="{{ asset('admin/assets/js/date-time.js')}}"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>
  $(document).ready(function() {
    $('.flexSwitchCheckChecked').on('click',function(){
    var id = $(this).data('id');
    $('#submit-form'+id).submit();
    });
  })
</script>

<script type="text/javascript">
  $(document).ready(function() {
    $(document).on('click', '.pagination a',function(event) {
        event.preventDefault();
        $('li').removeClass('active');
        $(this).parent('li').addClass('active');
        var myurl = $(this).attr('href');
        var page=$(this).attr('href').split('page=')[1];
        getData(page);
    });
  });

  function getData(page){
      $.ajax({
          url: '?page=' + page,
          type: "get",
          datatype: "html"
      }).done(function(data){
          $("#tag_container").empty().html(data);
          location.hash = page;
          }).fail(function(jqXHR, ajaxOptions, thrownError){
          alert('No response from server');
      });
  }
</script>
</body>
</html>