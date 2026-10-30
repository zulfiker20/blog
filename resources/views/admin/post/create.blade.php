 @extends('admin.layouts.app')


@section('content')

<div class="page-content">
    <div class="container-fluid">
        <div class="container">

            <div class="card">

                <div class="card-header">
                    <h4>Add Post</h4>
                </div>

                <div class="card-body">

                    <form action="{{ route('admin.post.store') }}"
                        method="POST"
                        enctype="multipart/form-data">

                        @csrf

                        {{-- Title --}}
                        <div class="row mb-4 align-items-center">

                            <label class="col-sm-2 col-form-label text-secondary">
                                Title
                            </label>

                            <div class="col-sm-10">

                                <input type="text"
                                    name="title"
                                    value="{{ old('title') }}"
                                    class="form-control"
                                    placeholder="Enter post title">

                                @error('title')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror

                            </div>
                        </div>

                        {{-- Slug --}}
                        <div class="row mb-4 align-items-center">

                            <label class="col-sm-2 col-form-label text-secondary">
                                Slug
                            </label>

                            <div class="col-sm-10">

                                <input type="text"
                                    name="slug"
                                    value="{{ old('slug') }}"
                                    class="form-control"
                                    placeholder="Enter post slug (optional)">

                                @error('slug')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror

                            </div>
                        </div>

                        {{-- Category --}}
                        <div class="row mb-4 align-items-center">

                            <label class="col-sm-2 col-form-label text-secondary">
                                Category
                            </label>

                            <div class="col-sm-10">

                                <select name="category_id" class="form-control">

                                    <option value="">Select Category</option>

                                    @foreach($categories as $category)

                                        <option value="{{ $category->id }}"
                                            {{ old('category_id') == $category->id ? 'selected' : '' }}>
                                            {{ $category->title }}
                                        </option>

                                    @endforeach

                                </select>

                                @error('category_id')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror

                            </div>
                        </div>

                        {{-- Image --}}
                        <div class="row mb-4 align-items-center">

                            <label class="col-sm-2 col-form-label text-secondary">
                                Image
                            </label>

                            <div class="col-sm-10">

                                <input type="file"
                                    name="img"
                                    class="form-control">

                                @error('img')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror

                            </div>
                        </div>

                        {{-- Description --}}
                        <div class="row mb-4">

                            <label class="col-sm-2 col-form-label text-secondary">
                                Description
                            </label>

                            <div class="col-sm-10">

                                <textarea name="description"
                                    class="form-control"
                                    rows="6"
                                    placeholder="Enter post description">{{ old('description') }}</textarea>

                                @error('description')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror

                            </div>
                        </div>

                        {{-- Meta Title --}}
                        <div class="row mb-4 align-items-center">

                            <label class="col-sm-2 col-form-label text-secondary">
                                Meta Title
                            </label>

                            <div class="col-sm-10">

                                <input type="text"
                                    name="meta_title"
                                    value="{{ old('meta_title') }}"
                                    class="form-control">

                                @error('meta_title')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror

                            </div>
                        </div>

                        {{-- Meta Description --}}
                        <div class="row mb-4">

                            <label class="col-sm-2 col-form-label text-secondary">
                                Meta Description
                            </label>

                            <div class="col-sm-10">

                                <textarea name="meta_desc"
                                    class="form-control"
                                    rows="3">{{ old('meta_desc') }}</textarea>

                                @error('meta_desc')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror

                            </div>
                        </div>

                        {{-- Meta Keywords --}}
                        <div class="row mb-4">

                            <label class="col-sm-2 col-form-label text-secondary">
                                Meta Keywords
                            </label>

                            <div class="col-sm-10">

                                <textarea name="meta_keywords"
                                    class="form-control"
                                    rows="3">{{ old('meta_keywords') }}</textarea>

                                @error('meta_keywords')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror

                            </div>
                        </div>

                        {{-- Buttons --}}
                        <div class="row">

                            <div class="col-sm-2"></div>

                            <div class="col-sm-10">

                                <button type="submit" class="btn btn-primary">
                                    Save Post
                                </button>

                                <a href="{{ route('admin.post.index') }}"
                                    class="btn btn-secondary">
                                    Back
                                </a>

                            </div>

                        </div>

                    </form>

                </div>
            </div>

        </div>
    </div>
</div>

@endsection