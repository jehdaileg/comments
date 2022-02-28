<template>
    <div>
        <h5 class="text-white">Bloger side</h5>

        <section class="">
            <div class="container px-5 py-24 mx-auto">
                <div class="flex flex-wrap -mx-4 -my-8">
                    <div
                        class="py-8 px-4 lg:w-1/3"
                        v-for="post in posts"
                        :key="post.id"
                    >
                        <div class="h-full flex items-start">
                            <div
                                class="w-12 flex-shrink-0 flex flex-col text-center leading-none mr-2"
                            >
                                <span
                                    class="text-gray-400 pb-2 mb-2 border-b-2 border-gray-700"
                                    >{{ new Date(post.created_at).toLocaleDateString("en-US") }}</span
                                >
                                <span
                                    class="font-medium text-lg leading-none text-gray-300 title-font"
                                    >18</span
                                >
                            </div>
                            <div class="flex-grow pl-6">
                                <h2
                                    class="tracking-widest text-xs title-font font-medium text-indigo-400 mb-1"
                                >
                                    CATEGORY
                                </h2>
                                <h1
                                    class="title-font text-xl font-medium text-white mb-3"
                                >
                                    {{ post.title }}
                                </h1>
                                <p class="leading-relaxed mb-5">
                                    {{ post.content }}
                                </p>
                                <a class="inline-flex items-center">
                                    <img
                                        alt="blog"
                                        src="https://dummyimage.com/103x103"
                                        class="w-8 h-8 rounded-full flex-shrink-0 object-cover object-center"
                                    />
                                    <span class="flex-grow flex flex-col pl-3">
                                        <span
                                            class="title-font font-medium text-white"
                                            >{{ post.user.name }}</span
                                        >
                                    </span>
                                </a>

                                <div class="flex items-center flex-wrap">
                                    <a
                                        class="text-indigo-400 inline-flex items-center md:mb-2 lg:mb-0"
                                        >Read More and Comment
                                        <svg
                                            class="w-4 h-4 ml-2"
                                            viewBox="0 0 24 24"
                                            stroke="currentColor"
                                            stroke-width="2"
                                            fill="none"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                        >
                                            <path d="M5 12h14"></path>
                                            <path d="M12 5l7 7-7 7"></path>
                                        </svg>
                                    </a>
                                    <span
                                        class="text-gray-500 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-800"
                                    >
                                        <svg
                                            class="w-4 h-4 mr-1"
                                            stroke="currentColor"
                                            stroke-width="2"
                                            fill="none"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            viewBox="0 0 24 24"
                                        >
                                            <path
                                                d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"
                                            ></path>
                                            <circle
                                                cx="12"
                                                cy="12"
                                                r="3"
                                            ></circle></svg
                                        >1.2K
                                    </span>
                                    <span
                                        class="text-gray-500 inline-flex items-center leading-none text-sm"
                                    >
                                        <svg
                                            class="w-4 h-4 mr-1"
                                            stroke="currentColor"
                                            stroke-width="2"
                                            fill="none"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            viewBox="0 0 24 24"
                                        >
                                            <path
                                                d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"
                                            ></path></svg
                                        >{{ post.comments_count }}
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </div>
</template>

<script setup>
import { ref } from "vue";
import { Link, Head } from "@inertiajs/inertia-vue3";

const props = defineProps({
    posts: Array,
});

console.log(new Date(props.posts[0].created_at).toLocaleDateString("en-US"))

/* Just for test
console.log(props.posts[0].comments[1].body_comment);
*/
</script>
