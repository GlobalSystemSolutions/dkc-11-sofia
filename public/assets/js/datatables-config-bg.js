$().DataTable();
$(document).ready(function() {
    $('#refferals-table').DataTable({
        ordering:  false,
        language: {
            processing: "Данните се обработват...",
            search: "Търси:&nbsp;",
            lengthMenu: "Покажи&nbsp; _MENU_",
            info: "Показване от _START_ до _END_ от общо _TOTAL_ резултата",
            infoEmpty: "Показване на 0 от 0 от общо 0 резултата",
            infoFiltered: "(филтрирани от общо _MAX_)",
            infoPostFix: "",
            loadingRecords: "Зареждане...",
            zeroRecords: "Не са открити направления",
            emptyTable: "Не са открити направления",
            paginate: {
                first: "Първа",
                previous: "Предишна",
                next: "Следваща",
                last: "Последна"
            },
            aria: {
                sortAscending:  ": activer pour trier la colonne par ordre croissant",
                sortDescending: ": activer pour trier la colonne par ordre décroissant"
            }
        }
    });
});