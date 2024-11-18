@extends('backend.layout.app')

@section('title', 'Create Category')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Create Category</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('categories.index') }}">Categories</a></li>
                            <li class="breadcrumb-item active">Create Category</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="card card-default">
                    <div class="card-header">
                        <h3 class="card-title">Add New Category</h3>
                    </div>
                    <div class="card-body">
                        <!-- Error Messages -->
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <!-- Form -->
                        <form action="{{ route('categories.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <!-- Name -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">Category Name</label>
                                        <input type="text" id="name" name="name" class="form-control" placeholder="Enter Category Name" value="{{ old('name') }}" required>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <!-- Description -->
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="description">Description</label>
                                        <textarea id="description" name="description" class="form-control" placeholder="Enter Category Description">{{ old('description') }}</textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <!-- Logo -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="logo">Logo</label>
                                        <input type="file" id="logo" name="logo" class="form-control" accept="image/*" onchange="previewLogoImage(event)">
                                    </div>
                                </div>
                            </div>

                            <!-- Image Preview -->
                            <div id="logo-preview" class="col-md-6"></div>
                            <!-- Preview image will appear here -->

                            <div class="row">
                                <!-- Status -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="status">Status</label>
                                        <select id="status" name="status" class="form-control">
                                            <option value="active" {{ old('status') == 'active' ? 'selected' : '' }}>Active</option>
                                            <option value="inactive" {{ old('status') == 'inactive' ? 'selected' : '' }}>Inactive</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <!-- Submit Button -->
                            <div class="row">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-success">Create Category</button>
                                    <a href="{{ route('categories.index') }}" class="btn btn-secondary">Cancel</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@section('customJs')
    <script>
        function previewLogoImage(event) {
            var input = event.target;
            var preview = document.getElementById('logo-preview');

            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    preview.innerHTML = ''; // Clear previous preview
                    var img = document.createElement('img');
                    img.src = e.target.result;
                    img.style.maxWidth = '150px'; // Adjust as needed
                    img.style.maxHeight = '150px'; // Adjust as needed
                    preview.appendChild(img);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
@endsection
