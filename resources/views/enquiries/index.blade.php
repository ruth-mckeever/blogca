@extends('layouts.app')

@section('content')
    <div class="w-4/5 m-auto text-center">
        <div class="py-15 border-b border-gray-200">
            <h1 class="text-6xl">
                Enquiries
            </h1>
        </div>
    </div>

    @if (session()->has('message'))
        <div class="w-4/5 m-auto mt-10 pl-2">
            <p class="w-2/6 mb-4 text-gray-50 bg-green-500 rounded-2xl py-4">
                {{ session()->get('message') }}
            </p>
        </div>
    @endif


    @if (Auth::check())
        @foreach ($enquiries as $enquiry)
            <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
                @if ($enquiry->is_urgent)
                    <h2 class="text-red-700 font-bold text-5xl pb-4">
                        URGENT
                    </h2>
                @endif
                <h2 class="text-gray-700 font-bold text-5xl pb-4">
                    {{ $enquiry->title }}
                </h2>
                <span class="text-gray-500">
                    By <span class="font-bold italic text-gray-800">{{ $enquiry->email }}</span>
                </span>
                <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
                    {{ $enquiry->message }}
                </p>
            </div>
        @endforeach
    @endif

    <div class="pt-15 w-4/5 m-auto">
        <a href="/enquiries/create"
            class="bg-blue-500 uppercase bg-transparent text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl">
            Make Enquiry
        </a>
    </div>
@endsection
