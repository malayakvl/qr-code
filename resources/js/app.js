import './bootstrap';
import '../css/app.css';
import $ from "jquery";
import 'toolcool-color-picker';


import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

const $colorPickerBackground = document.getElementById('color-picker-background');
const $colorPickerFill = document.getElementById('color-picker-fill');

$colorPickerBackground.addEventListener('change', (evt) => {
    $('#colorBackground').val(evt.detail.rgb);
});
$colorPickerFill.addEventListener('change', (evt) => {
    $('#colorFill').val(evt.detail.rgb)
});

$('#applyCodeBtn').click(function() {
    let error = false;
    const linkElErr = $('#linkError');
    const sizeElErr = $('#sizeError');
    linkElErr.html('');
    sizeElErr.html('');

    if ($('#link').val() === '') {
        error = true;
        linkElErr.html('Required');

    }
    if ($('#size').val() === '') {
        error = true;
        sizeElErr.html('Required');

    }
    if (!error) {
        $.post( "/api/generateCode", {
            "contentLink": $('input[name="link"]').val(),
            "size": $('input[name="size"]').val(),
            "bgColor": $('#colorBackground').val(),
            "fillColor": $('#colorFill').val()
        }, function( data ) {
            $('#generatedCode').html(data)
        });
    }

})
