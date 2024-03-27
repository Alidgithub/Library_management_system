<x-layout>
	<x-slot name="title">Add Books</x-slot>

	<x-slot name="content">
		<div class="row">
			<div class="col-lg-12">

				<div class="card">
					<div class="card-body">
						<div class="card-title text-dark">Add Books</div>
						<hr>
                        @if ($errors->any())
                            @foreach ($errors->all() as $error)
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
						@if (session('addBook'))
						<div class="alert alert-success alert-dismissible" role="alert">
							<button type="button" class="close" data-dismiss="alert">&times;</button>
							<div class="alert-icon">
								<i class="fa fa-check"></i>
							</div>
							<div class="alert-message">
								<span><strong>Success</strong> {{ session('addBook') }}</span>
							</div>
						</div>
						@endif
						<form action="{{ route('storBooks') }}" method="post">
                            @csrf
							<div class="form-group row">
								<label for="input-21" class="col-sm-2 col-form-label">Book Name</label>
								<div class="col-sm-10">
									<input type="text" value="{{ old('book_name'); }}" name="book_name" class="form-control" id="input-21"
										placeholder="Enter Your Name">
								</div>
							</div>
							<div class="form-group row">
								<label for="input-22" class="col-sm-2 col-form-label">Author Name</label>
								<div class="col-sm-10">
									<input type="text" value="{{ old('author_name'); }}" name="author_name" class="form-control" id="input-22"
										placeholder="Enter Your Email Address">
								</div>
							</div>
							<div class="form-group row">
								<label for="input-22" class="col-sm-2 col-form-label">Quantity</label>
								<div class="col-sm-10">
									<input type="number" value="{{ old('qty'); }}" name="qty" class="form-control" id="input-22"
										placeholder="Enter Your Email Address">
								</div>
							</div>
							<div class="form-group row">
								<label for="input-22" class="col-sm-2 col-form-label">Class</label>
								<div class="col-sm-10">
									<select name="class" class="custom-select" id="inputGroupSelect01">
                                        @foreach ( $clases as $class)
										<option @if(old('class') == $class->cid) selected @endif value="{{ $class->cid }}">{{ $class->class_name }}</option>
                                        @endforeach
									</select>
								</div>
							</div>
							<div class="form-group row">
								{{-- <label class="col-sm-2 col-form-label"></label> --}}
								<div class="col-sm-10">
									<button type="submit" class="btn btn-dark shadow-dark px-5">Add book</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div><!--End Row-->
	</x-slot>

</x-layout>