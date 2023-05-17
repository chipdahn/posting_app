@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-4/12 bg-white p-6 rounded-lg">
            <form action="{{ route('store.product') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-4">
                    <input type="file" id="file" name="image">
                </div>

                <div class="mb-4">
                    <label for="name" class="sr-only">Name</label>
                    <input type="text" name="name" id="name" placeholder="product-name">
                </div>

                <div>
                    <label for="price">Price:</label>
                    <input type="number" id="price" name="price" min="10" max="2000">
                </div>

                <div>
                    <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-full">Upload</button>
                </div>
            </form>
        </div>

    </div>
@endsection
