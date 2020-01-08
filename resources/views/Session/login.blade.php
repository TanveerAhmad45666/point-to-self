 @extends('../Ltelayouts/layout')

@section("nav-sidebar")
@endsection

@section("footer-section")
@endsection

@section('body-content')



<div  class="col-md-6">
 <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Horizontal Form</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
          <form enctype="multipart/form-data" class="form-horizontal" method="POST" action="{{ url('do_login') }}" role="form"> 
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Email</label>

                  <div class="col-sm-10">
                      <input name="name" value="{{ old('username') }}" type="text" id="name" placeholder="name" class="form-control" autofocus>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Password</label>

                  <div class="col-sm-10">
                     <input type="password" name="password"  id="password" class="form-control"/>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox"> Remember me
                      </label>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <a  href="{{url('/')}}" class="btn btn-default">Cancel</a>
               
                <button type="submit" class="btn btn-info pull-right">Sign in</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
           </div>
                    
          <!-- /.box -->
 @endsection