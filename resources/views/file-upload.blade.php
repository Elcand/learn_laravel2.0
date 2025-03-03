@extends('component.applayout')

@section('title', 'File Upload')

@section('contents')
    <section>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card mt-5 mb-5">
                    <div class="card-body mt-5 mb-5">
                        <form action="{{ route('file.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="" class="form-label">File Upload</label>
                                <input type="file" class="form-control" id="file" name="file"
                                    placeholder="Input file" value="{{ old('file') }}">
                            </div>
                            <button type="submit" class="btn btn-dark">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
