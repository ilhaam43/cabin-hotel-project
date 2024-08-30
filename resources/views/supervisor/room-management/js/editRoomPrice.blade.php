<script>
    $(document).ready(function() {
        $('.edit-button').on('click', function() {
            var id = $(this).data('id');
            var roomRate = $(this).data('room-rate');
            var roomType = $(this).data('room-type');
            var roomDuration = $(this).data('room-duration');
            var categoryDay = $(this).data('category-day');
            $('#edit-room-rate-id').val(id);
            $('#edit-room-rate').val(roomRate);
            $('#edit-room-type').val(roomType);
            $('#edit-room-duration').val(roomDuration);
            $('#edit-category-day').val(categoryDay);
        });
    });
</script>