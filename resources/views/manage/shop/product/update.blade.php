@extends('manage.index')

@section('title')
    Изменить товар
@endsection

@section('content')
    <div class="flex-container">
        <div class="manage-forms">
            <form method="post" action="{{ route('manage.product.update', $product['id']) }}">
                <div class="some-form-item">
                    {{csrf_field()}}
                    <label for="lgFormGroupInput">Название товара:</label>
                    <input type="text" placeholder="{{ $product['title'] }}" name="title">
                </div>
                <div class="some-form-item">
                    <label for="smFormGroupInput">Описание товара:</label>
                    <input type="text" placeholder="{{ $product['description'] }}" name="description">
                </div>
                <div class="some-form-item">
                    <label for="smFormGroupInput">Цена товара:</label>
                    <input type="text" placeholder="{{ $product['price'] }}" name="price">
                </div>
                <div class="some-form-item">
                    <label for="smFormGroupInput">Добавить картинку:</label>
                    <div class="upload-view-btn item-view">
                        <i class="fa fa-image"></i>
                        <input type="hidden" name="imagePath">
                    </div>
                </div>
                <div class="some-form-item">
                    <input type="submit" class="btn add-btn">
                </div>
            </form>
        </div>
    </div>
@endsection