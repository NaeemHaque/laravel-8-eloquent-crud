@extends('layouts.app')

@section('content')

<div class="m-auto w-4/5 py-24">

    <div class="text-center">
        <h1 class="text-5xl uppercase bold">Cars</h1>
    </div>

    <div class="t-10">
        <a href="cars/create" class="border-b-2 pb-2 border-dotted italic text-white bg-blue-400 px-4 py-1">
            Add new car &rarr;
        </a>
    </div>

    @foreach ($cars as $car )
        <div class="w-5/6 py-10">
            <div class="m-auto">

                <div class="float-right border-b-2 border-dotted italic bg-green-500 px-4 py-1 text-white">
                    <a href="cars/{{ $car->id }}/edit">Edit</a>
                </div>
                <form 
                    action="cars/{{ $car->id }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button 
                        type="submit" 
                        class="float-right border-b-2 border-dotted italic bg-red-600 px-4 py-1 text-white">
                        Delete
                    </button>
                </form>

                <span class="uppercase text-blue-500 font-bold text-xs italic">
                    Founded: {{ $car->founded }}
                </span>

                <h2 class="text-gray-700 text-5xl">{{ $car->name }}</h2>

                <p class="text-lg text-gray-700 py-6">{{ $car->description }}</p>

                <hr class="mt-4 mb-8">
            </div>
        </div>
    @endforeach

</div>

@endsection