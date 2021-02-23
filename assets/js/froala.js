import FroalaEditor from 'froala-editor';
import 'froala-editor/css/froala_editor.pkgd.min.css';
import 'froala-editor/css/froala_style.min.css';

import 'froala-editor/js/languages/fr.js';

import 'froala-editor/js/plugins.pkgd.min.js';
import 'froala-editor/css/plugins.pkgd.min.css';

FroalaEditor("#froala_content",{
    events: {
        "image.beforeUpload": function(files) {
            var editor = this;
            if (files.length) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    var result = e.target.result;
                    editor.image.insert(result, null, null, editor.image.get());
                };
                reader.readAsDataURL(files[0]);
            }
            editor.popups.hideAll();
            return false;
        }
    }

});

window.FroalaEditor = FroalaEditor;

function froalaDisplayError(p_editor, error ) {
    alert(`Error ${error.code}: ${error.message}`);
}

window.froalaDisplayError = froalaDisplayError;