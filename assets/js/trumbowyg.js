//Prérequis

import 'jquery';
import 'trumbowyg';

import icons from 'trumbowyg/dist/ui/icons.svg';
import 'trumbowyg/dist/ui/trumbowyg.min.css';
import 'trumbowyg/dist/trumbowyg.min.js';

// Ajout resize image
import 'trumbowyg/dist/plugins/resizimg/resizable-resolveconflict.min.js'
import 'jquery-resizable-dom/dist/jquery-resizable.min.js';
import 'trumbowyg/dist/plugins/resizimg/trumbowyg.resizimg.min.js'

// Ajout des image en base 64
import base64 from 'trumbowyg/dist/plugins/base64/trumbowyg.base64.min.js';

// Ajout tableau
import 'trumbowyg/dist/plugins/table/ui/trumbowyg.table.min.css';
import table from 'trumbowyg/dist/plugins/table/trumbowyg.table.min.js';

// Ajout indent
import 'trumbowyg/dist/plugins/indent/trumbowyg.indent.min.js';

// Ajout line indent
import 'trumbowyg/dist/plugins/lineheight/trumbowyg.lineheight.min.js';

$.trumbowyg.svgPath = icons;

$('.target_wisiwyg').trumbowyg({
    btns: [
        ['viewHTML'],
        ['undo', 'redo'],
        ['formatting'],
        ['indent', 'outdent'],
        ['lineheight'],
        ['strong', 'em', 'del'],
        ['superscript', 'subscript'],
        ['link'],
        ['insertImage', 'base64'],
        ['justifyLeft', 'justifyCenter', 'justifyRight', 'justifyFull'],
        ['unorderedList', 'orderedList'],
        ['horizontalRule'],
        ['removeformat'],
        ['table'],
        ['fullscreen'],
    ],
    plugins: {
        resizimg: {
            minSize: 64,
            step: 16,
        }
    }
});

//Pour la mise en forme

import 'bootstrap';
import 'popper.js';