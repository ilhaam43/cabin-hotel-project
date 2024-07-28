<table style="text-align: center" class="table table-hover table-bordered">
                <thead style="vertical-align: middle">
                    <tr>
                        <th rowspan="1" class="border-gray-200">ID Billing</th>
                        <th rowspan="1" class="border-gray-200">Status Terbaru</th>
                        <th colspan="1" class="border-gray-200">Nama Tamu</th>
                        <th rowspan="1" class="border-gray-200">Tanggal Checkin</th>
                        <th rowspan="1" class="border-gray-200">Tanggal Checkout</th>
                        <th rowspan="1" class="border-gray-200">Nomor Kamar</th>
                        <th rowspan="1" class="border-gray-200">Total Invoice</th>
                        <th rowspan="1" class="border-gray-200">Nominal</th>
                        <th rowspan="1" class="border-gray-200">Tanggal Pembayaran</th>
                        <th rowspan="1" class="border-gray-200">Metode Pembayaran</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Item -->
                    @foreach($roomIncomeFixed as $incomes)
                    <tr>
                        @php
                            $roomIndex = count($incomes['payment']['reservation']['hotel_room_reserved']);
                        @endphp
                        <td><span class="fw-normal">{{ $incomes['payment']['reservation']['reservation_code'] }}</span></td>
                        <td><span class="fw-normal">{{ $incomes['payment']['payment_status'] }}</span></td>
                        <td><span class="fw-normal">{{ $incomes['payment']['reservation']['customer']['customer_name'] }}</span></td>
                        <td><span class="fw-normal">{{ $incomes['payment']['reservation']['reservation_start_date'] }}</span></td>
                        <td><span class="fw-normal">{{ $incomes['payment']['reservation']['reservation_end_date'] }}</span></td>
                        @if($roomIndex > 1)
                        <td><span class="fw-normal">@foreach($incomes['payment']['reservation']['hotel_room_reserved'] as $roomNumbers)
                            {{ $roomNumbers['hotel_room_number']['room_number'] }} |
                        @endforeach</span></td>
                        @else 
                        <td><span class="fw-normal">
                            {{ $incomes['payment']['reservation']['hotel_room_reserved'][0]['hotel_room_number']['room_number'] }} 
                        </span></td>
                        @endif
                        <td><span class="fw-normal">{{ $incomes['payment']['total_price'] - $incomes['payment']['discount'] }}</span></td>
                        <td><span class="fw-normal">{{ $incomes['payment_detail_value'] ?? $incomes['payment_paid_value'] }}</span></td>
                        <td><span class="fw-normal">{{ \Carbon\Carbon::parse($incomes['created_at'] ?? '')->timezone('Asia/Bangkok') }}</span></td>
                        <td><span class="fw-bold">{{ $incomes['payment_method']['payment_method'] }}</span></td>
                    </tr>
                    <!-- Item -->
                    @endforeach
                </tbody>
            </table>