(function() {
    'use strict';
    $('.input-file').each(function() {
        var $input = $(this),
            $label = $input.next('.js-labelFile'),
            labelVal = $label.html();

        $input.on('change', function(element) {
            var fileName = '';
            if (element.target.value) fileName = element.target.value.split('\\').pop();
            fileName ? $label.addClass('has-file').find('.js-fileName').html(fileName) : $label.removeClass('has-file').html(labelVal);
$('#send_message  .form-group  .reset').css('display','block');
            $('#form_edit  .form-group  .reset').css('display','block');


        });
    });
})();


$('#form_edit  .form-group  .reset').click(function () {
    $('#form_edit  .form-group  .reset').css('display','none');
    $('#form_edit .btn-tertiary .js-fileName ').html('Choose a file');
    $('#form_edit .btn-tertiary  ').removeClass('has-file');
    $('#form_edit .btn-tertiary #file ').val ('');

    document.getElementById("fileInputId").value = null;

});



$('#send_message  .form-group  .reset').click(function () {
    $('#send_message  .form-group  .reset').css('display','none');
    $('#send_message .btn-tertiary .js-fileName ').html('Choose a file');
    $('#send_message .btn-tertiary  ').removeClass('has-file');
    $('#send_message .btn-tertiary #file ').val('');
});