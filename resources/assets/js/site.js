/**
 * Created by AdnanAhmad on 2017-01-28.
 */

$(function () {
    $('#js-select').click(function () {
        if ($(this).text().trim() == 'Select All') {

            $('#js-export').prop('disabled', false);
            $(this).html('<i class="fa fa-undo"></i> UnSelect All')
            $('.js-select-students').each(function () {
                $(this).prop("checked", true);
            })
        } else {

            $(this).html('<i class="fa fa-check"></i> Select All')
            $('#js-export').prop('disabled', true);
            $('.js-select-students').each(function () {
                $(this).prop("checked", false);
            })
        }

    });

    $('.js-select-students').click(function () {

        if($(":checkbox:checked").length > 0) {
            $('#js-export').prop('disabled', false);
        } else {
            $('#js-export').prop('disabled', true);
        }
    })
});