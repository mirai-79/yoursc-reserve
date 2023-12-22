<x-layout>
    <x-container>
        <h3 class="fs-3">予約枠一覧</h3>
        <div>
            <a href="{{ route('admin.reserve_slot.create') }}" class="btn btn-outline-primary">新規作成</a>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>部屋</th>
                    <th>予約日</th>
                    <th>料金</th>
                    <th>部屋の数</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($reserve_slots as $index => $reserve_slot)
                <tr>
                    <th>{{ $index + 1 }}</th>
                    <th>{{ $reserve_slot->room->roomType->name }}</th>
                    <th>{{ $reserve_slot->date }}</th>
                    <th>{{ $reserve_slot->fee }}</th>
                    <th>{{ $reserve_slot->number_of_rooms }}</th>
                    <th><a href="{{ route('admin.reserve_slot.edit', $reserve_slot->id) }}" class="btn btn-outline-primary">編集</a></th>
                </tr>
                @endforeach
            </tbody>
        </table>
    </x-container>
</x-layout>