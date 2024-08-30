<script>
    $(document).ready(function() {
        $('.edit-button').on('click', function() {
            var id = $(this).data('id');
            var roomType = $(this).data('room-type');
            $('#edit-room-type-id').val(id);
            $('#edit-room-type').val(roomType);
        });
    });
</script>