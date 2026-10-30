 @extends('admin.layouts.app')
@section('content')
<div class="page-content">
    <div class="container-fluid">
        <div class="container">

            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4>Privacy Policy List</h4>

                    <a href="{{ route('admin.privacy.create') }}"
                       class="btn btn-primary btn-sm">
                        <i class="fas fa-plus"></i> Add Privacy
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
                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                            <thead>
                                <tr>
                                    <th style="width: 60px;">SL</th>
                                    <th>Name</th>
                                    <th>Meta Title</th>
                                    <th>Description</th>
                                    <th style="width: 130px;">Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($privacies as $privacy)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>

                                        <td>{{ $privacy->name }}</td>

                                        <td>{{ $privacy->meta_title }}</td>

                                        <td>
                                            {{ Str::limit(strip_tags($privacy->description), 80) }}
                                        </td>

                                        <td>
                                            <a href="{{ route('admin.privacy.edit', $privacy->id) }}"
                                               class="btn btn-sm btn-primary">
                                                Edit
                                            </a>

                                            <form action="{{ route('admin.privacy.delete', $privacy->id) }}"
                                                  method="POST"
                                                  style="display: inline-block;">

                                                @csrf
                                                @method('DELETE')

                                                <button type="submit"
                                                    class="btn btn-sm btn-danger"
                                                    onclick="return confirm('Are you sure you want to delete this privacy policy?')">
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
