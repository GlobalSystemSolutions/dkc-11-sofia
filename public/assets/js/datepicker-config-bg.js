$(function() {
    $('.singledate').daterangepicker({
        singleDatePicker: true,
        showDropdowns: true,
        minYear: 1901,
        maxYear: parseInt(moment().format('YYYY'),10),
        locale: {
            format: 'DD.MM.YYYY',
            // Language Setting
            monthNames: ["Януари", "Февруари", "Март", "Април", "Май", "Юни", "Юли", "Август", "Септември", "Октомври", "Ноември", "Декември"],
            daysOfWeek: ["нд", "пн", "вт", "ср", "чт", "пт", "сб"],
            firstDay: 1
        },

    });
});