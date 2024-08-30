<script>
    $(document).ready(function() {
        $('.edit-button').on('click', function() {
            var id = $(this).data('id');
            var roomNumber = $(this).data('room-number');
            var roomType = $(this).data('room-type');
            var roomStatus = $(this).data('room-status');
            $('#edit-room-id').val(id);
            $('#edit-room-number').val(roomNumber);
            $('#edit-room-type').val(roomType);
            $('#edit-room-status').val(roomStatus);
        });
    });
</script>