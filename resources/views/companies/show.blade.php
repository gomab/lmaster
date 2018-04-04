@extends('layouts.app')

@section('content')
     
  <div class="col-md-9 col-lg-9 col-sm-9 pull-left">
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
       <div class="row" style="background:white; margin:10px;"> 
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
  </div>

    <div class="col-sm-3 col-md-3 col-lg-3 pull-right">
    
          <div class="sidebar-module sidebar-module-inset">
            <div class="sidebar-module">
            <h4>Action</h4>
            <ol class="list-unstyled">
              <li><a href="/companies">List of companies</a></li>
              <li><a href="/companies/{{ $company->id }}/edit">Edit</a></li>
              <li><a href="/projects/create">Add New Project</a></li>
              <li><a href="/companies/create">Create New Companies</a></li>
              
              <br>
              <li>
                <a href="#"
                onclick="
                let result = confirm('Etes vous sur de vouloir supprimer ce projet?');
                  if(result){
                    event.preventDefault();
                    document.getElementById('delete-form').submit();
                  }
                "
                >Delete</a>

                <form id="delete-form" action="{{ route('companies.destroy', [$company->id]) }}" 
                  method="post" style="display: none;">

                    <input type="hidden" name="_method" value="delete">
                    {{ csrf_field() }}

                </form>

              </li>


              <!-- <li><a href="#">Delete</a></li>-->
               <li><a href="#">Add new member</a></li>
            </ol>
          </div>
          <div class="sidebar-module">
            <h4>Members</h4>
            <ol class="list-unstyled">
              <li><a href="#">March 2014</a></li>
              <li><a href="#">February 2014</a></li>
              <li><a href="#">January 2014</a></li>
              <li><a href="#">December 2013</a></li>
              <li><a href="#">November 2013</a></li>
            </ol>
          </div>
         
        </div>
@endsection