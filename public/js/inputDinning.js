const ReturnTable = document.querySelector("#ReturnTable");

ReturnTable.addEventListener("click", function () {
    document.location.href = "/privatedining";
});

const TableOne = document.querySelector(".TableText-1");
const TableTwo = document.querySelector(".TableText-2");
const TableThree = document.querySelector(".TableText-3");
const TableFour = document.querySelector(".TableText-4");

const WrapperTableOne = document.querySelector(".WrapperTable-One");
const WrapperTableTwo = document.querySelector(".WrapperTable-Two");
const WrapperTableThree = document.querySelector(".WrapperTable-Three");
const WrapperTableFour = document.querySelector(".WrapperTable-Four");

TableOne.addEventListener("click", function (result) {
    if (WrapperTableOne.classList.contains("TrueLine")) {
        const btnNode = document.querySelectorAll(".wrapperInfoName p");
        btnNode.forEach((Value) => {
            if (Value.classList == "activeTable") {
                Value.classList.remove("activeTable");
            }
        });

        // Remove True Line

        const AllTrue = document.querySelectorAll(".TrueLine");
        AllTrue.forEach((Value) => {
            if (Value.classList.contains("TrueLine")) {
                Value.classList.remove("TrueLine");
            }
        });

        const setNode = result.target;
        setNode.classList.add("activeTable");

        // Slide Animation

        WrapperTableTwo.style.transform = "translateX(600px)";
        WrapperTableThree.style.transform = "translateX(600px)";
        WrapperTableFour.style.transform = "translateX(600px)";

        setTimeout(function () {
            WrapperTableOne.style.display = "initial";

            setTimeout(function () {
                WrapperTableTwo.style.display = "none";
                WrapperTableThree.style.display = "none";
                WrapperTableFour.style.display = "none";
            }, 400);
            setTimeout(function () {
                WrapperTableOne.style.transform = "translateX(0px)";
            }, 400);
            setTimeout(function () {
                AllTrue.forEach((Value) => {
                    console.log(Value);
                    if (!Value.classList.contains("TrueLine")) {
                        Value.classList.add("TrueLine");
                    }
                });
            }, 900);
        }, 400);
    } else {
    }
});

TableTwo.addEventListener("click", function (result) {
    if (WrapperTableTwo.classList.contains("TrueLine")) {
        const btnNode = document.querySelectorAll(".wrapperInfoName p");
        btnNode.forEach((Value) => {
            if (Value.classList == "activeTable") {
                Value.classList.remove("activeTable");
            }
        });

        // Remove True Line

        const AllTrue = document.querySelectorAll(".TrueLine");
        AllTrue.forEach((Value) => {
            if (Value.classList.contains("TrueLine")) {
                Value.classList.remove("TrueLine");
            }
        });

        const setNode = result.target;
        setNode.classList.add("activeTable");

        // Slide Animation

        WrapperTableOne.style.transform = "translateX(600px)";
        WrapperTableThree.style.transform = "translateX(600px)";
        WrapperTableFour.style.transform = "translateX(600px)";

        setTimeout(function () {
            WrapperTableTwo.style.display = "initial";

            setTimeout(function () {
                WrapperTableOne.style.display = "none";
                WrapperTableThree.style.display = "none";
                WrapperTableFour.style.display = "none";
            }, 400);
            setTimeout(function () {
                WrapperTableTwo.style.transform = "translateX(0px)";
            }, 400);
            setTimeout(function () {
                AllTrue.forEach((Value) => {
                    console.log(Value);
                    if (!Value.classList.contains("TrueLine")) {
                        Value.classList.add("TrueLine");
                    }
                });
            }, 900);
        }, 400);
    }
});

TableThree.addEventListener("click", function (result) {
    if (WrapperTableThree.classList.contains("TrueLine")) {
        const btnNode = document.querySelectorAll(".wrapperInfoName p");
        btnNode.forEach((Value) => {
            if (Value.classList == "activeTable") {
                Value.classList.remove("activeTable");
            }
        });

        // Remove True Line

        const AllTrue = document.querySelectorAll(".TrueLine");
        AllTrue.forEach((Value) => {
            if (Value.classList.contains("TrueLine")) {
                Value.classList.remove("TrueLine");
            }
        });

        const setNode = result.target;
        setNode.classList.add("activeTable");

        // Slide Animation

        WrapperTableOne.style.transform = "translateX(600px)";
        WrapperTableTwo.style.transform = "translateX(600px)";
        WrapperTableFour.style.transform = "translateX(600px)";

        setTimeout(function () {
            WrapperTableThree.style.display = "initial";

            setTimeout(function () {
                WrapperTableOne.style.display = "none";
                WrapperTableTwo.style.display = "none";
                WrapperTableFour.style.display = "none";
            }, 400);
            setTimeout(function () {
                WrapperTableThree.style.transform = "translateX(0px)";
            }, 400);
            setTimeout(function () {
                AllTrue.forEach((Value) => {
                    console.log(Value);
                    if (!Value.classList.contains("TrueLine")) {
                        Value.classList.add("TrueLine");
                    }
                });
            }, 900);
        }, 400);
    } else {
    }
});

TableFour.addEventListener("click", function (result) {
    if (WrapperTableFour.classList.contains("TrueLine")) {
        const btnNode = document.querySelectorAll(".wrapperInfoName p");
        btnNode.forEach((Value) => {
            if (Value.classList == "activeTable") {
                Value.classList.remove("activeTable");
            }
        });

        // Remove True Line

        const AllTrue = document.querySelectorAll(".TrueLine");
        AllTrue.forEach((Value) => {
            if (Value.classList.contains("TrueLine")) {
                Value.classList.remove("TrueLine");
            }
        });

        const setNode = result.target;
        setNode.classList.add("activeTable");

        // Slide Animation

        WrapperTableOne.style.transform = "translateX(600px)";
        WrapperTableTwo.style.transform = "translateX(600px)";
        WrapperTableThree.style.transform = "translateX(600px)";

        setTimeout(function () {
            WrapperTableFour.style.display = "initial";

            setTimeout(function () {
                WrapperTableOne.style.display = "none";
                WrapperTableTwo.style.display = "none";
                WrapperTableThree.style.display = "none";
            }, 400);
            setTimeout(function () {
                WrapperTableFour.style.transform = "translateX(0px)";
            }, 400);
            setTimeout(function () {
                AllTrue.forEach((Value) => {
                    console.log(Value);
                    if (!Value.classList.contains("TrueLine")) {
                        Value.classList.add("TrueLine");
                    }
                });
            }, 900);
        }, 400);
    } else {
    }
});

const BtnStep1 = document.querySelector("#BtnStep1");

BtnStep1.addEventListener("click", function () {
    const EmailValue = document.querySelector("#EmailUser");
    const NamaValue = document.querySelector("#NameUser");
    const MessageDate = document.querySelector("#MessageDate");
    const TableName = document.querySelector("#TableName");

    const AuthNamaTable = document.querySelector(".AuthNamaTable");
    const AuthEmailTable = document.querySelector(".AuthEmailTable");
    const AuthTanggalTable = document.querySelector(".AuthTanggalTable");
    const AuthTableName = document.querySelector(".AuthTableName");

    AuthEmailTable.style.display = "none";
    AuthNamaTable.style.display = "none";
    AuthTanggalTable.style.display = "none";
    AuthTableName.style.display = "none";

        if (
            EmailValue.value == "" ||
            NamaValue.value == "" ||
            MessageDate.value == "" ||
            TableName.value == "" ||
            !EmailValue.value.includes("@")
        ) {
            for (let index = 0; index <= 4; index++) {
                if (EmailValue.value == "" && index == 0) {
                    AuthEmailTable.style.display = "block";
                    AuthEmailTable.innerHTML = "Email must be entered";
                    continue;
                } else if (NamaValue.value == "" && index == 1) {
                    AuthNamaTable.style.display = "block";
                    AuthNamaTable.innerHTML = "Name must be entered";
                    continue;
                } else if (MessageDate.value == "" && index == 2) {
                    AuthTanggalTable.style.display = "block";
                    AuthTanggalTable.innerHTML = "Date must be entered";
                    continue;
                }   else if (TableName.value == "" && index == 3) {
                    AuthTableName.style.display = "block";
                    AuthTableName.innerHTML = "Table must be entered";
                    continue;
                } else if (!EmailValue.value.includes("@") && EmailValue.value.length > 0 && index == 4) {
                    AuthEmailTable.style.display = "block";
                    AuthEmailTable.innerHTML = "Email must have an @ symbol";
                    break;
                }
            }
        } else {

            const GetStatus = document.getElementById('GetStatus');

            if(GetStatus.value == "Guest"){
                Swal.fire({
                    title: "Are you sure?",
                    text: "Do you want to pay off immediately?",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#fb6340",
                    confirmButtonText: "Yes, Pay Now",
                    cancelButtonText: "Cancel",
                }).then((result) => {
                    if (result.isConfirmed) {
                        AjaxBayarSekarang();
                    }
                });
            } else {
                Swal.fire({
                    title: "Are you sure?",
                    text: "Do you want to pay off immediately?",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#fb6340",
                    confirmButtonText: "Yes, Pay Now",
                    cancelButtonText: "No, Pay Later",
                }).then((result) => {
                    if (result.isConfirmed) {
                        AjaxBayarSekarang();
                    } else if (
                        result.dismiss === Swal.DismissReason.cancel
                    ) {
                        AjaxBayarNanti();
                    }
                });
            }
        }
});

function PayLaterLink() {
    document.location.href = "/order";
}

function PayOnTheSpot(Data) {
    $.ajax({
        url: "http://127.0.0.1:8000/Api/PayProses.php",
        type: "POST",
        dataType: "JSON",
        data: {
            Id: Data,
        },
        error: function () {
            Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "Something went wrong!",
                footer: "<a href>If there is a problem please report it!</a>",
            });
        },
        success: function () {
            const Toast = Swal.mixin({
                toast: true,
                position: "top-end",
                showConfirmButton: false,
                timer: 2000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener("mouseenter", Swal.stopTimer);
                    toast.addEventListener("mouseleave", Swal.resumeTimer);
                },
            });

            Toast.fire({
                icon: "success",
                title: "The Order Has Been Made",
            });

            setTimeout(function () {
                document.location.href = "/order";
            }, 2200);
        },
    });
}

const BtnReset1 = document.querySelector("#BtnReset1");

BtnReset1.addEventListener("click", function () {
    const NameUser = document.querySelector("#NameUser");
    const TotalOrder = document.querySelector("#TotalOrder");
    const MessageDate = document.querySelector("#MessageDate");
    const TableName = document.querySelector("#TableName");

    const AuthNamaTable = document.querySelector(".AuthNamaTable");
    const AuthEmailTable = document.querySelector(".AuthEmailTable");
    const AuthTanggalTable = document.querySelector(".AuthTanggalTable");
    const AuthTableName = document.querySelector(".AuthTableName");

    AuthEmailTable.style.display = "none";
    AuthNamaTable.style.display = "none";
    AuthTanggalTable.style.display = "none";
    AuthTableName.style.display = "none";

    NameUser.value = "";
    TotalOrder.value = "";
    MessageDate.value = "";
    TableName.value = "";
});

$(function() {
    $( "#MessageDate" ).datepicker(
        {
            minDate: new Date(),
            dateFormat: 'yy-mm-dd'
        }
    );
});

if(JSON.parse(localStorage.getItem('Order'))){
    localStorage.removeItem('Order');
} 

if(JSON.parse(localStorage.getItem('OrderTable'))){
    let getData = JSON.parse(localStorage.getItem('OrderTable'));
    const TableName = document.getElementById('TableName');

    TableName.value = getData;
}

function AjaxBayarNanti(){
    $.ajax({
        url: "http://127.0.0.1:8000/Api/OrderTable.php",
        type: "POST",
        dataType: "JSON",
        data: {
            id_user: $("#Id_User").val(),
            NamaTabel: $("#TableName").val(),
            Nama: $("#NameUser").val(),
            Email: $("#EmailUser").val(),
            Total: $("#TotalOrder").val(),
            MessageDate: $("#MessageDate").val(),
        },
        error: function () {
            Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "Something went wrong!",
                footer:
                    "<a href>If there is a problem please report it immediately!</a>",
            });
        },
        success: function (result) {
            const Name = result.nama;

            Swal.fire(
                "Begged To Pay Immediately?",
                `${Name}, The table that you ordered has been processed`,
                "success"
            );

            setTimeout(() => {
                document.location.href = "/order";
            }, 700);
        },
    });
}

function AjaxBayarSekarang(){
    $.ajax({
        url: "http://127.0.0.1:8000/Api/OrderTable.php",
        type: "POST",
        dataType: "JSON",
        data: {
            id_user: $("#Id_User").val(),
            NamaTabel: $("#TableName").val(),
            Nama: $("#NameUser").val(),
            Email: $("#EmailUser").val(),
            Total: $("#TotalOrder").val(),
            MessageDate: $("#MessageDate").val(),
        },
        error: function (e) {
            Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "Something went wrong!",
                footer:
                    "<a href>If there is a problem please report it immediately!</a>",
            });
        },
        success: function (result) {
            $.ajax({
                url:
                    "http://127.0.0.1:8000/TablePayment",
                headers: {
                    "X-CSRF-Token": $(
                        'meta[name="csrf-token"]'
                    ).attr("content"),
                },
                type: "POST",
                dataType: "JSON",
                data: {
                    id: result.id,
                    namaTable : TableName.value
                },
                error: function (e) {
                    Swal.fire({
                        icon: "error",
                        title: "Oops...",
                        text: "Something went wrong!",
                        footer:
                            "<a href>If there is a problem please report it!</a>",
                    });
                },
                success: function (result) {
                    if(result.status == false){
                        Swal.fire({
                            title: 'Oppss.',
                            text: `${result.massage}`,
                            icon: 'error',
                            confirmButtonColor: '#3085d6',
                            confirmButtonText: 'Close'
                          }).then((result) => {
                            if (result.isConfirmed) {
                                
                            }
                          })
                        } else {
                            window
                            .open(
                                result.redirect_url,
                                "_blank"
                            )
                            .focus();
                        Swal.fire({
                            title: "Success",
                            text:
                                "Thank you For Completing The Payment.",
                            icon: "success",
                            showCancelButton: true,
                            confirmButtonColor: "#3085d6",
                            cancelButtonColor: "#d33",
                            confirmButtonText:
                                "To The Order Page",
                            cancelButtonText: "Stay Here",
                        }).then((result) => {
                            if (result.isConfirmed) {
                                document.location.href =
                                    "/order";
                            } else if (
                                !result.isConfirmed
                            ) {
                                const CircleOne = document.querySelector(
                                    ".barOne"
                                );
                                const CircleOneAfter = document.querySelector(
                                    ".LineOne"
                                );
                                const Check = document.querySelector(
                                    ".circle-1"
                                );
                                const iconTable = document.querySelector(
                                    ".fa-feather-alt"
                                );

                                CircleOne.style.background =
                                    " #2dce89";
                                CircleOneAfter.style.background =
                                    "#2dce89";
                                Check.style.display =
                                    "block";
                                Check.style.color = "white";
                                iconTable.style.display =
                                    "none";

                                const CircleTow = document.querySelector(
                                    ".barTwo"
                                );
                                const CheckTwo = document.querySelector(
                                    ".circle-2"
                                );
                                const iconTableTwo = document.querySelector(
                                    ".fa-credit-card"
                                );

                                CircleTow.style.background =
                                    " #2dce89";
                                CheckTwo.style.display =
                                    "block";
                                CheckTwo.style.color =
                                    "white";
                                iconTableTwo.style.display =
                                    "none";
                            }
                        });
                    }
                },
            });
        },
    });
}