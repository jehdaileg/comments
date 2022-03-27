<template>
    <ChartLayout>
        <LineChart
            :chart-data="data"
            :options="options"
            css-classes="chart-container"
        />
    </ChartLayout>
</template>

<script setup>
import ChartLayout from "../../layouts/ChartLayout.vue";

import { ref, computed } from "vue";

import { LineChart } from "vue-chart-3";

import {
    Chart,
    ArcElement,
    LineElement,
    BarElement,
    PointElement,
    BarController,
    BubbleController,
    DoughnutController,
    LineController,
    PieController,
    PolarAreaController,
    RadarController,
    ScatterController,
    CategoryScale,
    LinearScale,
    LogarithmicScale,
    RadialLinearScale,
    TimeScale,
    TimeSeriesScale,
    Decimation,
    Filler,
    Legend,
    Title,
    Tooltip,
} from "chart.js";

Chart.register(
    LineController,
    PointElement,
    LineElement,
    CategoryScale,
    LinearScale
);

const props = defineProps({
    posts: Array,
});

//get specific datas from server

console.table(props.posts.map(({id, views}) => ({id, views})));

const dataValues = computed(() => props.posts.map(post => post.views));

const data = computed(() => ({
    labels: props.posts.map(post => post.id),

    datasets: [
        {
            label: "Foo",
            data: dataValues.value,
            backgroundColor: "#dc322f",
        },
    ],
}));

const options = ref({
    plugins: {
        title: {
            text: "Chart Line",
        },
    },
});
</script>
