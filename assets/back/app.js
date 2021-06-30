
global.$ = global.jQuery = $

// start the Stimulus application
import './../bootstrap';

import './js/collection';

import './scss/main.scss';

import ready from "@ryanmorr/ready";

ready( '.test-ck', (element) => {
    CKEDITOR.replace(element, {
        toolbar: [
            [ 'Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Undo', 'Redo' ]
        ],
    });
});



