<template>
    <Teleport to="body">
        <div
            v-if="open"
            class="z-[999] flex justify-center h-screen top-0 fixed right-0 left-0 bg-black/20"
        >
            <div class="bg-white shadow border max-h-72 w-96 mt-16 p-5">
                <div class="text-right">
                    <button @click="emit('close')">
                        <XIcon class="w-4 h-4 float-right" />
                    </button>
                </div>

                <div
                    class="app min-h-screen min-v-screen p-8 bg-grey-lightest font-sans"
                >
                    <div class="row sm:flex">

                        <form @submit.prevent="form.post(`/postComment/${post_id}`); emit('close');">
                            <label for="comment">Your comment:</label>
                            <textarea
                                v-model="form.body_comment"
                                name=""
                                id=""
                                cols="20"
                                rows="5"
                            ></textarea>
                            <button class="px-4 py-1 text-white bg-indigo-500">
                                Send Comment
                            </button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </Teleport>
</template>

<script setup>
import { XIcon } from "@heroicons/vue/outline";
import { useForm } from "@inertiajs/inertia-vue3";

const form = useForm({
    body_comment: null,
});

const props = defineProps({
    open: Boolean,
    post_id: Number,

});

const emit = defineEmits(["close"]);

function sendComment() {
    console.log(props.post_id);
}
</script>
