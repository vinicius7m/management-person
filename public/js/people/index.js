let person = 0;

    function openModalDeletePerson(personId = 0) {
      $('#modal-delete-person').modal('show');  
      person = personId;
    }

    function deletePerson(personId = 0) {
        $.ajax({
            url: `/people/destroy/${personId}`,
            type: 'delete',
            success: function(data) {
                /* 
                   * Tratamento de dados para tranformar os dados em JSON, 
                   * e se já for JSON continuará sendo
                */   
                const response = (typeof data == "string") ? JSON.parse(data) : data;
                console.log(data);
                if(response.error) {
                    $('#span-danger-message').html(response.message);
                    $('#div-danger-message').show();
                    $('#div-success-message').hide();
                } else {
                    $(`#tr-person-${personId}`).remove();
                    $('#span-success-message').html(response.message);
                    $('#div-success-message').show();
                    $('#div-success-message').fadeIn(100, function() {
                        setInterval(() => {
                            $('#div-success-message').fadeOut(100)
                        }, 3000);
                    });
                    $('#div-danger-message').hide();
                }

                $('#modal-delete-person').modal('hide');
            }

        });
    }

    $(document).ready(function() {
        $('#button-delete-person').click(function() {
            deletePerson(person);
        });
    });
