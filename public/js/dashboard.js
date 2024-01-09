$(document).ready(function() {
    console.log("DASHBOARD");
    //BOOTSTRAP
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl)
    })    
	//SPINNER
	var spinner = "<div style='margin-top:25px !important;' class='col s12 m12'><div class='center'><img src='img/spinner.gif' height='64px'></div></div>";
    //USERS
    $(document).on('click', '#btnAddUser', function(e) {
        e.preventDefault();
        var url = $('#frmAddUser').attr('action');
        var data = $('#frmAddUser').serialize();

        $.ajax({
            url: url, 
            type: 'POST',
            dataType: 'json',
            data: data,
            success: function(response) {
                $("#mdlSuccessText").text(response.message);
                $("#mdlSuccess").modal('show');
            },
            error: function(response) {
                if (response.status === 422) {
                    var errors = response.responseJSON.errors;
                    $("#mdlDangerText").html(getErrors(errors));
                }
                $("#mdlDanger").modal('show');
            }
        });
    });
    $(document).on('click', '#btnModUser', function(e) {
        e.preventDefault();
        var url = $(this).data('url');
        var token = $(this).data('token');
        var name = $('#modUserName').val();
        var email = $('#modUserEmail').val();
        var pass = $('#modUserPassword').val();

        if (confirm('¿Estás seguro de que quieres modificar el usuario?')) {
            $.ajax({
                url: url,
                type: 'POST',
                data: {
                    _method: "PUT",
                    _token: token,
                    name: name,
                    email: email,
                    password: pass
                },
                dataType: 'json',
                success: function(response) {
                    $("#mdlSuccessText").text(response.message);
                    $("#mdlSuccess").modal('show');
                },
                error: function(response) {
                    if (response.status === 422) {
                        var errors = response.responseJSON.errors;
                        $("#mdlDangerText").html(getErrors(errors));
                    }
                    $("#mdlDanger").modal('show');
                }
            });
        }
    });
    $(document).on('click', '.btnModUser', function(e) {
        e.preventDefault();
        var url = $(this).data('url');
        var token = $(this).data('token');
        var id = $(this).data('id');
        var name = $('#modName-'+id).val();
        var email = $('#modEmail-'+id).val();

        if (confirm('¿Estás seguro de que quieres modificar este usuario?')) {
            $.ajax({
                url: url,
                type: 'POST',
                data: {
                    _method: "PUT",
                    _token: token,
                    name: name,
                    email: email
                },
                dataType: 'json',
                success: function(response) {
                    $("#mdlSuccessText").text(response.message);
                    $("#mdlSuccess").modal('show');
                },
                error: function(response) {
                    if (response.status === 422) {
                        var errors = response.responseJSON.errors;
                        $("#mdlDangerText").html(getErrors(errors));
                    }
                    $("#mdlDanger").modal('show');
                }
            });
        }
    });
    $(document).on('click', '.btnDelUser', function(e) {
        e.preventDefault();
        var url = $(this).data('url');
        var token = $(this).data('token');

        if (confirm('¿Estás seguro de que quieres eliminar este usuario?')) {
            $.ajax({
                url: url,
                type: 'POST',
                data: {
                    _method: "DELETE",
                    _token: token
                },
                dataType: 'json',
                success: function(response) {
                    $("#mdlSuccessText").text(response.message);
                    $("#mdlSuccess").modal('show');
                },
                error: function(response) {
                    if (response.status === 422) {
                        var errors = response.responseJSON.errors;
                        $("#mdlDangerText").html(getErrors(errors));
                    }
                    $("#mdlDanger").modal('show');
                }
            });
        }
    });
    //CLIENTS
    $(document).on('click', '#btnAddClient', function(e) {
        e.preventDefault();
        var url = $('#frmAddClient').attr('action');
        var data = $('#frmAddClient').serialize();

        $.ajax({
            url: url, 
            type: 'POST',
            dataType: 'json',
            data: data,
            success: function(response) {
                $("#mdlSuccessText").text(response.message);
                $("#mdlSuccess").modal('show');
            },
            error: function(response) {
                if (response.status === 422) {
                    var errors = response.responseJSON.errors;
                    $("#mdlDangerText").html(getErrors(errors));
                }
                $("#mdlDanger").modal('show');
            }
        });
    });
    $(document).on('click', '.mdlModClient', function(e) {
        var url = $(this).data('url');
        $.ajax({
            url: url, 
            type: 'GET',
            dataType: 'html',
            success: function(response) {
                console.log(response);
                $("#rowFrmModClient").html(response);
            }
        });
    });
    $(document).on('click', '#btnModClient', function(e) {
        e.preventDefault();
        var url = $('#frmModClient').attr('action');
        var data = $('#frmModClient').serialize();

        if (confirm('¿Estás seguro de que quieres modificar este usuario?')) {
            $.ajax({
                url: url,
                type: 'POST',
                data: data,
                dataType: 'json',
                success: function(response) {
                    $("#mdlSuccessText").text(response.message);
                    $("#mdlSuccess").modal('show');
                },
                error: function(response) {
                    if (response.status === 422) {
                        var errors = response.responseJSON.errors;
                        $("#mdlDangerText").html(getErrors(errors));
                    }
                    $("#mdlDanger").modal('show');
                }
            });
        }
    });
    $(document).on('click', '.btnDelClient', function(e) {
        e.preventDefault();
        var url = $(this).data('url');
        var token = $(this).data('token');

        if (confirm('¿Estás seguro de que quieres eliminar este cliente?')) {
            $.ajax({
                url: url,
                type: 'POST',
                data: {
                    _method: "DELETE",
                    _token: token
                },
                dataType: 'json',
                success: function(response) {
                    $("#mdlSuccessText").text(response.message);
                    $("#mdlSuccess").modal('show');
                },
                error: function(response) {
                    if (response.status === 422) {
                        var errors = response.responseJSON.errors;
                        $("#mdlDangerText").html(getErrors(errors));
                    }
                    $("#mdlDanger").modal('show');
                }
            });
        }
    });
    //DEPOSITS
    $(document).on('click', '#btnAddDeposit', function(e) {
        e.preventDefault();
        var url = $('#frmAddDeposit').attr('action');
        var data = $('#frmAddDeposit').serialize();

        $.ajax({
            url: url, 
            type: 'POST',
            dataType: 'json',
            data: data,
            success: function(response) {
                $("#mdlSuccessText").text(response.message);
                $("#mdlSuccess").modal('show');
            },
            error: function(response) {
                if (response.status === 422) {
                    var errors = response.responseJSON.errors;
                    $("#mdlDangerText").html(getErrors(errors));
                }
                $("#mdlDanger").modal('show');
            }
        });
    });    
    $(document).on('click', '.btnModDeposit', function(e) {
        e.preventDefault();
        var url = $(this).data('url');
        var token = $(this).data('token');
        var id = $(this).data('id');
        var desc = $('#modDescription-'+id).val();

        if (confirm('¿Estás seguro de que quieres modificar este usuario?')) {
            $.ajax({
                url: url,
                type: 'POST',
                data: {
                    _method: "PUT",
                    _token: token,
                    description: desc
                },
                dataType: 'json',
                success: function(response) {
                    $("#mdlSuccessText").text(response.message);
                    $("#mdlSuccess").modal('show');
                },
                error: function(response) {
                    if (response.status === 422) {
                        var errors = response.responseJSON.errors;
                        $("#mdlDangerText").html(getErrors(errors));
                    }
                    $("#mdlDanger").modal('show');
                }
            });
        }
    });
    $(document).on('click', '.btnDelDeposit', function(e) {
        e.preventDefault();
        var url = $(this).data('url');
        var token = $(this).data('token');

        if (confirm('¿Estás seguro de que quieres eliminar este deposito?')) {
            $.ajax({
                url: url,
                type: 'POST',
                data: {
                    _method: "DELETE",
                    _token: token
                },
                dataType: 'json',
                success: function(response) {
                    $("#mdlSuccessText").text(response.message);
                    $("#mdlSuccess").modal('show');
                },
                error: function(response) {
                    if (response.status === 422) {
                        var errors = response.responseJSON.errors;
                        $("#mdlDangerText").html(getErrors(errors));
                    }
                    $("#mdlDanger").modal('show');
                }
            });
        }
    });
    //PRODUCTS
    $(document).on('click', '#btnAddProduct', function(e) {
        e.preventDefault();
        var url = $('#frmAddProduct').attr('action');
        var data = $('#frmAddProduct').serialize();

        $.ajax({
            url: url, 
            type: 'POST',
            dataType: 'json',
            data: data,
            success: function(response) {
                $("#mdlSuccessText").text(response.message);
                $("#mdlSuccess").modal('show');
            },
            error: function(response) {
                if (response.status === 422) {
                    var errors = response.responseJSON.errors;
                    $("#mdlDangerText").html(getErrors(errors));
                }
                $("#mdlDanger").modal('show');
            }
        });
    });    
    $(document).on('click', '#btnModProduct', function(e) {
        e.preventDefault();
        var url = $('#frmModProduct').attr('action');
        var data = $('#frmModProduct').serialize();

        if (confirm('¿Estás seguro de que quieres modificar este producto?')) {
            $.ajax({
                url: url,
                type: 'POST',
                data: data,
                dataType: 'json',
                success: function(response) {
                    $("#mdlSuccessText").text(response.message);
                    $("#mdlSuccess").modal('show');
                },
                error: function(response) {
                    if (response.status === 422) {
                        var errors = response.responseJSON.errors;
                        $("#mdlDangerText").html(getErrors(errors));
                    }
                    $("#mdlDanger").modal('show');
                }
            });
        }
    });    
    $(document).on('click', '.mdlModProduct', function(e) {
        var url = $(this).data('url');
        $.ajax({
            url: url, 
            type: 'GET',
            dataType: 'html',
            success: function(response) {
                console.log(response);
                $("#rowFrmModProduct").html(response);
            }
        });
    });
    $(document).on('click', '.reloadButton', function() {
        location.reload();
    });
    //FUNCTIONS
    function getErrors(errors) {
        var errorList = '<ul>';
        $.each(errors, function(key, value) {
          errorList += '<li>' + value[0] + '</li>';
        });
        errorList += '</ul>';    
        return errorList;
    }
});