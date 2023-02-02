<table>
    <thead>
    <tr>
        <th>Số thứ tự</th>
        <th>Họ và tên</th>
    </tr>
    </thead>
    <tbody>
    @foreach($accounts as $account)
        <tr>
            <td>{{ $account->id }}</td>
            <td>{{ $account->full_name }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
