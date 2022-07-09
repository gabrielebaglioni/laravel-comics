<main>
   <section class="jumbotron"></section>
   <section class="bg-[#1C1C1C] p-3">
      <div class="text-center relative container">
         <button class=" btn bg-[#0082F9] text-white p-1 uppercase">Current Series</button>
         <div class="flex flex-wrap px-6 w-full py-8">
          @foreach ($comics as $elm => $comic)
            <div class="px-6 py-4 w-1/6 card">
               <a href="{{route('comic',['id' => $elm])}}">
                  <img class="pb-4" src="{{asset($comic["thumb"])}}" alt="{{$comic["series"]}}">
                  <small class="text-white  uppercase">{{$comic["series"]}}</small>
               </a>  
            </div>
         
           @endforeach  
         </div>

      </div>
        
   </section>
</main>