"use strict";

var ctx = document.getElementById("myChart2").getContext("2d");
var myChart = new Chart(ctx, {
	type: "bar",
	data: {
		labels: [
			"B.S.Indonesia",
			"B.S.Inggris",
			"B.S.Asing",
			"Seni Rupa",
			"Sendratasik",
			"B.S.Jawa"
		],
		datasets: [
			{
				label: "Jumlah Data",
				data: [5, 10, 15, 20, 10, 6],
				borderWidth: 2,
				backgroundColor: [
					"#f67575",
					"#ffa34d",
					"#1eb2a6",
					"#7f78d2",
					"#721b65",
					"#7d5e2a"
				],
				borderColor: "transparent",
				borderWidth: 2.5,
				pointBackgroundColor: "#ffffff",
				pointRadius: 4
			}
		]
	},
	options: {
		legend: {
			display: false
		},
		scales: {
			yAxes: [
				{
					gridLines: {
						drawBorder: false,
						color: "#f2f2f2"
					},
					ticks: {
						beginAtZero: true,
						stepSize: 5
					}
				}
			],
			xAxes: [
				{
					gridLines: {
						display: false
					}
				}
			]
		}
	}
});

