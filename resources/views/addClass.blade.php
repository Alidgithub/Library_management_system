<x-layout>
    <x-slot name="title">Assign Class</x-slot>

    <x-slot name="content">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <div class="card-title text-dark">Add Class</div>
                        <hr>
                        <form action="{{ route('addClass') }}" method="post">
                            @csrf
                            <div class="form-group row">
                                <label for="input-21" class="col-sm-2 col-form-label">Class Name</label>
                                <div class="col-sm-10">
                                    @error('name')
                                    <span class="text-red-500 text-danger">{{ $message }}</span>
                                    @enderror
                                    <input type="text" name="name" class="form-control" id="input-21"
                                        placeholder="Enter Your Name" value="{{old('name')}}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="input-21" class="col-sm-2 col-form-label">Class Number</label>
                                <div class="col-sm-10">
                                    <input type="text" name="class_no" class="form-control" id="input-21"
                                        placeholder="Enter Your Name" value="{{old('name')}}">
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                {{-- <label class="col-sm-2 col-form-label"></label> --}}
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-dark shadow-dark px-5">
                                        Add New Class</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div><!--End Row-->
        <h4>Total Class</h4>
        <div class="row">
            <div class="col-9">
                <div class="table-responsive">
                    <table class="table table-primary table-striped shadow-primary">
                        <thead>
                            <tr>
                                <th scope="col">SL No.</th>
                                <th scope="col">Name</th>
                                <th scope="col">Total Students</th>
                                <th scope="col">Update</th>
                                <th scope="col">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $value)
                            <tr>
                                <th scope="row">{{ $value['cid'] }}</th>
                                <td>{{ $value['class_name'] }}</td>
                                <td></td>
                                <td><a href="#"
                                        class="btn btn-info shadow-primary waves-effect waves-light m-1">Edit</a></td>
                                <td><a href="#"
                                        class="btn btn-danger shadow-primary waves-effect waves-light m-1">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </x-slot>

</x-layout>