<div aria-hidden="true" aria-labelledby="modal-default" class="modal fade" id="editModal" role="dialog" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="h6 modal-title">Edit Room Type Data</h2>
                <button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"></button>
            </div>
            <div class="modal-body">
            <form method="POST" action="{{ route('supervisor.room-management.update-room-type') }}">
					@csrf
                    @method('PUT')
                    <input type="hidden" name="id" id="edit-room-type-id">
                    <div class="mb-2">
                        <label>Room Type :</label>
                            <input type="text" name="room_type" id="edit-room-type" class="form-control" placeholder="Tipe Kamar">
                    </div>
				</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="submit">Submit</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>