@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
<<<<<<< HEAD
        <div class="col-sm-2">
            <div class="panel panel-default">               <!-- Put Echo Tags here once merged with fabs code -->
                <div class="panel-heading" id="panelHeader">$profile->first_name</div>

                <div class="panel-body">
                    <button class="btn btn-primary"><a href="linkedinpagehere">My LinkedIn Page</a></button>
=======
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading" id="panelHeader">Profile: {{ $profile->first_name }}</div>

                <div class="panel-body">
                    You are logged in!


>>>>>>> dev
                </div>
            </div>
        </div>
    </div>

  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading" id="panelHeader">My Biography</div>
          <div class="panel-body">
            <!-- Put echo tags here once merged with fabs code -->
            <p>$profile->description</p>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
