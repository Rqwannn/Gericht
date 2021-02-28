const ReturnTable = document.querySelector("#ReturnTable");
const ReturnTable2 = document.querySelector("#ReturnTable-2");

ReturnTable.addEventListener("click", function(){
    document.location.href = "/privatedining"
})

ReturnTable2.addEventListener("click", function(){
    document.location.href = "/privatedining"
})

const TableOne = document.querySelector(".TableText-1");
const TableTwo = document.querySelector(".TableText-2");
const TableThree = document.querySelector(".TableText-3");
const TableFour = document.querySelector(".TableText-4");

const WrapperTableOne = document.querySelector(".WrapperTable-One"); 
const WrapperTableTwo = document.querySelector(".WrapperTable-Two"); 
const WrapperTableThree = document.querySelector(".WrapperTable-Three"); 
const WrapperTableFour = document.querySelector(".WrapperTable-Four"); 

TableOne.addEventListener("click", function(result){

    if(WrapperTableOne.classList.contains("TrueLine")){

        const btnNode = document.querySelectorAll(".wrapperInfoName p");
        btnNode.forEach( Value => {
            if(Value.classList == "activeTable"){
                Value.classList.remove("activeTable");
            }
        })

        // Remove True Line
    
        const AllTrue = document.querySelectorAll(".TrueLine");
        AllTrue.forEach( Value => {
            if(Value.classList.contains("TrueLine")){
                Value.classList.remove("TrueLine");
            }
        })
    
        const setNode = result.target;
        setNode.classList.add("activeTable");
    
        // Slide Animation
        
        WrapperTableTwo.style.transform = "translateX(600px)";
        WrapperTableThree.style.transform = "translateX(600px)";
        WrapperTableFour.style.transform = "translateX(600px)";
        
        setTimeout(function(){
            WrapperTableOne.style.display = "initial";
    
            setTimeout(function(){
                WrapperTableTwo.style.display = "none";
                WrapperTableThree.style.display = "none";
                WrapperTableFour.style.display = "none";
            }, 400)
            setTimeout(function (){
                WrapperTableOne.style.transform = "translateX(0px)";
            }, 400)
            setTimeout(function(){
                AllTrue.forEach( Value => {
                    console.log(Value);
                    if(!Value.classList.contains("TrueLine")){
                        Value.classList.add("TrueLine");
                    }
                })
            }, 900)
            
        }, 400)

    } else {

    }

})

TableTwo.addEventListener("click", function(result){
    if(WrapperTableTwo.classList.contains("TrueLine")){
        const btnNode = document.querySelectorAll(".wrapperInfoName p");
        btnNode.forEach( Value => {
            if(Value.classList == "activeTable"){
                Value.classList.remove("activeTable");
            }
        })
    
        // Remove True Line
    
        const AllTrue = document.querySelectorAll(".TrueLine");
        AllTrue.forEach( Value => {
            if(Value.classList.contains("TrueLine")){
                Value.classList.remove("TrueLine");
            }
        })
    
        const setNode = result.target;
        setNode.classList.add("activeTable");
    
        // Slide Animation
        
        WrapperTableOne.style.transform = "translateX(600px)";
        WrapperTableThree.style.transform = "translateX(600px)";
        WrapperTableFour.style.transform = "translateX(600px)";
        
        setTimeout(function(){
            WrapperTableTwo.style.display = "initial";
    
            setTimeout(function(){
                WrapperTableOne.style.display = "none";
                WrapperTableThree.style.display = "none";
                WrapperTableFour.style.display = "none";
            }, 400)
            setTimeout(function (){
                WrapperTableTwo.style.transform = "translateX(0px)";
            }, 400)
            setTimeout(function(){
                AllTrue.forEach( Value => {
                    console.log(Value);
                    if(!Value.classList.contains("TrueLine")){
                        Value.classList.add("TrueLine");
                    }
                })
            }, 900)

        }, 400)
    }
})

TableThree.addEventListener("click", function(result){
    if(WrapperTableThree.classList.contains("TrueLine")){
        const btnNode = document.querySelectorAll(".wrapperInfoName p");
        btnNode.forEach( Value => {
            if(Value.classList == "activeTable"){
                Value.classList.remove("activeTable");
            }
        })

        // Remove True Line
    
        const AllTrue = document.querySelectorAll(".TrueLine");
        AllTrue.forEach( Value => {
            if(Value.classList.contains("TrueLine")){
                Value.classList.remove("TrueLine");
            }
        })
    
        const setNode = result.target;
        setNode.classList.add("activeTable");
    
        // Slide Animation
            
            WrapperTableOne.style.transform = "translateX(600px)";
            WrapperTableTwo.style.transform = "translateX(600px)";
            WrapperTableFour.style.transform = "translateX(600px)";
            
            setTimeout(function(){
                WrapperTableThree.style.display = "initial";
        
                setTimeout(function(){
                    WrapperTableOne.style.display = "none";
                    WrapperTableTwo.style.display = "none";
                    WrapperTableFour.style.display = "none";
                }, 400)
                setTimeout(function (){
                    WrapperTableThree.style.transform = "translateX(0px)";
                }, 400)
                setTimeout(function(){
                    AllTrue.forEach( Value => {
                        console.log(Value);
                        if(!Value.classList.contains("TrueLine")){
                            Value.classList.add("TrueLine");
                        }
                    })
                }, 900)

            }, 400)
    } else {

    }
})

TableFour.addEventListener("click", function(result){
    if(WrapperTableFour.classList.contains("TrueLine")){
        const btnNode = document.querySelectorAll(".wrapperInfoName p");
        btnNode.forEach( Value => {
            if(Value.classList == "activeTable"){
                Value.classList.remove("activeTable");
            }
        })

        // Remove True Line
    
        const AllTrue = document.querySelectorAll(".TrueLine");
        AllTrue.forEach( Value => {
            if(Value.classList.contains("TrueLine")){
                Value.classList.remove("TrueLine");
            }
        })
    
        const setNode = result.target;
        setNode.classList.add("activeTable");
    
            // Slide Animation
            
            WrapperTableOne.style.transform = "translateX(600px)";
            WrapperTableTwo.style.transform = "translateX(600px)";
            WrapperTableThree.style.transform = "translateX(600px)";
            
            setTimeout(function(){
                WrapperTableFour.style.display = "initial";
        
                setTimeout(function(){
                    WrapperTableOne.style.display = "none";
                    WrapperTableTwo.style.display = "none";
                    WrapperTableThree.style.display = "none";
                }, 400)
                setTimeout(function (){
                    WrapperTableFour.style.transform = "translateX(0px)";
                }, 400)
                setTimeout(function(){
                    AllTrue.forEach( Value => {
                        console.log(Value);
                        if(!Value.classList.contains("TrueLine")){
                            Value.classList.add("TrueLine");
                        }
                    })
                }, 900)

            }, 400)
    } else {

    }
})

const BtnStep1 = document.querySelector("#BtnStep1");

BtnStep1.addEventListener("click", function(){
    const EmailValue = document.querySelector("#EmailUser");
    const NamaValue = document.querySelector("#NameUser");
    const TotalOrder = document.querySelector("#TotalOrder");
    const MessageDate = document.querySelector("#MessageDate");
    const TableName = document.querySelector("#TableName");

    const AuthNamaTable = document.querySelector(".AuthNamaTable");
    const AuthEmailTable = document.querySelector(".AuthEmailTable");
    const AuthTotalTable = document.querySelector(".AuthTotalTable");
    const AuthTanggalTable = document.querySelector(".AuthTanggalTable");

    $.ajax({
        url : "http://127.0.0.1:8000/Api/AuthAmounTable.php",
        type : "POST",
        dataType : "JSON",
        data : {
            NamaTabel : $(TableName).val()
        },
        error : function (){
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Something went wrong!',
                footer: '<a href>If there is a problem please report it immediately!</a>'
              })
        },
        success : function(result){
            const TotalTersedia = result.tersedia;

            if(EmailValue.value == "" || NamaValue.value == "" || MessageDate.value == "" || TotalOrder.value == ""){

                for(let index = 0; index <= 3; index++){
                    if(EmailValue.value == "" && index == 0){
                        AuthEmailTable.style.display = "block";
                        AuthEmailTable.innerHTML = "Email must be entered";
                        continue
                    } else if(NamaValue.value == "" && index == 1){
                        AuthNamaTable.style.display = "block";
                        AuthNamaTable.innerHTML = "Name must be entered";
                        continue
                    } else if(MessageDate.value == "" && index == 2){
                        AuthTanggalTable.style.display = "block";
                        AuthTanggalTable.innerHTML = "Date must be entered";
                        continue
                    } else if(TotalOrder.value == "" && index == 3){
                        AuthTotalTable.style.display = "block";
                        AuthTotalTable.innerHTML = "Total Table must be entered";
                        break
                    }
                }
        
            } else if(TotalOrder.value >= TotalTersedia){
                AuthTotalTable.style.display = "block";
                AuthTotalTable.innerHTML = `Only ${TotalTersedia} tables available`;
            } else if (TotalOrder.value == 0){
                AuthTotalTable.style.display = "block";
                AuthTotalTable.innerHTML = "The total cannot contain numbers of 0";
            } else {
                Swal.fire({
                    title: 'Are you sure?',
                    text: "Do you also want to order a meal?",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#fb6340',
                    confirmButtonText: 'Yes Message Too!',
                    cancelButtonText: 'Want to order food?'
                  }).then((result) => {
                    if (result.isConfirmed) {
                      Swal.fire(
                        'Success',
                        'Your Order Has been processed.',
                        'success'
                      )
            
                      $.ajax({
                          url : "http://127.0.0.1:8000/Api/OrderTable.php",
                          type : "POST",
                          dataType : "JSON",
                          data : {
                            id_user : $("#Id_User").val(),
                            NamaTabel : $("#TableName").val(),
                            Nama : $("#NameUser").val(),
                            Email : $("#EmailUser").val(),
                            Total : $("#TotalOrder").val(),
                            MessageDate : $("#MessageDate").val()
                          },
                          error: function(){
                            Swal.fire({
                                icon: 'error',
                                title: 'Oops...',
                                text: 'Something went wrong!',
                                footer: '<a href>If there is a problem please report it immediately!</a>'
                              })
                          },
                          success : function(result){
                            const Name = result.nama;   
            
                            Swal.fire(
                                'Success',
                                `${Name}, Your table is reserved`,
                                'success'
                            )
            
                            setTimeout(function(){
                                document.location.href = "/privatedining"
                              }, 350)
            
                          }
                      })
                    } else if (
                        result.dismiss === Swal.DismissReason.cancel
                      ) {
            
                        $.ajax({
                            url : "http://127.0.0.1:8000/Api/OrderTable.php",
                            type : "POST",
                            dataType : "JSON",
                            data : {
                              id_user : $("#Id_User").val(),
                              NamaTabel : $("#TableName").val(),
                              Nama : $("#NameUser").val(),
                              Email : $("#EmailUser").val(),
                              Total : $("#TotalOrder").val(),
                              MessageDate : $("#MessageDate").val()
                            },
                            error: function(){
                              Swal.fire({
                                  icon: 'error',
                                  title: 'Oops...',
                                  text: 'Something went wrong!',
                                  footer: '<a href>If there is a problem please report it immediately!</a>'
                                })
                            },
                            success : function(result){
                              const Name = result.nama;   
            
                              Swal.fire(
                                'What you want to enjoy?',
                                `${Name}, The table that you ordered has been processed`,
                                'success'
                              )
              
                            }
                        })
            
                        const CircleOne = document.querySelector(".barOne");
                        const CircleOneAfter = document.querySelector(".LineOne");
                        const Check = document.querySelector(".fa-check-circle");
                        const iconTable = document.querySelector(".fa-feather-alt")
            
                        CircleOne.style.background = " #2dce89";
                        CircleOneAfter.style.background = "#2dce89";
                        Check.style.display = "block";
                        Check.style.color = "white";
                        iconTable.style.display = "none";
            
                        const WrapperLPartOne = document.querySelector(".WrapperLPart-1");
                        const WrapperRPartOne = document.querySelector(".WrapperRPart-1");
                        const WrapperLPartTwo = document.querySelector(".WrapperLPart-2");
                        const WrapperRPartTwo = document.querySelector(".WrapperRPart-2");
            
                        const barTwo = document.querySelector(".barTwo i");
            
                        if(barTwo.classList.contains("text-primary")){
                            barTwo.classList.remove("text-primary")
                            barTwo.classList.add("text-success")
                        }
            
                        WrapperLPartOne.style.transform = "translateX(635px)";
                        WrapperRPartOne.style.transform = "translateX(635px) translateY(-50%)";
            
                        setTimeout(function(){
                            WrapperLPartOne.style.display = "none";
                            WrapperRPartOne.style.display = "none";
                        }, 500)
            
                        setTimeout(function(){
                            WrapperLPartTwo.style.display = "block";
                            WrapperRPartTwo.style.display = "block";
                        }, 100)
            
                        setTimeout(function(){
                            WrapperLPartTwo.style.transform = "translateX(0px)";
                            WrapperRPartTwo.style.transform = "translateX(0px)";
                        }, 500)
                    }
                })
            }

        } // end success ajax pertama
    })

})



// JS Pesanan 

let setNameFood = [];
let setNameDrink = [];
let setNameDessert = [];

let setHargaFood = [];
let setHargaDrink = [];
let setHargaDessert = [];

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

const callFood = () => {
    fetch("http://127.0.0.1:8000/Api/Food.php")
        .then((result) => {
            let Value = result.json();
            return Value;
        })
        .then((result) => {
            let IndexValue = 0;
            result.forEach((value, index) => {
                setHargaFood.push(FoodsetHarga(value));
                setNameFood.push(FoodsetName(value));
            });
        });
};

callFood();

const callDrink = () => {
    fetch("http://127.0.0.1:8000/Api/Drink.php")
        .then((result) => {
            let Value = result.json();
            return Value;
        })
        .then((result) => {
            result.forEach((value, index) => {
                setHargaDrink.push(DrinksetHarga(value));
                setNameDrink.push(DrinksetName(value));
            });
        });
};

callDrink();

const callDessert = () => {
    fetch("http://127.0.0.1:8000/Api/Dessert.php")
        .then((result) => {
            let Value = result.json();
            return Value;
        })
        .then((result) => {
            result.forEach((value, index) => {
                setHargaDessert.push(DessertsetHarga(value));
                setNameDessert.push(DessertsetName(value));
            });
        });
};

callDessert();

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

    const AuthTotalFood = document.querySelector(".AuthTotalFood");
    const AuthTotalDrink = document.querySelector(".AuthTotalDrink");
    const AuthTotalDessert = document.querySelector(".AuthTotalDessert");

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
            error: function () {},
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
                        const ParentWrapper = document.querySelector(
                            ".FoodOrder"
                        );

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

                                    let GetWrapper = setWrapperOrder(
                                        setObjectDrink
                                    );
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

                                        let GetWrapper = setWrapperOrder(
                                            setObjectDessert
                                        );
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

                                let GetWrapper = setWrapperOrder(
                                    setObjectDrink
                                );
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

                                    let GetWrapper = setWrapperOrder(
                                        setObjectDessert
                                    );
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

                                let GetWrapper = setWrapperOrder(
                                    setObjectDessert
                                );
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
                                const ParentWrapper = document.querySelector(
                                    ".FoodOrder"
                                );

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

                                        let GetWrapper = setWrapperOrder(
                                            setObjectFood
                                        );
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

                                        let GetWrapper = setWrapperOrder(
                                            setObjectDrink
                                        );
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

                                        let GetWrapper = setWrapperOrder(
                                            setObjectDessert
                                        );
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
                    let Hasil = parseInt(Tax.innerHTML) + parseInt(OrderFee.innerHTML);
                    setTotal.innerHTML = Hasil;
                }
            },
        });
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
                yourName.innerHTML != "John Doe"
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

                        const setPembungkus = document.querySelector(
                            ".FoodOrder"
                        );
                        const setName = document.querySelector(".yourName");
                        const setEmail = document.querySelector(".yourEmail");
                        const setFee = document.querySelector(".Order-Fee");
                        const setTotalPayment = document.querySelector(".totalPembayaran");

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
                            const cardOrder = document.querySelector(
                                ".infoLengkap"
                            );
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
                                            <div class="textValue d-flex mt-3 mb-5">
                                                <button type="submit" onclick="PayNowLink(${id_Order})">PayNow</button>
                                                <button type="submit" onclick="PayLaterLink()">PayLater</button>
                                                <button type="submit" onclick="PayOnTheSpot(${Id})">Pay On The Spot</button>
                                            </div>
                                        </div>
                                    </div>
                                `;

                            wrapperFullInfo.innerHTML = setCard;

                            const setAllOrder = document.querySelector(".wrapperOrder-Food");

                            function getNumberPesanan() {
                                for (let index = 0; index < setNamaPesanan.length; index++ ) {
                                    $(setAllOrder).append(`
                                            <option value="${setNamaPesanan[index]} X ${setJumlahPesanan[index]}">${setNamaPesanan[index]} X ${setJumlahPesanan[index]}</option>
                                        `);
                                }
                            }

                            getNumberPesanan();
                        }, 3100);

                        setFee.innerHTML = 0;
                        setTotalPayment.innerHTML = 0;
                        setEmail.innerHTML = "YourEmail@gmail.com";
                        setName.innerHTML = "John Doe";
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
                } else if (setName.innerHTML != "Order...") {
                    Swal.fire(
                        "Something Went Wrong",
                        "The Order Must Be More Than Zero",
                        "error"
                    );
                }
            }
        }
    });
});

function PayLaterLink(){
    document.location.href ="/order";
}

function PayOnTheSpot(Data){
    $.ajax({
        url : "http://127.0.0.1:8000/Api/PayProses.php",
        type : "POST",
        dataType : "JSON",
        data : {
            Id : Data
        },
        error : function (){
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Something went wrong!',
                footer: '<a href>If there is a problem please report it!</a>'
              })
        },
        success : function (){
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 2000,
                timerProgressBar: true,
                didOpen: (toast) => {
                  toast.addEventListener('mouseenter', Swal.stopTimer)
                  toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
              })
              
              Toast.fire({
                icon: 'success',
                title: 'The Order Has Been Made'
              })

            setTimeout(function(){
                document.location.href ="/order";
            }, 2200)
        }
    })
}