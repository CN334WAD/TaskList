<x-app-layout>
    <x-slot name="header">
        <h2 class="bg-clip-text text-transparent bg-gradient-to-r from-pink-300 to-violet-700 font-style: italic font-bold text-5xl text-[#0c1a35] text-gray-800 leading-tight">
            {{ __('ADD TASK :) ') }}
        </h2>
    </x-slot>
    <style>
        body {
            font-family: 'Nunito';
        }

        .Bg {
            width: 750px;
            text-align: center;
            margin: auto;
        }

        img {
            border-radius: 50%;
            margin-left: 20px;
            width: 50px;
            height: 50px;
        }

        .h1 {
            font-family: Fantasy;
            font-size: 50px;
            color: #4682B4;
        }

        .task {
            font-family: Fantasy;
            font-size: 23px;
            color: #FFFACD;
        }

        .line {
            display: flex;
        }
    </style>

    <body class="antialiased">

        <div class="Bg">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">


                <div class="bg-clip-border p-6 bg-[#f9faec] border-4 border-sky-600 border-dashed overflow-hidden shadow-xl sm:rounded-lg p-5">

                    <form method="POST" action="/task">

                        <div class="form-group">
                            <textarea name="description" class="bg-gray-100 rounded border border-gray-400 leading-normal resize-none w-full h-20 py-2 px-3 font-font-style: italic placeholder-gray-700 focus:outline-none focus:bg-white" placeholder='Enter your task'></textarea>
                            @if ($errors->has('description'))
                            <span class="text-danger font-style: italic font-medium ">{{ $errors->first('description') }}</span>
                            @endif
                        </div>



                        <div class="form-group">
                            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-style: italic font-bold py-2 px-4 rounded">Add Task</button>
                        </div>
                        {{ csrf_field() }}
                    </form>
                </div>
            </div>
        </div>

    </body>
</x-app-layout>