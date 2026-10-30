 @extends('admin.layouts.app')

@section('content')
<div class="page-content">
    <div class="container-fluid">
        <div class="container">
            <div class="card">
                <div class="card-header">
                    <h4>Add Category</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.categories.store') }}" method="POST">
                        @csrf
                        
                        {{-- Title --}}
                        <div class="row mb-4 align-items-center">
                            <label for="title" class="col-sm-2 col-form-label text-secondary"> Title </label>
                            <div class="col-sm-10">
                                <input type="text" name="title" id="title" value="{{ old('title') }}" class="form-control" required>
                                @error('title') <span class="text-danger small">{{ $message }}</span> @enderror
                            </div>
                        </div>

                        {{-- Slug --}}
                        <div class="row mb-4 align-items-center">
                            <label for="slug" class="col-sm-2 col-form-label text-secondary"> Slug </label>
                            <div class="col-sm-10">
                                <input type="text" name="slug" id="slug" value="{{ old('slug') }}" class="form-control" placeholder="Leave blank to auto-generate">
                                @error('slug') <span class="text-danger small">{{ $message }}</span> @enderror
                            </div>
                        </div>

                        {{-- Meta Title --}}
                        <div class="row mb-4 align-items-center">
                            <label for="meta_title" class="col-sm-2 col-form-label text-secondary"> Meta Title </label>
                            <div class="col-sm-10">
                                <input type="text" name="meta_title" id="meta_title" value="{{ old('meta_title') }}" class="form-control">
                            </div>
                        </div>

                        {{-- Meta Description --}}
                        <div class="row mb-4">
                            <label for="meta_desc" class="col-sm-2 col-form-label text-secondary"> Meta Description </label>
                            <div class="col-sm-10">
                                <textarea name="meta_desc" id="meta_desc" rows="3" class="form-control">{{ old('meta_desc') }}</textarea>
                            </div>
                        </div>

                        {{-- Meta Keywords --}}
                        <div class="row mb-4">
                            <label for="meta_keywords" class="col-sm-2 col-form-label text-secondary"> Meta Keywords </label>
                            <div class="col-sm-10">
                                <textarea name="meta_keywords" id="meta_keywords" rows="2" class="form-control">{{ old('meta_keywords') }}</textarea>
                            </div>
                        </div>

                        {{-- Buttons --}}
                        <div class="row">
                            <div class="col-sm-2"></div>
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary"> Save Category </button>
                                <a href="{{ route('admin.categories.index') }}" class="btn btn-secondary"> Cancel </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
