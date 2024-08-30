<div aria-hidden="true" aria-labelledby="modal-default" class="modal fade" id="addModal" role="dialog" tabindex="-1">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h2 class="h6 modal-title">Tambah Data Room Price</h2><button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"></button>
				</div>
				<div class="modal-body">
                <form method="POST" action="{{ route('supervisor.room-management.store-room-price') }}">
                    @csrf
                    <div class="mb-2">
                        <label>Room Price :</label>
                            <input type="text" name="room_rates" id="room_rates" class="form-control " id="room_rates" placeholder="Harga Kamar" aria-describedby="emailHelp">
                    </div>
                    <label>Tipe Kamar :</label>
                    <select class="form-select w-100 mb-2" id="room_type" name="room_type_id" aria-label="room_type">
                        <option selected value="">Tipe Kamar</option>
                        @foreach($roomType as $roomTypes)
                            <option value="{{ $roomTypes->id }}">{{ $roomTypes->room_type }}</option>
                        @endforeach
                    </select>
                    <label>Durasi (Jam) :</label>
                    <select class="form-select w-100 mb-2" id="room_duration" name="room_duration" aria-label="room_duration">
                        <option selected value="">Durasi (Jam)</option>
                        @for ($i = 8; $i <= 24; $i++)
                            <option value="{{ $i }}">{{ $i }}</option>
                        @endfor
                    </select>
                    <label>Kategori Hari :</label>
                    <select class="form-select w-100 mb-2" id="category_day" name="category_day" aria-label="category_day">
                        <option selected value="">Kategori Hari</option>
                        @foreach ($categoryDay as $category)
                            <option value="{{ $category }}">{{ $category }}</option>
                        @endforeach
                    </select>
				</div>
				<div class="modal-footer">
                    <button class="btn btn-secondary" type="submit">Submit</button>
				</div>
                </form>
			</div>
		</div>
	</div><!-- End of Modal Content -->