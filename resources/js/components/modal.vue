<template>
    <vue-final-modal
        :esc-to-close="true"
        :transition="{
            'enter-active-class': 'transition duration-200 ease-in-out transform',
            'enter-from-class': 'translate-y-full',
            'enter-to-class': 'translate-y-0',
            'leave-active-class': 'transition duration-200 ease-in-out transform',
            'leave-to-class': 'translate-y-full',
            'leave-from-class': 'translate-y-0'
        }"
        classes="flex justify-center items-center"
    >
        <div class="flex items-center justify-center p-2 lg:px-4 lg:pt-4 lg:pb-10 text-center">
            <div class="relative max-w-screen-lg inline-block w-full p-6 bg-grayish-900 rounded-lg text-left overflow-hidden overflow-y-auto shadow transform transition-all max-h-screen" >
                <button class="cursor-pointer absolute top-0 text-right right-0 px-4 p-2 block text-white hover:text-blue-400 ease-in-out transition-all duration-150" @click="closeModal()">
                    &#215;
                </button>
            
                <ImportContact v-show="showContact" @new-modal="openModal" />
                <ImportVideos v-show="showVideos" />
                <ImportInstagram v-show="showInstagram" />
            </div>
        </div>
    </vue-final-modal>
</template>

<script>
import { $vfm, VueFinalModal, ModalsContainer } from 'vue-final-modal'
import { ref, reactive, onUpdated, onMounted, onUnmounted } from 'vue'
import ImportContact from './contact.vue'
import ImportVideos from './videos.vue'
import ImportInstagram from './instagram.vue'

export default {
    name: 'Modal',
    components: {
        VueFinalModal,
        ModalsContainer,
        ImportContact,
        ImportVideos,
        ImportInstagram
    },
    emits: ['close-modal'],
    props: [
        'whichModal'       
    ],
    setup(props, { emit }) {
        const showModal = ref(false)
        const showContact = ref(false)
        const showVideos = ref(false)
        const showInstagram = ref(false)

        function openModal(thisModal) {
            thisModal === 'contact' ? showContact.value = true : showContact.value = false
            thisModal === 'videos' ? showVideos.value = true : showVideos.value = false
            thisModal === 'instagram' ? showInstagram.value = true : showInstagram.value = false
        }

        function closeModal() {
            emit('close-modal', 'false');
        }
        onMounted(() => {
            // console.log('mounted')
        })

        onUnmounted(() => {
            // console.log('unmounted')
        })

        onUpdated(() => {
            props.whichModal === 'contact' ? showContact.value = true : showContact.value = false
            props.whichModal === 'videos' ? showVideos.value = true : showVideos.value = false
            props.whichModal === 'instagram' ? showInstagram.value = true : showInstagram.value = false
        })

        return { openModal, closeModal, showModal, showContact, showVideos, showInstagram }
    }
}
</script>