@extends ('admin/layout_admin')
@section ('content')
<div class="container-fluid px-4 mt-4 mb-4">
    <div class="row justify-content-center">
        <div class="col-sm-12">
            <div
                style="background-color: #fff; padding: 20px; border-radius: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); margin: 0 auto;">
                <ol class="breadcrumb mb-4">
                    <h3 class="breadcrumb-item active">Thêm tour</h3>
                </ol>

                <form action="{{route('ht.productsadd')}}" method="post" class="form" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3 row">
                        <div class="col-sm-6 col-6 offset-sm">
                            <!-- Thêm lớp offset-sm-1 để tạo khoảng cách từ mép bên trái -->
                            <label for="inputPassword" class="col-form-label required-field">Tên tour</label>
                            <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                            {!! $errors->first('name', '<div class="has-error text-danger">:message</div>') !!}
                        </div>
                        <div class="col-sm-6 col-6 offset-sm">
                            <label for="inputPassword" class="col-sm-1 col-form-label ">Mô tả</label>

                            <input type="text" class="form-control" name="desc" value="{{ old('desc') }}">
                            {!! $errors->first('desc', '<div class="has-error text-danger">:message</div>') !!}
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <div class="col-sm-6 col-6 offset-sm">

                            <label for="inputPassword" class="col-sm-6 col-form-label required-field">Hình ảnh</label>

                            <input type="file" class="form-control" name="image">
                            {!!$errors->first('image','<div class="has-error text-danger">:message</div>')!!}
                        </div>
                        <div class="col-sm-6 col-6 offset-sm">
                            <label for="inputPassword" class="col-sm-6 col-form-label">Hình ảnh*</label>

                            <input type="file" class="form-control" multiple="multiple" name="images[]">
                            {!!$errors->first('images.*','<div class="has-error text-danger">:message</div>')!!}
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <div class="col-sm-4 col-6  offset-sm ">
                            <label for="inputPassword" class="col-sm-6 col-form-label">Danh mục</label>
                            <select class="form-control form-select" aria-label="Default select example" name="idcat"
                                id="">
                                @foreach($cate as $item)
                                <option value="{{$item->id}}">{{$item->name}}</option>
                                @endforeach
                            </select>

                        </div>
                        <div class="col-sm-4 col-6 offset-sm">
                            <label for="inputPassword" class="col-sm-6 col-form-label required-field">Phương tiện di
                                chuyển</label>
                         
                          <input type="text" class="form-control" name="vehicle" value="{{ old('vehicle') }}">
                            {!! $errors->first('vehicle', '<div class="has-error text-danger">:message</div>') !!}

                        </div>
                        <!-- <divfd class="col-sm-2 col-6 offset-sm">
                <label for="inputPassword" class="col-sm-6 col-form-label required-field">Ngày đi</label>

                <input type="datetime-local" class="form-control" value="{{old('departuredate')}}" name="departuredate"
                    min="{{ now()->format('Y-m-d\TH:i') }}" >
                {!!$errors->first('departuredate','<div class="has-error text-danger">:message</div>')!!}

            </divfd> -->
                        <div class="col-sm-4 col-6 offset-sm">
                            <label for="inputPassword" class="col-sm-6 col-form-label required-field">Thời gian
                                đi</label>
                                <input type="text" class="form-control" name="keyword" value="{{ old('keyword') }}">

                          
                            {!! $errors->first('keyword', '<div class="has-error text-danger">:message</div>') !!}
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <div class="col-sm-6 offset-sm">

                            <label for="inputPassword" class="col-sm-6 col-form-label required-field">Điểm khởi
                                hành</label>
                                <input type="text" class="form-control" name="departurelocation" value="{{ old('departurelocation') }}">

                           
                            {!!$errors->first('departurelocation','<div class="has-error text-danger">:message</div>')!!}
                        </div>
                        <div class="col-sm-6 offset-sm">

                            <label for="inputPassword" class="col-sm-6 col-form-label required-field">Điểm đến </label>
                            <input type="text" class="form-control" name="arrivallocation" value="{{ old('arrivallocation') }}">

                           
                            {!!$errors->first('arrivallocation','<div class="has-error text-danger">:message</div>')!!}
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <div class="col-sm-6 col-6 offset-sm">
                            <label for="inputPassword" class="col-sm-6 col-form-label required-field">Giá</label>

                            <input type="text" class="form-control" value="{{old('price')}}" name="price">
                            {!!$errors->first('price','<div class="has-error text-danger">:message</div>')!!}
                        </div>
                        <div class="col-sm-6 col-6 offset-sm">
                            <label for="inputPassword" class="col-sm-6 col-form-label required-field">Giá người lớn (từ
                                15
                                tuổi)</label>


                            <input type="text" class="form-control" value="{{old('price1')}}" name="price1">
                            {!!$errors->first('price1','<div class="has-error text-danger">:message</div>')!!}
                        </div>
                    </div>
                    <div class="mb-3 row">

                        <div class="col-sm-6 col-6 offset-sm">
                            <label for="inputPassword" class="col-sm-6 col-form-label required-field">Giá trẻ em từ (từ
                                5 - 14
                                tuổi)</label>

                            <input type="text" class="form-control" value="{{old('price2')}}" name="price2">
                            {!!$errors->first('price2','<div class="has-error text-danger">:message</div>')!!}
                        </div>
                        <div class="col-sm-6 col-6 offset-sm">
                            <label for="inputPassword" class="col-sm-6 col-form-label required-field">Giá trẻ nhỏ (từ 0
                                - 5
                                tuổi)</label>


                            <input type="text" class="form-control" value="{{old('price3')}}" name="price3">
                            {!!$errors->first('price3','<div class="has-error text-danger">:message</div>')!!}
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Lịch trình</label>
                        <div class="col-sm-12">
                            <textarea class="form-control" value="{{old('content')}}" name="content" id="content"
                                cols="30" rows="10"></textarea>
                            <script>   CKEDITOR.replace('content');</script>
                            {!!$errors->first('content','<div class="has-error text-danger">:message</div>')!!}

                        </div>
                    </div>

                    <div class="mb-3 row">

                    </div>



                    <div class="mb-3  ">
                        <label for="" class="col-sm-2 col-form-label">Trạng thái</label>
                        <div class="form-check form-check-inline ">
                            <input class="form-check-input" type="radio" name="status" checked value=1>
                            <label class="form-check-label">Mở</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="status" value=0>
                            <label class="form-check-label">Khóa</label>
                        </div>

                    </div>


                    <div class="mb-3 row">
                        <label for="inputPassword" class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-12 text-center ">
                            <button class="btn btn-success" type="submit"><i
                                    class="fa fa-floppy-disk"></i>&nbsp;Lưu</button>
                            <a class="btn btn-secondary" href="{{route('ht.products')}}" role="button">Quay lại</a>

                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>
@endsection