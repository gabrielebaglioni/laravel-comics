<section class="jumbotron"></section>
<section>
   <div class="blue bg-[#0082F9] relative">  
      <div class="container-card">
         <div class="image">
            <img src="{{($comic["thumb"])}}" alt="{{$comic["series"]}}">
            <div class="type">{{$comic['type']}}</div>
            <div class="gallery">view gallery</div>
         </div>
         <div class="flex">
            <div class="w-fit">
               <div class="text-2xl uppercase font-semibold text-[#14100E] mb-5">
                  <h2>{{$comic['title']}}</h2> 
               </div>   
                  <div class="flex w-fit">
                     <div class=" flex price-left items-center text-white px-3 ">
                         <span>US. Price <span>{{$comic['price']}}</span></span>
                     </div>   
                     <div class=" flex price-right items-center text-white  justify-center">
                        <span>Chech Avialibility</span>
                     </div>
                  </div>
                  <p class="flex w-2/3 py-4">
                     {{$comic['description']}}
                  </p>
            </div>
            <div class="items-center">
               <img class="apply" src="{{asset('img/adv.jpg')}}" alt="">
            </div>
         </div>   
        
         
      </div>
   </div>
  
</section>