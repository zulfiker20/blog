 @extends('admin.layouts.app')
@section('content')

<div class="page-content">
    <div class="container-fluid">
        <div class="container">

            <div class="card">

                <div class="card-header d-flex justify-content-between align-items-center">

                    <h4>Post List</h4>

                    <a href="{{ route('admin.post.create') }}"
                       class="btn btn-primary btn-sm">
                        <i class="fas fa-plus"></i> Add Post
                    </a>

                </div>

                <div class="card-body">

                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <div class="table-responsive">

                        <table id="datatable"
                            class="table table-bordered table-striped dt-responsive nowrap"
                            style="width:100%;">

                            <thead>
                                <tr>
                                    <th style="width:60px;">SL</th>
                                    <th>Image</th>
                                    <th>Title</th>
                                    <th>Category</th>
                                    <th>Slug</th>
                                    <th>Views</th>
                                    <th style="width:130px;">Action</th>
                                </tr>
                            </thead>

                            <tbody>

                                @foreach($posts as $post)

                                    <tr>

                                        <td>{{ $loop->iteration }}</td>

                                        <td>
                                            @if($post->img)
                                                <img src="{{ asset('storage/'.$post->img) }}"
                                                    width="70"
                                                    height="50"
                                                    style="object-fit:cover;">
                                            @else
                                                No Image
                                            @endif
                                        </td>

                                        <td>{{ $post->title }}</td>

                                        <td>
                                            {{ $post->category->title ?? 'N/A' }}
                                        </td>

                                        <td>{{ $post->slug }}</td>

                                        <td>{{ $post->views }}</td>

                                        <td>

                                            <a href="{{ route('admin.post.edit', $post->id) }}"
                                                class="btn btn-sm btn-primary">
                                                Edit
                                            </a>

                                            <form action="{{ route('admin.post.delete', $post->id) }}"
                                                method="POST"
                                                style="display:inline-block;">

                                                @csrf
                                                @method('DELETE')

                                                <button type="submit"
                                                    class="btn btn-sm btn-danger"
                                                    onclick="return confirm('Are you sure you want to delete this post?')">
                                                    Delete
                                                </button>

                                            </form>

                                        </td>

                                    </tr>

                                @endforeach

                            </tbody>

                        </table>

                    </div>

                </div>

            </div>

        </div>
    </div>
</div>

@endsection
