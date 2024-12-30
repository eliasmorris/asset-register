<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <tr>
            <th>SNo</th>
            <th>Supplier Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Statua</th>
            <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($suppliers as $supplier)
            <tr>
            <td>{{$loop->index+1}}</td>
            <td>{{$supplier->supliername}}</td>
            <td>{{$supplier->email}}</td>
            <td>{{$supplier->phone}}</td>
            @if($supplier->status == 1)
            <td style="color: green;">Active</td>
            @else
            <td style="color: red;">Inactive</td>
            @endif
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>