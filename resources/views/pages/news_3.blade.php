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
                    <img src="{{url('/images/4 craft-01 big.webp')}}" class="bg-cover w-full mt-4 lg:mt-0  " alt="image">
                    <div class="mt-4 mb-4 md:ml-6 md:mr-6 md:mt-10 lg:ml-4 lg:mr-4 lg:mt-12 xl:mt-14 xl:ml-4 xl:mr-2 2xl:mt-16 2xl:ml-2 2xl:mr-2">
                    <x-page-component :content="'District Collector V R Krishna Teja IAS gracefully illuminates the lamp on the dais, symbolizing the guiding light of knowledge and progress. His poised demeanor and dignified presence reflect the values of leadership and enlightenment. As the soft glow of the lamp fills the room, it serves as a reminder of the collective journey towards growth and development. With each flicker of the flame, 
                    hope and inspiration abound, setting the tone for an auspicious and transformative event.'" />
                    <x-page-component :content="'As the light radiates from the lamp, it casts a warm glow on the faces of the gathered guests, evoking a sense of unity and purpose. District Collector symbolic gesture resonates deeply with all those present, underscoring the importance of education, enlightenment, and collective progress. The flickering flame serves as a beacon of hope, guiding the community towards a brighter future filled with opportunity and prosperity. With hearts and minds ignited by the spirit of illumination, the assembly stands united in their commitment to charting a path towards a better tomorrow.'" />
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