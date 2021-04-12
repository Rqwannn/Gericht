$(".contenrAllMenu").owlCarousel({
    margin: 20,
    loop: true,
    autoWidth: true,
    items: 4,
    autoplay: true,
    autoplayTimeout: 5000,
});

if (JSON.parse(localStorage.getItem("Order"))) {
    localStorage.removeItem("Order");
}

const getDataOrder = document.querySelectorAll(".orderTrendingMenu");

for ([index, result] of getDataOrder.entries()) {
    result.addEventListener("click", function (event) {
        Swal.fire({
            title: "Are you sure?",
            text: "You will fill in further if this is the menu you ordered!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, Right!",
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire(
                    "Success!",
                    "Please check the bottom menu page.",
                    "success"
                );

                setTimeout(function () {
                    const setData = {
                        Nama: event.target.dataset.order,
                        Jumlah: 1,
                        Status: event.target.dataset.status,
                    };

                    localStorage.setItem("Order", JSON.stringify(setData));
                    document.location.href = "/menu";
                }, 1500);
            }
        });
    });
}
