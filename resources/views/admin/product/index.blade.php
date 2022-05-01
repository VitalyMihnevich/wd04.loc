@extends('layouts.admin')

@section('content')
    <div class="grid_3 grid_5">
        <h3 class="head-top">Товары</h3>
        <div class="but_list">
            <div class="col-md-12 page_1">
                <p><a href="{{route('product.create')}}" class="btn btn-info"> Создать </a> </p>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Товар</th>
                            <th>Описание</th>
                            <th>Цена</th>
                            <th>Изображение</th>
                            <th>Категория</th>
                            <th>Действие</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $product)

                            <tr>
                                <td>{{$product->name}}</td>
                                <td>{{$product->description}}</td>
                                <td>{{$product->price}}</td>
                                <td>{{$product->img}}</td>
                                <td>{{$product->category_id}}</td>
                                <td>
                                    <a href="{{route('product.edit', ['product'=>$product])}}" class="btn btn-sm btn-info">Редактировать</a>
                                    <form method="POST" action="{{route('product.destroy', ['product'=>$product])}}">
                                        @method("DELETE")
                                        @csrf
                                        <button type="submit" class="btn btn-sm btn-danger">Удалить</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            {{ $products->links('partials.pagination')}}
            <div class="clearfix"></div>
        </div>
    </div>
@endsection
