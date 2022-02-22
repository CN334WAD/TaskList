<x-app-layout>
    <x-slot name="header">
        <h2 class="bg-clip-text text-transparent bg-gradient-to-r from-pink-300 to-violet-700 font-font-style: italic font-bold  text-5xl text-[#0c1a35] leading-tight">
            {{ __('Dashboard :) ') }}
        </h2>
    </x-slot>
<head>
    <!-- <div class="grid grid-cols-10 gap-5">
        <div class="bg-sky-50 aspect-square"></div>
        <div class="bg-sky-100 aspect-square"></div>
        <div class="bg-sky-200 aspect-square"></div>
        <div class="bg-sky-300 aspect-square"></div>
        <div class="bg-sky-400 aspect-square"></div>
        <div class="bg-sky-500 aspect-square"></div>
        <div class="bg-sky-600 aspect-square"></div>
        <div class="bg-sky-700 aspect-square"></div>
        <div class="bg-sky-800 aspect-square"></div>
        <div class="bg-sky-900 aspect-square"></div>
    </div> -->
    <style>
            body {
                font-family: 'Nunito';
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
                padding: 10px;
                width: 150px;
                position: fixed ;
                bottom: 10%;
                left: 27.5%;
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
                color: #2F4F4F;
            }
            .task{
                font-family: Fantasy;
                font-size: 23px; 
                color: #FFD700; 
            }
            .line{
                display: flex;
            }
            .border-b{
                font-size: 23px;
                font-family: Cursive;
                color: #FFA07A;
            }
        </style>
       </head> 
    <body class="antialiased">
    <video autoplay muted loop id="myVideo">
        <source src="beach.mp4" type="video/mp4">
        </video>
        <div class="Bg">
            <div class="py-12">
                <div class="sm:rounded-lg p-5">
                    <div class="flex">
                        <div class="h1">TASK LIST</div>
                        
                        <div class="flex-auto text-right mt-2">
                            <a href="/task" class="bg-blue-500 hover:bg-blue-700 text-white font-style: italic font-bold py-2 px-4 rounded">Add new Task</a>
                        </div>
                    </div>
                    <table class="w-full text-md rounded mb-4">
                        <thead>
                            <tr class="border-b">
                                <th class="text-left p-3 px-5 font-bold font-style: italic">Task</th>
                                <th class="text-left p-3 px-7 font-style: italic">Actions</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach(auth()->user()->tasks as $task)
                            <tr class="task">
                                <td class="p-3 px-5">
                                    {{$task->description}}
                                </td>
                                <td class="logo flex">                                   
                                    <a href="/task/{{$task->id}}" name="edit" class="logo1"><img src="edit.png" alt="accept"></a>
                                    <form action="/task/{{$task->id}}" class="inline-block">
                                        <button type="submit" name="delete" formmethod="POST" 
                                        class="delete">
                                        <img src="delete.png" alt="Bin">
                                    </button>
                                    {{ csrf_field() }}
                                </form>
                                <a href="https://twitter.com/share?url={{$task->description}}" onclick="window.open(this.href);return false;" name="twitter" class="logo1"><img src="twitter.png" alt="accept"></a>
                                <a href="https://www.facebook.com/sharer/sharer.php?u=127.0.0.1:8000" name="facebook" class="logo1"><img src="facebook.png" alt="accept"></a>
                            </td>
                            </tr>


                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
        </div>
    </x-app-layout>
</body>