$(document).ready(function() {
    var tableElement = $('#datatables-suppliers');
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
                { data: 'mobile', name: 'mobile'},            
                { data: 'email', name: 'email' },
                { data: 'address', name: 'address' },
                { data: 'action', name: 'action' }
            ],
            initComplete: function() {
                setTimeout(function() {
                    $('#datatables-suppliers tbody tr:first').trigger('click');
                }, 500);
            }
        });

        // Handle row click event
        $('#datatables-suppliers tbody').on('click', 'tr', function() {
            var rowData = table.row($(this)).data(); 
            if (rowData) {                  
               
                $('#name').text(rowData.name || 'N/A'); 
                $('#mobile').text(rowData.mobile || 'N/A'); 
                $('#email').text(rowData.email); 
                $('#address').text(rowData.address || 'No description available');                 
              
            }
        });
        
    } else {
        console.error("Table with ID 'datatables-suppliers' not found.");
    }
});
