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


console.log(props.posts);

console.tab(props.posts);


const dataValues = ref([10, 15, 17, 11, 4, 8, 21]);

const data = computed(() => ({
    labels: ["Jan", "Feb", "March", "April", "May", "June", "July"],

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
