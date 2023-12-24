@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Update Project') }}</div>
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

                    <form method="POST" action="{{ route('projects.update', $project) }}">
                        @csrf
                        @method('PUT')

                        <div class="form-group mt-2">
                            <label for="projectTitle">Project Title</label>
                            <input type="text" class="form-control" id="projectTitle" name="title"
                                aria-describedby="titleHelp" value="{{ $project->title }}" required>
                            <small id="titleHelp" class="form-text text-muted">Choose a unique and descriptive title for
                                your project.</small>
                        </div>



                        <div class="form-group mt-2">
                            <label for="projectDescription">Description</label>
                            <textarea class="form-control" id="projectDescription" name="description" rows="3" required>{{ $project->description }}</textarea>

                        </div>
                        





                        <div class="form-group mt-2">
                            <label for="githubLink">GitHub Link</label>
                            <input type="text" class="form-control" id="githubLink" name="github_link"
                                value="{{ $project->github_link }}" required>
                        </div>

                        <div class="form-group mt-2">
                            <label for="techUsed">Technologies or Programming Languages Used</label>
                            <select class="form-control" id="techUsed" name="technologies[]" multiple>
                                @foreach($technologies as $technology)
                                <option value="{{ $technology->id }}" {{ in_array($technology->id,
                                    $project->technologies->pluck('id')->toArray()) ? 'selected' : '' }}>
                                    {{ $technology->name }}
                                </option>
                                @endforeach
                            </select>
                            <small class="form-text text-muted">Select the technologies or programming languages used in
                                your project. You can select multiple.</small>
                        </div>

                        <div class="form-group mt-2">
                            <label for="contributors">Desired Contributors</label>
                            <select class="form-control" id="contributors" name="contributors[]" multiple>
                                @foreach ($project->requested_contributions as $requested_contribution)
                                @foreach ($requested_contribution->roles as $role)
                                <option value="{{ $role->id }}" {{ in_array($role->id,
                                    $project->requested_contributions->pluck('id')->toArray()) ? 'selected' : '' }}>
                                    {{ $role->name }}
                                </option>
                                @endforeach
                                @endforeach
                            </select>
                            <small class="form-text text-muted">Select the type of contributors you are looking for. You
                                can select multiple.</small>
                        </div>


                        <div class="form-group mt-2">
                            <label for="contributionsDescription">Requested Contributions Description</label>

                            @foreach ($project->requested_contributions as $contribution)

                            <textarea class="form-control" id="contributionsDescription_{{ $contribution->id }}"
                                name="contributions_description[{{ $contribution->id }}]"
                                rows="3">{{ $contribution->description }}</textarea>



                            <small class="form-text text-muted">Provide a description of the tasks or contributions you
                                are looking for.</small>
                            @endforeach
                        </div>


                        <div class="text-center">
                            <button type="submit" class="btn btn-primary mt-4">Update Project</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection