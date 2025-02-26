$(document).ready(function() {
    var tableElement = $('#datatables-combos');
    if (tableElement.length) {
        var combosDataUrl = tableElement.data('url'); 
        var table = tableElement.DataTable({
            pageLength: 6,
            lengthChange: false,
            bFilter: false,
            autoWidth: false,
            processing: true, 
            serverSide: true, 
            ajax: combosDataUrl, 
            columns: [
                { data: 'id', name: 'id' },
                { data: 'image', name: 'image'},
                { data: 'code', name: 'code' },
                { data: 'name', name: 'name' },
                { data: 'products', name: 'products'},
                
                { data: 'combo_price', name: 'combo_price' },
                { data: 'description', name: 'description' },
                { data: 'action', name: 'action', orderable: false, searchable: false }
            ],
            initComplete: function() {
                setTimeout(function() {
                    $('#datatables-combos tbody tr:first').trigger('click');
                }, 500);
            }
        });

        // Handle row click event
        $('#datatables-combos tbody').on('click', 'tr', function() {
            var rowData = table.row($(this)).data(); 
            if (rowData) {  
               // Extract image URL safely
               var imageUrl = $(rowData.image).attr("src") || 'default-image.jpg'; 
                $('#combo_image').attr('src', imageUrl);

                // Populate description
                $('#description').text(rowData.description || 'No description available');
                // Populate table fields
                $('#code').text(rowData.code || 'N/A');
                $('#combo_name').text(rowData.name || 'N/A');
                $('#gst_amount').text(rowData.gst_tax.percentage || 'N/A');
                  // Populate status safely
                $('#status').html(rowData.status ? '<span class="badge bg-success">Active</span>' : '<span class="badge bg-danger">Inactive</span>');
                $('#price').text(rowData.combo_price || 'N/A');

                $('#product_name').text(rowData.products||'N/A');
               
               

            }
        });
        
    } else {
        console.error("Table with ID 'datatables-combos' not found.");
    }
    $('#product_id').select2({
        placeholder: "Select Products",
        allowClear: true,
        width: '100%' // Ensures full-width styling
    });
  
});
