<template>
    <div class="w-full h-full">
        <iframe class="iFrame overflow-hidden max-w-screen-md w-screen" :style="{ height: 'calc(' + myHeight + 'px - 100px)' }" src='https://www.sociablekit.com/app/embed/68507' frameborder='0' width="100%" height="1000"></iframe>
    </div>
</template>

<script>
import { ref, reactive, computed, onUpdated, onMounted, onUnmounted } from 'vue'
import { useWindowSize } from 'vue-window-size';

export default {
    name: "Instagram",
    props: {
        modelValue: {
            type: Object,
            default: () => ({}),
        },
    },

    emits: ['update:modelValue'],

    setup(props, { emit }) {
        const myWidth = ref('')
        const myHeight = ref('')

        const { width, height } = useWindowSize()

        function resizeModel() {
            myWidth.value = useWindowSize().width.value
            myHeight.value = useWindowSize().height.value
        }

        onMounted(() => {
            myWidth.value = useWindowSize().width.value
            myHeight.value = useWindowSize().height.value
            window.addEventListener('resize', resizeModel)
        })
        onUnmounted(() => {
            window.removeEventListener('resize', resizeModel)
        })

        return { resizeModel, myWidth, myHeight, windowWidth: width, windowHeight: height }
    }
}
</script>