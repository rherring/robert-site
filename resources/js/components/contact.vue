<template>
    <div>
        <h1>Drop me a line...</h1>
        <div id="contact" name="contact" class="py-6">
            <div class="lg:grid grid-cols-2 gap-6 pb-6">
                <div class="m-0 p-0 space-y-4">
                    <input v-model="contactForm.name" class="w-full text-blue-400 bg-black bg-opacity-40 border border-black border-opacity-60" type="text" name="name" id="name" tabindex="1" placeholder="Name" required />
                    <input v-model="contactForm.email" class="w-full text-blue-400 bg-black bg-opacity-40 border border-black border-opacity-60" type="text" name="email" id="email" tabindex="2" placeholder="Email" required />
                    <input v-model="contactForm.url" class="w-full text-blue-400 bg-black bg-opacity-40 border border-black border-opacity-60" type="text" name="url" id="url" tabindex="3" placeholder="Website (optional)" />
                    <input v-model="contactForm.subject" class="w-full text-blue-400 bg-black bg-opacity-40 border border-black border-opacity-60" type="text" name="subject" id="subject" tabindex="4" placeholder="Subject" />
                </div>
                <div class="mt-4 lg:m-0 p-0">
                    <textarea v-model="contactForm.message" class="w-full h-full text-blue-400 bg-black bg-opacity-40 border border-black border-opacity-60" name="message" id="message" rows="5" cols="52" tabindex="5" placeholder="Message" required></textarea>
                </div>
            </div>
            <div class="hidden status">
                <p id="signup-response"></p>
            </div>
            <div class="lg:flex gap-6 space-y-6 lg:space-y-0">
                <button @click="onSubmit()" class="w-full p-2 text-blue-300 hover:text-blue-400 bg-white bg-opacity-30 hover:bg-opacity-10 border border-black border-opacity-60 ease-in-out transition-all duration-150 button" type="submit" >Send Message</button>
                <button @click="onReset()" class="w-full p-2 text-blue-300 hover:text-blue-400 bg-white bg-opacity-30 hover:bg-opacity-10 border border-black border-opacity-60" type="reset" >Reset Form</button>
            </div>

        </div>
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
                <div @click="openNewModal('videos')" class="flex gap-2 items-center lg:grid lg:grid-cols-4 lg:space-y-1 text-sm lg:text-base m-0 p-0 cursor-pointer text-white hover:text-blue-400 ease-in-out transition-all duration-150" >
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
                <div @click="openNewModal('instagram')" class="flex gap-2 items-center lg:grid lg:grid-cols-4 lg:space-y-1 text-sm lg:text-base m-0 p-0 cursor-pointer text-white hover:text-blue-400 ease-in-out transition-all duration-150">
                    <div class="">instagram:</div>
                    <div class="flex-grow lg:col-span-3">https://instagram.com/fromtherubble</div>
                </div>
                <!-- <a href="https://twitter.com/fishgraphics" target="_blank" class="flex gap-2 items-center lg:grid lg:grid-cols-4 lg:space-y-1 text-sm lg:text-base m-0 p-0"> -->
                    <!-- <div class="">twitter:</div> -->
                    <!-- <div class="flex-grow lg:col-span-3">https://twitter.com/fishgraphics</div> -->
                <!-- </a> -->
            </div>
        </div>
    </div>

</template>

<script>
import { ref, reactive, computed, onUpdated } from 'vue'

export default {
    name: "Contact",
    props: {
        modelValue: {
            type: Object,
            default: () => ({}),
        },
    },

    emits: ['new-modal'],

    setup(props, { emit }) {
        const contactForm = reactive({ name: '', email: '', url: '', subject: '', message: '' })

        onUpdated(() => {
            // console.log(contactForm)
        });

        function openNewModal(thisModal) {
            emit('new-modal', thisModal);
        }

        function onSubmit() {
            console.log(contactForm.name)
            if (contactForm.name && contactForm.email && contactForm.message) {
                axios.post('/contact-me', contactForm).then((response) => {
                    return response.data
                }).catch((error) => {
                    let er = error.response.data.errors
                    // let ov = Object.values(er)
                    alert(er)
                    console.log(error)
                });
            }
        }

        function onReset() {
            //
        }

        return { onSubmit, onReset, openNewModal, contactForm }
    }
}
</script>

<style>

</style>