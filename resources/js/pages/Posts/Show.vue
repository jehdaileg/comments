<template>
    <div>
        <section class="text-gray-400 bg-gray-900 body-font">
            <div class="container px-5 py-24 mx-auto flex flex-col">
                <div class="lg:w-4/6 mx-auto">
                    <div class="rounded-lg h-64 overflow-hidden">
                        <img
                            alt="content"
                            class="object-cover object-center h-full w-full"
                            src="https://dummyimage.com/1200x500"
                        />
                    </div>
                    <div class="flex flex-col sm:flex-row mt-10">
                        <div class="sm:w-1/3 text-center sm:pr-8 sm:py-8">
                            <div
                                class="flex flex-col items-center text-center justify-center"
                            >
                                <h2
                                    class="font-medium title-font mt-4 text-white text-lg"
                                >
                                    {{ post.user.name }}
                                </h2>
                                <div
                                    class="w-12 h-1 bg-indigo-500 rounded mt-2 mb-4"
                                ></div>
                                <p class="text-base text-gray-400">
                                    {{ post.created_at }}
                                </p>
                            </div>
                        </div>
                        <div
                            class="sm:w-2/3 sm:pl-8 sm:py-8 sm:border-l border-gray-800 sm:border-t-0 border-t mt-4 pt-4 sm:mt-0 text-center sm:text-left"
                        >
                            <p class="leading-relaxed text-lg mb-4">
                                {{ post.content }}
                            </p>
                            <p>
                                <span
                                    class="cursor-pointer"
                                    @click="displayCommentInput()"
                                    ><ChatAltIcon
                                        class="h-10 w-10"
                                    ></ChatAltIcon
                                ></span>
                            </p>

                            <text-area-comment
                                :open="open"
                                :post_id="post.id"
                                @close="closeCommentInput()"
                            ></text-area-comment>

                            <p class="underline">Comments:</p>
                            <ul>
                                <li
                                    v-for="comment in comments"
                                    :key="comment.id"
                                >
                                    <span>{{ comment.user.name }}</span>
                                    {{ comment.body_comment }}
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>

<script setup>
import { ref } from "vue";
import TextAreaComment from "../../components/TextAreaComment.vue";
import { ChatAltIcon } from "@heroicons/vue/outline";

const props = defineProps({
    post: Object,
    comments: Array,
});

defineExpose({
    post: props.post,
});

const open = ref(false);

function displayCommentInput() {
    open.value = true;
}

function closeCommentInput() {
    open.value = false;
}
console.log(props.comments);

Echo.channel("publish-comment-channel").listen(".publishCommentEvent", (e) => {
    console.log(e.user);
});
</script>
