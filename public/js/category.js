$(document).ready(function() {
    var tableElement = $('#datatables-categories');
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
                { data: 'slug', name: 'slug' },
                { data: 'image', name: 'image'},
                { data: 'name', name: 'name' },
                { data: 'description', name: 'description' },
                { data: 'status', name: 'status' },
                { data: 'action', name: 'action' }
            ],
            initComplete: function() {
                setTimeout(function() {
                    $('#datatables-categories tbody tr:first').trigger('click');
                }, 500);
            }
        });

        // Handle row click event
        $('#datatables-categories tbody').on('click', 'tr', function() {
            var rowData = table.row($(this)).data(); 
            if (rowData) {  
                var imageUrl = $(rowData.image).attr("src") || 'default-image.jpg'; 
                $('#category_image').attr('src', imageUrl);
                $('#slug').text(rowData.slug || 'N/A'); 
                $('#category_name').text(rowData.name || 'N/A'); 
                $('#short_description').text(rowData.description ? rowData.description.substring(0, 50) + "..." : 'No description'); 
                $('#description').text(rowData.description || 'No description available');                 
                var statusHtml = rowData.status
                $('#status').html(statusHtml);
            }
        });
        
    } else {
        console.error("Table with ID 'datatables-categories' not found.");
    }
});
