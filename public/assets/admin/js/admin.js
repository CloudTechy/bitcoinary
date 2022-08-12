$(document).ready(function () {
    "use strict";
    bkLib.onDomLoaded(function () {
        $(".nicEdit").each(function (index) {
            $(this).attr("id", "nicEditor" + index);
            new nicEditor({ fullPanel: true }).panelInstance(
                "nicEditor" + index,
                { hasPanel: true }
            );
        });
    });
});

$(document).ready(function () {
    if ($("#apex-bar-chart").length > 0) {
        ("use strict");
        // apex-bar-chart js
        var options = {
            series: [
                {
                    name: "Total Deposit",
                    data: [
                        24225, 16755, 22210, 300, 21950, 69600, 16622, 12190,
                        40601, 7200, 11800, 35000,
                    ],
                },
                {
                    name: "Total Withdraw",
                    data: [],
                },
            ],
            chart: {
                type: "bar",
                height: 400,
                toolbar: {
                    show: false,
                },
            },
            plotOptions: {
                bar: {
                    horizontal: false,
                    columnWidth: "50%",
                    endingShape: "rounded",
                },
            },
            dataLabels: {
                enabled: false,
            },
            stroke: {
                show: true,
                width: 2,
                colors: ["transparent"],
            },
            xaxis: {
                categories: [
                    "January",
                    "February",
                    "March",
                    "April",
                    "May",
                    "June",
                    "July",
                    "August",
                    "September",
                    "October",
                    "November",
                    "December",
                ],
            },
            yaxis: {
                title: {
                    text: "$",
                    style: {
                        color: "#7c97bb",
                    },
                },
            },
            grid: {
                xaxis: {
                    lines: {
                        show: false,
                    },
                },
                yaxis: {
                    lines: {
                        show: false,
                    },
                },
            },
            fill: {
                opacity: 1,
            },
            tooltip: {
                y: {
                    formatter: function (val) {
                        return "$" + val + " ";
                    },
                },
            },
        };

        var chart = new ApexCharts(
            document.querySelector("#apex-bar-chart"),
            options
        );
        chart.render();

        // apex-line chart
        var options = {
            chart: {
                height: 430,
                type: "area",
                toolbar: {
                    show: false,
                },
                dropShadow: {
                    enabled: true,
                    enabledSeries: [0],
                    top: -2,
                    left: 0,
                    blur: 10,
                    opacity: 0.08,
                },
                animations: {
                    enabled: true,
                    easing: "linear",
                    dynamicAnimation: {
                        speed: 1000,
                    },
                },
            },
            dataLabels: {
                enabled: false,
            },
            series: [
                {
                    name: "Series 1",
                    data: [],
                },
            ],
            fill: {
                type: "gradient",
                gradient: {
                    shadeIntensity: 1,
                    opacityFrom: 0.7,
                    opacityTo: 0.9,
                    stops: [0, 90, 100],
                },
            },
            xaxis: {
                categories: [],
            },
            grid: {
                padding: {
                    left: 5,
                    right: 5,
                },
                xaxis: {
                    lines: {
                        show: false,
                    },
                },
                yaxis: {
                    lines: {
                        show: false,
                    },
                },
            },
        };
        var chart = new ApexCharts(
            document.querySelector("#withdraw-line"),
            options
        );
        chart.render();

        // apex-line chart
        var options = {
            chart: {
                height: 430,
                type: "area",
                toolbar: {
                    show: false,
                },
                dropShadow: {
                    enabled: true,
                    enabledSeries: [0],
                    top: -2,
                    left: 0,
                    blur: 10,
                    opacity: 0.08,
                },
                animations: {
                    enabled: true,
                    easing: "linear",
                    dynamicAnimation: {
                        speed: 1000,
                    },
                },
            },
            colors: ["#00E396", "#0090FF"],
            dataLabels: {
                enabled: false,
            },
            series: [
                {
                    name: "Series 1",
                    data: [100, 102, 11600],
                },
            ],
            fill: {
                type: "gradient",
                gradient: {
                    shadeIntensity: 1,
                    opacityFrom: 0.7,
                    opacityTo: 0.9,
                    stops: [0, 90, 100],
                },
            },
            xaxis: {
                categories: ["24 Jul", "26 Jul", "05 Aug"],
            },
            grid: {
                padding: {
                    left: 5,
                    right: 5,
                },
                xaxis: {
                    lines: {
                        show: false,
                    },
                },
                yaxis: {
                    lines: {
                        show: false,
                    },
                },
            },
        };

        var chart = new ApexCharts(
            document.querySelector("#deposit-line"),
            options
        );
        chart.render();

        $(".copyBoard").click(function () {
            var copyText = document.getElementById("referralURL");
            copyText.select();
            copyText.setSelectionRange(0, 99999);
            /*For mobile devices*/
            document.execCommand("copy");
            iziToast.success({
                message: "Copied: " + copyText.value,
                position: "topRight",
            });
        });
    }
});
