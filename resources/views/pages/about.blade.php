<x-guest-layout>
    <div class="items-center">
        <x-header-full-component/>

        <div>
            <div class="relative">
                <img src="{{url('/images/hospital1.png')}}" class="lg:w-full lg:bg-cover hidden lg:block " alt="image">
                <img src="{{url('/images/about1phn.png')}}" class=" w-full  bg-cover lg:hidden" alt="image">
                <div class="absolute inset-0 overflow-hidden  bg-gradient-to-r from-secondary/40 to-accent/50">
                    <div class="mt-28 ml-14 md:mt-48 md:ml-20 lg:mt-24 xl:mt-28 2xl:mt-40 xl:ml-24 xl:mr-24 2xl:ml-32 2xl:mr-32">
                        <div class=""><h class="text-white text-sm md:text-xl md:px-2 md:py-2 lg:text-base 2xl:text-lg outline outline-white outline-1 font-bold font-inter lg:px-2 lg:py-2  pt-1 pb-1  pl-1 pr-1">WELCOME TO CRAFT SCHOOL OF NURSING</h></div>
                        <p class=" text-left text-white text-4xl mt-8 sm:text-6xl md:mt-14  lg:text-7xl md:text-8xl 2xl:text-8xl lg:leading-tight font-black font-gothic mr-10 lg:mt-8 ">About Us</p>
                        <div class="lg:mr-96 lg:pr-4"><p class=" text-left text-white text-sm sm:text-lg md:text-xl lg:text-base xl:text-base 2xl:text-2xl lg:mt-0 xl:mt-8 2xl:mt-12 font-gothic mt-8 md:mt-20 font-light  mr-24 lg:mr-0 lg:font-extralight" >It is a long established fact that a reader will be distracted 
                                by the readable content of a page when looking at its layout. The point of using Lorepwdm Ipsum
                                is that it has a more-or-less normal distribution f letters, as opposed to using 'Content here, content here',</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <div class="text-left xl:ml-8 xl:mr-8 2xl:ml-32 2xl:mr-32">
                <div class="mt-6 md:mt-10  mb-4 lg:mt-14 lg:mb-14 lg:ml-16 lg:mr-16 2xl:mt-20 ">
                    <h class="text-teal font-inter ml-4 font-bold text-sm sm:text-base md:text-2xl lg:text-3xl 2xl:text-4xl lg:text-left">WELCOME TO CRAFT SCHOOL OF NURSING</h>
                    <div class="mt-4 mb-4 2xl:mt-6 ">
                        <x-page-component :content="'The  CRAFT School of Nursing believes that excellence in professional nursing education is achieved  through a curriculum , which unifies the essential phenomena 
                        of interest in nursing : the concept of nursing , health , person and environment . the  school accepts that professional nursing education at 
                        it’s best in an interactive process by which students and teachers , teach and learn from each other in an academic climate of mutual respect and caring .'" />
                        <x-page-component :content="'The institution believes  that accepting responsibilities for  nurturing  learners focusing on developing  with the competencies of 
                        care giver , critical thinker , communicator , leader , manager ,teacher  and researcher are essential for the lifelong personal growth and development of students.'"/>
                    </div>
                </div>
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
