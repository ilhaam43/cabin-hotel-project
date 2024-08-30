<div aria-hidden="true" aria-labelledby="modal-default" class="modal fade" id="editModal" role="dialog" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="h6 modal-title">Edit Room Data</h2>
                <button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('supervisor.room-management.update-room-branch') }}">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="id" id="edit-room-id">
                    <div class="mb-2">
                        <label>Nomor Kamar:</label>
                        <input type="text" name="room_number" id="edit-room-number" class="form-control" placeholder="Nomor Kamar">
                    </div>
                    <label>Tipe Kamar:</label>
                    <select class="form-select w-100 mb-2" id="edit-room-type" name="room_type">
                        <option selected value="">Tipe Kamar</option>
                        @foreach($roomType as $roomTypes)
                            <option value="{{ $roomTypes->id }}">{{ $roomTypes->room_type }}</option>
                        @endforeach
                    </select>
                    <label>Status Kamar:</label>
                    <select class="form-select w-100 mb-2" id="edit-room-status" name="room_status">
                        <option selected value="">Status Kamar</option>
                        @foreach($roomStatus as $roomStatuses)
                            <option value="{{ $roomStatuses->id }}">{{ $roomStatuses->room_status }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="submit">Submit</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>