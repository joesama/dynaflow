<table>
    <thead>
        <tr>
            <td>Name Flow</td>
            <td>Created</td>
        </tr>
    </thead>
    <tbody>
    @foreach($sysflow as $key => $value)
        <tr>
            <td>{{ $value->name }}</td>
            <td>{{ $value->created_at }} </td>
        </tr>
    @endforeach
    </tbody>
</table>