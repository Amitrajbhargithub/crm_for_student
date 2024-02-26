<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/typicons/2.1.2/typicons.min.css" integrity="sha512-/O0SXmd3R7+Q2CXC7uBau6Fucw4cTteiQZvSwg/XofEu/92w6zv5RBOdySvPOQwRsZB+SFVd/t9T5B/eg0X09g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('admin/assets/css/typicons.css')}}">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/vendor.bundle.base.css')}}">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/faq.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="shortcut icon" href="images/favicon.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</head>
<body>
    <div class="container-scroller">
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="navbar-brand-wrapper d-flex justify-content-center nav_bar">
            <div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100">
                <a class="navbar-brand brand-logo" href="#"><img src="https://ekanatechnologies.com/assets/images/logo/ekanalogo.png" alt="logo"/></a>
                <a class="navbar-brand brand-logo-mini" href="#"><img src="https://ekanatechnologies.com/assets/images/logo/ekanalogo.png" alt="logo"/></a>
                <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                    <span class="typcn typcn-th-menu new_menu"></span>
                </button>
            </div>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
            <ul class="navbar-nav mr-lg-2">
                <li class="nav-item nav-profile dropdown">
                    <a class="nav-link" href="#" data-toggle="dropdown" id="profileDropdown">
                        <img src="{{ asset('admin/assets/images/dummy-user.png')}}" alt="profile"/>
                        <span class="nav-profile-name">Admin Dashboard</span>
                    </a>
                </li>
                <li class="nav-item nav-user-status dropdown">
                    <p class="mb-0">Last login was 23 hours ago.</p>
                </li>
            </ul>
            <ul class="navbar-nav navbar-nav-right">
                <li class="nav-item nav-date dropdown">
                    <a class="nav-link d-flex justify-content-center align-items-center" href="javascript:;">
                    <h6 class="date mb-0">Today : {{ date("F j") }}</h6>
                    <i class="typcn typcn-calendar"></i>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link count-indicator dropdown-toggle d-flex justify-content-center align-items-center" id="messageDropdown" href="#" data-toggle="dropdown">
                    <i class="typcn typcn-cog-outline mx-0"></i>
                    <span class="count"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
                        <a href="{{ route('admin/dashboard') }}" class="dropdown-item preview-item">
                            <div class="preview-item-content flex-grow">
                            <h6 class="preview-subject ellipsis font-weight-normal">My Profile</h6>
                            </div>
                        </a>
                        <a href="#" class="dropdown-item preview-item">
                            <div class="preview-item-content flex-grow">
                            <h6 class="preview-subject ellipsis font-weight-normal">Change Password</h6>
                            </div>
                        </a>

                        <a href="{{ route('logout') }}" class="dropdown-item preview-item">
                            <div class="preview-item-content flex-grow">
                            <h6 class="preview-subject ellipsis font-weight-normal">Logout</h6>
                            </div>
                        </a>
                    </div>
                </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                <span class="typcn typcn-th-menu"></span>
            </button>
        </div>
        </nav>
        <nav class="navbar-breadcrumb col-xl-12 col-12 d-flex flex-row p-0">
        <div class="navbar-menu-wrapper d-flex align-items-center ">
            <ul class="navbar-nav mr-lg-2">
            <li class="nav-item ml-0">
                <h4 class="mb-0">Dashboard</h4>
            </li>
            <li class="nav-item">
                <div class="d-flex align-items-baseline">
                <p class="mb-0">Home</p>
                <i class="typcn typcn-chevron-right"></i>
                <p class="mb-0">Main Dahboard</p>
                </div>
            </li>
            </ul>
        </div>
        </nav>
        <div class="container-fluid page-body-wrapper">
        <div class="theme-setting-wrapper">
            <div id="settings-trigger"><i class="typcn typcn-cog-outline"></i></div>
            <div id="theme-settings" class="settings-panel">
            <i class="settings-close typcn typcn-times"></i>
            <p class="settings-heading">SIDEBAR SKINS</p>
            <div class="sidebar-bg-options selected" id="sidebar-light-theme"><div class="img-ss rounded-circle bg-light border mr-3"></div>Light</div>
            <div class="sidebar-bg-options" id="sidebar-dark-theme"><div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark</div>
            <p class="settings-heading mt-2">HEADER SKINS</p>
            <div class="color-tiles mx-0 px-4">
                <div class="tiles success"></div>
                <div class="tiles warning"></div>
                <div class="tiles danger"></div>
                <div class="tiles info"></div>
                <div class="tiles dark"></div>
                <div class="tiles default"></div>
            </div>
            </div>
        </div>
        <div id="right-sidebar" class="settings-panel">
            <i class="settings-close typcn typcn-times"></i>
            <ul class="nav nav-tabs" id="setting-panel" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="todo-tab" data-toggle="tab" href="#todo-section" role="tab" aria-controls="todo-section" aria-expanded="true">TO DO LIST</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="chats-tab" data-toggle="tab" href="#chats-section" role="tab" aria-controls="chats-section">CHATS</a>
            </li>
            </ul>
            <div class="tab-content" id="setting-content">
            <div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel" aria-labelledby="todo-section">
                <div class="add-items d-flex px-3 mb-0">
                <form class="form w-100">
                    <div class="form-group d-flex">
                    <input type="text" class="form-control todo-list-input" placeholder="Add To-do">
                    <button type="submit" class="add btn btn-primary todo-list-add-btn" id="add-task">Add</button>
                    </div>
                </form>
                </div>
                <div class="list-wrapper px-3">
                <ul class="d-flex flex-column-reverse todo-list">
                    <li>
                    <div class="form-check">
                        <label class="form-check-label">
                        <input class="checkbox" type="checkbox">
                        Team review meeting at 3.00 PM
                        </label>
                    </div>
                    <i class="remove typcn typcn-delete-outline"></i>
                    </li>
                    <li>
                    <div class="form-check">
                        <label class="form-check-label">
                        <input class="checkbox" type="checkbox">
                        Prepare for presentation
                        </label>
                    </div>
                    <i class="remove typcn typcn-delete-outline"></i>
                    </li>
                    <li>
                    <div class="form-check">
                        <label class="form-check-label">
                        <input class="checkbox" type="checkbox">
                        Resolve all the low priority tickets due today
                        </label>
                    </div>
                    <i class="remove typcn typcn-delete-outline"></i>
                    </li>
                    <li class="completed">
                    <div class="form-check">
                        <label class="form-check-label">
                        <input class="checkbox" type="checkbox" checked>
                        Schedule meeting for next week
                        </label>
                    </div>
                    <i class="remove typcn typcn-delete-outline"></i>
                    </li>
                    <li class="completed">
                    <div class="form-check">
                        <label class="form-check-label">
                        <input class="checkbox" type="checkbox" checked>
                        Project review
                        </label>
                    </div>
                    <i class="remove typcn typcn-delete-outline"></i>
                    </li>
                </ul>
                </div>
                <div class="events py-4 border-bottom px-3">
                <div class="wrapper d-flex mb-2">
                    <i class="typcn typcn-media-record-outline text-primary mr-2"></i>
                    <span>Feb 11 2018</span>
                </div>
                <p class="mb-0 font-weight-thin text-gray">Creating component page</p>
                <p class="text-gray mb-0">build a js based app</p>
                </div>
                <div class="events pt-4 px-3">
                <div class="wrapper d-flex mb-2">
                    <i class="typcn typcn-media-record-outline text-primary mr-2"></i>
                    <span>Feb 7 2018</span>
                </div>
                <p class="mb-0 font-weight-thin text-gray">Meeting with Alisa</p>
                <p class="text-gray mb-0 ">Call Sarah Graves</p>
                </div>
            </div>
            <div class="tab-pane fade" id="chats-section" role="tabpanel" aria-labelledby="chats-section">
                <div class="d-flex align-items-center justify-content-between border-bottom">
                <p class="settings-heading border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0">Friends</p>
                <small class="settings-heading border-top-0 mb-3 pt-0 border-bottom-0 pb-0 pr-3 font-weight-normal">See All</small>
                </div>
                <ul class="chat-list">
                <li class="list active">
                    <div class="profile"><img src="images/faces/face1.jpg" alt="image"><span class="online"></span></div>
                    <div class="info">
                    <p>Thomas Douglas</p>
                    <p>Available</p>
                    </div>
                    <small class="text-muted my-auto">19 min</small>
                </li>
                <li class="list">
                    <div class="profile"><img src="images/faces/face2.jpg" alt="image"><span class="offline"></span></div>
                    <div class="info">
                    <div class="wrapper d-flex">
                        <p>Catherine</p>
                    </div>
                    <p>Away</p>
                    </div>
                    <div class="badge badge-success badge-pill my-auto mx-2">4</div>
                    <small class="text-muted my-auto">23 min</small>
                </li>
                <li class="list">
                    <div class="profile"><img src="images/faces/face3.jpg" alt="image"><span class="online"></span></div>
                    <div class="info">
                    <p>Daniel Russell</p>
                    <p>Available</p>
                    </div>
                    <small class="text-muted my-auto">14 min</small>
                </li>
                <li class="list">
                    <div class="profile"><img src="images/faces/face4.jpg" alt="image"><span class="offline"></span></div>
                    <div class="info">
                    <p>James Richardson</p>
                    <p>Away</p>
                    </div>
                    <small class="text-muted my-auto">2 min</small>
                </li>
                <li class="list">
                    <div class="profile"><img src="images/faces/face5.jpg" alt="image"><span class="online"></span></div>
                    <div class="info">
                    <p>Madeline Kennedy</p>
                    <p>Available</p>
                    </div>
                    <small class="text-muted my-auto">5 min</small>
                </li>
                <li class="list">
                    <div class="profile"><img src="images/faces/face6.jpg" alt="image"><span class="online"></span></div>
                    <div class="info">
                    <p>Sarah Graves</p>
                    <p>Available</p>
                    </div>
                    <small class="text-muted my-auto">47 min</small>
                </li>
                </ul>
            </div>
            </div>
        </div>
        @include('admin/layout/sidebar')
        <div class="main-panel">
            