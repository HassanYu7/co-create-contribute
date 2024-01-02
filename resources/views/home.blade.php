@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center ">
        <div class="col-md-8">
            <div class="card ">
                <div class="card-header">{{ __('My projects') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif


                    @if (count($projects) > 0)
                        @foreach ($projects as $project)

                        <div class="card-body border border-secondary mt-2 ">
                            <h5 class="card-title">{{ $project->title }}</h5>
                            <p class="card-text">{{ $project->description }}</p>
                            {{-- <a href="#" class="btn btn-primary">Edit</a> --}}
                            {{-- <a href="{{ route('projects.update', $project) }}" class="btn btn-primary">Edit</a> --}}
                            <a href="{{ route('projects.edit', $project) }}" class="btn btn-primary">Edit</a>


                            <a href="#" class="btn btn-danger">Delete</a>
                        </div>

                        @endforeach

                    @else
                        <h6>You don't have any project yet.</h6>
                    @endif










                </div>
            </div>
        </div>
    </div>
</div>
@endsection