/**
 * Admin Meta Fields JS
 * Repeater add/remove + Media uploader
 */
(function($) {
    'use strict';

    $(document).ready(function() {

        // ===== Repeater: Add row =====
        $(document).on('click', '.bk-repeater-add', function(e) {
            e.preventDefault();
            var repeaterName = $(this).data('template');
            var template = $('.bk-repeater-template[data-template="' + repeaterName + '"]').html();
            var rows = $(this).siblings('.bk-repeater-rows').find('.bk-repeater-row');
            var nextIndex = rows.length;

            // Replace {{INDEX}} in template
            var html = template.replace(/\{\{INDEX\}\}/g, nextIndex);
            $(this).siblings('.bk-repeater-rows').append(html);

            // Re-init any media uploaders in the new row
            initImageUploaders();
        });

        // ===== Repeater: Remove row =====
        $(document).on('click', '.bk-repeater-remove', function(e) {
            e.preventDefault();
            $(this).closest('.bk-repeater-row').remove();
            // Renumber remaining rows
            var repeater = $(this).closest('.bk-repeater');
            repeater.find('.bk-repeater-row').each(function(i) {
                $(this).attr('data-index', i);
                $(this).find('.bk-repeater-row-title').text('#' + (i + 1));
                // Update field names
                $(this).find('input, textarea, select').each(function() {
                    var name = $(this).attr('name');
                    if (name) {
                        name = name.replace(/\[\d+\]/, '[' + i + ']');
                        $(this).attr('name', name);
                    }
                });
            });
        });

        // ===== Image Upload =====
        function initImageUploaders() {
            $('.bk-upload-btn').off('click').on('click', function(e) {
                e.preventDefault();
                var button = $(this);
                var fieldName = button.data('field');
                var hiddenInput = $('input[name="' + fieldName + '"]');
                var preview = $('.bk-image-preview[data-preview-for="' + fieldName + '"]');

                // Create media frame
                var frame = wp.media({
                    title: 'اختر صورة',
                    button: { text: 'اختيار' },
                    multiple: false,
                    library: { type: 'image' }
                });

                frame.on('select', function() {
                    var attachment = frame.state().get('selection').first().toJSON();
                    hiddenInput.val(attachment.id);
                    preview.html('<img src="' + attachment.url + '" alt="" style="max-width:120px;max-height:80px;" />');
                    button.siblings('.bk-remove-img').show();
                });

                frame.open();
            });
        }

        // ===== Image Remove =====
        $('.bk-remove-img').on('click', function(e) {
            e.preventDefault();
            var fieldName = $(this).data('field');
            $('input[name="' + fieldName + '"]').val('');
            $('.bk-image-preview[data-preview-for="' + fieldName + '"]').html('');
            $(this).hide();
        });

        // Init on load
        initImageUploaders();

        // ===== Color Picker =====
        if ($.fn.wpColorPicker) {
            $('.bk-color-picker').wpColorPicker();
        }

        // ===== Collapsible sections =====
        $('.bk-repeater-row-header').on('click', function() {
            $(this).siblings('.bk-repeater-row-body').slideToggle(150);
        });
    });
})(jQuery);
