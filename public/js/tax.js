$(document).ready(function() {
    var tableElement = $('#datatables-taxes');
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
                { data: 'name', name: 'name' },
                { data: 'percentage', name: 'percentage'},
                { data: 'action', name: 'action' }
            ],
            initComplete: function() {
                setTimeout(function() {
                    $('#datatables-taxes tbody tr:first').trigger('click');
                }, 500);
            }
        });

        // Handle row click event
        $('#datatables-taxes tbody').on('click', 'tr', function() {
            var rowData = table.row($(this)).data(); 
            if (rowData) {  
               
               
                $('#name').text(rowData.name || 'N/A'); 
                $('#percentage').text(rowData.percentage || 'N/A'); 
                                
               
            }
        });
        
    } else {
        console.error("Table with ID 'datatables-categories' not found.");
    }
});
