<!--Start topbar header-->
<header class="topbar-nav">
  <nav class="navbar navbar-expand fixed-top bg-white">
   <ul class="navbar-nav mr-auto align-items-center">
     <li class="nav-item">
       <a class="nav-link toggle-menu" href="javascript:void();">
        <i class="icon-menu menu-icon"></i>
      </a>
     </li>
     <li class="nav-item">
       <form class="search-bar" >
         <input type="text" name="search" class="form-control" id="searchInput" placeholder="Enter keywords">
          <a type="submit" id="searchButton" href="javascript:void();"><i class="icon-magnifier"></i></a>
       </form>
     </li>
   </ul>
      
   <ul class="navbar-nav align-items-center right-nav-link">
     <li class="nav-item dropdown-lg">
       <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="javascript:void();">
       <i class="fa fa-envelope-open-o"></i><span class="badge badge-secondary badge-up">12</span></a>
       <div class="dropdown-menu dropdown-menu-right">
         <ul class="list-group list-group-flush">
          <li class="list-group-item d-flex justify-content-between align-items-center">
           You have 12 new messages
           <span class="badge badge-secondary">12</span>
           </li>
           <li class="list-group-item">
           <a href="javaScript:void();">
            <div class="media">
              <div class="avatar"><img class="align-self-start mr-3" src={{ asset("assets/images/avatars/avatar-5.png") }} alt="user avatar"></div>
             <div class="media-body">
             <h6 class="mt-0 msg-title">Jhon Deo</h6>
             <p class="msg-info">Lorem ipsum dolor sit amet...</p>
             <small>Today, 4:10 PM</small>
             </div>
           </div>
           </a>
           </li>
           <li class="list-group-item">
           <a href="javaScript:void();">
            <div class="media">
              <div class="avatar"><img class="align-self-start mr-3" src={{ asset("assets/images/avatars/avatar-6.png") }} alt="user avatar"></div>
             <div class="media-body">
             <h6 class="mt-0 msg-title">Sara Jen</h6>
             <p class="msg-info">Lorem ipsum dolor sit amet...</p>
             <small>Yesterday, 8:30 AM</small>
             </div>
           </div>
           </a>
           </li>
           <li class="list-group-item">
           <a href="javaScript:void();">
            <div class="media">
              <div class="avatar"><img class="align-self-start mr-3" src={{ asset("assets/images/avatars/avatar-7.png") }} alt="user avatar"></div>
             <div class="media-body">
             <h6 class="mt-0 msg-title">Dannish Josh</h6>
             <p class="msg-info">Lorem ipsum dolor sit amet...</p>
              <small>5/11/2018, 2:50 PM</small>
             </div>
           </div>
           </a>
           </li>
           <li class="list-group-item">
           <a href="javaScript:void();">
            <div class="media">
              <div class="avatar"><img class="align-self-start mr-3" src={{ asset("assets/images/avatars/avatar-8.png") }} alt="user avatar"></div>
             <div class="media-body">
             <h6 class="mt-0 msg-title">Katrina Mccoy</h6>
             <p class="msg-info">Lorem ipsum dolor sit amet.</p>
             <small>1/11/2018, 2:50 PM</small>
             </div>
           </div>
           </a>
           </li>
           <li class="list-group-item"><a href="javaScript:void();">See All Messages</a></li>
         </ul>
         </div>
     </li>
     <li class="nav-item dropdown-lg">
       <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="javascript:void();">
     <i class="fa fa-bell-o"></i><span class="badge badge-info badge-up">14</span></a>
       <div class="dropdown-menu dropdown-menu-right">
         <ul class="list-group list-group-flush">
           <li class="list-group-item d-flex justify-content-between align-items-center">
           You have 14 Notifications
           <span class="badge badge-info">14</span>
           </li>
           <li class="list-group-item">
           <a href="javaScript:void();">
            <div class="media">
              <i class="zmdi zmdi-accounts fa-2x mr-3 text-primary"></i>
             <div class="media-body">
             <h6 class="mt-0 msg-title">New Registered Users</h6>
             <p class="msg-info">Lorem ipsum dolor sit amet...</p>
             </div>
           </div>
           </a>
           </li>
           <li class="list-group-item">
           <a href="javaScript:void();">
            <div class="media">
              <i class="zmdi zmdi-coffee fa-2x mr-3 text-success"></i>
             <div class="media-body">
             <h6 class="mt-0 msg-title">New Received Orders</h6>
             <p class="msg-info">Lorem ipsum dolor sit amet...</p>
             </div>
           </div>
           </a>
           </li>
           <li class="list-group-item">
           <a href="javaScript:void();">
            <div class="media">
              <i class="zmdi zmdi-notifications-active fa-2x mr-3 text-secondary"></i>
             <div class="media-body">
             <h6 class="mt-0 msg-title">New Updates</h6>
             <p class="msg-info">Lorem ipsum dolor sit amet...</p>
             </div>
           </div>
           </a>
           </li>
           <li class="list-group-item"><a href="javaScript:void();">See All Notifications</a></li>
         </ul>
       </div>
     </li>
     <li class="nav-item language">
       <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="#"><i class="flag-icon flag-icon-gb"></i></a>
       <ul class="dropdown-menu dropdown-menu-right">
           <li class="dropdown-item"> <i class="flag-icon flag-icon-gb mr-2"></i> English</li>
           <li class="dropdown-item"> <i class="flag-icon flag-icon-fr mr-2"></i> French</li>
           <li class="dropdown-item"> <i class="flag-icon flag-icon-cn mr-2"></i> Chinese</li>
           <li class="dropdown-item"> <i class="flag-icon flag-icon-de mr-2"></i> German</li>
         </ul>
     </li>
     <li class="nav-item">
       <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown" href="#">
         <span class="user-profile"><img src={{ asset("assets/images/avatars/avatar-13.png") }} class="img-circle" alt="user avatar"></span>
       </a>
       <ul class="dropdown-menu dropdown-menu-right">
        <li class="dropdown-item user-details">
         <a href="javaScript:void();">
            <div class="media">
              <div class="avatar"><img class="align-self-start mr-3" src={{ asset("assets/images/avatars/avatar-13.png") }} alt="user avatar"></div>
             <div class="media-body">
             <h6 class="mt-2 user-title">Katrina Mccoy</h6>
             <p class="user-subtitle">mccoy@example.com</p>
             </div>
            </div>
           </a>
         </li>
         <li class="dropdown-divider"></li>
         <li class="dropdown-item"><i class="icon-envelope mr-2"></i> Inbox</li>
         <li class="dropdown-divider"></li>
         <li class="dropdown-item"><i class="icon-wallet mr-2"></i> Account</li>
         <li class="dropdown-divider"></li>
         <li class="dropdown-item"><i class="icon-settings mr-2"></i> Setting</li>
         <li class="dropdown-divider"></li>
         <a href="{{ route('logout') }}"><li class="dropdown-item"><i class="icon-power mr-2"></i> Logout</li></a>
       </ul>
     </li>
   </ul>


   <!-- Add this to your HTML file -->
<table id="searchResultsTable" class="table">
  <thead>
      <tr>
          <th>Name</th>
          <th>Email</th>
          <!-- Add more columns based on your data structure -->
      </tr>
  </thead>
  <tbody>
      <!-- Results will be dynamically inserted here -->
  </tbody>
</table>

 </nav>
 </header>
 
 <!--End topbar header-->
 
 



<script>
  $(document).ready(function(){
    $("#searchInput").on('keypress', function(e) {
      if(e.keyCode == 13){
        e.preventDefault();
        $.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
        });
        $.ajax({
          url: "/search",
          method: "get",
          data: {
            search: $("#searchInput").val()
          },
          success: function(data) {
            // Clear existing rows
            $("#searchResultsTable tbody").empty();

            // Loop through the data and append rows to the table
            $.each(data, function(index, result) {
              var newRow = $("<tr>");
              newRow.append($("<td>").text(result.name));
              newRow.append($("<td>").text(result.email));
              // Add more columns based on your data structure

              // Append the new row to the table body
              $("#searchResultsTable tbody").append(newRow);
            });
          }
        });
      }
    });
  });
</script>
