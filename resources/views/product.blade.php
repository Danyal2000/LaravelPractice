@extends('layout')
@section('content')
<h2>
    Product {{$product['id']}}
</h2>
<table>
<tr>
    <th>
        Name
    </th>
    <th>
        Price
    </th>
</tr>
<tr>
    <td>
        {{product['name']}}
    </td>
    <td>
        {{product['price']}}
    </td>
</tr>
</table>
@endsection