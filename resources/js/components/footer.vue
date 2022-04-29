<template>
    <div class="footer max-w-screen-lg mx-auto">
        <p class="text-gray-400 text-center">date &copy; Copyright All Rights Reserved<br class="lg:hidden"/><span class="hidden lg:contents" style="font-family:exolight;"> &bull; </span><span class="cursor-default text-white" style="font-family:exolight;">803.553.2043</span> &bull; <span class="cursor-pointer text-white hover:text-blue-400 ease-in-out transition-all duration-150" @click="openModal('contact')" style="font-family:exolight;">info@robert-herring.com</span></p>
    </div>

    <ImportModal v-model="showModal" @close-modal="closeModal" :whichModal="whichModal" />
</template>

<script>
import { ref, reactive, onUpdated } from 'vue'
import ImportModal from './modal.vue'

export default {
    name: 'Footer',
    components: {
        ImportModal
    },
    props: ['whichModal'],
    setup(props) {
        const showModal = ref(false)
        const whichModal = ref('')
        const showContact = ref(false)
        const showVideos = ref(false)
        const showInstagram = ref(false)

        function openModal(thisModal) {

            whichModal.value = thisModal

            if (showModal.value != true) {
                return showModal.value = true
            }
        }

        function closeModal() {
            return showModal.value = false
        }

        onUpdated(() => {
            // console.log('test')
        });

        return { openModal, closeModal, showModal, whichModal, showContact, showVideos, showInstagram }
    }
}
</script>