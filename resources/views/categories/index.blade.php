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
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($categories as $category)
                          <tr>
                            <td>{{$category->id}}</td>
                            <td>{{$category->name}}</td>
                            <td>
                                <a href="{{route('categories.edit',['id'=>$category->id])}}" class="icon-option"><i class="fa fa-edit"></i></a>
                                <a href="{{route('categories.delete',['id'=>$category->id])}}" class="icon-option"><i class="fa fa-trash"></i></a>

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

<!--<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">create category</div>
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table class="table">
                        <thead>
                          <tr>
                            <th>#</th>
                            <th>Name</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach($categories as $category)
                          <tr>
                            <td>{{$category->id}}</td>
                            <td>{{$category->name}}</td>
                          </tr>
                          @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>-->
@endsection
