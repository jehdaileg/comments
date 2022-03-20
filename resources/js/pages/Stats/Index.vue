<template>
    <div>
        <h5 class="text-pink-300">Posts Analyzis</h5>

        <div
            class="flex justify-center space-x-2 items-center mx-auto text-white"
        >
            <LineChartComponent :posts="posts" />
        </div>

        <div class="mt-6">
            <FooterComponent />
        </div>
    </div>
</template>

<script setup>
import LineChartComponent from "../../components/Charts/LineChartComponent.vue";

import FooterComponent from "../../components/FooterComponent.vue";

const props = defineProps({
    posts: Array,
});
</script>
