<x-layout>
    <x-container>
        <h3 class="fs-3">お問い合わせ一覧</h3>
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>ステータス</th>
                    <th>種別</th>
                    <th>名前</th>
                    <th>email</th>
                    <th>電話番号</th>
                    <th>宿泊日</th>
                    <th>内容</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($inquiries as $index => $inquiry)
                @php
                switch ($inquiry->inquiry_status_id) {
                case 1:
                $background_color = 'bg-danger';
                break;
                case 2:
                $background_color = 'bg-primary';
                break;
                case 3:
                $background_color = 'bg-success';
                break;
                default:
                $background_color = 'bg-danger';
                break;
                }
                @endphp
                <tr onclick="window.location.href='{{ route('admin.inquiry.show', $inquiry->id) }}'"
                    class="cursor-pointer">
                    <th>{{ $index + 1 }}</th>
                    <th><span class="border rounded p-1 bg-opacity-50 {{ $background_color }}">{{
                            $inquiry->inquiryStatus->status }}</span></th>
                    <th>{{ $inquiry->inquiryType->name }}</th>
                    <th>{{ $inquiry->first_name }} {{ $inquiry->last_name }}</th>
                    <th>{{ $inquiry->email }}</th>
                    <th>{{ $inquiry->telephone_number }}</th>
                    <th>{{ $inquiry->stay_date }}</th>
                    <th>{{ $inquiry->message }}</th>
                </tr>
                @endforeach
            </tbody>
        </table>
    </x-container>
</x-layout>