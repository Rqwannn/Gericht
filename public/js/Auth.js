const BtnSubmit = document.getElementById('BtnSubmit');
const EmailValue = document.getElementById('EmailValue');

BtnSubmit.addEventListener("click", function(){
    if(EmailValue.value == ""){
        Swal.fire(
            'Error!',
            'Make sure the input page has been filled in.',
            'error'
          )
        EmailValue.classList.add('is-invalid');
    } else {
        if(!EmailValue.value.includes('@')){
            Swal.fire(
                'Error!',
                'Ensure that the input consists of the @ symbol.',
                'error'
              )
            EmailValue.classList.add('is-invalid');
        } else {
            Swal.fire({
                title: 'Are you sure?',
                text: "Make sure the email is correct and there is no typo!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, right!'
              }).then((result) => {
                if (result.isConfirmed) {
                  Swal.fire(
                    'Success!',
                    'Email sent successfully, please check email.',
                    'success'
                  )
                }
                document.location.href = '/ForgotPassword/VerifyEmail';
              })
        }
    }
});