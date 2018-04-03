@extends('layouts.app')

@section('content')
     
    <main role="main">

      <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="jumbotron">
        <div class="container">
          <h3 class="display-3">{{ $company->name }}</h3>
          <p>{{ $company->description }}</p>
          <!-- <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more »</a></p> -->
        </div>
      </div>

      <div class="container">
        <!-- Example row of columns -->
       <div class="row"> 
        @foreach ($company->projects as $project )
            
            <div class="col-md-4">
                <h2>{{ $project->name }}</h2>
                <p>{{ $project->description }}</p>
                <p><a class="btn btn-secondary" href="/projects/{{$project->id}}" role="button">View Project »</a></p>
            </div>
            
            
        @endforeach
        </div>
        <hr>

      </div> <!-- /container -->

    </main>
@endsection