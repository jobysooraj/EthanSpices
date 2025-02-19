$(document).ready(function() {
    var tableElement = $('#datatables-promocodes');
    if (tableElement.length) {
        var promocodeDataUrl = tableElement.data('url'); 
        var table = tableElement.DataTable({
            pageLength: 6,
            lengthChange: false,
            bFilter: false,
            autoWidth: false,
            processing: true, 
            serverSide: true, 
            ajax: promocodeDataUrl, 
            columns: [
                {
                    data: 'id', 
                    name: 'id'
                },
                {
                    data: 'promocode', 
                    name: 'promocode'
                },
                {
                    data: 'description', 
                    name: 'description'
                },
                {
                    data: 'discount_type', 
                    name: 'discount_type',
                    render: function(data, type, row) {
                        return data ? 'Percentage' : 'Fixed Amount'; // Render discount type as 'Percentage' or 'Fixed Amount'
                    }
                },
                {
                    data: 'discount_value', 
                    name: 'discount_value'
                },
                
                {
                    data: 'start_date', 
                    name: 'start_date',
                    render: function(data, type, row) {
                        return data ? new Date(data).toLocaleDateString() : ''; // Format start date
                    }
                },
                {
                    data: 'end_date', 
                    name: 'end_date',
                    render: function(data, type, row) {
                        return data ? new Date(data).toLocaleDateString() : ''; // Format end date
                    }
                },
              
                {
                    data: 'status', 
                    name: 'status',
                   
                },
                {
                    data: 'action', 
                    name: 'action',
                    orderable: false, 
                    searchable: false
                }
            ],
            initComplete: function() {
                setTimeout(function() {
                    $('#datatables-promocodes tbody tr:first').trigger('click');
                }, 500);
            }
        });

        // Handle row click event
        $('#datatables-promocodes tbody').on('click', 'tr', function() {
            var rowData = table.row($(this)).data(); 
            if (rowData) {  
            
                $('#promocode').text(rowData.promocode || 'N/A'); 
                $('#description').text(rowData.description || 'No description available'); 
                $('#discount_type').text(rowData.discount_type === 0 ? 'Fixed Discount' : 'Percentage Discount');


                $('#discount_value').text(rowData.discount_value || 'N/A'); 
                $('#min_order_amount').text(rowData.min_order_amount ? '$' + rowData.min_order_amount : 'N/A'); 
                $('#max_discount').text(rowData.max_discount ? '$' + rowData.max_discount : 'N/A'); 
                $('#start_date').text(rowData.start_date ? new Date(rowData.start_date).toLocaleDateString() : 'N/A');
                $('#end_date').text(rowData.end_date ? new Date(rowData.end_date).toLocaleDateString() : 'N/A');
                $('#usage_limit').text(rowData.usage_limit || 'N/A');
                $('#usage_per_user_limit').text(rowData.usage_per_user_limit || 'N/A');
                
                $('#status').html(rowData.status);
                
            }
        });
        
    } else {
        console.error("Table with ID 'datatables-promocodes' not found.");
    }
});
