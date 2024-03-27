<x-layout>
    <x-slot name="title">Student information</x-slot>
    <x-slot name="content">
        @if (session('update_success'))
                <div class="alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <div class="alert-icon">
                        <i class="fa fa-exclamation-triangle"></i>
                    </div>
                    <div class="alert-message">
                        <span><strong>Success!</strong> {{ session('update_success') }}</span>
                    </div>
                </div>
                @endif
        <div class="row">
            <div class="col-lg-4">
                <div class="card profile-card-2">
                    <div class="card-img-block">
                        <img class="img-fluid" src={{ asset('assets/images/gallery/31.jpg') }} alt="Card image cap">
                    </div>
                    <div class="card-body pt-5">
                        <img src="{{ asset('uploads/' . $students->profile_pic) }}" alt="profile-image" class="profile" style="border-radius: 15px; width:60px">
                        <h5 class="card-title"> {{$students->name}}</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                    </div>

                    <div class="col-md-12">
                        <h6>About</h6>
                        <p>
                            Web Designer, UI/UX Engineer
                        </p>
                        <h6>Hobbies</h6>
                        <p>
                            Indie music, skiing and hiking. I love the great outdoors.
                        </p>
                    </div>
                </div>

            </div>

            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <ul class="nav nav-tabs nav-tabs-primary top-icon nav-justified">
                            <li class="nav-item">
                                <a href="javascript:void();" data-target="#profile" data-toggle="pill"
                                    class="nav-link active"><i class="icon-user"></i> <span
                                        class="hidden-xs">Profile</span></a>
                            </li>
                            <li class="nav-item">
                                <a href="javascript:void();" data-target="#edit" data-toggle="pill" class="nav-link"><i
                                        class="icon-note"></i> <span class="hidden-xs">Edit</span></a>
                            </li>
                        </ul>
                        <div class="tab-content p-3">
                            <div class="tab-pane active" id="profile">
                                <h5 class="mb-3">User Profile</h5>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card-body border-top">
                                            <div class="media align-items-center">
                                                <div>
                                                    <img src={{ asset("assets/images/timeline/html5.svg") }} class="skill-img"
                                                        alt="skill img">
                                                </div>
                                                <div class="media-body text-left ml-3">
                                                    <div class="progress-wrapper">
                                                        <h6>Assign Books <span class="float-right">Total books - 5</span></h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <ul>
                                            <li>ggggggggggg <span style="float: right;">Submit Date - 20/02/2024</span>
                                            </li>
                                            <li>kh kjhdfs jbdvsj jbkjb <span style="float: right;">Submit Date -
                                                    20/02/2024</span></li>
                                            <li>ggggggggggg <span style="float: right;">Submit Date - 20/02/2024</span>
                                            </li>
                                            <li>jhdvkjfdb kjbxvfvl <span style="float: right;">Submit Date -
                                                    20/02/2024</span></li>
                                            <li>ggggggggggg <span style="float: right;">Submit Date - 20/02/2024</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-12">
                                        <h6 class="mt-2 mb-3"><span
                                                class="fa fa-clock-o ion-clock float-right"></span>Student Details</h6>
                                        <div class="table-responsive">
                                            <table class="table table-hover table-striped">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <strong>Name:</strong> {{$students->name}}
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <strong>Email:</strong> {{$students->email}}
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <strong>Phone:</strong>  {{$students->phone}}
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <strong>Aadhaar:</strong>  {{$students->aadhaar}}
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <strong>Address:</strong>  {{$students->address}}
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!--/row-->
                            </div>
                            <div class="tab-pane" id="edit">
                                <form action="" method="post">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label">Student Nmae</label>
                                        <div class="col-lg-9">
                                            <input class="form-control" type="text" name="name" value="{{$students->name}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label">Email</label>
                                        <div class="col-lg-9">
                                            <input class="form-control" type="email" name="email" value="{{$students->email}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label">Phone</label>
                                        <div class="col-lg-9">
                                            <input class="form-control" type="number" name="phone" value="{{$students->phone}}" placeholder="Phone">
                                        </div>
                                    </div>
                                    {{-- <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label">Change profile</label>
                                        <div class="col-lg-9">
                                            <input class="form-control" type="file">
                                        </div>
                                    </div> --}}
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label">Aadhaar</label>
                                        <div class="col-lg-9">
                                            <input class="form-control" type="number" name="aadhaar" value="{{$students->aadhaar}}" placeholder="Aadhaar Number">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label">Address</label>
                                        <div class="col-lg-9">
                                            <input class="form-control" type="text" name="address" value="{{$students->address}}" placeholder="Address" placeholder="Address">
                                        </div>
                                    </div>
                                    {{-- <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label"></label>
                                        <div class="col-lg-6">
                                            <input class="form-control" type="text" value="" placeholder="City">
                                        </div>
                                        <div class="col-lg-3">
                                            <input class="form-control" type="text" value="" placeholder="State">
                                        </div>
                                    </div> --}}

                                    {{-- <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label">Username</label>
                                        <div class="col-lg-9">
                                            <input class="form-control" type="text" value="jhonsanmark">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label">Password</label>
                                        <div class="col-lg-9">
                                            <input class="form-control" type="password" value="11111122333">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label">Confirm
                                            password</label>
                                        <div class="col-lg-9">
                                            <input class="form-control" type="password" value="11111122333">
                                        </div>
                                    </div> --}}
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label"></label>
                                        <div class="col-lg-9">
                                            <input type="reset" class="btn btn-secondary" value="Cancel">
                                            <input type="submit" class="btn btn-primary" value="Save Changes">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </x-slot>
</x-layout>