<!--Start sidebar-wrapper-->
<div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
    <div class="brand-logo">
      <a href="{{Route('dashboard')}}">
        <img
          src={{ asset("assets/images/logo-icon.png") }}
          class="logo-icon"
          alt="logo icon"
        />
        <h5 class="logo-text">Library System</h5>
      </a>
    </div>
    <ul class="sidebar-menu do-nicescrol">
      <a href="{{Route('dashboard')}}" class="waves-effect">
      <li class="sidebar-header"><i style="font-size: 30px" class="zmdi zmdi-home"></i><span style="margin-left: 2px; font-size:15px"> MAIN NAVIGATION </span></li>
    </a>
      <li>
        <a href="index.html" class="waves-effect">
          <i class="zmdi zmdi-view-dashboard"></i> <span>Dashboard</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
          <li>
            <a href="index.html"
              ><i class="zmdi zmdi-star-outline"></i>Assign books Today</a
            >
          </li>
          <li>
            <a href="index2.html"
              ><i class="zmdi zmdi-star-outline"></i>Panding</a
            >
          </li>
          <li>
            <a href="index3.html"
              ><i class="zmdi zmdi-star-outline"></i>Approvals</a
            >
          </li>
          <li>
            <a href="index4.html"
              ><i class="zmdi zmdi-star-outline"></i>Total Assign books</a
            >
          </li>
        </ul>
      </li>
      <li>
        <a href="javaScript:void();" class="waves-effect">
          {{-- <i class="zmdi zmdi-format-list-bulleted"></i> --}}
          <i class="icon-people icons"></i>
          <span style="margin-left: -12px">Student Management</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
          <li>
            <a href="{{Route('registerStudent')}}"
              ><i class="zmdi zmdi-star-outline"></i>Register Student</a
            >
          </li>
          <li>
            <a href="{{Route('bookAssign')}}"
              ><i class="zmdi zmdi-star-outline"></i>Assign Books</a
            >
          </li>       
          <li>
            <a href="{{Route('studentInfo')}}"
              ><i class="zmdi zmdi-star-outline"></i>Students list</a
              >
          </li>
        </ul>
      </li>
      <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="zmdi zmdi-gamepad"></i> <span>Admin Management</span>
          <i class="fa fa-angle-left float-right"></i>
        </a>
        <ul class="sidebar-submenu">
          <li>
            <a href="{{ route('books') }}"
              ><i class="zmdi zmdi-star-outline"></i> Add Book</a
            >
          </li>
          <li>
            <a href="cards-profile-cards.html"
            ><i class="zmdi zmdi-star-outline"></i> Total Books</a
            >
          </li>
          {{-- <li>
            <a href="#"
              ><i class="zmdi zmdi-star-outline"></i> Add Category</a
            >
          </li> --}}
          {{-- <li>
            <a href="cards-social-cards.html"
              ><i class="zmdi zmdi-star-outline"></i> Total Category</a
            >
          </li> --}}
        </ul>
      </li>
      <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="zmdi zmdi-cloud-done"></i> <span>Department</span>
          <i class="fa fa-angle-left float-right"></i>
        </a>
        <ul class="sidebar-submenu">
          <li>
            <a href="{{ route('class') }}"
              ><i class="zmdi zmdi-star-outline"></i> Add Class</a
            >
          </li>
        </ul>
      </li>
      
    </ul>
  </div>
  <!--End sidebar-wrapper-->
  