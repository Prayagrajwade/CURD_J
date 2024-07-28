
// function insert(event) {
//     event.preventDefault();
//     $(document).ready(function() {
//         var name = $("#name").val();
//         var email = $("#email").val();
//         var address = $("#address").val();
//         var salary = $("#salary").val();
//         var job_role = $("#job_role").val();

//         if (name !== "" && email !== "" && address !== "" && salary !== "" && job_role !== "") {
//             $.ajax({
//                 url: "insert_to_DB.php",
//                 type: "POST",
//                 data: {
//                     name: name,
//                     email: email,
//                     address: address,
//                     salary: salary,
//                     job_role: job_role
//                 },
//                 cache: false,
//                 success: function(dataResult) {
//                     var dataResult = JSON.parse(dataResult);
//                     if (dataResult.statusCode == 200) {
//                         window.location.href = "./ShowData.php";
//                     } else if (dataResult.statusCode == 201) {
//                         alert("Error occurred!");
//                     }
//                 }
//             });
//         }
//     });
// }


// function Update(event) {
//     event.preventDefault();
//     $(document).ready(function() {
//         var id = $("#id").val();
//         var name = $("#name").val();
//         var email = $("#email").val();
//         var address = $("#address").val();
//         var salary = $("#salary").val();
//         var job_role = $("#job_role").val();

//         if (name !== "" && email !== "" && address !== "" && salary !== "" && job_role !== "") {
//             $.ajax({
//                 url: "processUpdate.php",
//                 type: "POST",
//                 data: {
//                     id : id,
//                     name: name,
//                     email: email,
//                     address: address,
//                     salary: salary,
//                     job_role: job_role
//                 },
//                 cache: false,
//                 success: function(dataResult) {
//                     var dataResult = JSON.parse(dataResult);
//                     if (dataResult.statusCode == 200) {
//                         window.location.href = "./ShowData.php";
//                     } else if (dataResult.statusCode == 201) {
//                         alert("Error occurred!");
//                     }
//                 }
//             });
//         }
//     });
// }

// function Delete(event){
//     event.preventDefault();
//    $(document).ready(function(){
//      if(id != ""){
//         $.ajax({
//             url:"process_deleteData.php",
//             type:"POST",
//             data:{
//                 id : id
//             },
//             cache:false,
//             success: function(dataResult) {
//                     var dataResult = JSON.parse(dataResult);
//                     if (dataResult.statusCode == 200) {
//                         window.location.href = "./ShowData.php";
//                     } else if (dataResult.statusCode == 201) {
//                         alert("Error occurred!");
//                     }
//                 }
//         })
//      }
//    })
// }



//----------------------------------------------------------//


// $(document).ready(function(){

//     $("#updateForm").on("click", function() {
//         Update(event);
//     });


//     function insert(event) {
//         event.preventDefault();
       
//             var name = $("#name").val();
//             var email = $("#email").val();
//             var address = $("#address").val();
//             var salary = $("#salary").val();
//             var job_role = $("#job_role").val();
    
//             if (name !== "" && email !== "" && address !== "" && salary !== "" && job_role !== "") {
//                 $.ajax({
//                     url: "insert_to_DB.php",
//                     type: "POST",
//                     data: {
//                         name: name,
//                         email: email,
//                         address: address,
//                         salary: salary,
//                         job_role: job_role
//                     },
//                     cache: false,
//                     success: function(dataResult) {
//                         var dataResult = JSON.parse(dataResult);
//                         if (dataResult.statusCode == 200) {
//                             window.location.href = "./ShowData.php";
//                         } else if (dataResult.statusCode == 201) {
//                             alert("Error occurred!");
//                         }
//                     }
//                 });
//             }
        
//     }


//     function Update(event) {
//         event.preventDefault();
        
//             var id = $("#id").val();
//             var name = $("#name").val();
//             var email = $("#email").val();
//             var address = $("#address").val();
//             var salary = $("#salary").val();
//             var job_role = $("#job_role").val();
    
//             if (name !== "" && email !== "" && address !== "" && salary !== "" && job_role !== "") {
//                 $.ajax({
//                     url: "processUpdate.php",
//                     type: "POST",
//                     data: {
//                         id : id,
//                         name: name,
//                         email: email,
//                         address: address,
//                         salary: salary,
//                         job_role: job_role
//                     },
//                     cache: false,
//                     success: function(dataResult) {
//                         var dataResult = JSON.parse(dataResult);
//                         if (dataResult.statusCode == 200) {
//                             window.location.href = "./ShowData.php";
//                         } else if (dataResult.statusCode == 201) {
//                             alert("Error occurred!");
//                         }
//                     }
//                 });
//             }
//     }



//     function Delete(id) {
        
//             if (id != "") {
//                 $.ajax({
//                     url: "process_deleteData.php",
//                     type: "POST",
//                     data: { id: id },
//                     cache: false,
//                     success: function(dataResult) {
//                         var dataResult = JSON.parse(dataResult);
//                         if (dataResult.statusCode == 200) {
//                             window.location.href = "./ShowData.php";
//                         } else if (dataResult.statusCode == 201) {
//                             alert("Error occurred!");
//                         }
//                     }
//                 });
//             }
       
    
//         console.log(id);
//     }
    
// })


// function Delete(id) {
//     $(document).ready(function() {
//         if (id != "") {
//             $.ajax({
//                 url: "process_deleteData.php",
//                 type: "POST",
//                 data: { id: id },
//                 cache: false,
//                 success: function(dataResult) {
//                     var dataResult = JSON.parse(dataResult);
//                     if (dataResult.statusCode == 200) {
//                         window.location.href = "./ShowData.php";
//                     } else if (dataResult.statusCode == 201) {
//                         alert("Error occurred!");
//                     }
//                 }
//             });
//         }
//     });

//     console.log(id);
// }



$(document).ready(function() {
    function insert(event) {
        event.preventDefault();

        var name = $("#name").val();
        var email = $("#email").val();
        var address = $("#address").val();
        var salary = $("#salary").val();
        var job_role = $("#job_role").val();

        if (name !== "" && email !== "" && address !== "" && salary !== "" && job_role !== "") {
            $.ajax({
                url: "insert_to_DB.php",
                type: "POST",
                data: {
                    name: name,
                    email: email,
                    address: address,
                    salary: salary,
                    job_role: job_role
                },
                cache: false,
                success: function(dataResult) {
                    try {
                        var dataResult = JSON.parse(dataResult);
                        if (dataResult.statusCode == 200) {
                            window.location.href = "./ShowData_2.php";
                        } else if (dataResult.statusCode == 201) {
                            alert("Error occurred: " + dataResult.error);
                        }
                    } catch (e) {
                        console.error("Error parsing JSON:", e);
                        console.error("Response:", dataResult);
                    }
                },
                error: function(xhr, status, error) {
                    console.error("AJAX Error:", status, error);
                }
            });
        }
    }

    $("#Formm").on("submit", insert);
});


function Update(id) {
    var name = $("#name").val();
    var email = $("#email").val();
    var address = $("#address").val();
    var salary = $("#salary").val();
    var job_role = $("#job_role").val();

    if (name !== "" && email !== "" && address !== "" && salary !== "" && job_role !== "") {
        $.ajax({
            url: "processUpdate.php",
            type: "POST",
            data: {
                id: id,
                name: name,
                email: email,
                address: address,
                salary: salary,
                job_role: job_role
            },
            cache: false,
            success: function(dataResult) {
                try {
                    var dataResult = JSON.parse(dataResult);
                    if (dataResult.statusCode == 200) {
                        window.location.href = "./ShowData_2.php";
                    } else if (dataResult.statusCode == 201) {
                        alert("Error occurred: " + dataResult.error);
                    }
                } catch (e) {
                    console.error("Error parsing JSON:", e);
                    console.error("Response:", dataResult);
                }
            },
            error: function(xhr, status, error) {
                console.error("AJAX Error:", status, error);
            }
        });
    }
}

function Delete(id) {
    if (id != "") {
        $.ajax({
            url: "process_deleteData.php",
            type: "POST",
            data: { id: id },
            cache: false,
            success: function(dataResult) {
                try {
                    var dataResult = JSON.parse(dataResult);
                    if (dataResult.statusCode == 200) {
                        window.location.href = "./ShowData_2.php";
                    } else if (dataResult.statusCode == 201) {
                        alert("Error occurred: " + dataResult.error);
                    }
                } catch (e) {
                    console.error("Error parsing JSON:", e);
                    console.error("Response:", dataResult);
                }
            },
            error: function(xhr, status, error) {
                console.error("AJAX Error:", status, error);
            }
        });
    }
}


