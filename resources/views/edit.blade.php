<x-app-layout>
    <x-slot name="header">
        <h2 class="bg-clip-text text-transparent bg-gradient-to-r from-pink-300 to-violet-700 font-style: italic font-bold text-5xl text-[#0c1a35] text-gray-800 leading-tight ">
            {{ __('Edit task :)') }}
        </h2>
    </x-slot>
    <head>
    <style>
            body {
                font-family: 'Nunito';
            }
            text-align:center;
            width:100%;
            margin:0 auto;
            padding:0px;
            font-family:helvetica;
            }
            #video_wrapper
            {
            margin:0px;
            padding:0px;
            }
            #myVideo {
            position: none;
            right: 0;
            bottom: 0;
            min-width: 50%; 
            min-height: 50%;
            font-size:40px;
            
            }
            .Bg{
                padding: 50px;
                width: 150px;
                position: fixed ;
                bottom: 40%;
                left: 26%;
                width :45%;
            }
            img{
                border-radius: 50%;
                margin-left: 20px;
                width:50px;
                height:50px;
            }
            .h1{
                font-family: Fantasy;
                font-size: 50px;
                color: #4682B4;
            }
            .task{
                font-family: Fantasy;
                font-size: 23px; 
                color: #FFFACD; 
            }
            .line{
                display: flex; 
            }
        </style>
    <body class="antialiased">
    <video autoplay muted loop id="myVideo">
        <source src="beach.mp4" type="video/mp4">
        </video>
    <div class="Bg">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-clip-border p-6 bg-sky-400 border-4 border-sky-600 border-dashed overflow-hidden shadow-xl sm:rounded-lg p-5">
            

                <form method="POST" action="/task/{{ $task->id }}">

                    <div class="form-group">
                        <textarea name="description" class="bg-gray-100 rounded border border-gray-400 leading-normal resize-none w-full h-20 py-2 px-3 font-style: italic font-medium placeholder-gray-700 focus:outline-none focus:bg-white">{{$task->description }}</textarea>	
                        @if ($errors->has('description'))
                            <span class="text-danger">{{ $errors->first('description') }}</span>
                        @endif
                    </div>


                    <div class="form-group">
                        <button type="submit" name="update" class="bg-blue-500 hover:bg-blue-700 text-white font-style: italic font-bold py-2 px-4 rounded">Update task</button>
                    </div>
                {{ csrf_field() }}
                </form>

            </div>
        </div>
    </div>

        </head>
</body>
 </x-app-layout>