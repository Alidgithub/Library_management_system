<x-layout>
    <x-slot name="title">Student information</x-slot>
    <x-slot name="content">
      <h4>Student information</h4>

      @if (session('success'))
      <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <div class="alert-icon">
         <i class="fa fa-check"></i>
        </div>
        <div class="alert-message">
          <span><strong>Success!</strong> {{ session('success'); }}</span>
        </div>
        </div>
      @endif

      @if (session('delete'))
      <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <div class="alert-icon">
         <i class="fa fa-check"></i>
        </div>
        <div class="alert-message">
          <span><strong>Success!</strong> {{ session('delete'); }}</span>
        </div>
        </div>
      @endif

      <div class="table-responsive">
        <table class="table table-primary table-striped shadow-primary">
          <thead>
            <tr>
              <th scope="col">SL No.</th>
              <th scope="col">Photo</th>
              <th scope="col">Name</th>
              <th scope="col">Email</th>
              <th scope="col">Phone no.</th>
              <th scope="col">Class</th>
              <th scope="col">Delete</th>
              <th scope="col">View</th>
            </tr>
          </thead>

          @foreach ($students as $student)
          <tbody>
            <tr>
              <th scope="row">{{ $student->id; }}</th>
              <td><span class="user-profile"><img src="{{ asset('uploads/' . $student->profile_pic) }}" class="img-circle" alt="user avatar"></span></td>
              <td>{{ $student->name; }}</td>
              <td>{{ $student->email; }}</td>
              <td>{{ $student->phone; }}</td>
              <td>{{ $student->class_name; }}</td>

              <td><a  href="#" student_id="{{ $student->id }}" class="btn btn-danger shadow-primary waves-effect waves-light m-1 delete_student">Delete</a></td>

              <td><a href="{{ route('editStudentProfile', ['id' => $student->id]) }}" class="btn btn-success shadow-primary waves-effect waves-light m-1">Profile</a>
              </td>
            </tr>
          </tbody>
          @endforeach  

        </table>
      </div>

      <x-slot name="javascript">
        <script>
          $.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
        });
          $(".delete_student").click(function(){
          let student_id = $(this).attr('student_id')
          swal({
            title: "Are you sure?",
            text: "Once deleted, you will not be able to recover this imaginary file!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
          })
          .then((willDelete) => {
          $.ajax({
          url: "/deleteStudent",
          method: "post",
          data: {
            student_id: student_id
          },
          success: function(data) {
              swal(data.massage, {
                icon: "success",
              });
          }
        });
            // if (willDelete) {
            //   swal("Poof! Your imaginary file has been deleted!", {
            //     icon: "success",
            //   });
            // } else {
            //   swal("Your imaginary file is safe!");
            // }
          });

          });
        </script>


      </x-slot>


    </x-slot>
  
  
  </x-layout>