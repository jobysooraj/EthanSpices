$(document).ready(function() {
    var tableElement = $('#datatables-stocks');
    if (tableElement.length) {
        var stockDataUrl = tableElement.data('url'); 
        var table = tableElement.DataTable({
            pageLength: 6,
            lengthChange: false,
            bFilter: false,
            autoWidth: false,
            processing: true, 
            serverSide: true, 
            ajax: stockDataUrl, 
            columns: [
                { data: 'id', name: 'id' },
                { data: 'category', name: 'category' },
            
                { data: 'product', name: 'product'},
                { data: 'total_quantity', name: 'total_quantity'},
                { data: 'used_quantity', name: 'used_quantity'},
                { data: 'balance_quantity', name: 'balance_quantity'},
                { data: 'action', name: 'action'},
            ],
            initComplete: function() {
                setTimeout(function() {
                    $('#datatables-stocks tbody tr:first').trigger('click');
                }, 500);
            }
        });

        // Handle row click event
        $('#datatables-stocks tbody').on('click', 'tr', function() {
            var rowData = table.row($(this)).data(); 
            if (rowData) {  
               
               
                $('#category').text(rowData.category || 'N/A'); 
                $('#product').text(rowData.product || 'N/A'); 
                $('#total_quantity').text(rowData.discount_type || 'N/A'); 
                $('#used_quantity').text(rowData.valid_from || 'N/A'); 
                $('#balance_quantity').text(rowData.valid_until || 'N/A'); 
                                
               
            }
        });
        
    } else {
        console.error("Table with ID 'datatables-stocks' not found.");
    }
    $('#category-select').on('change', function() {
        var categoryId = $(this).val();        
        if (categoryId) {
            $.ajax({
                url: '/get-products/' + categoryId , // Make sure this route exists
                type: 'GET',
                dataType: 'json',
                success: function(data) {
                    $('#product-select').empty().append('<option value="">Select Product</option>');
                    $.each(data, function(index, product) {
                        $('#product-select').append('<option value="'+ product.id +'">'+ product.name +'</option>');
                    });
                },
                error: function() {
                    console.log('Error fetching products for selected category.');
                }
            });
        } else {
            $('#product-select').empty().append('<option value="">Select Product</option>');
        }
    });
});
