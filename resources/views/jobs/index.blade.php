@extends('layouts.app')


@section('content')
<div class="container">
  <div class="row">
    <h1>Job Listings</h1>
  </div>

<<<<<<< HEAD
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading" id="panelHeader">Jobs</div>
        <div class="panel-body">
          <!-- if jobs exist do this -->
          @foreach($jobs as $job)
            <h2>{{ $job->title }}</h2>
            <p>{{ $job->description }}</p>
            <p>{{ $job->salary }}</p>
          @endforeach
          <!-- else do this:
            <h2>No Jobs available! Check back soon!</h2>
          -->
        </div>
      </div>
    </div>
  </div>
=======
  @foreach($jobs as $job)
  <!-- Do not Display Jobs that are not available currently -->
    @if($job->closing_date > (\Carbon\Carbon::now()))
    <h4><a href="{{ url('/jobs/description/JOB ID HERE')}}">{{ $job->title }}</a></h4>
    <p style="text-indent: 1em;">
      <b>Job Description:</b>
    </p>
    <p style="text-indent: 2em;">
      {{ $job->description }}
    </p>
    <p style="text-indent: 1em;">
      <b>Salary:</b> ${{ $job->salary }}
    </p>
    <p style="text-indent: 1em;">
      <i>Applications open from {{ $job->start_date }} to {{ $job->closing_date}}</i>
    </p>
    @endif
  @endforeach
>>>>>>> dev
</div>

@endsection
