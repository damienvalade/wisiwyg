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

tinymce.init({
    selector: '.target_tinymce',
    base_url: ('build'),
    plugins: 'image preview imagetools table',
    images_upload_handler: function (blobInfo, success, failure) {
        success("data:" + blobInfo.blob().type + ";base64," + blobInfo.base64());
    }
});