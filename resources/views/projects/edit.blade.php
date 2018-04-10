 @extends('layouts.app')

@section('content')
     
  <div class="row col-md-9 col-lg-9 col-sm-9 pull-left">
        <!-- Example row of columns -->
        <div class="row col-md-12 col-12 col-sm-12" style="background:white; margin:10px;"> 
            <form class="col-md-12 col-12 col-sm-12" method="post" action="{{ route('companies.update', [$company->id]) }}">
                {{ csrf_field() }}

                <input type="hidden" name="_method" value="put">

                <div class="form-group">
                    <label for="company-name">Name<span class="required">*</span></label>
                    <input placeholder="Enter name" id="company-name" name="name" 
                    spellchek="false"  required="" class="form-control" value="{{ $company->name }}"/>
                </div>

                <div class="form-group">
                    <label for="company-content">Description</label>
                    <textarea placeholder="Enter description" style="resize: vertical" 
                    id="company-content" name="description" 
                    rows="5" spellchek="false" class="form-control autorize-target text-left">
                        {{ $company->description }}
                    </textarea>
                </div>

                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Submit" />
                </div>
            </form>
        </div>
    </div>     
        
    <div class="col-sm-3 col-md-3 col-lg-3 pull-right">

        <div class="sidebar-module sidebar-module-inset">
            <div class="sidebar-module">
                <h4>Action</h4>
                <ol class="list-unstyled">
                    <li><a href="/companies/{{ $company->id }}">View Company</a></li>
                    <li><a href="/companies">All Companies</a></li>
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
            <div>    
        </div>
    
    </div>
@endsection