//A-4. Date range picker with time picker
$(".datepick_for_datatable").daterangepicker({
    "timePicker": false,
    "timePickerIncrement": 5,
    "autoApply": true,
    "linkedCalendars": true,
    "autoUpdateInput": false,
    "format": 'YYYY-MM-DD',
    "opens": "left",
    locale: {
        cancelLabel: '取消',
        applyLabel: '確定'
    }
});
