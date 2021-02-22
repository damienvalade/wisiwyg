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
        ['bold', 'italic', 'underline', 'strike'],        // toggled buttons
        ['blockquote', 'code-block'],

        [{ 'header': 1 }, { 'header': 2 }],               // custom button values
        [{ 'list': 'ordered'}, { 'list': 'bullet' }],
        [{ 'script': 'sub'}, { 'script': 'super' }],      // superscript/subscript
        [{ 'indent': '-1'}, { 'indent': '+1' }],          // outdent/indent
        [{ 'direction': 'rtl' }],                         // text direction

        [{ 'size': ['small', false, 'large', 'huge'] }],  // custom dropdown
        [{ 'header': [1, 2, 3, 4, 5, 6, false] }],

        [{ 'color': [] }, { 'background': [] }],          // dropdown with defaults from theme
        [{ 'font': [] }],
        [{ 'align': [] }],
        ['link', 'image'],

        ['clean']
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
