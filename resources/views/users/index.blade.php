@extends('layouts.menu')
@section('content')

  <section>
        <div class="container-fluid">
            <br/>
          <div class="card">
            <div class="card-header">
              <h4>All Categories</h4>
            </div>
            <div class="card-body">
              <div class="row">
              </div>

              <div class="table-responsive">
                <table id="datatable1" style="width: 100%;" class="table">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Name</th>
                      <th>option</th>
                      <th>permission</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($users as $user)
                          <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->name}}</td>
                            <td>
                                <a href="{{route('users.edit',['id'=>$user->id])}}" class="icon-option"><i class="fa fa-edit"></i></a>
                                <a href="{{route('users.delete',['id'=>$user->id])}}" class="icon-option"><i class="fa fa-trash"></i></a>

                            </td>
                            <td>
                              @if($user->admin)
                              <a href="{{route('users.admin',['id'=>$user->id])}}" class="icon-option">
                                admin
                              </a>
                              @else
                               <a href="{{route('users.admin',['id'=>$user->id])}}" class="icon-option">
                                user
                              </a>
                              @endif
                            </td>
                          </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </section>
@endsection
