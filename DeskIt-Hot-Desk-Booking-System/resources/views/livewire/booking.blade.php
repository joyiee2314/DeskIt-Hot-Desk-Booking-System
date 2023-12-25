<main class="flex flex-row justify-center items-center mt-28">

    <section>
        <div class="flex justify-center items-center flex-col m-3">
            <div class="first-in">
                <h4>WELCOME TO THE DESKIT OFFICE</h4>
                <h6>The office is specifically crafted to maximize the comfort and productivity of your workday.
                </h6>
            </div>

            {{-- Side Panel --}}
            <div class="m-3 text-center">
            
                {{-- Date Picker --}}
                <div x-data="{ open: false }" @click.away="open = false" class="relative text-center my-4">
                    <x-calendar>
            
                    </x-calendar>
                    {{-- Selected Date:
                    {{$date}} --}}
                </div>
            
                {{-- Floor Chooser --}}
                <div x-data="{ open: false }" @click.away="open = false" class="relative text-center my-4" >
            
                    <x-floor>
                    </x-floor>
                    {{-- Selected Floor:
                    {{$floor}} --}}
            
                    {{-- <div x-show="open"
                        class="absolute right-0 z-10 mt-2 origin-top-right bg-white divide-y divide-gray-100 rounded-md w-64">
                        <div class="" role="menu" aria-orientation="vertical" aria-labelledby="options-menu">
            
                            <div>
                                @include('components.floor')
                            </div>
            
                        </div>
                    </div> --}}
                </div>
            
                {{-- Refresh the Map --}}
                {{-- Added a refreshMap function sa Booking.php--}}
                <div class="relative inline-block text-left">
                    <a wire:click="refreshMap" id="nextButton"
                        class="inline-flex items-center justify-center py-2 text-sm font-medium text-white bg-yellowB border border-gray-300 rounded-full w-56 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 no-underline"
                    >See Available Desks
                    </a>
                </div>
            </div>

        </div>
    </section>
    

    {{-- Desk Map --}}
    <section class="d-flex items-center justify-center m-3">
        <div class=" w-12/12 h-max bg-gray desk">
            <div class="bg-gray desk m-4 flex flex-row relative justify-center">

                <div class="absolute bottom-0 left-0">
                    <img src="{{ asset('images/door.svg') }}" class="flex w-14 my-1" alt="SVG Image">
                </div>

                {{-- LEFT Column --}}
                <div class="mr-8">
                    <div class="flex items-start ">
                        <div class="b-chair m-3">
                            @for ($i = 101; $i < 105; $i++) <a class="modalTrigger" data-modal-id="{{ $i }}"><img
                                    src="{{ asset('images/left-chair.svg') }}" class="flex w-14 my-1"
                                    alt="SVG Image"></a>
                            @endfor
                        </div>
                    </div>
                </div>
   

                {{-- MIDDLE --}}
                <div class="mx-2">

                    {{-- First Row --}}
                    <div class="flex justify-center items-start">
                        <div class="b-chair m-3 mb-5">
                            @for ($i = 105; $i < 111; $i++) <a class="modalTrigger" data-modal-id="{{ $i }}"><img
                                    src="{{ asset('images/bottom-chair.svg') }}" class=" inline-flex h-14"
                                    alt="SVG Image"></a>
                            @endfor
                        </div>
                    </div>

                    {{-- Second Row --}}
                    <div class="flex justify-center items-center">
                        <div class="b-chair m-3">
                            @for ($i = 111; $i < 117; $i++) <a class="modalTrigger" data-modal-id="{{ $i }}"><img
                                    src="{{ asset('images/top-chair.svg') }}" class=" inline-flex h-14"
                                    alt="SVG Image"></a>
                                @endfor
                        </div>
                    </div>

                    {{-- Third Row --}}
                    <div class="flex justify-center items-center">
                        <div class="b-chair mb-5">
                            @for ($i = 117; $i < 123; $i++) <a class="modalTrigger" data-modal-id="{{ $i }}"><img
                                    src="{{ asset('images/bottom-chair.svg') }}" class=" inline-flex h-14"
                                    alt="SVG Image"></a>
                                @endfor
                        </div>
                    </div>

                    {{-- Fourth Row --}}
                    <div class="flex justify-center items-end">
                        <div class="b-chair m-3">
                            @for ($i = 123; $i < 129; $i++) <a class="modalTrigger" data-modal-id="{{ $i }}"><img
                                    src="{{ asset('images/top-chair.svg') }}" class=" inline-flex h-14"
                                    alt="SVG Image"></a>
                                @endfor
                        </div>
                    </div>
                </div>
                

                {{-- RIGHT Column --}} 
                <div class="ml-10 mr-3 mt-3">
                    {{-- Upper Desks --}}
                        <div class="b-chair m-3 flex flex-row items-end">
                            <a class="modalTrigger" data-modal-id="129"><img
                                    src="{{ asset('images/left-cubic.svg') }}" class=" flex w-14"
                                    alt="SVG Image"></a>
                            <a class="modalTrigger" data-modal-id="130"><img
                                    src="{{ asset('images/top-cubic.svg') }}" class=" flex h-14"
                                    alt="SVG Image"></a>
                        </div>
                        <div class="b-chair flex -m-4 flex-row justify-start items-start">
                            <a class="modalTrigger" data-modal-id="132"><img
                                    src="{{ asset('images/bottom-cubic.svg') }}" class=" flex h-14"
                                    alt="SVG Image"></a>
                            <a class="modalTrigger" data-modal-id="131"><img
                                    src="{{ asset('images/right-cubic.svg') }}" class=" flex w-14"
                                    alt="SVG Image"></a>
                        </div>


                        <div class="mt-5">

                            {{-- Lower Desks--}}
                            <div class="b-chair m-3 flex flex-row items-end">
                                <a class="modalTrigger" data-modal-id="133"><img
                                        src="{{ asset('images/left-cubic.svg') }}" class=" flex w-14"
                                        alt="SVG Image"></a>
                                <a class="modalTrigger" data-modal-id="134"><img
                                        src="{{ asset('images/top-cubic.svg') }}" class=" flex h-14"
                                        alt="SVG Image"></a>
                            </div>
                            <div class="b-chair flex -m-4 flex-row justify-start items-start">
                                <a class="modalTrigger" data-modal-id="136"><img
                                        src="{{ asset('images/bottom-cubic.svg') }}" class=" flex h-14"
                                        alt="SVG Image"></a>
                                <a class="modalTrigger" data-modal-id="135"><img
                                        src="{{ asset('images/right-cubic.svg') }}" class=" flex w-14"
                                        alt="SVG Image"></a>
                            </div>
                        </div>
                        

                        {{-- @if ($i < 1) <span class=" my-4"></span>
                        @endif --}}

                </div>

            </div>
        </div>

    </section>



<!-- Organized 
    {{-- Desk Map ORIGINAL --}} 
    <section class="d-flex items-center justify-center m-3">
        <div class=" w-12/12 h-max bg-gray desk">
            <div class="bg-gray desk m-4 flex flex-row relative justify-center">

                <div class="absolute bottom-0 left-0">
                    <img src="{{ asset('images/door.svg') }}" class="flex w-14 my-1" alt="SVG Image">
                </div>

                {{-- LEFT Column --}}
                <div class="mr-8">
                    <div class="flex items-start ">
                        <div class="b-chair m-3">
                            @for ($i = 0; $i < 4; $i++) <a class="modalTrigger" data-modal-id="{{ $i }}"><img
                                    src="{{ asset('images/left-chair.svg') }}" class="flex w-14 my-1"
                                    alt="SVG Image"></a>
                                @endfor
                        </div>
                    </div>
                </div>

                
                {{-- MIDDLE --}}
                <div class="mx-2">

                    {{-- First Row --}}
                    <div class="flex justify-center items-start">
                        <div class="b-chair m-3 mb-5">
                            @for ($i = 0; $i < 6; $i++) <a class="modalTrigger" data-modal-id="{{ $i }}"><img
                                    src="{{ asset('images/bottom-chair.svg') }}" class=" inline-flex h-14"
                                    alt="SVG Image"></a>
                                @endfor
                        </div>
                    </div>

                    {{-- Second Row --}}
                    <div class="flex justify-center items-center">
                        <div class="b-chair m-3">
                            @for ($i = 0; $i < 6; $i++) <a class="modalTrigger" data-modal-id="{{ $i }}"><img
                                    src="{{ asset('images/top-chair.svg') }}" class=" inline-flex h-14"
                                    alt="SVG Image"></a>
                                @endfor
                        </div>
                    </div>

                    {{-- Third Row --}}
                    <div class="flex justify-center items-center">
                        <div class="b-chair mb-5">
                            @for ($i = 0; $i < 6; $i++) <a class="modalTrigger" data-modal-id="{{ $i }}"><img
                                    src="{{ asset('images/bottom-chair.svg') }}" class=" inline-flex h-14"
                                    alt="SVG Image"></a>
                                @endfor
                        </div>
                    </div>

                    {{-- Fourth Row --}}
                    <div class="flex justify-center items-end">
                        <div class="b-chair m-3">
                            @for ($i = 0; $i < 6; $i++) <a class="modalTrigger" data-modal-id="{{ $i }}"><img
                                    src="{{ asset('images/top-chair.svg') }}" class=" inline-flex h-14"
                                    alt="SVG Image"></a>
                                @endfor
                        </div>
                    </div>
                </div>
                

                {{-- RIGHT Column --}}
                
                <div class=" ml-20">

                    {{-- Desk Cluster --}}
                    @for ($i = 0; $i < 2; $i++) <div class="flex flex-col justify-center mt-2">

                        <div class="b-chair m-3 flex flex-row items-end">
                            <a class="modalTrigger" data-modal-id="{{ $i }}"><img
                                    src="{{ asset('images/left-cubic.svg') }}" class=" flex w-14"
                                    alt="SVG Image"></a>
                            <a class="modalTrigger" data-modal-id="{{ $i }}"><img
                                    src="{{ asset('images/top-cubic.svg') }}" class=" flex h-14"
                                    alt="SVG Image"></a>
                        </div>
                        <div class="b-chair flex -m-4 flex-row justify-start items-start">
                            <a class="modalTrigger" data-modal-id="{{ $i }}"><img
                                    src="{{ asset('images/bottom-cubic.svg') }}" class=" flex h-14"
                                    alt="SVG Image"></a>
                            <a class="modalTrigger" data-modal-id="{{ $i }}"><img
                                    src="{{ asset('images/right-cubic.svg') }}" class=" flex w-14"
                                    alt="SVG Image"></a>
                        </div>
                        @if ($i < 1) <span class=" my-4"></span>
                            @endif
                    @endfor
                </div>
            </div>
        </div>
        </div>
    </section>
-->


    
<!--    {{-- Desk Map ORIGINAL --}}
        <section class="d-flex items-center justify-center m-3">
            <div class=" w-12/12 h-max bg-gray desk">
                <div class="bg-gray desk m-4 flex flex-row relative justify-center">
                    <div class="absolute bottom-0 left-0">
                        <img src="{{ asset('images/door.svg') }}" class="flex w-14 my-1" alt="SVG Image">
                    </div>
                    <div class="mr-8">
                        <div class="flex items-start ">
                            <div class="b-chair m-3">
                                @for ($i = 0; $i < 4; $i++) <a class="modalTrigger" data-modal-id="{{ $i }}"><img
                                        src="{{ asset('images/left-chair.svg') }}" class="flex w-14 my-1"
                                        alt="SVG Image"></a>
                                    @endfor
                            </div>
                        </div>
                    </div>
    
                    <div class="mx-2">
                        <div class="flex justify-center items-start">
                            <div class="b-chair m-3 mb-5">
                                @for ($i = 0; $i < 6; $i++) <a class="modalTrigger" data-modal-id="{{ $i }}"><img
                                        src="{{ asset('images/bottom-chair.svg') }}" class=" inline-flex h-14"
                                        alt="SVG Image"></a>
                                    @endfor
                            </div>
                        </div>
                        <div class="flex justify-center items-center">
                            <div class="b-chair m-3">
                                @for ($i = 0; $i < 6; $i++) <a class="modalTrigger" data-modal-id="{{ $i }}"><img
                                        src="{{ asset('images/top-chair.svg') }}" class=" inline-flex h-14"
                                        alt="SVG Image"></a>
                                    @endfor
                            </div>
                        </div>
                        <div class="flex justify-center items-center">
                            <div class="b-chair mb-5">
                                @for ($i = 0; $i < 6; $i++) <a class="modalTrigger" data-modal-id="{{ $i }}"><img
                                        src="{{ asset('images/bottom-chair.svg') }}" class=" inline-flex h-14"
                                        alt="SVG Image"></a>
                                    @endfor
                            </div>
                        </div>
                        <div class="flex justify-center items-end">
                            <div class="b-chair m-3">
                                @for ($i = 0; $i < 6; $i++) <a class="modalTrigger" data-modal-id="{{ $i }}"><img
                                        src="{{ asset('images/top-chair.svg') }}" class=" inline-flex h-14"
                                        alt="SVG Image"></a>
                                    @endfor
                            </div>
                        </div>
                    </div>
                    <div class=" ml-20">
                        @for ($i = 0; $i < 2; $i++) <div class="flex flex-col justify-center mt-2">
                            <div class="b-chair m-3 flex flex-row items-end">
                                <a class="modalTrigger" data-modal-id="{{ $i }}"><img
                                        src="{{ asset('images/left-cubic.svg') }}" class=" flex w-14"
                                        alt="SVG Image"></a>
                                <a class="modalTrigger" data-modal-id="{{ $i }}"><img
                                        src="{{ asset('images/top-cubic.svg') }}" class=" flex h-14"
                                        alt="SVG Image"></a>
                            </div>
                            <div class="b-chair flex -m-4 flex-row justify-start items-start">
                                <a class="modalTrigger" data-modal-id="{{ $i }}"><img
                                        src="{{ asset('images/bottom-cubic.svg') }}" class=" flex h-14"
                                        alt="SVG Image"></a>
                                <a class="modalTrigger" data-modal-id="{{ $i }}"><img
                                        src="{{ asset('images/right-cubic.svg') }}" class=" flex w-14"
                                        alt="SVG Image"></a>
                            </div>
                            @if ($i < 1) <span class=" my-4"></span>
                                @endif
                        @endfor
                    </div>
                </div>
            </div>
            </div>
        </section>
-->
    
{{-- {{$floor}} --}}
</main>                      <!-- for some reason hindi na-u-update 'yung wire:models, i.e. $floor, sa labas nitong </main> --> 
{{--{{$floor}} --}}          <!-- try changing the floor, this one will remain.
                                this is a roadblock, TO OUR MODAL. --> 


@if($selected)
@endif
<!--
    this logic up here is supposed to contain 'yang buong @ for down there 
    I can't get it to work cause livewire zzz

    
    -gelo
-->

@for ($i = 101; $i <= 136; $i++) 
<div wire:poll class="modal-wrapper" data-modal-id="{{ $i }}">
    {{-- Modal 1 --}}
    <div class="modal fixed inset-0 hidden">
        <div class="flex modals modal-contents absolute bg-grey p-8 rounded-lg w-72 justify-center items-center flex-col">
            <span class="close absolute -top-6 right-2 text-white cursor-pointer">X</span>
            <p class="text-lg font-semibold absolute top-2 left-3">Confirm Booking</p>
            <div class="bg-white m-3 p-3 w-40 text-center">
                <p class="text-lg font-semibold">Floor# {{$floor}}</p> 
                <p class="text-lg font-semibold">Desk# {{ $i }}</p>{{-- Include automated floor#-desk# here --}}
                <h6 class="">Date: {{ $date }}</h6> {{-- Include automated date here --}}
            </div>
            <button class="custom-a flex items-center justify-center open-second-modal">Book</button>
        </div>
    </div>

    {{-- Modal 2 --}}
    <div class="second-modal fixed inset-0 hidden">
        <div class="flex modals modal-contents absolute bg-grey p-8 rounded-lg w-72 justify-center items-center flex-col">
            <span class="close absolute -top-6 right-2 text-white cursor-pointer">X</span>
            <p class="text-lg font-semibold mb-4 text-center">Are you sure you want to book a desk?</p>
            <div class="flex flex-row">
                <button class="custom-a flex items-center justify-center open-third-modal"
                wire:click="book">
                    Yes
                </button> {{-- Include logic here, dapat masave sa db once click --}}
                <button class="custom-a flex items-center justify-center close">
                    No
                </button>
            </div>
        </div>
    </div>

    {{-- Modal 3 --}}
    <div class="third-modal fixed inset-0 hidden">
        <div class="flex modals modal-contents absolute bg-grey p-8 rounded-lg w-72 justify-center items-center flex-col">
        <span class="close absolute -top-6 right-2 text-white cursor-pointer">X</span>
        <p class="text-lg font-semibold absolute top-2 left-3">Booking <span class="text-yellowB">placed</span></p>
        <div class="bg-white m-3 p-3 w-40 text-center">
            <p class="text-lg font-semibold">Booking#</p> 
            <p class="text-lg font-semibold">Floor# {{ $floor }}</p> 
            <p class="text-lg font-semibold">Desk# {{ $i }}</p>{{-- Include automated floor#-desk# here --}}
            <h6 class="">Date: {{ $date }}</h6> {{-- Include automated date here --}}
        </div>
        <a href='{{route('dashboard')}}' class="flex items-center justify-center w-40 bg-yellowB text-white rounded-lg no-underline py-1">Back to Home</a>
            
        </div>
    </div>
</div>
@endfor

<script src="{{ asset('js/modal.js') }}"></script>

{{-- MODALS --}}
    










    {{-- @if ($dateSelected && $floorSelected)
    <div class="relative inline-block text-left">
        <a href="{{ route('home.booking.desks') }}" id="nextButton"
            class="inline-flex items-center justify-center py-2 text-sm font-medium text-white bg-yellowB border border-gray-300 rounded-full w-56 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 no-underline"
            >
            See Available Desks
        </a>
    </div>
@endif --}}