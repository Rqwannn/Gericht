$(document).ready(function () {
    $("#TableOrder").DataTable({
        paging: true,
        lengthChange: false,
        searching: true,
        ordering: true,
        info: true,
        autoWidth: false,
        responsive: true,
        language: {
            search: "",
        },
        dom: "Bfrtip",
        buttons: ["pdf", "excel"],
    });
    $("#TableOrder-2").DataTable({
        paging: true,
        lengthChange: false,
        searching: true,
        ordering: true,
        info: false,
        autoWidth: false,
        responsive: true,
        language: {
            search: "",
        },
    });
});

// Order Page

function funDelete(Data) {
    Swal.fire({
        title: "Are you sure?",
        text: "Do you want to delete this data!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, delete it!",
    }).then((result) => {
        if (result.isConfirmed) {
            setTimeout(function () {
                $.ajax({
                    url: "http://127.0.0.1:8000/Api/DeleteOrder.php",
                    type: "POST",
                    dataType: "JSON",
                    data: {
                        id: Data,
                    },
                    error: function () {
                        Swal.fire({
                            icon: "error",
                            title: "Oops...",
                            text: "Something went wrong!",
                            footer: "<a href>Please report if there is a problem?</a>",
                        });
                    },
                    success: function () {
                        Swal.fire(
                            "Deleted!",
                            "Your data has been deleted.",
                            "success"
                        );
                        setTimeout(function () {
                            window.location.reload();
                        }, 250);
                    },
                });
            }, 100);
        }
    });
}

if (
    document.getElementById("chartSold") != null &&
    document.getElementById("chartSoldBar") != null
) {
    var options = {
        series: [
            {
                name: "Dessert",
                type: "column",
                data: [113, 101, 122, 117, 103, 112, 127, 111, 134, 112, 120],
            },
            {
                name: "Food",
                type: "area",
                data: [144, 155, 141, 167, 152, 173, 201, 153, 162, 137, 143],
            },
            {
                name: "Drink",
                type: "line",
                data: [130, 125, 136, 130, 145, 135, 164, 152, 159, 136, 139],
            },
        ],
        chart: {
            height: 350,
            type: "line",
            stacked: false,
        },
        stroke: {
            width: [0, 2, 5],
            curve: "smooth",
        },
        plotOptions: {
            bar: {
                columnWidth: "50%",
            },
        },

        fill: {
            opacity: [0.85, 0.25, 1],
            gradient: {
                inverseColors: false,
                shade: "light",
                type: "vertical",
                opacityFrom: 0.85,
                opacityTo: 0.55,
                stops: [0, 100, 100, 100],
            },
        },
        markers: {
            size: 0,
        },
        xaxis: {
            categories: [
                "Jan",
                "Feb",
                "Mar",
                "Apr",
                "May",
                "Jun",
                "Jul",
                "Aug",
                "Sep",
                "Oct",
                "Nov",
                "Des",
            ],
        },
        yaxis: {
            title: {
                text: "Points",
            },
            min: 0,
        },
        tooltip: {
            shared: true,
            intersect: false,
            y: {
                formatter: function (y) {
                    if (typeof y !== "undefined") {
                        return y.toFixed(0) + " Portions Sold";
                    }
                    return y;
                },
            },
        },
    };

    var chart = new ApexCharts(document.querySelector("#chartSold"), options);
    chart.render();

    var options = {
        series: [
            {
                data: [58, 55, 50, 49, 38, 34, 27, 24, 23, 20],
                name: "Total",
            },
        ],
        chart: {
            type: "bar",
            height: 350,
        },
        plotOptions: {
            bar: {
                horizontal: true,
            },
        },
        dataLabels: {
            enabled: false,
        },
        xaxis: {
            categories: [
                "Roasted Duck Colvert",
                "Chicken Saltimbocca",
                "Cocktail",
                "Panna Cotta",
                "Bouillabasse",
                "Roasted Scallop",
                "Negroni",
                "Prinsesstårta",
                "Semifreddo",
                "Veal Sweetbread",
            ],
        },
        tooltip: {
            shared: true,
            intersect: false,
            y: {
                formatter: function (y) {
                    if (typeof y !== "undefined") {
                        return y.toFixed(0) + " Portions Sold";
                    }
                    return y;
                },
            },
        },
    };

    var chart = new ApexCharts(
        document.querySelector("#chartSoldBar"),
        options
    );
    chart.render();
}

// User Page

if (document.getElementById("chart-3") != null) {
    var options = {
        series: [
            {
                name: "User",
                data: [1, 3, 4, 7, 12, 19, 20, 27, 28, 30, 35, 39],
            },
            {
                name: "Subscribe",
                data: [2, 4, 4, 6, 8, 8, 11, 13, 15, 18, 22, 27],
            },
        ],
        chart: {
            height: 350,
            type: "area",
        },
        dataLabels: {
            enabled: false,
        },
        stroke: {
            curve: "smooth",
        },
        xaxis: {
            categories: [
                "Jan",
                "Feb",
                "Mar",
                "Apr",
                "May",
                "Jun",
                "Jul",
                "Aug",
                "Sep",
                "Oct",
                "Nov",
                "Des",
            ],
        },
        tooltip: {
            shared: true,
            intersect: false,
            y: {
                formatter: function (y) {
                    if (typeof y !== "undefined") {
                        return y.toFixed(0) + " People";
                    }
                    return y;
                },
            },
        },
    };
}

var chart = new ApexCharts(document.querySelector("#chart-3"), options);
chart.render();

function intDelete(Data) {
    Swal.fire({
        title: "Are you sure?",
        text: "Do you want to delete this data!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, delete it!",
    }).then((result) => {
        if (result.isConfirmed) {
            setTimeout(function () {
                $.ajax({
                    url: "http://127.0.0.1:8000/Api/DeleteUser.php",
                    type: "POST",
                    dataType: "JSON",
                    data: {
                        id: Data,
                    },
                    error: function () {
                        Swal.fire({
                            icon: "error",
                            title: "Oops...",
                            text: "Something went wrong!",
                            footer: "<a href>Please report if there is a problem?</a>",
                        });
                    },
                    success: function () {
                        Swal.fire(
                            "Deleted!",
                            "Your data has been deleted.",
                            "success"
                        );
                        setTimeout(function () {
                            window.location.reload();
                        }, 250);
                    },
                });
            }, 100);
        }
    });
}

function intUpdate(data) {
    document.location.href = `/updateUser/${data}`;
}

function setUpdateUser(Data) {
    const NameValue = document.querySelector("#nameUser");
    const EmailValue = document.querySelector("#emailUser");
    const PasswordValue = document.querySelector("#passwordUser");
    const StatusValue = document.querySelector("#statusUser");
    const BtnProfile = document.querySelector(".clickBtnProfile");

    Swal.fire({
        title: "Are you sure?",
        text: "Make sure the changed data is correct!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, Update it!",
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                url: "http://127.0.0.1:8000/Api/UpdateUser.php",
                type: "POST",
                dataType: "JSON",
                data: {
                    Id: Data,
                    Name: $(NameValue).val(),
                    Email: $(EmailValue).val(),
                    Password: $(PasswordValue).val(),
                    Status: $(StatusValue).val(),
                    BtnProfile: $(BtnProfile).text(),
                },
                error: function (result) {
                    Swal.fire({
                        icon: "error",
                        title: "Oops...",
                        text: "Something went wrong!",
                        footer: "<a href>Report This Problem?</a>",
                    });
                },
                success: function (result) {
                    const NameAdmin = result.BtnProfile;

                    Swal.fire(
                        "Updated!",
                        `${NameAdmin}, Your file has been Updated.`,
                        "success"
                    );

                    setTimeout(function () {
                        window.location.reload();
                    }, 250);
                },
            });
        }
    });
}

// Order Success & Failed Page

function orderDelete(Data) {
    Swal.fire({
        title: "Are you sure?",
        text: "Do you want to delete this data!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, delete it!",
    }).then((result) => {
        if (result.isConfirmed) {
            setTimeout(function () {
                $.ajax({
                    url: "http://127.0.0.1:8000/Api/DeleteOrder.php",
                    type: "POST",
                    dataType: "JSON",
                    data: {
                        id: Data,
                    },
                    error: function () {
                        Swal.fire({
                            icon: "error",
                            title: "Oops...",
                            text: "Something went wrong!",
                            footer: "<a href>Please report if there is a problem?</a>",
                        });
                    },
                    success: function () {
                        Swal.fire(
                            "Deleted!",
                            "Your data has been deleted.",
                            "success"
                        );
                        setTimeout(function () {
                            window.location.reload();
                        }, 250);
                    },
                });
            }, 100);
        }
    });
}
