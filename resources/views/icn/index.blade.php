@extends('frontend.dashboard')
@section('main')


<div class="card">
                <div class="card-header">
                    <h4>All Appointments</h4>
                </div>
                <div class="card-body">
                    <table class="table table-borded table-striped">
                        <thead>
                            <tr>
                                  <th>Name</th>
                                  <th>Email</th>
                                  <th>PhoneNo</th>
                                  <th>Gender</th>
                                  <th>Message</th>
                                  <th>Date</th>
                                 
                              </tr>
                          </thead>
                          <tbody>
                          @foreach($appointment as $item)
                              <tr>
                                 
                                  <td>{{$item->name}}</td>
                                  <td>{{$item->email}}</td>
                                  <td>{{$item->phone}}</td>
                                  <td>{{$item->gender}}</td>
                                  <td>{!!$item->message!!}</td>
                                  <td>{{$item->created_at}}</td>
                                  <td>
                                        <form action="{{ route('appointment.destroy',$item->id) }}" method="POST">
                                            @csrf
                                            @method('PUT')
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