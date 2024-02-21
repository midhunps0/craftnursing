<x-guest-layout>
    <div class="items-center">
        <x-header-full-component/>

        <div>
            <div class="mt-6 ml-4 mr-4 md:mt-10 md:ml-6 md:mr-6 lg:ml-8 lg:mr-8 lg:mt-12 xl:mt-14 xl:ml-12 xl:mr-12 2xl:mt-16 2xl:ml-14 2xl:mr-14" >
            <div class=""><h class="text-xl font-semibold font-inter text-black md:text-3xl lg:text-6xl 2xl:text-7xl">News & Articles</h></div>
            <!-- <p class="text-sm text-justify font-extralight font-inter  mt-3 lg:text-base lg:mt-6 lg:leading-6 ">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctusnec ullamcorper mattis, pulvinar dapibus leo.Lorem ipsum dolor
             sit amet, consectetur adipiscing elit. Ut elit tellus, luctusnec ullamcorper mattis, pulvinar dapibus leo. Lorem ipsum dolor sit amet, consectetur
              adipiscing elit. Ut elit tellus, luctusnec ullamcorper mattis, pulvinar dapibus leo.Lorem ipsum dolor sit amet,
             consectetur adipiscing elit. Ut elit tellus, luctusnec ullamcorper mattis, pulvinar dapibus leo.</p> -->
            </div>
        </div>

        <!-- <div>
            <div class="mt-12 mb-6 ml-4 md:ml-6 lg:ml-8 xl:ml-12 2xl:ml-14">
                <h class="text-sm font-inter font-extrabold text-align-center text-base-100 border border-teal bg-teal px-12 py-3 md:text-lg lg:text-xl xl:text-2xl 2xl:text-3xl">Advancing knowledge</h>
            </div>
            <div>
                <div class="ml-4 mr-4 md:ml-6 md:mr-6 lg:ml-8 lg:mr-8 lg:mt-20 xl:ml-12 2xl:ml-14">
                    <img src="{{url('/images/4.jpg')}}" class="bg-cover w-full lg:w-2/3 " alt="image">
                </div>
            </div>
        </div> -->

        <!-- <div>
            <div class="mt-4 mb-4 md:ml-6 md:mr-6 md:mt-10 lg:ml-8 lg:mr-8 lg:mt-12 xl:mt-14 xl:ml-12 xl:mr-12 2xl:mt-16 2xl:ml-14 2xl:mr-14 ">
                <x-page-component :content="'The  CRAFT School of Nursing believes that excellence in professional nursing education is achieved  through a curriculum , which unifies the essential phenomena 
                of interest in nursing : the concept of nursing , health , person and environment . the  school accepts that professional nursing education at 
                it’s best in an interactive process by which students and teachers , teach and learn from each other in an academic climate of mutual respect and caring .'" />
                <x-page-component :content="'The institution believes  that accepting responsibilities for  nurturing  learners focusing on developing  with the competencies of 
                care giver , critical thinker , communicator , leader , manager ,teacher  and researcher are essential for the lifelong personal growth and development of students.'"/>
            </div>
        </div> -->

        <div>
            <div class="lg:block lg:flex flex-col md:flex-row md:mt-16 lg:space-x-4 2xl:space-x-6 lg:ml-3 lg:mr-3 2xl:ml-8 2xl:mr-8">
                <div class="lg:w-1/3 2xl:w-1/3"><x-card-component cardtitle="Advancing Knowledge" :cardcontent="'Embracing lifelong learning, nurses pursue advanced degrees, certifications, and specialized training to remain adaptable and responsive to evolving healthcare needs.'" route="news" route_key="1" /></div>
                <div class="lg:w-1/3 2xl:w-1/3"><x-card-component cardtitle="Advancing Knowledge" :cardcontent="'Embracing lifelong learning, nurses pursue advanced degrees, certifications, and specialized training to remain adaptable and responsive to evolving healthcare needs.'" route="news" route_key="2" /></div>
                <div class="lg:w-1/3 2xl:w-1/3"><x-card-component cardtitle="Advancing Knowledge" :cardcontent="'Embracing lifelong learning, nurses pursue advanced degrees, certifications, and specialized training to remain adaptable and responsive to evolving healthcare needs.'" route="news" route_key="3" /></div>
            </div>
        </div>

        <div>
        <x-footer-component/>
        </div>
    </div>
</x-guest-layout> 