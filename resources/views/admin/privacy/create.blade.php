 @extends('admin.layouts.app')


@section('content')
<div class="page-content">
    <div class="container-fluid">
        <div class="container">

            <div class="card">
                <div class="card-header">
                    <h4>Add Privacy Policy</h4>
                </div>

                <div class="card-body">

                    <form action="{{ route('admin.privacy.store') }}"
                          method="POST">

                        @csrf

                        {{-- Name --}}
                        <div class="row mb-4 align-items-center">
                            <label for="name"
                                class="col-sm-2 col-form-label text-secondary">
                                Name
                            </label>

                            <div class="col-sm-10">
                                <input type="text"
                                    name="name"
                                    id="name"
                                    value="{{ old('name') }}"
                                    class="form-control"
                                    placeholder="Enter privacy policy name">

                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        {{-- Description --}}
                        <div class="row mb-4 align-items-center">
                            <label for="description"
                                class="col-sm-2 col-form-label text-secondary">
                                Description
                            </label>

                            <div class="col-sm-10">
                                <textarea name="description"
                                    id="description"
                                    rows="6"
                                    class="form-control"
                                    placeholder="Enter description">{{ old('description') }}</textarea>

                                @error('description')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        {{-- Meta Title --}}
                        <div class="row mb-4 align-items-center">
                            <label for="meta_title"
                                class="col-sm-2 col-form-label text-secondary">
                                Meta Title
                            </label>

                            <div class="col-sm-10">
                                <input type="text"
                                    name="meta_title"
                                    id="meta_title"
                                    value="{{ old('meta_title') }}"
                                    class="form-control"
                                    placeholder="Enter meta title">

                                @error('meta_title')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        {{-- Meta Description --}}
                        <div class="row mb-4 align-items-center">
                            <label for="meta_desc"
                                class="col-sm-2 col-form-label text-secondary">
                                Meta Description
                            </label>

                            <div class="col-sm-10">
                                <textarea name="meta_desc"
                                    id="meta_desc"
                                    rows="3"
                                    class="form-control"
                                    placeholder="Enter meta description">{{ old('meta_desc') }}</textarea>

                                @error('meta_desc')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        {{-- Meta Keywords --}}
                        <div class="row mb-4 align-items-center">
                            <label for="meta_keywords"
                                class="col-sm-2 col-form-label text-secondary">
                                Meta Keywords
                            </label>

                            <div class="col-sm-10">
                                <textarea name="meta_keywords"
                                    id="meta_keywords"
                                    rows="3"
                                    class="form-control"
                                    placeholder="Enter meta keywords">{{ old('meta_keywords') }}</textarea>

                                @error('meta_keywords')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        {{-- Buttons --}}
                        <div class="row">
                            <div class="col-sm-2"></div>

                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">
                                    Save Privacy
                                </button>

                                <a href="{{ route('admin.privacy.index') }}"
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
