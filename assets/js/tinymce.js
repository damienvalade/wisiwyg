import 'jquery';
import tinymce from "tinymce/tinymce";

import 'tinymce/icons/default';

import 'tinymce/themes/silver';

import 'tinymce/plugins/paste';
import 'tinymce/plugins/link';
import 'tinymce/plugins/image';
import 'tinymce/plugins/imagetools';

import 'tinymce/plugins/preview';
import 'tinymce/plugins/table';
import 'tinymce/plugins/advlist';
import 'tinymce/plugins/autolink';
import 'tinymce/plugins/lists';
import 'tinymce/plugins/charmap';
import 'tinymce/plugins/print';
import 'tinymce/plugins/anchor';
import 'tinymce/plugins/searchreplace';
import 'tinymce/plugins/visualblocks';
import 'tinymce/plugins/code';
import 'tinymce/plugins/fullscreen';
import 'tinymce/plugins/insertdatetime';
import 'tinymce/plugins/media';
import 'tinymce/plugins/wordcount';

tinymce.init({
    selector: '.target_tinymce',
    base_url: ('build'),
    plugins: 'advlist autolink lists link image imagetools charmap print preview anchor searchreplace visualblocks ' +
        'code fullscreen insertdatetime media table paste code help wordcount',
    toolbar: 'undo redo | formatselect | bold italic backcolor | alignleft aligncenter alignright alignjustify | ' +
        'bullist numlist outdent indent | removeformat | help',
    images_upload_handler: function (blobInfo, success, failure) {
        success("data:" + blobInfo.blob().type + ";base64," + blobInfo.base64());
    }
});