<x-guest-layout>
    <div class="items-center">
        <x-header-full-component/>

                <div>
                    <div class="lg:flex flex-row">
                        <div class="lg:flex-grow lg:w-1/2 2xl:ml-32 xl:ml-10">
                            <div>
                                <div class="mt-4 ml-4 mr-4 md:mt-8 md:ml-8 md:mr-8 lg:mt-44 xl:ml-16">
                                    <h class="text-2xl  font-bold text-black lg:text-6xl font-gothic md:text-3xl">Contact Us</h>
                                    <p class="lg:hidden font-normal  text-sm mt-6 lg:text-xl font-gothic md:text-base">Feel free to contact us any time. We will get back to you as we can!</p>
                                    <p class="hidden lg:block font-normal  text-sm mt-6 lg:text-xl font-gothic">Feel free to contact us any time. We will get<br> back to you as we can!</p>
                                </div>
                                <div class="mt-4 ml-4 md:mt-6 md:ml-8 md:mr-8 xl:ml-16 xl:mr-16">
                                <!-- @if(session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                                @endif -->
                                    <form method="POST" action="" x-data="{
                                        postUrl:'',
                                        successMessage:false,
                                        errorMessage:false,
                                       
                                        handleSuccess(){
                                            this.successMessage = true
                                        },
                                        handleError(){
                                            this.errorMessage = true
                                        },
                                        
                                        doSubmit() {
                                            let fd = new FormData($el);
                                            postUrl='{{route('contact.submit')}}';
                                            $dispatch('formsubmit',{url:this.postUrl,formData:fd,target:$el.id});
                                        },
                                    }"
                                        @submit.prevent.stop="doSubmit();"
                                        @formresponse.window="console.log($event.detail);
                                        if($event.detail.target == $el.id){
                                            
                                            if($event.detail.content.success){
                                               handleSuccess();
                                            }
                                            
                                            else{
                                                handleError();
                                            }
                                            
                                            }">
                                        @csrf
                                            <div class="relative mt-4 mr-4 lg:mr-0 ">
                                                <input id="name" name="name" type="text" autocomplete="name"
                                                    class="w-full h-10 text-gray-900 placeholder-transparent border-0 border-b border-black peer focus:outline-none focus:border-0 border-b
                                                        border-black"
                                                    placeholder="Name" required/>
                                                <label for="name"
                                                    class="absolute left-0 -top-3.5 text-black text-sm lg:text-xl  transition-all peer-placeholder-shown:text-sm peer-placeholder-shown:md:text-base peer-placeholder-shown:lg:text-xl peer-placeholder-shown:text-black
                                                        peer-placeholder-shown:top-2 peer-focus:-top-3.5 peer-focus:text-black peer-focus:text-sm font-gothic">Name
                                                </label>
                                            </div>
                                            <div class="relative mt-4 lg:mt-16 mr-4 lg:mr-0 ">
                                                <input id="email" name="email" type="email" autocomplete="email"
                                                    class="w-full h-10 text-gray-900 placeholder-transparent border-0 border-b border-black peer focus:outline-none focus:border-0 border-b
                                                        border-black"
                                                    placeholder="Email" required />
                                                <label for="email"
                                                    class="absolute left-0 -top-3.5 text-black text-sm transition-all peer-placeholder-shown:text-sm peer-placeholder-shown:md:text-base peer-placeholder-shown:lg:text-xl peer-placeholder-shown:text-black
                                                        peer-placeholder-shown:top-2 peer-focus:-top-3.5 peer-focus:text-black peer-focus:text-sm font-gothic">Email
                                                </label>
                                            </div>
                                            <div class="relative mt-4 lg:mt-16 mr-4 lg:mr-0 ">
                                                <input id="message" name="message" type="text"
                                                    class="w-full h-10 text-gray-900 placeholder-transparent border-0 border-b border-black peer focus:outline-none focus:border-0 border-b
                                                        border-black"
                                                    placeholder="Mesage" required/>
                                                <label for="message"
                                                    class="absolute left-0 -top-3.5 text-black text-sm transition-all peer-placeholder-shown:text-sm peer-placeholder-shown:md:text-base peer-placeholder-shown:lg:text-xl peer-placeholder-shown:text-black
                                                        peer-placeholder-shown:top-2 peer-focus:-top-3.5 peer-focus:text-black peer-focus:text-sm font-gothic">Message
                                                </label>
                                            </div>
                                                
                                            <div class="mt-6 items-center text-center lg:mt-16 xl:mt-32">
                                                <button type="submit" class="cursor-pointer text-base font-bold font-gothic text-white bg-primary px-28 py-1.5 md:text-lg  lg:text-2xl xl:text-3xl xl:px-52 lg:px-48 lg:py-3 font-gothic tracking-widest">SEND</button>
                                            </div>
                                            <div x-show="successMessage" x-cloak class="mt-4 xl:mt-8 border border-gray-600 ml-2 mr-2 text-center  bg-base-100/80">
                                                <div class=" text-center mb-4">
                                                    <p class="text-sm font-inter mt-2">Your message has been successfully sent!</p>
                                                    <div class="mt-4 mb-2"><a class="text-white text-base font-bold bg-primary border border-primary font-teal px-4 py-2   " @click="$dispatch('linkaction', {link: '{{route('home')}}', route: 'home'})">OK</a></div>
                                                </div>
                                            </div>
                                            <div x-show="errorMessage" x-cloak class="mt-4 xl:mt-8 border border-red ml-2 mr-2 text-center">
                                                <div class=" text-center mb-4">
                                                    <p class="text-sm font-inter mt-2">Please enter valid information</p>
                                                    <div class="mt-4 mb-2"><a class="text-white text-base font-bold bg-red border border-red font-teal px-4 py-2   " @click="$dispatch('linkaction', {link: '{{route('home')}}', route: 'home'})">OK</a></div>
                                                </div>
                                            </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                        
                        
                        <div class="lg:w-1/2">
                            <div class="relative flex flex-row  mt-20 md:mt-32 md:mb-20 lg:flex justify-end ">
                                <div class="bg-primary h-full w-1/3 absolute  right-0 flex justify-end  "></div>
                                
                                    <div class=" bg-gradient-to-r from-lightblack to-black w-full text-white z-10 mt-8 mb-8 ml-8 mr-8 md:ml-12 md:mr-12 md:mt-14 md:mb-14 xl:mt-16 xl:mb-16 2xl:mt-20 2xl:mb-20 2xl:mr-28">
                                        <div class="ml-4 mt-8 md:ml-16 lg:ml-10 lg:pr-4 xl:ml-16 xl:mr-16 ">
                                            <div class="xl:mt-12"><h class="text-white text-sm font-bold font-inter md:text-xl lg:text-2xl xl:text-3xl">Info</h></div>
                                            <div class="flex mt-16 items-center lg:mt-8">
                                                <p class="text-white text-xs font-bold font-gothic md:text-base lg:text-xl ">Email</p>
                                                <p class="text-white text-xs font-gothic ml-14 md:ml-20 md:text-base lg:text-base xl:text-lg">craftnursingcollege.com</p>
                                            </div>
                                            <div class="flex mt-16 items-center lg:mt-8">
                                            <p class="text-white text-xs font-bold font-gothic md:text-base lg:text-xl">Phone No.</p>
                                            <p class="text-white text-xs font-gothic ml-6 md:ml-10 md:text-base lg:text-base xl:text-lg">+91 9526986000</p>
                                            </div>
                                            <div class="flex mt-16 lg:mt-8 ">
                                                <p class="text-white text-xs font-bold font-gothic md:text-base lg:text-xl">Address</p>
                                                <div class="flexflex-col mb-20">
                                                <p class="text-white text-xs font-inter mb-4 ml-14 md:text-base lg:text-base xl:text-lg">CRAFT HOSPITAL AND RESEARCH<br> CENTRE,VIII/77/ 2,3,4, Kodungallur P.O,<br> Chanthappura,Kodungallur, Thrissur,<br> KeralaPh: +91 6282396564</p>
                                                <p class="text-white text-xs font-inter mb-4 ml-14 md:text-base lg:text-base xl:text-lg">CRAFT Multispeciality Centre 5th & <br>6th Floor,Imperial Amity,Chalikkavattam,<br>NH66 Bypass Kochi 682032,<br> Kerala Ph:+91 9526986000</p>
                                                </div> 
                                            </div>
                                        </div>
                                    </div>
                               
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