<div aria-hidden="true" aria-labelledby="modal-default" class="modal fade" id="addModal" role="dialog" tabindex="-1">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h2 class="h6 modal-title">Tambah Data Room Type</h2><button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"></button>
				</div>
				<div class="modal-body">
                <form method="POST" action="{{ route('supervisor.room-management.store-room-type') }}">
					@csrf
                    <div class="mb-2">
                        <label>Room Type :</label>
                            <input type="text" name="room_type" id="room_type" class="form-control " id="room_type" placeholder="Tipe Kamar" aria-describedby="emailHelp">
                    </div>
				</div>
				<div class="modal-footer">
                    <button class="btn btn-secondary" type="submit">Submit</button>
				</div>
                </form>
			</div>
		</div>
	</div><!-- End of Modal Content -->