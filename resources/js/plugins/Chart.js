import { Chart, Legend, Title, Tooltip } from "chart.js";

Chart.register(Legend, Title, Tooltip);

Chart.defaults.plugins.title = true;

console.log("Test Chart JS plugin configuration on the vue js side in my fullstack application")
