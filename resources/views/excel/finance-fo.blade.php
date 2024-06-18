<table style="text-align: center" class="table table-hover table-bordered">
                <thead style="vertical-align: middle">
                    <tr>
                        <th rowspan="1" class="border-gray-200">Tanggal Checkin</th>
                        <th rowspan="1" class="border-gray-200">ID Billing</th>
                        <th colspan="1" class="border-gray-200">Nama Tamu</th>
                        <th rowspan="1" class="border-gray-200">Tanggal Pembayaran</th>
                        <th rowspan="1" class="border-gray-200">Metode Pembayaran</th>
                        <th rowspan="1" class="border-gray-200">Nominal</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Item -->
                    @foreach($roomIncomeFixed as $incomes)
                    <tr>
                        <td><span class="fw-normal">{{ $incomes['payment']['reservation']['reservation_start_date'] }}</span></td>
                        <td><span class="fw-normal">{{ $incomes['payment']['reservation']['reservation_code'] }}</span></td>
                        <td><span class="fw-normal">{{ $incomes['payment']['reservation']['customer']['customer_name'] }}</span></td>
                        <td><span class="fw-normal">{{ \Carbon\Carbon::parse($incomes['created_at'] ?? '')->timezone('Asia/Bangkok') }}</span></td>
                        <td><span class="fw-bold">{{ $incomes['payment_method']['payment_method'] }}</span></td>
                        <td><span class="fw-bold text-info">{{ $incomes['payment_detail_value'] ?? $incomes['payment_paid_value'] }}</span></td>
                    </tr>
                    <!-- Item -->
                    @endforeach
                </tbody>
            </table>