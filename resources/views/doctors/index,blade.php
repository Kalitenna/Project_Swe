@extends('doctors.create')
@section('index')


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
                                  <th>Experiencet</th>
                                  <th>Salary</th>
                                  <th>Image</th>
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
                                  <td>{{$item->profile_image}}</td>
                              </tr>
                        <tbody>
                        @endforeach
                    </body>
            </table>
        </div>
    </div>
</div>


@endsection