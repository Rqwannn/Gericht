const showCard = (element) => {
    return `<div class="contentMenu-2 mt-5">
    <div class="infoFood d-flex flex-column">
        <div class="d-flex justify-content-between">
            <h5 class="text-orange">${element["nama"]}</h5>
            <h5 class="text-orange">$ <span class="hargaFood">${element["harga"]}</span></h5>
        </div>
        <p style="font-size: 15px; line-height: 28px;">${element["penjelasan"]}</p>
    </div>
</div>`;
};

const FoodsetHarga = (element) => {
    return `${element["harga"]}`;
};

const FoodsetName = (element) => {
    return `${element["nama"]}`;
};

const DrinksetHarga = (element) => {
    return `${element["harga"]}`;
};

const DrinksetName = (element) => {
    return `${element["nama"]}`;
};

const DessertsetHarga = (element) => {
    return `${element["harga"]}`;
};

const DessertsetName = (element) => {
    return `${element["nama"]}`;
};

let setIndexFood = 0;
let lastIndexFood = 0;
let fristIndexFood = 0;

let setHargaFood = [];
let setHargaDrink = [];
let setHargaDessert = [];

let setNameFood = [];
let setNameDrink = [];
let setNameDessert = [];

const callFood = () => {
    fetch("http://127.0.0.1:8000/Api/Food.php")
        .then((result) => {
            let Value = result.json();
            return Value;
        })
        .then((result) => {
            const Pembungkus = document.querySelector(".hiddenFood-Y");
            let setCard = "";
            let IndexValue = 0;
            result.forEach((value, index) => {
                setCard += showCard(value);
                setHargaFood.push(FoodsetHarga(value));
                setNameFood.push(FoodsetName(value));

                if (index >= 5) {
                    if (value != "") {
                        IndexValue++;
                    }
                    lastIndexFood = IndexValue;
                }

                if (index == 0) {
                    fristIndexFood = index;
                }
            });
            Pembungkus.innerHTML = setCard;
        });
};

callFood();

const Pembungkus = document.querySelector(".hiddenFood-Y");
let indexFood = 0;

function BtnUpFood() {
    const InfoFood = document.querySelectorAll(".contentMenu-2");

    if (setIndexFood == fristIndexFood) {
    } else {
        indexFood -= 26;
        [...InfoFood].forEach((result) => {
            result.style.transform = `translateY(-${indexFood}vh)`;
        });

        setIndexFood--;
    }
}

function BtnDownFood() {
    const InfoFood = document.querySelectorAll(".contentMenu-2");

    if (setIndexFood == lastIndexFood) {
    } else {
        indexFood += 26;
        [...InfoFood].forEach((result) => {
            result.style.transform = `translateY(-${indexFood}vh)`;
        });
        setIndexFood++;
    }
}

// Minuman

const showDrink = (element) => {
    return `<div class="contentMenu-3 mt-5">
    <div class="infoFood d-flex flex-column">
        <div class="d-flex justify-content-between">
            <h5 class="text-orange">${element["nama"]}</h5>
            <h5 class="text-orange">$ <span class="hargaFood">${element["harga"]}</span></h5>
        </div>
        <p style="font-size: 15px; line-height: 28px;">${element["penjelasan"]}</p>
    </div>
</div>`;
};

let setIndexDrink = 0;
let lastIndexDrink = 0;
let fristIndexDrink = 0;

const callDrink = () => {
    fetch("http://127.0.0.1:8000/Api/Drink.php")
        .then((result) => {
            let Value = result.json();
            return Value;
        })
        .then((result) => {
            const Pembungkus = document.querySelector(".hiddenDrink-Y");
            let setCard = "";
            let IndexValue = 0;
            result.forEach((value, index) => {
                setCard += showDrink(value);
                setHargaDrink.push(DrinksetHarga(value));
                setNameDrink.push(DrinksetName(value));

                if (index >= 5) {
                    if (value != "") {
                        IndexValue++;
                    }

                    lastIndexDrink = IndexValue;
                }

                if (index == 0) {
                    fristIndexDrink = index;
                }
            });

            Pembungkus.innerHTML = setCard;
        });
};

callDrink();

const Pembungkus2 = document.querySelector(".hiddenFood-Y");
let indexDrink = 0;

function BtnUpDrink() {
    const InfoDrink = document.querySelectorAll(".contentMenu-3");
    console.log(lastIndexDrink);
    if (setIndexDrink == fristIndexDrink) {
    } else {
        indexDrink -= 26;
        [...InfoDrink].forEach((result) => {
            result.style.transform = `translateY(-${indexDrink}vh)`;
        });
        setIndexDrink--;
    }
}

function BtnDownDrink() {
    const InfoDrink = document.querySelectorAll(".contentMenu-3");

    if (setIndexDrink == lastIndexDrink) {
    } else {
        indexDrink += 26;
        [...InfoDrink].forEach((result) => {
            result.style.transform = `translateY(-${indexDrink}vh)`;
        });
        setIndexDrink++;
    }
}

// Dessert
const showDessert = (element) => {
    return `<div class="contentMenu-4 mt-5">
    <div class="infoFood d-flex flex-column">
        <div class="d-flex justify-content-between">
            <h5 class="text-orange">${element["nama"]}</h5>
            <h5 class="text-orange">$ <span class="hargaFood">${element["harga"]}</span></h5>
        </div>
        <p style="font-size: 15px; line-height: 28px;">${element["penjelasan"]}</p>
    </div>
</div>`;
};

let setIndexDessert = 0;
let lastIndexDessert = 0;
let fristIndexDessert = 0;

const callDessert = () => {
    fetch("http://127.0.0.1:8000/Api/Dessert.php")
        .then((result) => {
            let Value = result.json();
            return Value;
        })
        .then((result) => {
            const Pembungkus = document.querySelector(".hiddenDessert-Y");
            let setCard = "";
            let IndexValue = 0;
            result.forEach((value, index) => {
                setCard += showDessert(value);
                setHargaDessert.push(DessertsetHarga(value));
                setNameDessert.push(DessertsetName(value));

                if (index >= 5) {
                    if (value != "") {
                        IndexValue++;
                    }

                    lastIndexDessert = IndexValue;
                }

                if (index == 0) {
                    fristIndexDessert = index;
                }
            });

            Pembungkus.innerHTML = setCard;
        });
};

callDessert();

const Pembungkus3 = document.querySelector(".hiddenDessert-Y");
let indexDessert = 0;

function BtnUpDessert() {
    const InfoDessert = document.querySelectorAll(".contentMenu-4");
    if (setIndexDessert == fristIndexDessert) {
    } else {
        indexDessert -= 26;
        [...InfoDessert].forEach((result) => {
            result.style.transform = `translateY(-${indexDessert}vh)`;
        });
        setIndexDessert--;
    }
}

function BtnDownDessert() {
    const InfoDessert = document.querySelectorAll(".contentMenu-4");
    if (setIndexDessert == lastIndexDessert) {
    } else {
        indexDessert += 26;
        [...InfoDessert].forEach((result) => {
            result.style.transform = `translateY(-${indexDessert}vh)`;
        });
        setIndexDessert++;
    }
}

const SubmitOrder = document.querySelector(".SubmitOrder");

// Jumlah pesanan

const totalFood = document.querySelector("#totalFood");
const totalDrink = document.querySelector("#totalDrink");
const totalDessert = document.querySelector("#totalDessert");

// Input Value

const Email = document.getElementById("email");
const Name = document.getElementById("name");
const Food = document.getElementById("food");
const Drink = document.getElementById("drink");
const Dessert = document.getElementById("dessert");

// Total Order

const setWrapperOrder = (result) => {
    return `<div class="contentOrder mt-2 d-flex justify-content-between">
    <div class="d-flex setOrder">
    <p style="margin-right: 5px;" class="setName">${result.nama}</p>
    <p>X <span class="setAmount">${result.jumlah}</span></p>
    </div>
    <p>$ <span class="setPrice">${result.harga}</span></p>
    </div>`;
};

const thisWrapper = [];

let OrderFoodTwice = [];
let OrderDrinkTwice = [];
let OrderDessertTwice = [];

let InputTwice = 0;

SubmitOrder.addEventListener("click", function (event) {
    event.preventDefault();
    let cekJikaSudah = 0;
    let Authorize = 0;

    const setOrderName = document.querySelector(".setOrder p:nth-child(1)");
    const setOrderPrice = document.querySelector(".setPrice");
    const setOrderAmount = document.querySelector(".setAmount");
    const YourAddress = document.querySelector(".YourAddress");

    const AuthTotalFood = document.querySelector(".AuthTotalFood");
    const AuthTotalDrink = document.querySelector(".AuthTotalDrink");
    const AuthTotalDessert = document.querySelector(".AuthTotalDessert");
    const AuthAddress = document.querySelector(".AuthAddress");

    AuthTotalFood.style.display = "none";
    AuthTotalDrink.style.display = "none";
    AuthTotalDessert.style.display = "none";
    AuthAddress.style.display = "none";

    for (let index = 0; index < 4; index++) {
        if (
            totalFood.value == "" &&
            index == 0 &&
            Food.value != "Choose Your Food"
        ) {
            AuthTotalFood.innerHTML = `Total Food Must Be Field`;
            AuthTotalFood.style.display = "block";
            continue;
        } else if (
            totalDrink.value == "" &&
            index == 1 &&
            Drink.value != "Choose Your Drink"
        ) {
            AuthTotalDrink.innerHTML = `Total Drink Must Be Field`;
            AuthTotalDrink.style.display = "block";
            continue;
        } else if (
            totalDessert.value == "" &&
            index == 2 &&
            Dessert.value != "Choose Your Dessert"
        ) {
            AuthTotalDessert.innerHTML = `Total Dessert Must Be Field`;
            AuthTotalDessert.style.display = "block";
            continue;
        } else if (YourAddress.value == "" && index == 3) {
            AuthAddress.innerHTML = `Address Must Be Filled`;
            AuthAddress.style.display = "block";
            continue;
        }
    }

    // Validation Total

    if (
        (totalFood.value != "" && Food.value != "Choose Your Food") ||
        (totalDrink.value != "" && Drink.value != "Choose Your Drink") ||
        (totalDessert.value != "" && Dessert.value != "Choose Your Dessert")
    ) {
        $.ajax({
            url: "http://127.0.0.1:8000/Api/setTotalIngredient.php",
            type: "POST",
            dataType: "JSON",
            data: {
                NamaFood: $(Food).val(),
                NamaDrink: $(Drink).val(),
                NamaDessert: $(Dessert).val(),
                TotalFood: $(totalFood).val(),
                TotalDrink: $(totalDrink).val(),
                TotalDessert: $(totalDessert).val(),
            },
            error: function () {
                Swal.fire({
                    icon: "error",
                    title: "Oops...",
                    text: "Something went wrong!",
                    footer: "<a href>Report A Problem?</a>",
                });
            },
            success: function (result) {
                let tersediaFood = result.TersediaFood;
                let tersediaDrink = result.TersediaDrink;
                let tersediaDessert = result.TersediaDessert;

                let cekSudahFood = 0;
                let cekSudahDrink = 0;
                let cekSudahDessert = 0;

                for (let index = 0; index < 4; index++) {
                    if (
                        parseInt(totalFood.value) > parseInt(tersediaFood) &&
                        cekSudahFood == 0
                    ) {
                        AuthTotalFood.innerHTML = `only ${tersediaFood} pieces left`;
                        AuthTotalFood.style.display = "block";
                        cekSudahFood = 1;
                        Authorize = 1;
                        continue;
                    } else if (
                        parseInt(totalDrink.value) > parseInt(tersediaDrink) &&
                        cekSudahDrink == 0
                    ) {
                        AuthTotalDrink.innerHTML = `only ${tersediaDrink} pieces left`;
                        AuthTotalDrink.style.display = "block";
                        cekSudahDrink = 1;
                        Authorize = 1;
                        continue;
                    } else if (
                        parseInt(totalDessert.value) >
                            parseInt(tersediaDessert) &&
                        cekSudahDessert == 0
                    ) {
                        AuthTotalDessert.innerHTML = `only ${tersediaDessert} pieces left`;
                        AuthTotalDessert.style.display = "block";
                        cekSudahDessert = 1;
                        Authorize = 1;
                        continue;
                    }
                }

                // Set Order

                if (Authorize == 0) {
                    for (cekJikaSudah = 0; cekJikaSudah <= 1; cekJikaSudah++) {
                        const ParentWrapper =
                            document.querySelector(".FoodOrder");

                        if (cekJikaSudah == 0) {
                            if (setOrderName.innerHTML == "Order...") {
                                if (
                                    Food.value != "" &&
                                    totalFood.value != "" &&
                                    Food.value != "Choose Your Food"
                                ) {
                                    setOrderName.innerHTML = Food.value;
                                    setOrderAmount.innerHTML = totalFood.value;

                                    let setPrice = 0;
                                    for (
                                        let food = 0;
                                        food <= setNameFood.length;
                                        food++
                                    ) {
                                        if (Food.value == setNameFood[food]) {
                                            setPrice += parseInt(
                                                setHargaFood[food]
                                            );
                                        }
                                    }

                                    setOrderPrice.innerHTML =
                                        setPrice * parseInt(totalFood.value);

                                    Food.value = "Choose Your Food";
                                    totalFood.value = "";
                                    AuthTotalFood.innerHTML = ``;
                                    AuthTotalFood.style.display = "none";

                                    InputTwice = 4;

                                    continue;
                                } else if (
                                    Drink.value != "" &&
                                    totalDrink.value != "" &&
                                    Drink.value != "Choose Your Drink"
                                ) {
                                    setOrderName.innerHTML = Drink.value;
                                    setOrderAmount.innerHTML = totalDrink.value;
                                    let setPrice = 0;
                                    for (
                                        let drink = 0;
                                        drink <= setNameDrink.length;
                                        drink++
                                    ) {
                                        if (
                                            Drink.value == setNameDrink[drink]
                                        ) {
                                            setPrice += parseInt(
                                                setHargaDrink[drink]
                                            );
                                        }
                                    }
                                    setOrderPrice.innerHTML =
                                        setPrice * parseInt(totalDrink.value);

                                    Drink.value = "Choose Your Drink";
                                    totalDrink.value = "";
                                    AuthTotalDrink.innerHTML = ``;
                                    AuthTotalDrink.style.display = "none";

                                    InputTwice = 4;

                                    continue;
                                } else {
                                    if (
                                        Dessert.value != "" &&
                                        totalDessert.value != "" &&
                                        Dessert.value != "Choose Your Dessert"
                                    ) {
                                        setOrderName.innerHTML = Dessert.value;
                                        setOrderAmount.innerHTML =
                                            totalDessert.value;
                                        let setPrice = 0;
                                        for (
                                            let dessert = 0;
                                            dessert <= setNameDessert.length;
                                            dessert++
                                        ) {
                                            if (
                                                Dessert.value ==
                                                setNameDessert[dessert]
                                            ) {
                                                setPrice += parseInt(
                                                    setHargaDessert[dessert]
                                                );
                                            }
                                        }

                                        setOrderPrice.innerHTML =
                                            setPrice *
                                            parseInt(totalDessert.value);

                                        Dessert.value = "Choose Your Dessert";
                                        totalDessert.value = "";
                                        AuthTotalDessert.innerHTML = ``;
                                        AuthTotalDessert.style.display = "none";

                                        InputTwice = 4;

                                        continue;
                                    }
                                }
                            } else {
                                continue;
                            }
                        } else if (cekJikaSudah == 1) {
                            if (
                                Food.value != "" &&
                                totalFood.value != "" &&
                                Food.value != "Choose Your Food"
                            ) {
                                let setPrice = 0;
                                for (
                                    let food = 0;
                                    food <= setNameFood.length;
                                    food++
                                ) {
                                    if (Food.value == setNameFood[food]) {
                                        setPrice += parseInt(
                                            setHargaFood[food]
                                        );
                                    }
                                }
                                let hasilPrice =
                                    setPrice * parseInt(totalFood.value);

                                let setObjectFood = {
                                    nama: Food.value,
                                    jumlah: totalFood.value,
                                    harga: hasilPrice,
                                };

                                AuthTotalFood.innerHTML = ``;
                                AuthTotalFood.style.display = "none";

                                if (
                                    Drink.value != "" &&
                                    totalDrink.value != "" &&
                                    Drink.value != "Choose Your Drink"
                                ) {
                                    let setPrice = 0;
                                    for (
                                        let drink = 0;
                                        drink <= setNameDrink.length;
                                        drink++
                                    ) {
                                        if (
                                            Drink.value == setNameDrink[drink]
                                        ) {
                                            setPrice += parseInt(
                                                setHargaDrink[drink]
                                            );
                                        }
                                    }

                                    let hasilPrice =
                                        setPrice * parseInt(totalDrink.value);

                                    let setObjectDrink = {
                                        nama: Drink.value,
                                        jumlah: totalDrink.value,
                                        harga: hasilPrice,
                                    };

                                    let GetWrapper =
                                        setWrapperOrder(setObjectDrink);
                                    $(ParentWrapper).append(GetWrapper);

                                    Drink.value = "Choose Your Drink";
                                    totalDrink.value = "";
                                    AuthTotalDrink.innerHTML = ``;
                                    AuthTotalDrink.style.display = "none";

                                    InputTwice = 4;

                                    if (
                                        Dessert.value != "" &&
                                        totalDessert.value != "" &&
                                        Dessert.value != "Choose Your Dessert"
                                    ) {
                                        let setPrice = 0;
                                        for (
                                            let dessert = 0;
                                            dessert <= setNameDessert.length;
                                            dessert++
                                        ) {
                                            if (
                                                Dessert.value ==
                                                setNameDessert[dessert]
                                            ) {
                                                setPrice += parseInt(
                                                    setHargaDessert[dessert]
                                                );
                                            }
                                        }

                                        let hasilPrice =
                                            setPrice *
                                            parseInt(totalDessert.value);

                                        let setObjectDessert = {
                                            nama: Dessert.value,
                                            jumlah: totalDessert.value,
                                            harga: hasilPrice,
                                        };

                                        let GetWrapper =
                                            setWrapperOrder(setObjectDessert);
                                        $(ParentWrapper).append(GetWrapper);

                                        Dessert.value = "Choose Your Dessert";
                                        totalDessert.value = "";
                                        AuthTotalDessert.innerHTML = ``;
                                        AuthTotalDessert.style.display = "none";

                                        InputTwice = 4;
                                    }
                                }
                            } else if (
                                Drink.value != "" &&
                                totalDrink.value != "" &&
                                Drink.value != "Choose Your Drink"
                            ) {
                                let setPrice = 0;
                                for (
                                    let drink = 0;
                                    drink <= setNameDrink.length;
                                    drink++
                                ) {
                                    if (Drink.value == setNameDrink[drink]) {
                                        setPrice += parseInt(
                                            setHargaDrink[drink]
                                        );
                                    }
                                }

                                let hasilPrice =
                                    setPrice * parseInt(totalDrink.value);

                                let setObjectDrink = {
                                    nama: Drink.value,
                                    jumlah: totalDrink.value,
                                    harga: hasilPrice,
                                };

                                let GetWrapper =
                                    setWrapperOrder(setObjectDrink);
                                $(ParentWrapper).append(GetWrapper);

                                Drink.value = "Choose Your Drink";
                                totalDrink.value = "";
                                AuthTotalDrink.innerHTML = ``;
                                AuthTotalDrink.style.display = "none";

                                InputTwice = 4;

                                if (
                                    Dessert.value != "" &&
                                    totalDessert.value != "" &&
                                    Dessert.value != "Choose Your Dessert"
                                ) {
                                    let setPrice = 0;
                                    for (
                                        let dessert = 0;
                                        dessert <= setNameDessert.length;
                                        dessert++
                                    ) {
                                        if (
                                            Dessert.value ==
                                            setNameDessert[dessert]
                                        ) {
                                            setPrice += parseInt(
                                                setHargaDessert[dessert]
                                            );
                                        }
                                    }

                                    let hasilPrice =
                                        setPrice * parseInt(totalDessert.value);

                                    let setObjectDessert = {
                                        nama: Dessert.value,
                                        jumlah: totalDessert.value,
                                        harga: hasilPrice,
                                    };

                                    let GetWrapper =
                                        setWrapperOrder(setObjectDessert);
                                    $(ParentWrapper).append(GetWrapper);

                                    Dessert.value = "Choose Your Dessert";
                                    totalDessert.value = "";
                                    AuthTotalDessert.innerHTML = ``;
                                    AuthTotalDessert.style.display = "none";

                                    InputTwice = 4;
                                }
                            } else if (
                                Dessert.value != "" &&
                                totalDessert.value != "" &&
                                Dessert.value != "Choose Your Dessert"
                            ) {
                                let setPrice = 0;
                                for (
                                    let dessert = 0;
                                    dessert <= setNameDessert.length;
                                    dessert++
                                ) {
                                    if (
                                        Dessert.value == setNameDessert[dessert]
                                    ) {
                                        setPrice += parseInt(
                                            setHargaDessert[dessert]
                                        );
                                    }
                                }

                                let hasilPrice =
                                    setPrice * parseInt(totalDessert.value);

                                let setObjectDessert = {
                                    nama: Dessert.value,
                                    jumlah: totalDessert.value,
                                    harga: hasilPrice,
                                };

                                let GetWrapper =
                                    setWrapperOrder(setObjectDessert);
                                $(ParentWrapper).append(GetWrapper);

                                Dessert.value = "Choose Your Dessert";
                                totalDessert.value = "";
                                AuthTotalDessert.innerHTML = ``;
                                AuthTotalDessert.style.display = "none";

                                InputTwice = 4;
                            }
                        }
                    }

                    if (InputTwice == 4) {
                        if (
                            (Food.value != "" &&
                                totalFood.value != "" &&
                                Food.value != "Choose Your Food") ||
                            (Drink.value != "" &&
                                totalDrink.value != "" &&
                                Drink.value != "Choose Your Drink") ||
                            (Dessert.value != "" &&
                                totalDessert.value != "" &&
                                Dessert.value != "Choose Your Dessert")
                        ) {
                            for (
                                InputTwice = 1;
                                InputTwice <= 3;
                                InputTwice++
                            ) {
                                const ParentWrapper =
                                    document.querySelector(".FoodOrder");

                                if (InputTwice == 1) {
                                    if (
                                        Food.value != "" &&
                                        totalFood.value != "" &&
                                        Food.value != "Choose Your Food"
                                    ) {
                                        let setPrice = 0;
                                        for (
                                            let food = 0;
                                            food <= setNameFood.length;
                                            food++
                                        ) {
                                            if (
                                                Food.value == setNameFood[food]
                                            ) {
                                                setPrice += parseInt(
                                                    setHargaFood[food]
                                                );
                                            }
                                        }

                                        let hasilPrice =
                                            setPrice *
                                            parseInt(totalFood.value);
                                        getFoodPrice = hasilPrice;

                                        let setObjectFood = {
                                            nama: Food.value,
                                            jumlah: totalFood.value,
                                            harga: hasilPrice,
                                        };

                                        let GetWrapper =
                                            setWrapperOrder(setObjectFood);
                                        $(ParentWrapper).append(GetWrapper);

                                        Food.value = "Choose Your Food";
                                        totalFood.value = "";
                                        AuthTotalFood.innerHTML = ``;
                                        AuthTotalFood.style.display = "none";

                                        continue;
                                    }
                                } else if (InputTwice == 2) {
                                    if (
                                        Drink.value != "" &&
                                        totalDrink.value != "" &&
                                        Drink.value != "Choose Your Drink"
                                    ) {
                                        let setPrice = 0;
                                        for (
                                            let drink = 0;
                                            drink <= setNameDrink.length;
                                            drink++
                                        ) {
                                            if (
                                                Drink.value ==
                                                setNameDrink[drink]
                                            ) {
                                                setPrice += parseInt(
                                                    setHargaDrink[drink]
                                                );
                                            }
                                        }

                                        let hasilPrice =
                                            setPrice *
                                            parseInt(totalDrink.value);

                                        let setObjectDrink = {
                                            nama: Drink.value,
                                            jumlah: totalDrink.value,
                                            harga: hasilPrice,
                                        };

                                        let GetWrapper =
                                            setWrapperOrder(setObjectDrink);
                                        $(ParentWrapper).append(GetWrapper);

                                        Drink.value = "Choose Your Drink";
                                        totalDrink.value = "";
                                        AuthTotalDrink.innerHTML = ``;
                                        AuthTotalDrink.style.display = "none";

                                        continue;
                                    }
                                } else if (InputTwice == 3) {
                                    if (
                                        Dessert.value != "" &&
                                        totalDessert.value != "" &&
                                        Dessert.value != "Choose Your Dessert"
                                    ) {
                                        let setPrice = 0;
                                        for (
                                            let dessert = 0;
                                            dessert <= setNameDessert.length;
                                            dessert++
                                        ) {
                                            if (
                                                Dessert.value ==
                                                setNameDessert[dessert]
                                            ) {
                                                setPrice += parseInt(
                                                    setHargaDessert[dessert]
                                                );
                                            }
                                        }

                                        let hasilPrice =
                                            setPrice *
                                            parseInt(totalDessert.value);

                                        let setObjectDessert = {
                                            nama: Dessert.value,
                                            jumlah: totalDessert.value,
                                            harga: hasilPrice,
                                        };

                                        let GetWrapper =
                                            setWrapperOrder(setObjectDessert);
                                        $(ParentWrapper).append(GetWrapper);

                                        Dessert.value = "Choose Your Dessert";
                                        totalDessert.value = "";
                                        AuthTotalDessert.innerHTML = ``;
                                        AuthTotalDessert.style.display = "none";

                                        InputTwice = 4;

                                        break;
                                    }
                                }
                            }
                        }
                    }
                }

                // Set All Price

                let TotalPrice = 0;

                let ShippingCost = document.querySelector(".Shipping-Cost");
                let Tax = document.querySelector(".Tax");
                let OrderFee = document.querySelector(".Order-Fee");

                [...getAllPrice].forEach((result) => {
                    TotalPrice += parseInt(result.innerHTML);
                });

                OrderFee.innerHTML = TotalPrice;

                const setTotal = document.querySelector(".totalPembayaran");

                if (ShippingCost.innerHTML != "FREE") {
                    let Hasil =
                        parseInt(ShippingCost.innerHTML) +
                        parseInt(Tax.innerHTML) +
                        parseInt(OrderFee.innerHTML);
                    setTotal.innerHTML = Hasil;
                } else {
                    let Hasil =
                        parseInt(Tax.innerHTML) + parseInt(OrderFee.innerHTML);
                    setTotal.innerHTML = Hasil;
                }
            },
        });
    }

    // set Address Here

    const wrapperAddress = document.querySelector(".wrapperAddress");

    if (YourAddress.value != "") {
        wrapperAddress.innerHTML = YourAddress.value;
    }

    const getAllPrice = document.querySelectorAll(".setPrice");

    // Input Email and Name

    const getEmail = document.querySelector("#email");
    const getName = document.querySelector("#name");

    // Setter Email and Name

    const setEmail = document.querySelector(".yourEmail");
    const setName = document.querySelector(".yourName");

    const AuthName = document.querySelector(".AuthName");
    const AuthEmail = document.querySelector(".AuthEmail");

    AuthEmail.style.display = "none";
    AuthName.style.display = "none";

    for (Auth = 1; Auth <= 2; Auth++) {
        if (Auth == 1) {
            if (getName.value.length == 0) {
                AuthName.innerHTML = "Your Name Cannot Be Empty";
                AuthName.style.display = "initial";
                setName.innerHTML = "John Doe";
                continue;
            } else {
                setName.innerHTML = getName.value;
                AuthName.style.display = "none";
                continue;
            }
        } else if (Auth == 2) {
            if (getEmail.value.length == 0) {
                AuthEmail.innerHTML = "Your Email Cannot Be Empty";
                AuthEmail.style.display = "initial";
                setEmail.innerHTML = "YourEmail@gmail.com";
                break;
            } else if (getEmail.value.length <= 10) {
                AuthEmail.innerHTML = "Invalid Email";
                AuthEmail.style.display = "initial";
                setEmail.innerHTML = "YourEmail@gmail.com";
                break;
            } else if (!Email.value.includes("@")) {
                AuthEmail.innerHTML = "Must Have An @ Symbol";
                AuthEmail.style.display = "initial";
                setEmail.innerHTML = "YourEmail@gmail.com";
                break;
            } else {
                setEmail.innerHTML = getEmail.value;
                AuthEmail.style.display = "none";
                break;
            }
        }
    }
});

// Set Harga Pesanan

let ShippingCost = document.querySelector(".Shipping-Cost");
let Tax = document.querySelector(".Tax");
let OrderFee = document.querySelector(".Order-Fee");

const setTotal = document.querySelector(".totalPembayaran");

if (ShippingCost.innerHTML != "FREE") {
    let Hasil =
        parseInt(ShippingCost.innerHTML) +
        parseInt(Tax.innerHTML) +
        parseInt(OrderFee.innerHTML);
    setTotal.innerHTML = Hasil;
} else {
    let Hasil = parseInt(Tax.innerHTML) + parseInt(OrderFee.innerHTML);
    setTotal.innerHTML = Hasil;
}

const PayNow = document.querySelector(".PayNow");

function setBackOrder() {
    return `<div class="contentOrder mt-2 d-flex justify-content-between">
            <div class="d-flex setOrder">
                <p style="margin-right: 5px;" class="setName">Order...</p>
                <p>X <span class="setAmount">...</span></p>
            </div>
            <p>$ <span class="setPrice">0</span></p>
        </div>`;
}

PayNow.addEventListener("click", function () {
    Swal.fire({
        title: "Are you sure?",
        text: "Orders will be ordered immediately!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, Order!",
    }).then((result) => {
        if (result.isConfirmed) {
            let setArrayAllName = [];
            let setArrayAllAmount = [];

            const setAllOrderName = document.querySelectorAll(".setName");
            const setAllOrderAmount = document.querySelectorAll(".setAmount");
            const YourAddress = document.querySelector(".wrapperAddress");

            [...setAllOrderAmount].forEach((result) => {
                setArrayAllAmount.push(result.innerHTML);
            });

            [...setAllOrderName].forEach((result) => {
                setArrayAllName.push(result.innerHTML);
            });

            const pisahName = setArrayAllName.join(",");
            const pisahAmount = setArrayAllAmount.join(",");

            const setName = document.querySelector(".setName");
            const yourEmail = document.querySelector(".yourEmail");
            const yourName = document.querySelector(".yourName");

            if (
                setName.innerHTML != "Order..." &&
                yourEmail.innerHTML != "YourEmail@gmail.com" &&
                yourName.innerHTML != "John Doe" &&
                YourAddress.innerHTML != "Where will we deliver"
            ) {
                $.ajax({
                    url: "http://127.0.0.1:8000/Api/Order.php",
                    type: "POST",
                    dataType: "JSON",
                    data: {
                        id_user: $(".id_user").val(),
                        Nama_Pesanan: pisahName,
                        Jumlah_Pesanan: pisahAmount,
                        Email: $(".yourEmail").text(),
                        Nama: $(".yourName").text(),
                        Total_Harga: $(".totalPembayaran").text(),
                        Alamat: $(".wrapperAddress").text(),
                        Pembelian: "Online",
                    },
                    error: (result) => {
                        const Toast = Swal.mixin({
                            toast: true,
                            position: "top-end",
                            showConfirmButton: false,
                            timer: 3000,
                            timerProgressBar: true,
                            didOpen: (toast) => {
                                toast.addEventListener(
                                    "mouseenter",
                                    Swal.stopTimer
                                );
                                toast.addEventListener(
                                    "mouseleave",
                                    Swal.resumeTimer
                                );
                            },
                        });

                        Toast.fire({
                            icon: "error",
                            title: "Something Went Wrong",
                        });
                    },
                    success: function (result) {
                        let Id = result.Id;
                        let Nama = result.Nama;
                        let Email = result.Email;
                        let TotalHarga = result.Total_Harga;
                        let Status = result.Konfirmasi;
                        let KodePemesanan = result.kode_pemesanan;
                        let TanggalPesan = result.Tanggal_Pesanan;
                        let Nama_Pesanan = result.Nama_Pesanan;
                        let Jumlah_Pesanan = result.Jumlah_Pesanan;

                        let setTanggal = TanggalPesan.split(" ");
                        let getTanggal = setTanggal[0];

                        let setNamaPesanan = Nama_Pesanan.split(",");
                        let setJumlahPesanan = Jumlah_Pesanan.split(",");

                        const setPembungkus =
                            document.querySelector(".FoodOrder");
                        const setName = document.querySelector(".yourName");
                        const setEmail = document.querySelector(".yourEmail");
                        const setFee = document.querySelector(".Order-Fee");
                        const setTotalPayment =
                            document.querySelector(".totalPembayaran");

                        let id_Order = `id_order-${Id}`;

                        const Toast = Swal.mixin({
                            toast: true,
                            position: "top-end",
                            showConfirmButton: false,
                            timer: 3000,
                            timerProgressBar: true,
                            didOpen: (toast) => {
                                toast.addEventListener(
                                    "mouseenter",
                                    Swal.stopTimer
                                );
                                toast.addEventListener(
                                    "mouseleave",
                                    Swal.resumeTimer
                                );
                            },
                        });

                        Toast.fire({
                            icon: "success",
                            title: "Your Order Has Been Successfully Processed",
                        });

                        setTimeout(function () {
                            const wrapperFullInfo = document.querySelector(
                                ".contentPaymentDetail"
                            );
                            const cardOrder =
                                document.querySelector(".infoLengkap");
                            cardOrder.style.display = "block";

                            let setCard = `
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="textValue mb-3">
                                                <p>Email Name</p>
                                                <p>${Email}</p>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="textValue mb-3">
                                                <p>Order Name</p>
                                                <p>${Nama}</p>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="textValue mb-3">
                                                <p>Order Number</p>
                                                <p>${KodePemesanan}</p>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="textValue mb-3">
                                                <p>Total</p>
                                                <p>$ ${TotalHarga}</p>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="textValue mb-3">
                                                <p>Date</p>
                                                <p>${getTanggal}</p>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="textValue mb-3">
                                                <p>Your Order</p>
                                                <select class="form-select wrapperOrder-Food" aria-label="Default select example">
                                                    <option selected>Click For Detail</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="textValue mb-3">
                                                <p>Status</p>
                                                <p>Waiting</p>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="textValue btnInfoPayment d-flex mt-3 mb-5">
                                                
                                            </div>
                                        </div>
                                    </div>
                                `;

                            wrapperFullInfo.innerHTML = setCard;

                            const idUser = document.querySelector(".idUser");
                            const btnInfoPayment =
                                document.querySelector(".btnInfoPayment");

                            if (idUser.innerHTML != "Guest") {
                                btnInfoPayment.innerHTML = `<button type="submit" onclick="PayNowLink(event, ${Id})">PayNow</button>
                                <button type="submit" onclick="PayLaterLink()">PayLater</button>
                                <button type="submit" onclick="PayOnTheSpot(event, ${Id})">Pay On The Spot</button>`;
                            } else {
                                btnInfoPayment.innerHTML = `<button type="submit" onclick="PayNowLink(event, ${Id})">PayNow</button>
                                <button type="submit" onclick="PayIfGuest(event, ${Id})">Pay On The Spot</button>`;
                            }

                            const setAllOrder =
                                document.querySelector(".wrapperOrder-Food");

                            function getNumberPesanan() {
                                for (
                                    let index = 0;
                                    index < setNamaPesanan.length;
                                    index++
                                ) {
                                    $(setAllOrder).append(`
                                            <option value="${setNamaPesanan[index]} X ${setJumlahPesanan[index]}">${setNamaPesanan[index]} - ${setJumlahPesanan[index]}</option>
                                        `);
                                }
                            }

                            getNumberPesanan();
                        }, 3100);

                        setFee.innerHTML = 0;
                        setTotalPayment.innerHTML = 0;
                        setEmail.innerHTML = "YourEmail@gmail.com";
                        setName.innerHTML = "John Doe";
                        YourAddress.innerHTML = "Where will we deliver";
                        setPembungkus.innerHTML = setBackOrder();
                    },
                });
            } else {
                if (
                    yourEmail.innerHTML == "YourEmail@gmail.com" ||
                    yourName.innerHTML == "John Doe"
                ) {
                    Swal.fire(
                        "Something Went Wrong",
                        "Your Email Or Name Must Be Entered",
                        "error"
                    );
                } else if (setName.innerHTML == "Order...") {
                    Swal.fire(
                        "Something Went Wrong",
                        "The Order Must Be More Than Zero",
                        "error"
                    );
                } else if (YourAddress.innerHTML == "Where will we deliver") {
                    Swal.fire(
                        "Something Went Wrong",
                        "Address Must Be Filled",
                        "error"
                    );
                }
            }
        }
    });
});

function PayLaterLink() {
    document.location.href = "/order";
}

function PayOnTheSpot(event, Data) {
    const getInput = event.target.parentNode.parentNode.parentNode.childNodes[11].childNodes[1].querySelector('.wrapperOrder-Food');
    let namaPesanan = "";
    let jmlPesanan = "";

    for(let index = 0; index < getInput.options.length; index++){
        if(index > 0){
            const getData = getInput.options[index].innerHTML;
            const pisahData = getData.split("-");
            const setName = pisahData[0].trim(" ");
            const setJml = pisahData[1].trim(" ");

            namaPesanan += `${setName},`;
            jmlPesanan += `${setJml},`;
        }
    }

    $.ajax({
        url: "http://127.0.0.1:8000/Api/PayProses.php",
        type: "POST",
        dataType: "JSON",
        data: {
            Id: Data,
            nama : namaPesanan,
            jml : jmlPesanan
        },
        error: function (e) {
            console.log(e);
            Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "Something went wrong!",
                footer: "<a href>If there is a problem please report it!</a>",
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
            }
        },
    });
}

function PayIfGuest(event, Data) {
    const getInput = event.target.parentNode.parentNode.parentNode.childNodes[11].childNodes[1].querySelector('.wrapperOrder-Food');
    let namaPesanan = "";
    let jmlPesanan = "";

    for(let index = 0; index < getInput.options.length; index++){
        if(index > 0){
            const getData = getInput.options[index].innerHTML;
            const pisahData = getData.split("-");
            const setName = pisahData[0].trim(" ");
            const setJml = pisahData[1].trim(" ");

            namaPesanan += `${setName},`;
            jmlPesanan += `${setJml},`;
        }
    }

    $.ajax({
        url: "http://127.0.0.1:8000/Api/PayProses.php",
        type: "POST",
        dataType: "JSON",
        data: {
            Id: Data,
            nama : namaPesanan,
            jml : jmlPesanan
        },
        error: function () {
            Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "Something went wrong!",
                footer: "<a href>If there is a problem please report it!</a>",
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
                    window.location.reload();
                }, 2200);
            }
        },
    });
}

if (JSON.parse(localStorage.getItem("Order"))) {
    const totalFood = document.querySelector("#totalFood");
    const totalDrink = document.querySelector("#totalDrink");
    const totalDessert = document.querySelector("#totalDessert");

    const Food = document.getElementById("food");
    const Drink = document.getElementById("drink");
    const Dessert = document.getElementById("dessert");

    const getLocalStorage = JSON.parse(localStorage.getItem("Order"));

    const setName = getLocalStorage.Nama;
    const setTotal = getLocalStorage.Jumlah;
    const setStatus = getLocalStorage.Status;

    if (setStatus == "Food") {
        Food.value = setName;
        totalFood.value = setTotal;
    } else if (setStatus == "Drink") {
        Drink.value = setName;
        totalDrink.value = setTotal;
    } else if (setStatus == "Dessert") {
        Dessert.value = setName;
        totalDessert.value = setTotal;
    }
}

const ResetOrder = document.querySelector(".ResetOrder");

ResetOrder.addEventListener("click", function () {
    Swal.fire({
        title: "Are you sure?",
        text: "All inputs will be reset again!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, reset it!",
    }).then((result) => {
        if (result.isConfirmed) {
            const AuthTotalFood = document.querySelector(".AuthTotalFood");
            const AuthTotalDrink = document.querySelector(".AuthTotalDrink");
            const AuthTotalDessert =
                document.querySelector(".AuthTotalDessert");
            const AuthAddress = document.querySelector(".AuthAddress");
            const AuthName = document.querySelector(".AuthName");
            const AuthEmail = document.querySelector(".AuthEmail");

            AuthEmail.style.display = "none";
            AuthName.style.display = "none";
            AuthTotalFood.style.display = "none";
            AuthTotalDrink.style.display = "none";
            AuthTotalDessert.style.display = "none";
            AuthAddress.style.display = "none";

            const getName = document.querySelector("#name");
            getName.value = "";

            const contentOrder = document.querySelector(".contentOrder");

            contentOrder.innerHTML = ` <div class="d-flex setOrder">
                    <p style="margin-right: 5px;" class="setName">Order...</p>
                    <p>X <span class="setAmount">...</span></p>
                </div>
            <p>$ <span class="setPrice">0</span></p>`;

            const yourEmail = document.querySelector(".yourEmail");
            const yourName = document.querySelector(".yourName");

            yourEmail.innerHTML = "YourEmail@gmail.com";
            yourName.innerHTML = "John Doe";

            const wrapperAddress = document.querySelector(".wrapperAddress");
            wrapperAddress.innerHTML = "Where will we deliver";

            let ShippingCost = document.querySelector(".Shipping-Cost");
            let Tax = document.querySelector(".Tax");
            let OrderFee = document.querySelector(".Order-Fee");
            OrderFee.innerHTML = "0";

            const setTotal = document.querySelector(".totalPembayaran");

            if (ShippingCost.innerHTML != "FREE") {
                let Hasil =
                    parseInt(ShippingCost.innerHTML) +
                    parseInt(Tax.innerHTML) +
                    parseInt(OrderFee.innerHTML);
                setTotal.innerHTML = Hasil;
            } else {
                let Hasil =
                    parseInt(Tax.innerHTML) + parseInt(OrderFee.innerHTML);
                setTotal.innerHTML = Hasil;
            }

            // Jumlah pesanan

            const totalFood = document.querySelector("#totalFood");
            const totalDrink = document.querySelector("#totalDrink");
            const totalDessert = document.querySelector("#totalDessert");

            // Input Value

            const Food = document.getElementById("food");
            const Drink = document.getElementById("drink");
            const Dessert = document.getElementById("dessert");

            totalFood.value = "";
            totalDrink.value = "";
            totalDessert.value = "";

            Food.value = "Choose Your Food";
            Drink.value = "Choose Your Drink";
            Dessert.value = "Choose Your Dessert";

            OrderFoodTwice = [];
            OrderDrinkTwice = [];
            OrderDessertTwice = [];

            Swal.fire(
                "Success!",
                "Your order was successfully reset.",
                "success"
            );
        }
    });
});

function PayNowLink(event, Data) {
    const getInput = event.target.parentNode.parentNode.parentNode.childNodes[11].childNodes[1].querySelector('.wrapperOrder-Food');
    let namaPesanan = "";
    let jmlPesanan = "";

    for(let index = 0; index < getInput.options.length; index++){
        if(index > 0){
            const getData = getInput.options[index].innerHTML;
            const pisahData = getData.split("-");
            const setName = pisahData[0].trim(" ");
            const setJml = pisahData[1].trim(" ");

            namaPesanan += `${setName},`;
            jmlPesanan += `${setJml},`;
        }
    }

    $.ajax({
        url: "http://127.0.0.1:8000/midtrans",
        headers: {
            "X-CSRF-Token": $('meta[name="csrf-token"]').attr("content"),
        },
        type: "POST",
        dataType: "JSON",
        data: {
            id: Data,
            nama : namaPesanan,
            jml : jmlPesanan
        },
        error: function (e) {
            Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "Something went wrong!",
                footer: "<a href>If there is a problem please report it!</a>",
            });
        },
        success: function (result) {
            if(result.status == false ){
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
            const IFUser = document.querySelector(".idUser");
            window.open(result.redirect_url, "_blank").focus();
            if (IFUser.innerHTML != "Guest") {
                Swal.fire({
                    title: "Success",
                    text: "Thank you For Completing The Payment.",
                    icon: "success",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "To The Order Page",
                    cancelButtonText: "Stay Here",
                }).then((result) => {
                    if (result.isConfirmed) {
                        document.location.href = "/order";
                    } else if (!result.isConfirmed) {
                        window.location.reload();
                    }
                });
            } else {
                Swal.fire({
                    title: "Success",
                    text: "Thank you For Completing The Payment. Your Order Is Being Processed Please Wait",
                    icon: "success",
                    confirmButtonColor: "#3085d6",
                    confirmButtonText: "Close",
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.reload();
                    }
                });
            }
            }
        },
    });
}

if (JSON.parse(localStorage.getItem("OrderTable"))) {
    localStorage.removeItem("OrderTable");
}
