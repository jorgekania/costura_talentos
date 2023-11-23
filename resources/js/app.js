import './bootstrap';
import 'tinymce/tinymce';
import 'tinymce/skins/ui/oxide/skin.min.css';
import 'tinymce/skins/content/default/content.min.css';
import 'tinymce/skins/content/default/content.css';
import 'tinymce/icons/default/icons';
import 'tinymce/themes/silver/theme';
import 'tinymce/models/dom/model';
import 'tinymce/plugins/advlist';
import 'tinymce/plugins/lists';
import 'tinymce/plugins/link';
import 'tinymce/plugins/image';
import 'tinymce/plugins/table';
import 'tinymce/plugins/media';
import 'tinymce/plugins/pagebreak';
import 'tinymce/plugins/anchor';
import 'tinymce/plugins/codesample';
import 'tinymce/langs/pt_BR.js';
import Alpine from 'alpinejs';
import mask from '@alpinejs/mask';

Alpine.plugin(mask)

window.addEventListener('DOMContentLoaded', () => {
    tinymce.init({
        selector: 'textarea',
        language: 'pt_BR',
        api_key: 'e74qm4u80w3qr840o5axzjkbhnz2zhs7a7mrarc5ftilyxak',
        skin: false,
        content_css: false,
        menubar: false,
        autosave_interval: '30s',
        autosave_retention: '2m',
        plugins: 'lists advlist link image table media pagebreak anchor codesample',
        toolbar: "undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | align numlist bullist | link table | lineheight outdent indent| forecolor backcolor removeformat | fullscreen preview | save print",
        autosave_ask_before_unload: true,
        branding: false,
        toolbar_mode: 'sliding'
    });
})
