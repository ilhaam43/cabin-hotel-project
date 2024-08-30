<script>
    $(document).ready(function () {
        $('.delete-button').on('click', function () {
            var id = this.getAttribute('data-id');
            
            if (confirm('Are you sure you want to delete this data?')) {
                $.ajax({
                    type: 'DELETE',
                    url: "/supervisor/room-management/delete/" + id,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function (data) {
                        // Handle success, e.g., remove the row from the table
                        alert('Data Berhasil Dihapus'); // Display a success message
                        // Reload Page
                        // location.reload();
                    },
                    error: function (data) {
                        alert('Error: Data Gagal Dihapus');
                    }
                });
            }
        });
    });
</script>