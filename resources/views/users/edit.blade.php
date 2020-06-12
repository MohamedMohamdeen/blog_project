@extends('layouts.menu')

@section('content')

  <!-- Breadcrumb-->
      <div class="breadcrumb-holder">
        <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">Forms       </li>
          </ul>
        </div>
      </div>
      <section class="forms">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-header d-flex align-items-center">
                  <h4>Add Post</h4>
                </div>
                <div class="card-body">
                @if ($errors->any())
                      <div class="alert alert-danger">
                          <ul>
                              @foreach ($errors->all() as $error)

                                  <li>{{ $error }}</li>
                              @endforeach
                          </ul>
                      </div>
                  @endif
                  <form class="form-horizontal" action="{{route('posts.update',['id'=>$Post->id])}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="form-group row">
                      <label class="col-sm-2 form-control-label">Name</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="title" value="{{$Post->title}}" >
                         @if ($errors->has('title'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('title') }}</strong>
                              </span>
                          @endif
                      </div>
                    </div>
                    <div class="line"></div>
                    <div class="form-group row">
                      <label class="col-sm-2 form-control-label">categories</label>
                      <div class="col-sm-10">
                       <select class="form-control" name="category_id">
                          @foreach($categories as $Caregory)
                              @if($Post->category_id  == $Caregory->id)
                                  <option value="{{$Caregory->id}}" selected >{{$Caregory->name}}</option>
                              @else
                                  <option value="{{$Caregory->id}}">{{$Caregory->name}}</option>
                              @endif
                          @endforeach
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                       <label class="col-sm-2 form-control-label">tags</label>
                      <div class="col-sm-10">
                      <div id="check-box" >
                         @foreach($tags as $Tag)
                         <input type="checkbox" id="option" name="tag[]" 
                         @foreach($Post->tags as $Ta)
                         @if($Tag->id == $Ta->id)
                         checked
                         @endif
                         @endforeach
                         value="{{$Tag->id}}" >
                          <label for="option" >{{$Tag->tag}}</label><br/>
                          @endforeach
                      </div>
                     </div>
                    </div>
                     <div class="line"></div>
                    <div class="form-group row">
                      <label class="col-sm-2 form-control-label">content</label>
                      <div class="col-sm-10">
                        <textarea class="form-control" rows="8" cols="8" name="content" >
                          {{$Post->content}}
                        </textarea>
                      </div>
                    </div>
                    <div class="line"></div>
                    <div class="form-group row">
                      <label class="col-sm-2 form-control-label">post image</label>
                      <div class="col-sm-10">
                       <input type="file" class="form-control" name="featured" >
                      </div>
                    </div>
                     <div class="line"></div>
                  <div class="form-group row">
                    <button type="submit" class="btn btn-info save-post">save</button>
                  </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <footer class="main-footer">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-6">
              <p>Your company &copy; 2017-2020</p>
            </div>
            <div class="col-sm-6 text-right">
              <p>Version 1.4.7</p>
            </div>
          </div>
        </div>
      </footer>        
@endsection
