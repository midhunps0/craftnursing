<x-guest-layout>
    <div class="items-center">
        <x-header-full-component/>

            <div class="flex justify-center xl:ml-24 xl:mr-24 2xl:ml-32 2xl:mr-32">
                <div class="border border-gray bg-primary/10 mt-6 ml-4 mr-4 md:w-3/4    ">
                    <div class="bg-teal  border-teal   p-4 md:px-8"><h class="text-white text-xl md:text-2xl font-semibold font-inter items-center ">Application Form</h></div>
                    <div>
                        <!-- @if(session('success'))
                            <div class="alert alert-success mt-2">
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
                            dosubmit() {
                                let fd = new FormData($el);
                                postUrl:'{{route('applicationform.submit')}}';
                                $dispatch('formsubmit',{url:this.postUrl,formData:fd,target:$el.id});
                            }
                            }"
                            @submit.prevent.stop="dosubmit();"
                            @formresponse.window="console.log($event.detail);
                                if($event.detail.target == $el.id){
                                    if($event.detail.content.success){
                                        handleSuccess();
                                    }
                                    else{
                                        console.log('error')
                                        handleError();
                                    }
                                }"
                            >
                         @csrf
                            <div class="space-y-4 mt-4  p-4 md:text-base font-inter md:ml-16 md:mr-16">
                                <div class="space-y-2 ">
                                    <label for="name">Name:</label><br>
                                    <input id="name" name="name" type="text" autocomplete="name"
                                    class="border border-teal rounded-md md:w-full">
                                </div>
                                <div class="space-y-2">
                                    <label for="address">Address:</label><br>
                                    <textarea name="address" type="text" id="address" autocomplete="address"
                                    class="border border-teal rounded-md md:w-full"></textarea>
                                </div>
                                <div class="space-y-2">
                                    <label for="qualification">Highest qualification:</label><br>
                                    <input name="qualification" type="text" id="qualification"
                                    class="border border-teal rounded-md md:w-full">
                                </div>
                                <div class="space-y-2">
                                    <label for="subject">Subject:</label><br>
                                    <input name="subject" type="text" id="subject"
                                    class="border border-teal rounded-md md:w-full"></input>
                                </div>
                                <div class="space-y-2">
                                    <label for="mark">Mark(Percentage):</label><br>
                                    <input name="mark" type="number" id="mark" 
                                    class="border border-teal rounded-md md:w-full">
                                </div>
                                <div class="space-y-2">
                                    <label for="email">Email:</label><br>
                                    <input name="email" type="email" id="email" autocomplete="email"
                                    class="border border-teal rounded-md md:w-full">
                                </div>
                                <div class="space-y-2">
                                    <label for="contact">Contact No:</label><br>
                                    <input name="contact" type="number" id="contact"
                                    class="border border-teal rounded-md md:w-full">
                                </div>
                                <div class="mt-8 text-right">
                                    <button type="submit" class="cursor-pointer  text-white bg-teal px-4 py-2 text-base md:text-lg 2xl:text-lg lg:text-base font-bold font-inter">Submit</button>
                                </div>
                            </div> 
                            <div x-show="successMessage" x-cloak class="mt-4 xl:mt-8 border border-teal rounded-md ml-2 mr-2 text-center mt-2 mb-4">
                                <div class=" text-center mb-4">
                                    <p class="text-sm font-inter mt-2">Your application is successfully Submitted!</p>
                                    <div class="mt-4 mb-2"><a class="text-white text-base font-bold bg-teal border border-primary font-teal px-4 py-2   " @click="$dispatch('linkaction', {link: '{{route('home')}}', route: 'home'})">OK</a></div>
                                </div>
                            </div>
                            <div x-show="errorMessage" x-cloak class="mt-4 xl:mt-8 border border-red rounded-md ml-2 mr-2 text-center mt-2 mb-4">
                                <div class=" text-center mb-4">
                                    <p class="text-sm font-inter mt-2">Please enter valid information</p>
                                    <div class="mt-4 mb-2"><a class="text-white text-base font-bold bg-red border border-red font-teal px-4 py-2   " @click="$dispatch('linkaction', {link: '{{route('applicationform')}}', route: 'applicationform'})">OK</a></div>
                                </div>
                            </div> 
                        </form>
                    </div>
                </div>
            </div>


            <footer>
                <div class="mt-8">
                    <x-footer-component/> 
                </div>
            </footer>

        
    </div>
</x-guest-layout> 