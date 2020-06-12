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
                    @foreach($tags as $tag)
                          <tr>
                            <td>{{$tag->id}}</td>
                            <td>{{$tag->tag}}</td>
                            <td>
                                <a href="{{route('tags.edit',['id'=>$tag->id])}}" class="icon-option"><i class="fa fa-edit"></i></a>
                                <a href="{{route('tags.delete',['id'=>$tag->id])}}" class="icon-option"><i class="fa fa-trash"></i></a>

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
