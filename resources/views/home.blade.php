@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Форма добавления товара</div>



                    <div class="panel-body">
                        @if (count($errors)>0)
                        @foreach ($errors->all() as $err)
                            <h3> {{$err}} </h3>
                        @endforeach
                        @endif
                        <form method='POST' action='home' enctype='multipart/form-data'>
                            {{csrf_field()}}

                            <div class="form-group">
                                <label for='name'> Название </label>
                                <input type='text' name='name' id='name' class="form-control" />
                            </div>

                            <div class="form-group">
                                <label for='Price'> Цена </label>
                                <input type='text' name='Price' id='Price' class="form-control"  />
                            </div>

                            <div class="form-group">
                                <label for='cat_id'> Категория </label>
                                <select class="form-control" name='cat_id' id='cat_id'>
                                    <option value="1">Диваны</option>
                                    <option value="2">Кровати</option>
                                    <option value="3">Кресла</option>
                                    <option value="4">Столы</option>
                                    <option value="5">Стулья</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for='body'> Описание </label>
                                <textarea class="form-control" rows="5" name='body'></textarea>
                            </div>

                            <div class="form-group">
                                <label for="Photo"> Фото</label>
                                <input type="file" name='Photo' id="Photo">
                                <p class="help-block"> Хелпер</p>
                            </div>


                            <button type="submit" class="btn btn-default">Добавить</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
