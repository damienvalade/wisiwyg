//Prérequis

import 'jquery';
import Quill from "quill";

import ImageResize from 'quill-image-resize/image-resize.min.js';

import "quill/dist/quill.snow.css";
import "quill/dist/quill.min.js";
import "quill/ui/icons";
import "quill/modules/toolbar";

$('.target_quill').each(function(i, el) {
    var el = $(this), id = 'quilleditor-' + i, val = el.val(), editor_height = 200;
    var div = $('<div/>').attr('id', id).css('height', editor_height + 'px').html(val);
    el.addClass('d-none');
    el.parent().append(div);

    var toolbarOptions = [
        [{ 'font': [] }, { 'size': [] }],
        [ 'bold', 'italic', 'underline', 'strike' ],
        [{ 'color': [] }, { 'background': [] }],
        [{ 'script': 'super' }, { 'script': 'sub' }],
        [{ 'header': '1' }, { 'header': '2' }, 'blockquote', 'code-block' ],
        [{ 'list': 'ordered' }, { 'list': 'bullet'}, { 'indent': '-1' }, { 'indent': '+1' }],
        [ 'direction', { 'align': [] }],
        [ 'link', 'image', 'video', 'formula' ],
        [ 'clean' ]
    ];

    Quill.register('modules/imageResize', ImageResize);

    var quill = new Quill('#' + id, {
        modules: {
            toolbar: toolbarOptions,
            imageResize: {},
        },
        theme: 'snow'
    });

    var textareaId = this.id;

    quill.on('text-change', function() {
        $("#"+textareaId).val(quill.root.innerHTML.replace(/"/g, '\''));
    });
});
