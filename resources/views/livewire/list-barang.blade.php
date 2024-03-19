<div>
    <button wire:click="save">Save</button>
 <table>
        <thead>
            <th>Nama</th>
            <th>Harga</th>
            <th>Action</th>
        </thead>
        <tbody>
        @foreach ($items as $item))
            <tr>
            <td>{{$item['nama']}}</td>
            <td>{{$item['harga']}}</td>
            <td>Delete</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div id="app"></div>
</div>

