@extends('layouts.master')
@section('main')



@if(session('status'))

<div class="alert alert-success">{{session('status')}}</div>

@endif
<div class="card">
    <div class="col-lg-12">
        <div class="card-body">
                <h4>ADD NEW DOCTOR</h4>
            <form action="{{route('doctors.store')}}" method="POST"  >
                    @csrf
                    <div class="row">
                        <div class="col-md-6 form-group">
                        <label for="">First Name</label>
                        <input type="text" name="first_name" class="form-control" id="name" placeholder="FirstT Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                        <div class="validate"></div>
                        </div>
                        <div class="col-md-6 form-group">
                        <label for="">Last Name</label>
                        <input type="text" name="last_name" class="form-control" id="name" placeholder="Last Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                        <div class="validate"></div>
                        </div>
                        <div class="col-md-6 form-group mt-3 mt-md-0">
                        <label for="">Email</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Email" data-rule="email" data-msg="Please enter a valid email">
                        <div class="validate"></div>
                        </div>
                        
                        <div class="col-md-6 form-group mt-3 mt-md-0">
                        <label for="">PhoneNo</label>
                        <input type="tel" class="form-control" name="phone" id="phone" placeholder="PhoneNo" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                        <div class="validate"></div>
                        </div>
                        <div class="col-md-6 form-group">
                        <label for="">Gender</label>
                        <input type="text" name="gender" class="form-control" id="name" placeholder="Gender" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                        <div class="validate"></div>
                        </div>
                        <div class="col-md-6 form-group">
                        <label for="">Starting Date</label>
                        <input type="date" name="starting_date" class="form-control" id="name" placeholder="Starting Date" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                        <div class="validate"></div>
                        </div>
                        <div class="col-md-6 form-group">
                        <label for="">Departement</label>
                        <input type="text" name="departement" class="form-control" id="name" placeholder="Departement" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                        <div class="validate"></div>
                        </div>
                        <div class="col-md-6 form-group mt-3 mt-md-0">
                        <label for="">Years Of Experience</label>
                        <input type="tel" class="form-control" name="experience" id="phone" placeholder="Experience" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                        <div class="validate"></div>
                        </div>
                        <div class="col-md-6 form-group mt-3 mt-md-0">
                        <label for="">Salary</label>
                        <input type="tel" class="form-control" name="salary" id="phone" placeholder="Salary" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                        <div class="validate"></div>
                        </div>
                        <div class="col-md-6 form-group mt-3 mt-md-0">
                        <label for="">Profile_Image</label>
                        <input type="file" class="form-control" name="profile_image" id="phone" placeholder="image" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                        <div class="validate"></div>
                        </div>
                    </div>
           
                <div class="form-group mb-1">
                    <button type="submit" class="btn btn-primary">Save Doctor</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="card">
                <div class="card-header">
                    <h4>All Doctors</h4>
                </div>
                <div class="card-body">
                    <table class="table table-borded table-striped">
                        <thead>
                            <tr>
                                  <th>ID</th> 
                                  <th>FirstT Name</th>
                                  <th>Last Name</th>
                                  <th>Email</th>
                                  <th>PhoneNo</th>
                                  <th>Gender</th>
                                  <th>Starting Date</th>
                                  <th>Departement</th>
                                  <th>Experience</th>
                                  <th>Salary</th>
                                  <th>Image</th>
                                  <th>Edit/Delete</th>
                              </tr>
                          </thead>
                          <tbody>
                          @foreach($doctors as $item)
                              <tr>
                                  <td>{{$item->id}}</td>
                                  <td>{{$item->first_Name}}</td>
                                  <td>{{$item->last_Name}}</td>
                                  <td>{{$item->email}}</td>
                                  <td>{{$item->phone}}</td>
                                  <td>{{$item->gender}}</td>
                                  <td>{{$item->starting_date}}</td>
                                  <td>{{$item->departement}}</td>
                                  <td>{{$item->years_of_experience}}</td>
                                  <td>{{$item->salary}}</td>
                                  <td>
                                      <img src="{{asset('upload/doctors/'.$item->profile_image)}}" width="50px" height="50px" alt="">
                                  </td>
                                  <td>
                                      <a href="" class="btn btn-primary btn-sm">Edit</a>
                                      <form action="" method="POST">
                                        @csrf
                                        @method('Delete')
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                  </td>
                                  
                              </tr>
                        <tbody>
                        @endforeach
                    </body>
            </table>
        </div>
    </div>
</div>


@endsection