<template>
    <div>

        <h5 class="text-pink-200">Here Posts Statistics</h5>

        <div class="flex justify-center space-x-2 items-center mx-auto">
            <LineChartComponent />
        </div>

        <div class="mt-6">
            <FooterComponent />
        </div>

    </div>
</template>

<script setup>

import LineChartComponent from "../../components/Charts/LineChartComponent.vue";

import FooterComponent from "../../components/FooterComponent.vue";

</script>
