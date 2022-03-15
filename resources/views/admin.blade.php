@extends('layouts.app')

@section('content')

     <body class="hold-transition sidebar-mini layout-fixed">
     <div class="d-inline">
         <form action="{{ route('logout') }}" method="POST" class="d-inline">
             @csrf
             <button class="btn btn-primary" type="submit">logout</button>
         </form>

         <a href="{{route('product.create')}}" class="btn btn-primary">Create</a>
         
     </div>

   
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">article</th>
            <th scope="col">name</th>
            <th scope="col">status</th>
            <th scope="col">atributi</th>
          </tr>
        </thead>

        <tbody> 
        @foreach($products as $product)
          <tr>
            <th scope="row">{{ $product->id }}</th>
            <td>{{ $product->article }}</td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->status }}</td>
            <td>
                @foreach ($product->data as $key => $value)
                {{ $key .':'. $value }}
            @endforeach
            </td>
            <td>
                <a href="{{route('product.update',['id'=>$product->id])}}" class="btn btn-primary">Update</a>
            </td>
          </tr>
        @endforeach
        </tbody>
      </table>
    


    </body>
@endsection
