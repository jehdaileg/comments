<template>
  <div>
    <LineChart
      :chart-data="data"
      :options="options"

    />
  </div>
</template>

<script setup>
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

Chart.register(LineController, PointElement, LineElement);

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
