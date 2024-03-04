<x-guest-layout>
    <div class="items-center">
        
        <x-header-full-component/>

        
        <div class="lg:hidden mt-4 mr-2 md:mr-6 text-right p-1">
            <a class="text-white bg-teal px-2 py-1 text-base md:text-lg 2xl:text-lg lg:text-base font-bold font-inter cursor-pointer" @click.prevent.stop="$dispatch('linkaction', {link: '{{route('gallery')}}', route: 'gallery'});">Back</a>
        </div>
        <div class="xl:ml-24 xl:mr-24 2xl:ml-32 2xl:mr-32">
            <div class="mt-6 ml-4 mr-4 md:mt-10 md:ml-6 md:mr-6 lg:ml-8 lg:mr-8 lg:mt-12 xl:mt-14 xl:ml-12 xl:mr-12 2xl:mt-16 2xl:ml-14 2xl:mr-14" >
                <h class="text-xl  font-semibold font-inter text-black md:text-3xl lg:text-6xl 2xl:text-7xl">Lamplighting Ceremony</h>
            </div>
            <div class="lg:flex flex-row flex-grow">
                <div class="ml-4 mr-4 md:ml-6 md:mr-6 lg:ml-8 lg:mr-8 lg:mt-20 xl:ml-12 2xl:ml-14 lg:w-2/3">
                    <img src="{{url('/images/8 craft-01 big.webp')}}" class="bg-cover w-full mt-4 lg:mt-0  " alt="image">
                    <div class="mt-4 mb-4 md:ml-6 md:mr-6 md:mt-10 lg:ml-4 lg:mr-4 lg:mt-12 xl:mt-14 xl:ml-4 xl:mr-2 2xl:mt-16 2xl:ml-2 2xl:mr-2">
                    <x-page-component :content="'Amidst an ambiance of warmth and camaraderie, dignitaries gather on the dais to extend a heartfelt welcome to esteemed guests. The atmosphere is charged with excitement and anticipation as individuals from diverse backgrounds come together in unity. District Collector V R Krishna Teja IAS, exuding grace and charisma, leads the assembly with a stirring address,
                     expressing gratitude for the presence of each attendee.'" />
                    <x-page-component :content="'Among the distinguished guests, renowned film director Kamal is warmly welcomed, adding a touch of glamour and creativity to the gathering. As the event unfolds, the bonds of fellowship and mutual respect deepen, creating a sense of shared purpose and camaraderie that sets the stage for a memorable and impactful occasion.'"/>
                    </div>
                </div>
                
                <!-- <div class="hidden lg:block lg:w-1/3  border border-l border-0 border-gray-200 lg:mr-4 xl:mr-6 2xl:mr-10">
                    <div>
                        <p class="bg-teal text-white text-base 2xl:text-lg font-extrabold text-center font-inter px-2 py-3 ">More Article</p>
                    </div>
                    <div class="lg:ml-3 lg:space-y-6">
                        <div>
                            <x-news-card-component :title="'Advancing Knowledge'" :src="url('/images/4.webp')" :content="'The CRAFT School of Nursing believes that excellence'" route="news" route_key="1" />
                        </div>
                        <div>
                            <x-news-card-component :title="'Advancing Knowledge'" :src="url('/images/4.webp')" :content="'The  institution believe that accepting responsibilities'" route="news" route_key="2" />
                        </div>
                        <div>
                            <x-news-card-component :title="'Advancing Knowledge'" :src="url('/images/4.webp')" :content="'The  CRAFT School of Nursing believes that excellence'" route="news" route_key="3" />
                        </div>
                        <div>
                            <x-news-card-component :title="'Advancing Knowledge'" :src="url('/images/4.webp')" :content="'The  institution believe that accepting responsibilities'" route="news" route_key="1" />
                        </div>
                        <div>
                            <x-news-card-component :title="'Advancing Knowledge'" :src="url('/images/4.webp')" :content="'The CRAFT School of Nursing believes that excellence'" route="news" route_key="1" />
                        </div>
                        <div>
                            <x-news-card-component :title="'Advancing Knowledge'" :src="url('/images/4.webp')" :content="'The  institution believe that accepting responsibilities'" route="news" route_key="2" />
                        </div>
                        <div>
                            <x-news-card-component :title="'Advancing Knowledge'" :src="url('/images/4.webp')" :content="'The  CRAFT School of Nursing believes that excellence'" route="news" route_key="3" />
                        </div>
                        <div>
                            <x-news-card-component :title="'Advancing Knowledge'" :src="url('/images/4.webp')" :content="'The  institution believe that accepting responsibilities'" route="news" route_key="1" />
                        </div>
                       
                    </div>
                </div> -->
            </div>
            
        </div>

        
        
        <footer>
            <div class="mt-8">
               <x-footer-top-component/>
               <x-footer-component/> 
            </div>
        </footer>
    
        
    </div>
</x-guest-layout>  