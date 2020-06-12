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
                  <h4>edit Category</h4>
                </div>
                <div class="card-body">
                  <form class="form-horizontal"  action="{{route('tags.update',['id'=>$tag->id])}}" method="post">
                    {{csrf_field()}}
                    <div class="form-group row">
                      <label class="col-sm-2 form-control-label">Name</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="tag" value="{{$tag->tag}}" >
                         @if ($errors->has('name'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('name') }}</strong>
                              </span>
                          @endif
                      </div>
                    </div>
                    <div class="line"></div>
                  <div class="form-group row">
                    <button type="submit" class="btn btn-info save-post">update</button>
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
                     @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)

                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{route('categories.store')}}" method="post">
                      {{csrf_field()}}
                      <div class="form-group">
                        <label for="name">name:</label>
                        <input type="text" class="form-control" name="name">
                      </div>
                      <button type="submit" class="btn btn-default">save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>-->
@endsection
