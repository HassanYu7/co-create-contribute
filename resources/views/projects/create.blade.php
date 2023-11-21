@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create Project') }}</div>
                <div>
                    @if (session('success'))
                    <div class="alert alert-success mt-4 content-center justify-center items-center mx-auto ">
                        {{ session('success')}}
                    </div>
                    @endif
                </div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif


                    <form method="POST" action="{{ route('projects.store') }}">
                        @csrf
                        <div class="form-group mt-2">
                            <label for="projectTitle">Project Title</label>
                            <input type="text" class="form-control" id="projectTitle" name="title"
                                aria-describedby="titleHelp" required>
                            <small id="titleHelp" class="form-text text-muted">Choose a unique and descriptive title for
                                your project.</small>
                        </div>

                        <div class="form-group mt-2">
                            <label for="projectDescription">Description</label>
                            <textarea class="form-control" id="projectDescription" name="description" rows="3"
                                required></textarea>
                        </div>

                        <div class="form-group mt-2">
                            <label for="githubLink">GitHub Link</label>
                            <input type="text" class="form-control" id="githubLink" name="github_link" required>
                        </div>

                        <div class="form-group mt-2">
                            <label for="techUsed">Technologies or Programming Languages Used</label>
                            <select class="form-control" id="techUsed" name="technologies[]" multiple>
                                @foreach($technologies as $technology)
                                <option value="{{ $technology->id }}">{{ $technology->name }}</option>
                                @endforeach
                            </select>
                            <small class="form-text text-muted">Select the technologies or programming languages used in
                                your project. You can select multiple.</small>
                        </div>





                        <div class="form-group mt-2">
                            <label for="contributors">Desired Contributors</label>
                            <select class="form-control" id="contributors" name="contributors[]" multiple>
                                <option>Programmer</option>
                                <option>Designer (UX/UI)</option>
                                <option>Tester</option>
                                <option>Project Manager</option>
                                <option>Documentation Specialist</option>
                                <option>DevOps Engineer</option>
                                <!-- Add more contributor roles as needed -->
                            </select>
                            <small class="form-text text-muted">Select the type of contributors you are looking for. You
                                can select multiple.</small>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-primary mt-4">Create new project</button>
                        </div>


                    </form>




                </div>
            </div>
        </div>
    </div>
</div>
@endsection