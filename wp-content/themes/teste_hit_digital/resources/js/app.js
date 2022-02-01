jQuery(function($){

    $(document).on('submit', '#form', function(e){
        e.preventDefault();

        let form = $(this);
        let dados = form.serialize();

        $.ajax({
            type: "post",
            url: wp.ajax_url,
            data: {
                dados: dados,
                action: 'ajax_send_email'
            },
            dataType: "json"
        }).done(function(response){
            console.log(response);
        });
    });

});