@include('admin.partials.header')
<div class="container-fluid top-10 back-with full-height-content">
    <div class="row">
        <div class="col-md-12 margin-top-20">

            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>{{ trans('quickadmin::auth.whoops') }}</strong> {{ trans('quickadmin::auth.some_problems_with_input') }}
                    <br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form class="form-horizontal"
                  role="form"
                  method="POST"
                  action="{{ url('login') }}">

                <div class="row">

                    <div class="col-md-4 col-lg-4 login-form">

                        <h1>
                            <b>
                                Sign-in to eDializ
                            </b>

                        </h1>

                        <br/>

                        <div class="form-group">
                            <label class="col-md-4 control-label">{{ trans('quickadmin::auth.login-email') }}</label>

                            <div class="col-md-6">
                                <input type="email"
                                       class="form-control"
                                       name="email"
                                       value="{{ old('email') }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">{{ trans('quickadmin::auth.login-password') }}</label>

                            <div class="col-md-6">
                                <input type="password"
                                       class="form-control"
                                       name="password">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <label>
                                    <input type="checkbox"
                                           name="remember">{{ trans('quickadmin::auth.login-remember_me') }}
                                </label>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit"
                                        class="btn btn-primary"
                                        style="margin-right: 15px;">
                                    {{ trans('quickadmin::auth.login-btnlogin') }}
                                </button>
                            </div>
                        </div>

                    </div>

                    <div class="col-md-8 col-lg-8">
                        <img src="{{ url("quickadmin/")  }}/images/login-back.png" class="login-back" width=""/>
                    </div>



                </div>


                <input type="hidden"
                       name="_token"
                       value="{{ csrf_token() }}">


            </form>

        </div>
    </div>
</div>
@include('admin.partials.footer')
