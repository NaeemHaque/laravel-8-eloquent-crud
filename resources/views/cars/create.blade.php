@extends('layouts.app')

@section('content')

<div class="m-auto w-4/8 py-24">
    <div class="text-center">
        <h1 class="text-5xl uppercase bold">Create Car</h1>
    </div>
</div>

<div class="flex justify-center pt-20">
    <form action="/cars" method="POST">
        @csrf 
        <div class="block">
            <input 
                type="text" name="name" id="" 
                class="block shadow-5xl mb-10 p-2 
                w-80 italic placeholder-gray-400"
                placeholder="Brand Name..."
            >

            <input 
                type="text" name="founded" id="" 
                class="block shadow-5xl mb-10 p-2 
                w-80 italic placeholder-gray-400"
                placeholder="Founded At..."
            >

            <textarea
                name="description" id=""
                class="block shadow-5xl mb-10 p-2 
                w-80 italic placeholder-gray-400"
                placeholder="Description....">
            </textarea>
            
            <input
                type="submit"
                name="submit"
                class="bg-green-500 block shadow-5xl 
                mb-10 p-2 w-80 uppercase font-bold text-gray-100">
                
        </div>
    </form>
</div>

@endsection