$(document).ready(function() {
    let $wrapper = $('.js-characteristic-wrapper');
    $wrapper.on('click', '.js-remove-characteristic', function(e) {
        e.preventDefault();
        $(this).closest('.js-characteristic-item')
            .fadeOut()
            .remove();
    });
    $wrapper.on('click', '.js-characteristic-add', function(e) {
        e.preventDefault();
        // Get the data-prototype explained earlier
        let prototype = $wrapper.data('prototype');
        // get the new index
        let index = $wrapper.data('index');
        // Replace '__name__' in the prototype's HTML to
        // instead be a number based on how many items we have
        let newForm = prototype.replace(/__name__/g, index);
        // increase the index with one for the next item
        $wrapper.data('index', index + 1);
        // Display the form in the page before the "new" link
        $(this).before(newForm);
    });
});
