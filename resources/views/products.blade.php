@extends('layout')
@section('content')
<h2>Full list of products</h2>
<table>
    <tr>
        Name
    </tr>
    <tr>
        Price
    </tr>
  
    @foreach ($products as $product) {
        <tr>
            <td>
                {{$product['name']}}
            </td>
            <td>
                {{$product['price']}}
            </td>
            <td>
                <button value="{{$product['id']}}" class="select-product"></button>
            </td>

        </tr>

    }

    @endforeach
    
</table>

@endsection