<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Company') }}
        </h2>
    </x-slot>
    @if(isset($companyList))
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @foreach($companyList as $c)
                        <a href="/company/{{$c->id}}" alt="" target="_blank"><h1>{{$c->name}}</h1></a>
                        <h2>{{$c->description}}</h2>
                        <a href="/destroy/{{$c->id}}"><h1>DELETE BUTTON</h1></a> 
                        <br/> 
                    @endforeach 
                </div>
            </div>
        </div>
        
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <a href="/create" alt="">Add Company</a>
                </div>
            </div>
        </div>
    </div>
    
    @endif

    @if(isset($projectList))
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @foreach($projectList as $p)
                       <a href="/project/{{$p->id}}" alt="" target="_blank"><h1>{{$p->name}}</h1></a>
                        <h2>{{$p->description}}</h2>
                        <br/>   
                    @endforeach 
                </div>
            </div>
        </div>
    </div>
    @endif

    @if(isset($commentList))
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @foreach($commentList as $co)
                        <h2>{{$co->description}}</h2>
                        <br/>   
                    @endforeach 
                </div>
            </div>
        </div>
    </div>
    @endif
</x-app-layout>
