@extends('admin.navbar')

@section('content')
<form action="{{route('storeCategory')}}" method="POST">
    @csrf
    <div class="row justify-content-center">
        <div class="col-md-9">
            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                value="{{ old('name') }}" required autocomplete="name" autofocus>
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-9">
            <label for="description" col="4" class="col-md-4 col-form-label text-md-end">{{ __('Description') }}</label>
            <textarea id="category" type="text" class="form-control @error('category') is-invalid @enderror" name="description"
                value="{{ old('description') }}" required autocomplete="description" autofocus></textarea>
            @error('description')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div><br>

    <button type="submit" class="btn btn-sm btn-success" style="margin-left:50%">Create</button>

    {{-- <div class="row mb-0">
        <div class="col-md-6 offset-md-4">
            <button type="submit" class="btn btn-md btn-success">
                {{ __('Create') }}
            </button>
        </div>
    </div> --}}
</form>  
@endsection