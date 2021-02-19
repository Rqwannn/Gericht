$(document).ready(function () {
    $('#TableOrder').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
    });
});

function funDelete(Data){

    Swal.fire({
        title: 'Are you sure?',
        text: "Do you want to delete this message!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
      }).then((result) => {
        if (result.isConfirmed) {
            
          setTimeout(function(){
                $.ajax({
                    url : "http://127.0.0.1:8000/Api/DeleteOrder.php",
                    type : "POST",
                    dataType : "JSON",
                    data : {
                        id : Data
                    },
                    error : function(){
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'Something went wrong!',
                            footer: '<a href>Please report if there is a problem?</a>'
                          })
                    },
                    success : function(){
                        Swal.fire(
                            'Deleted!',
                            'Your data has been deleted.',
                            'success'
                          )
                          setTimeout(function(){
                              window.location.reload();
                          }, 250)
                    }
                })
            }, 100)
        }
      })
}

function intDelete(Data){
    Swal.fire({
        title: 'Are you sure?',
        text: "Do you want to delete this data!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
      }).then((result) => {
        if (result.isConfirmed) {
            
          setTimeout(function(){
                $.ajax({
                    url : "http://127.0.0.1:8000/Api/DeleteUser.php",
                    type : "POST",
                    dataType : "JSON",
                    data : {
                        id : Data
                    },
                    error : function(){
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'Something went wrong!',
                            footer: '<a href>Please report if there is a problem?</a>'
                          })
                    },
                    success : function(){
                        Swal.fire(
                            'Deleted!',
                            'Your data has been deleted.',
                            'success'
                          )
                          setTimeout(function(){
                              window.location.reload();
                          }, 250)
                    }
                })
            }, 100)
        }
      })
}