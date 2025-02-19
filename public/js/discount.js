$(document).ready(function() {
    var tableElement = $('#datatables-discounts');
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
            
                { data: 'discount_type', name: 'discount_type'},
                { data: 'amount', name: 'amount'},
                { data: 'valid_from', name: 'valid_from'},
                { data: 'valid_until', name: 'valid_until'},
                { data: 'action', name: 'action' }
            ],
            initComplete: function() {
                setTimeout(function() {
                    $('#datatables-discounts tbody tr:first').trigger('click');
                }, 500);
            }
        });

        // Handle row click event
        $('#datatables-discounts tbody').on('click', 'tr', function() {
            var rowData = table.row($(this)).data(); 
            if (rowData) {  
               
               
                $('#name').text(rowData.name || 'N/A'); 
                $('#amount').text(rowData.amount || 'N/A'); 
                $('#discount_type').text(rowData.discount_type || 'N/A'); 
                $('#discount_valid_from').text(rowData.valid_from || 'N/A'); 
                $('#discount_valid_to').text(rowData.valid_until || 'N/A'); 
                                
               
            }
        });
        
    } else {
        console.error("Table with ID 'datatables-discounts' not found.");
    }
});
