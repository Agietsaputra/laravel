@extends('navbar')

@section('content')
<div class="w-full px-6 lg:px-0 py-12">
    <div class="flex flex-col lg:flex-row bg-white min-h-screen">
        <div class="flex items-center justify-center lg:justify-start text-center lg:text-left px-8 md:px-12 lg:w-1/2 py-12">
            <div>
                <span class="text-2xl font-semibold text-gray-800 md:text-3xl"> Selamat Datang Di Kelayakan Kredit Motor<span class="ml-2 text-blue-600">Decision Support System</span> </span>
                <h1 class="py-5 text-5xl font-semibold text-gray-800 md:text-6xl">Home<span class="ml-2 text-blue-600">Dashboard</span></h1>
                <p class="mt-2 text-sm text-gray-500 md:text-lg">
                    <a href="https://fontgenerator.org/">Providing Data and</a> Analysis <strong>for better</strong> Decision Making.
                </p>
            </div>
        </div>
        <div class="hidden lg:block lg:w-1/2">
            <div class="h-full object-cover" style="background-image: url(https://i.pinimg.com/564x/53/02/f7/5302f76353af92c4ac1795d71600fc1f.jpg)">
                <div class="h-full bg-blue-500 opacity-15"></div>
            </div>
        </div>
    </div>
</div>
@endsection
