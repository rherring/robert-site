<div>
    <h1>Drop me a line...</h1>
    <form id="contact" name="contact" action="/contact-me" method="post" class="py-6">
        @csrf
        <div class="lg:grid grid-cols-2 gap-6 pb-6">
            <div class="m-0 p-0 space-y-4">
                <input class="w-full text-blue-400 bg-black bg-opacity-40 border border-black border-opacity-60" type="text" name="name" id="name" value="" tabindex="1" placeholder="Name" required />
                <input class="w-full text-blue-400 bg-black bg-opacity-40 border border-black border-opacity-60" type="text" name="email" id="email" value="" tabindex="2" placeholder="Email" required />
                <input class="w-full text-blue-400 bg-black bg-opacity-40 border border-black border-opacity-60" type="text" name="url" id="url" value="" tabindex="3" placeholder="Website (optional)" />
                <input class="w-full text-blue-400 bg-black bg-opacity-40 border border-black border-opacity-60" type="text" name="subject" id="subject" value="" tabindex="4" placeholder="Subject" />
            </div>
            <div class="mt-4 lg:m-0 p-0">
                <textarea class="w-full h-full text-blue-400 bg-black bg-opacity-40 border border-black border-opacity-60" name="message" id="message" rows="5" cols="52" tabindex="5" placeholder="Message" required></textarea>
            </div>
        </div>
        <div class="hidden status">
            <p id="signup-response"></p>
        </div>
        <div class="lg:flex gap-6 space-y-6 lg:space-y-0">
            <input class="w-full p-2 text-blue-300 hover:text-blue-400 bg-white bg-opacity-30 hover:bg-opacity-10 border border-black border-opacity-60 ease-in-out transition-all duration-150" type="submit" name="submit" class="button" id="submit_btn" value="Send Message" />
            <input class="w-full p-2 text-blue-300 hover:text-blue-400 bg-white bg-opacity-30 hover:bg-opacity-10 border border-black border-opacity-60" type="reset" name="reset" value="Reset Form" />
        </div>

    </form>
    <div class="contact">
        <h3>Other Ways to Contact Me</h3>

        <div>
            <div class="flex gap-2 items-center lg:grid lg:grid-cols-4 lg:space-y-1 text-sm lg:text-base m-0 p-0 cursor-default text-white">
                <div class="">Email:</div>
                <div class="flex-grow lg:col-span-3">info@robert-herring.com</div>
            </div>
            <div class="flex gap-2 items-center lg:grid lg:grid-cols-4 lg:space-y-1 text-sm lg:text-base m-0 p-0 cursor-default text-white">
                <div class="">Phone:</div>
                <div class="flex-grow lg:col-span-3">803.553.2043</div>
            </div>
            <div class="flex gap-2 items-center lg:grid lg:grid-cols-4 lg:space-y-1 text-sm lg:text-base m-0 p-0 cursor-pointer text-white hover:text-blue-400 ease-in-out transition-all duration-150" onclick="Livewire.emit('openModal', 'videos')">
                <div class="">Video Work:</div>
                <div class="flex-grow lg:col-span-3">YouTube Playlist</div>
            </div>
            <a href="https://www.facebook.com/pixelrubble" target="_blank" class="flex gap-2 items-center lg:grid lg:grid-cols-4 lg:space-y-1 text-sm lg:text-base m-0 p-0">
                <div class="">Facebook:</div>
                <div class="flex-grow lg:col-span-3">https://www.facebook.com/pixelrubble</div>
            </a>
            <a href="https://www.linkedin.com/in/robertbherring" target="_blank" class="flex gap-2 items-center lg:grid lg:grid-cols-4 lg:space-y-1 text-sm lg:text-base m-0 p-0">
                <div class="">LinkedIn:</div>
                <div class="flex-grow lg:col-span-3">https://www.linkedin.com/in/robertbherring</div>
            </a>
            <a href="https://dribbble.com/pixelrubble" target="_blank" class="flex gap-2 items-center lg:grid lg:grid-cols-4 lg:space-y-1 text-sm lg:text-base m-0 p-0">
                <div class="">dribbble:</div>
                <div class="flex-grow lg:col-span-3">https://dribbble.com/pixelrubble</div>
            </a>
            <div class="flex gap-2 items-center lg:grid lg:grid-cols-4 lg:space-y-1 text-sm lg:text-base m-0 p-0 cursor-pointer text-white hover:text-blue-400 ease-in-out transition-all duration-150" onclick="Livewire.emit('openModal', 'instagram')">
                <div class="">instagram:</div>
                <div class="flex-grow lg:col-span-3">https://instagram.com/fromtherubble</div>
            </div>
            <!-- <a href="https://twitter.com/fishgraphics" target="_blank" class="flex gap-2 items-center lg:grid lg:grid-cols-4 lg:space-y-1 text-sm lg:text-base m-0 p-0"> -->
                <!-- <div class="">twitter:</div> -->
                <!-- <div class="flex-grow lg:col-span-3">https://twitter.com/fishgraphics</div> -->
            <!-- </a> -->
        </div>
    </div>

    <div class="cursor-pointer absolute top-0 text-right right-0 px-4 p-2 block text-white hover:text-blue-400 ease-in-out transition-all duration-150" wire:click="$emit('closeModal')">&#215;</div>
</div>
