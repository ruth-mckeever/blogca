@extends('layouts.app')

@section('content')
    <div class="w-4/5 m-auto text-center">
        <div class="py-15 border-b border-gray-200">
            <h1 class="text-6xl">
                Make Enquiry
            </h1>
        </div>
    </div>
    @if ($errors->any())
        <div class="w-4/5 m-auto">
            <ul>
                @foreach ($errors->all() as $error)
                    <li class="w-1/5 mb-4 text-gray-50 bg-red-700 rounded-2xl py-4">
                        {{ $error }}
                    </li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="w-4/5 m-auto py-10">
        <form action="/enquiries" method="POST" enctype="multipart/form-data">
            @csrf

            <input type="text" name="title" placeholder="Title..."
                class="bg-transparent block border-b-2 w-full h-20 text-xl outline-none">

            <input type="email" name="email" placeholder="Email address..."
                class="bg-transparent block border-b-2 w-full h-20 text-xl outline-none">

            <textarea name="message" placeholder="Message..."
                class="py-20 bg-transparent block border-b-2 w-full h-60 text-xl outline-none"></textarea>

            <div class="bg-grey-lighter pt-15">
                <input type="checkbox" name="is_urgent" value="0">
                <span class="mt-2 text-base leading-normal">Urgent</span>
            </div>

            <button type="submit"
                class="uppercase mt-15 bg-blue-500 text-gray-100 text-lg font-extrabold py-4 px-8 rounded-3xl">
                Submit Enquiry
            </button>
        </form>
    </div>

@endsection
