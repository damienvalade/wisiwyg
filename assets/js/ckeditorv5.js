import 'jquery';
import ClassicEditor from '/assets/Ckeditor5/build/ckeditor';

ClassicEditor
    .create(document.querySelector('.target_ckeditorv5'), {

        toolbar: {
            items: [
                'heading',
                '|',
                'bold',
                'italic',
                'underline',
                'fontFamily',
                'fontSize',
                'fontColor',
                'fontBackgroundColor',
                'bulletedList',
                'numberedList',
                '|',
                'indent',
                'outdent',
                '|',
                'imageUpload',
                'blockQuote',
                'insertTable',
                'mediaEmbed',
                'link',
                'undo',
                'redo',
                'exportPdf',
                'horizontalLine'
            ]
        },

        language: 'en',
        image: {
            toolbar: [
                'imageTextAlternative',
                'imageStyle:full',
                'imageStyle:side'
            ]
        },

        table: {
            contentToolbar: [
                'tableColumn',
                'tableRow',
                'mergeTableCells'
            ]
        },
    })
    .then(editor => {
        window.editor = editor;
    })
    .catch(error => {
        console.error(error);
    });