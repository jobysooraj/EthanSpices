$(document).ready(function() {
    var tableElement = $('#datatables-units');
    if (tableElement.length) {
        var categoriesDataUrl = tableElement.data('url'); 
        var table = tableElement.DataTable({
            pageLength: 6,
            lengthChange: false,
            bFilter: false,
            autoWidth: false,
            processing: true, 
            serverSide: true, 
            ajax: categoriesDataUrl, 
            columns: [
                { data: 'id', name: 'id' },
                { data: 'title', name: 'title' },
                { data: 'description', name: 'description'},
                { data: 'status', name: 'status'},
                { data: 'action', name: 'action' }
            ],
            initComplete: function() {
                setTimeout(function() {
                    $('#datatables-units tbody tr:first').trigger('click');
                }, 500);
            }
        });

        // Handle row click event
        $('#datatables-units tbody').on('click', 'tr', function() {
            var rowData = table.row($(this)).data(); 
            if (rowData) {  
                $('#title').text(rowData.title || 'N/A'); 
                $('#description').text(rowData.description || 'N/A'); 
                var statusHtml = rowData.status                 
                $('#status').html(statusHtml);                
               
            }
        });
        
    } else {
        console.error("Table with ID 'datatables-categories' not found.");
    }
});
