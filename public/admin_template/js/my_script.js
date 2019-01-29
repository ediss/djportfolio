var photosReorder = document.getElementsByName("reorder");
$( "#sortable" ).sortable({

    update: function(event, ui) {
        var positions = {};
        $('.positions').each(function(index) {
            positions[$(this).data('position')] = index + 1;

        });

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            url         :   '/admin/upravljanje-pozicijama',
            method      :   "POST",
            data        :   {positions: positions},
            dataType    :   'JSON',
        //    / processData: false,
        beforeSend: function (xhr) {
            // Function needed from Laravel because of the CSRF Middleware
            var token = $('meta[name="csrf_token"]').attr('content');

            if (token) {
                return xhr.setRequestHeader('X-CSRF-TOKEN', token);
            }
        },
            success: function(response) {
                console.log(response);
            },
            error: function(response) {
                console.log('Error', response);
            }
        })
    }

})
/* $(photosReorder).click(function(e){

    e.preventDefault();
    var test = $(this).data("position");


    //console.log(positions);

}); */
