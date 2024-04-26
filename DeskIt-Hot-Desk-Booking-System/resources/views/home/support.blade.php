@extends('layouts.layout')
<x-app-layout>
   @section('content')
    <main>
       <h1 class="mt-28 d-flex justify-center text-xl">HOW CAN WE HELP?</h1>
      
       <!-- Search bar -->
        <section>
         <div class="container mt-4 text-center"> 
           <div class="row justify-content-center">
              <div class="col-md-12">
                <form class="form-inline">
                  <div class="input-group">
                    <input class="form-control mr-sm-2 rounded" type="search" placeholder="Search" aria-label="Search">
                 </div>
                </form>
              </div>
            </div>
          </div>
            
         <!-- FACQ -->
         <div class="container">
           <div class="row justify-content-center">

           <div class="col-md-4">
             <div class="box p-8 ">
               <img src="{{ asset('images/facq.svg')}}">
               <h1 class="mt-20 d-flex justify-left text-4xl" href="#">FAQs</h1>
               <p class="text-xl font-light mt-3"> Explore FAQs for instant problem-solving insights.</p>
               <button type="button" class="btn btn-warning rounded w-100 p-40 mt-10">View FAQs</button>
             </div>
           </div>

         <!-- Privacy Policy -->
         <div class="col-md-4">
            <div class="box p-7 ">
              <img src="{{ asset('images/privacy.svg')}}">
             <h1 class="mt-20 d-flex justify-left text-4xl">Privacy Policy</h1>
              <p class="text-xl font-light mt-3"> Explore our commitment to safeguarding your privacy rights.</p>
              <button type="button" class="btn btn-warning rounded w-100 p-40 mt-10">View Privacy Policy</button>
            </div>
          </div>
  
         <!-- Guides -->~
 
         </div>
        </div>
    </section>

      <style>
        body{ background-color: #FCF8F8; }

        .box {
        width: 347px;
        height: 574px;
        margin: 20px;
        display: inline-block;
        border-radius: 10px;
        background: linear-gradient(to top, #ffffff 50%, #f0f0f0 50%);
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      }
      </style>
    
    </main>

   @endsection
</x-app-layout>