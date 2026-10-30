 @extends('admin.layouts.app')
@section('content')
<div class="page-content">
    <div class="container-fluid">
        <div class="container">

            <div class="card">
                <div class="card-header">
                    <h4>Add User</h4>
                </div>

                <div class="card-body">

                    <form action=""
                          method="POST"
                          enctype="multipart/form-data">


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
                                    class="form-control">
                            </div>
                        </div>

                        {{-- Title --}}
                        <div class="row mb-4 align-items-center">
                            <label for="title"
                                class="col-sm-2 col-form-label text-secondary">
                                Email
                            </label>

                            <div class="col-sm-10">
                                <input type="text"
                                    name="email"
                                    id="title"
                                    value=""
                                    class="form-control">
                            </div>
                        </div>

                      

                       

                        {{-- Buttons --}}
                        <div class="row">
                            <div class="col-sm-2"></div>

                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">
                                    Save User
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
