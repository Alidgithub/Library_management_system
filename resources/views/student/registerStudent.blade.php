<x-layout>
	<x-slot name="title">Student Registration</x-slot>

	<x-slot name="content">
		<div class="row">
			<div class="col-lg-12">

				<div class="card">
					<div class="card-body">
						<div class="card-title text-dark">Student Registration</div>
						<hr>
						@if($errors->any())
							@foreach($errors->all() as $error)
								<div class="alert alert-warning alert-dismissible" role="alert">
									<button type="button" class="close" data-dismiss="alert">&times;</button>
									<div class="alert-icon">
										<i class="fa fa-exclamation-triangle"></i>
									</div>
									<div class="alert-message">
										<span><strong>Warning!</strong> {{ $error }}</span>
									</div>
								</div>
							@endforeach
						@endif

						<form action="{{ route('addStudent') }}" method="post" enctype="multipart/form-data">
							@csrf
							<div class="form-group row">
								<label for="input-21" class="col-sm-2 col-form-label">Name</label>
								<div class="col-sm-10">
									<input type="text" value="{{ old('name') }}" name="name" class="form-control" id="input-21"
										placeholder="Enter Your Name">
								</div>
							</div>
							<div class="form-group row">
								<label for="input-22" class="col-sm-2 col-form-label">Email</label>
								<div class="col-sm-10">
									<input type="email" value="{{ old('email'); }}" name="email" class="form-control" id="input-22"
										placeholder="Enter Your Email Address">
								</div>
							</div>
							<div class="form-group row">
								<label for="input-22" class="col-sm-2 col-form-label">Phone</label>
								<div class="col-sm-10">
									<input type="number" value="{{ old('phone'); }}" name="phone" class="form-control" id="input-22"
										placeholder="Enter Your Mobile Number">
								</div>
							</div>

							<div class="form-group row">
								<label for="input-22" class="col-sm-2 col-form-label">Registration No.</label>
								<div class="col-sm-10">
									<input type="number" value="{{ old('reg_no'); }}" name="reg_no" class="form-control" id="input-22"
										placeholder="Enter Your Mobile Number">
								</div>
							</div>
							<div class="form-group row">
								<label for="input-22" class="col-sm-2 col-form-label">Class</label>
								<div class="col-sm-10">
									<select name="class_id" class="custom-select" id="inputGroupSelect01">
										@foreach ($clases as $class)
										<option @selected(old('class_id') == $class->cid) value="{{ $class->cid }}">{{ $class->class_name }}</option>
										@endforeach
									</select>
								</div>
							</div>
							<div class="form-group row">
								<label for="input-22" class="col-sm-2 col-form-label">Address</label>
								<div class="col-sm-10">
									<input type="text" value="{{ old('address'); }}" name="address" class="form-control" id="input-22"
										placeholder="Enter Your Address">
								</div>
							</div>
							<div class="form-group row">
								<label for="input-22" class="col-sm-2 col-form-label">Aadhaar</label>
								<div class="col-sm-10">
									<input type="number" value="{{ old('aadhaar'); }}" name="aadhaar" class="form-control" id="input-22"
										placeholder="Enter Your Aadhaar Number">
								</div>
							</div>
							<div class="form-group row">
								<label for="input-23" class="col-sm-2 col-form-label">Profile Pic</label>
								<div class="col-sm-10">
									<div class="custom-file">
										<input type="file" name="pic" class="custom-file-input" id="inputGroupFile01">
										<label class="custom-file-label" for="inputGroupFile01">Choose file</label>
									</div>
								</div>
							</div>
							{{-- <div class="form-group row"> --}}
								{{-- <label class="col-sm-2 col-form-label"></label> --}}
								{{-- <div class="col-sm-10">
									<div class="icheck-material-dark">
										<input type="checkbox" id="user-checkbox5" checked />
										<label for="user-checkbox5">Remember me</label>
									</div>
								</div>
							</div> --}}
							<div class="form-group row">
								{{-- <label class="col-sm-2 col-form-label"></label> --}}
								<div class="col-sm-10">
									<button type="submit" class="btn btn-dark shadow-dark px-5">Register</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div><!--End Row-->
	</x-slot>

</x-layout>