@extends('layouts.menu')
@section('content')

  <section>
        <div class="container-fluid">
            <br/>
          <div class="card">
            <div class="card-header">
              <h4>trashed posts</h4>
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
                      <th>Category</th>
                      <th>option</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($posts as $post)
                          <tr>
                            <td>{{$post->id}}</td>
                            <td>{{$post->title}}</td>
                            <td> 
                             @foreach($categories as $category)
                                @if($category->id == $post->category_id)
                                      {{$category->name}}
                                 @endif
                            @endforeach   
                            </td>
                            <td>
                                <a href="{{route('posts.restore',['id'=>$post->id])}}" class="icon-option"><i class="fa fa-edit"></i></a>
                                <a href="{{route('posts.hdelete',['id'=>$post->id])}}" class="icon-option"><i class="fa fa-trash"></i></a>

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
