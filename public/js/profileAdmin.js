const btnProfile = document.querySelector(".btnUpdate-Profile");

btnProfile.addEventListener("click", function(){
    const AuthConfirmPassword = document.querySelector(".AuthConfirmPassword");
    const AuthPassword = document.querySelector(".AuthPassword");
    const AuthUser = document.querySelector(".AuthUser");
    const AuthContact = document.querySelector(".AuthContact");

    // User Information

    const Email = document.getElementById("email");
    const Name = document.getElementById("name");
    const Password = document.getElementById("password");
    const ConfirmPassword = document.getElementById("confirmPassword");

    // Contact Information
    
    const Address = document.getElementById("address");
    const City = document.getElementById("city");
    const Country = document.getElementById("country");
    const PostalCode = document.getElementById("postalCode");

    Swal.fire({
        title: 'Do you want to update your profile now?',
        text: "Your profile will be changed immediately if you accept it!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, update it!'
      }).then((result) => {
        if (result.isConfirmed) {
            if(Email.value == "" || Name.value == ""){
                AuthUser.style.display = "block";
                AuthUser.innerHTML = "User Information Must Not Be Empty";

                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Your Contact Or User information must not be empty!'
                  })

                if(Address.value == "" || City.value == "" || Country.value == "" || PostalCode.value == ""){
                    AuthContact.style.display = "block";
                    AuthContact.innerHTML = "Contact information must not be empty";

                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Your Contact Or User information must not be empty!'
                      })
                }
            } else if(Address.value == "" || City.value == "" || Country.value == "" || PostalCode.value == "") {
                AuthContact.style.display = "block";
                AuthContact.innerHTML = "Contact Information Must Not Be Empty";

                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Your Contact Or User information must not be empty!'
                  })
            } else if(Password.value.length > 0 && Password.value.length < 7) {
                AuthPassword.style.display = "block";
                AuthPassword.innerHTML = "Your Password Must Be More Than 8 Words"
            } else if(Password.value != ConfirmPassword.value) {
                AuthConfirmPassword.style.display = "block";
                AuthConfirmPassword.innerHTML = "Your Password Is Not The Same"

                Swal.fire({
                  icon: 'error',
                  title: 'Oops...',
                  text: 'Your password is not the same!'
                })
            } else {
                    $.ajax({
                        url : "http://127.0.0.1:8000/Api/ProfileAdmin.php",
                        type : "POST",
                        dataType: "JSON",
                        data : {
                            'Email' : $(Email).val(),
                            'Name' : $(Name).val(),
                            'Password' : $(Password).val(),
                            'Address' : $(Address).val(),
                            'City' : $(City).val(),
                            'Country' : $(Country).val(),
                            'PostalCode' : $(PostalCode).val()
                        },
                        error : function(){
    
                        },
                        success : function(result){
                            let Name = result.Name

                            Swal.fire({
                                icon: 'success',
                                title: 'Success',
                                text: `${Name}, Your profile data has been successfully updated!`
                              })
                        }
                    })
            }
        }
    })
})

const btnEdit = document.querySelector(".btnEdit");
const cardEdit = document.querySelector(".cardInfoEdit");

btnEdit.addEventListener("click", function(){
    if( cardEdit.style.transform == "translateY(-25%)"){
        cardEdit.style.transform = "translateY(0%)";
        cardEdit.style.opacity = "0";

        setTimeout( function(){
            cardEdit.style.display = "none";
        }, 100)
    } else {
        cardEdit.style.display = "block";
        setTimeout( function(){
            cardEdit.style.transform = "translateY(-25%)";
            cardEdit.style.opacity = "1";
        }, 100)
    }

})