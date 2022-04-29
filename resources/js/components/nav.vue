<template>
    <Slide class="lg:hidden">
        <div class="cursor-pointer" @click="openModal('contact')"><span class="px-4 text-xl py-2 block hover:text-gray-200" style="margin:0; font-family:exolight;">contact</span></div>
        <div><a href="/download-resume" target="_blank" class="block"><span class="px-4 text-xl py-2 block hover:text-gray-200">resume</span></a></div>
    </Slide>

    <ImportModal v-model="showModal" @close-modal="closeModal" :whichModal="whichModal" />
</template>

<script>
import { ref, reactive, onUpdated } from 'vue'
import ImportModal from './modal.vue'
import { Slide } from 'vue3-burger-menu'

export default {
    name: 'Navigation',
    components: {
        Slide, // Register your component
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

<style>

</style>