<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Ekana Technology || Admin Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/typicons/2.1.2/typicons.min.css" integrity="sha512-/O0SXmd3R7+Q2CXC7uBau6Fucw4cTteiQZvSwg/XofEu/92w6zv5RBOdySvPOQwRsZB+SFVd/t9T5B/eg0X09g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('admin/assets/css/typicons.css');}}">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/login.css');}}">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/style.css');}}">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/vendor.bundle.base.css');}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="shortcut icon" href="images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper" style="background-color: #844fc1;">
      <div class="content-wrapper d-flex align-items-center auth px-0 page_banner">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <img src="https://ekanatechnologies.com/assets/images/logo/ekanalogo.png" alt="logo">
              </div>
              <h6 class="font-weight-light">Login for Admin</h6>
              @if(Session('username'))
              <p class="alert alert-danger">{{Session('username')}}</p>
              @endif
              <form action="{{ route('admin-login') }}" method="post" class="pt-3">@csrf
                <div class="form-group">
                  <input type="email" name="email" required class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Username">
                </div>
                <div class="form-group">
                  <input type="password" name="password" required class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="mt-3">
                  <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" style="line-height: 27px;">Login</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="{{ asset('admin/assets/js/vendor.bundle.base.js')}}"></script>
</body>

</html>
