$().DataTable();
$(document).ready(function() {
    $('#refferals-table').DataTable({
        ordering:  false,
        language: {
            processing: "Data is processing...",
            search: "Search:&nbsp;",
            lengthMenu: "Show&nbsp; _MENU_",
            info: "Showing _START_ to _END_ of _TOTAL_ entries",
            infoEmpty: "Showing 0 to 0 of 0 entries",
            infoFiltered: "(filtered of _MAX_)",
            infoPostFix: "",
            loadingRecords: "Loading...",
            zeroRecords: "No referrals found",
            emptyTable: "No referrals found",
            paginate: {
                first: "First",
                previous: "Previous",
                next: "Next",
                last: "Last"
            },
            aria: {
                sortAscending:  ": activer pour trier la colonne par ordre croissant",
                sortDescending: ": activer pour trier la colonne par ordre décroissant"
            }
        }
    });
});