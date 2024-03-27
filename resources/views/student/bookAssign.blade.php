<x-layout>
	<x-slot name="title">Assign books</x-slot>

	<x-slot name="content">
		<div class="row">
			<div class="col-lg-12">
				{{-- {{$student}} --}}
				<div class="card">
					<div class="card-body">
						<div class="card-title text-dark">Assign Books to Student</div>
						<hr>
						@if(session('bookAssignToStudent'))
						<div class="alert alert-success alert-dismissible" role="alert">
							<button type="button" class="close" data-dismiss="alert">&times;</button>
							<div class="alert-icon">
								<i class="fa fa-exclamation-triangle"></i>
							</div>
							<div class="alert-message">
								<span><strong>Success!</strong> {{ session('bookAssignToStudent') }}</span>
							</div>
						</div>
						@endif
						@if(session('error'))
						<div class="alert alert-danger alert-dismissible" role="alert">
							<button type="button" class="close" data-dismiss="alert">&times;</button>
							<div class="alert-icon">
								<i class="fa fa-exclamation-triangle"></i>
							</div>
							<div class="alert-message">
								<span><strong>Sorry</strong> {{ session('error') }}</span>
							</div>
						</div>
						@endif
						<form action="{{ route('bookAssignToStudent') }}" method="post">
						<div class="form-group row">
							<label for="input-21" class="col-sm-2 col-form-label">Registration No.</label>
							<div class="col-sm-10">
								<input type="number" id="reg_no" name="reg_no" class="form-control" placeholder="Enter Ragistration No.">
							</div>
						</div>
						
							@csrf
							<div class="form-group row">
								<label for="input-22" class="col-sm-2 col-form-label">Student Name</label>
								<div class="col-sm-10">
									<input type="text" name="student_id" class="form-control" id="input-22" readonly>
								</div>
							</div>
							<div class="form-group row">
								<label for="input-22" class="col-sm-2 col-form-label">Class Name</label>
								<div class="col-sm-10">
									<input type="text" name="class_name" class="form-control" id="class_id"
										 readonly>
								</div>
							</div>
							<div class="form-group row">
								<label for="input-22" class="col-sm-2 col-form-label">Books List</label>
								<div class="col-sm-10">
									<select name="book_id" class="custom-select" id="inputGroupSelect01">
										<option selected>Choose...</option>
										
									</select>
								</div>
							</div>
							<div class="col-sm-10">
								<input type="hidden" value="1" name="qty" class="form-control" id="input-22"
									placeholder="Enter Your Address">
							</div>

							<div class="form-group row">
								<label for="input-23" class="col-sm-2 col-form-label">Submit Date</label>
								<div class="col-sm-10">
									<input type="text" name="submit_date" id="autoclose-datepicker" class="form-control" placeholder="Choose an Date" autocomplete="off">
								</div>
							</div>
							<div class="form-group row">
								{{-- <label class="col-sm-2 col-form-label"></label> --}}
								<div class="col-sm-10">
									<button type="submit" class="btn btn-dark shadow-dark px-5">Assign Books</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div><!--End Row-->
		<x-slot name="javascript">
			<script>
				$(document).ready(function(){
					$("#reg_no").on('keypress', (e) => {
						if(e.keyCode == 13){
							e.preventDefault();
							$.ajaxSetup({
								headers: {
									'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
								}
							});
							$.ajax({
								url: "student/getinfo",
								method:"post",
								data: {
									reg_no: $("#reg_no").val()
								},
								success: function( data ) {
									// console.log(data);
									$('#input-22').val(data.name);
									$('#class_id').val(data.class.class_name);
									let bookList = '<option selected>Choose...</option>';
									data.class.books.forEach((row, index) => {
										bookList += `<option value="${row.id}">${row.name}</option>`;
										$("#inputGroupSelect01").html(bookList);
									})
								}
							});
						}
					})
						
					
				});
			</script>
		</x-slot>

	</x-slot>

</x-layout>