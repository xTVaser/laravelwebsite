@extends('layouts.app')


@section('content')
<div class="container">
        <div class="col-md-8 col-md-offset-2">
          <div class="panel panel-default">
            <div class="panel-heading" id="panelHeader">{{ $job->title }}</div>
            <div class="panel-body">

                    <!--This page needs to have the full information for the job. -->

                    <h2>{{ $job->title }}</h2>
                    <p>{{ $job->description }}</p>
                    <h3>Qualifications</h3>
                    <p>{{ $job->qualifications }}</p>
                    <h3>Salary</h3>
                    <p>{{ $job->salary }}</p>

                    <!-- If applicant -->                 <!-- Will, add the link to the corresponding application page here -->
                    <btn class="btn btn-primary"><a href="{{ url('/apply/')}}/{{ $job->id }}">Apply</a></btn>
                    <!-- Elsif member/chair -->
                    <btn class="btn btn-warning"><a href="{{ url('/jobs/edit/')}}/{{ $job->id}}">Edit Job</a></btn>

                    <!-- Links to Applications. Should only be shown to faculty/chair members -->
                    <h3>Current Applications</h3>
                    <a href="{{ url('/applications/APPLICATION ID HERE')}}">Application #1</a>
            </div>
          </div>
        </div>
        <!-- Dont know why this is here, commenting out instead of deleting just in case we need it.
        <div class="col-md-3">
                <div class="panel panel-default">
                  <div class="panel-heading" id="panelHeader">Job Name</div>
                  <div class="panel-body">
                        <a href="{{ url('/apply/')}}/{{ $job->id }}" class="btn btn-primary">Submit Application</a>

                        <btn class="btn btn-warning"><a href="{{ url('/jobs/edit/')}}/{{ $job->id}}">Edit Job</a></btn>
                  </div>
                </div>
        </div>
      -->
</div>
@endsection
