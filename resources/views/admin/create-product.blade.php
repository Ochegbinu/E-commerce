@extends('admin.navbar')


@section('content')
    <p>Create New Product</p>

    <form action="{{route('storeProduct')}}" method="POST" enctype="multipart/form-data">
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
                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Image') }}</label>
                <input id="image" type="file" class="form-control @error('image') is-invalid @enderror"
                    name="image" value="{{ old('image') }}" required autocomplete="image" autofocus>
                @error('image')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-9">
                <label for="price" class="col-md-4 col-form-label text-md-end">{{ __('Price') }}</label>
                <input id="price" type="text" class="form-control @error('price') is-invalid @enderror"
                    name="price" value="{{ old('price') }}" required autocomplete="price" autofocus>
                @error('price')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-9">
                <label for="price" class="col-md-4 col-form-label text-md-end">{{ __('Category') }}</label>
                <select id="category" type="text" class="form-control @error('category') is-invalid @enderror"
                    name="category" value="{{ old('category') }}" required autocomplete="category" autofocus>
                    @foreach ($categorys as $category)
                        <option>{{ $category->name }}</option>
                    @endforeach

                </select>

                @error('category')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-9">
                <label for="description" class="col-md-4 col-form-label text-md-end">{{ __('Description') }}</label>
                <textarea id="description" type="text" rows="6" class="form-control @error('description') is-invalid @enderror"
                    name="description" value="{{ old('description') }}" required autocomplete="description" autofocus></textarea>
                @error('description')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div><br>

        <button type="submit" class="btn btn-sm btn-success" style="margin-left:50%;">Create</button>


    </form>
@endsection
