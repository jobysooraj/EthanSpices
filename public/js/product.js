$(document).ready(function() {
    var tableElement = $('#datatables-products');
    if (tableElement.length) {
        var productDataUrl = tableElement.data('url'); 
        var table = tableElement.DataTable({
            pageLength: 6,
            lengthChange: false,
            bFilter: false,
            autoWidth: false,
            processing: true, 
            serverSide: true, 
            ajax: productDataUrl, 
            columns: [
                { data: 'id', name: 'id' },
                { data: 'slug', name: 'slug' },               
                { data: 'name', name: 'name' },
                { data: 'price', name: 'price' },
                { data: 'description', name: 'description' },
                { data: 'status', name: 'status' },
                { data: 'action', name: 'action' }
            ],
            initComplete: function() {
                setTimeout(function() {
                    $('#datatables-products tbody tr:first').trigger('click');
                }, 500);
            }
        });

        // Handle row click event
        $('#datatables-products tbody').on('click', 'tr', function() {
            var rowData = table.row($(this)).data();
           
            
            // $('#product_image').attr('src', imageUrl);

            // Populate product details
            $('#slug').text(rowData.slug || 'N/A');
            $('#product_name').text(rowData.name || 'N/A');
            $('#category_name').text(rowData.category.name || 'N/A');
            $('#supplier_name').text(rowData.supplier.name || 'N/A');
            $('#gst_amount').text(rowData.gst_tax.percentage || 'N/A');
            $('#price').text(rowData.price || 'N/A');
            $('#batch_no').text(rowData.batch_no || 'N/A');
            $('#hsn_code').text(rowData.hsn_code || 'N/A');
            $('#short_description').text(rowData.short_description || 'No short description available.');
            $('#description').text(rowData.description || 'No description available.');

            // Set the status with HTML content
            $('#status').html(rowData.status || 'N/A');
            let imagesHtml = ''; 

            if (rowData?.images && Array.isArray(rowData.images) && rowData.images.length > 0) {
                imagesHtml = rowData.images.map(image =>
                    `<img src="/storage/${image.image_path}" width="64" height="64" class="rounded-circle mt-2 mx-1" alt="Product Image">`
                ).join(''); // Make sure images are joined without a comma
            } else {
                imagesHtml = `<img src="default-image.jpg" width="64" height="64" class="rounded-circle mt-2" alt="Default Image">`;
            }
        
            // ✅ Update the images in the image container
            $("#image_column").html(imagesHtml);
            $('#product_image').attr('src', "/storage/" + rowData.images[0].image_path);
        });
        
    } else {
        console.error("Table with ID 'datatables-products' not found.");
    }
});
