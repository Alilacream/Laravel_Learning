<x-layout>
<x-slot:title>
        Ali
    </x-slot:title>
    <div class="max-w-2xl mx-auto">
        @foreach ($chirps as $chirp => $age)
            
        <div class="card bg-base-100 shadow mt-8">
            <div class="card-body">
                <div>
                    <h1 class="text-3xl font-bold">Welcome to {{ $chirp  }}!</h1>
                    <p class="mt-4 text-base-content/60">You're of age : {{  $age  }}
                        </p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
     

</x-layout>