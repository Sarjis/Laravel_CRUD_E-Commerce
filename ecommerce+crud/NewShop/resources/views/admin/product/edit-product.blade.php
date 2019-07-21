@extends('admin.master')
@section('admin-body')
    <br/>
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <h3 class="text-center text-success"> {{Session::get('message')}}</h3>
                    <div class="panel-body">
                        {{--<form action="{{ route('new-product') }}" method="POST" class="form-horizontal">--}}
                        {{--{{ csrf_field() }}--}}
                        {{Form::open(['route'=>'update-product','method'=>'POST','class'=>'form-horizontal','files'=>true,'name'=>'editProductForm'])}}


                        <div class="form-group">
                            <label class="control-label col-md-3 bg-primary">Category Name</label>
                            <div class="col-md-9">
                                <select class="form-control" name="category_id">
                                    <option>--Select Category Name--</option>
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->category_name}}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('category_id'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('category_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 bg-primary">Brand Name</label>
                            <div class="col-md-9">
                                <select class="form-control" name="brand_id">
                                    <option>--Select Brand Name--</option>
                                    @foreach($brands as $brand)
                                        <option value="{{$brand->id}}">{{$brand->brand_name}}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('brand_id'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('brand_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 bg-primary">Product Name</label>
                            <div class="col-md-9">
                                <input type="text" value="{{$product->product_name}}" name="product_name" class="form-control"/>
                                @if ($errors->has('product_name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('product_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-9">
                                <input type="hidden" value="{{$product->id}}" name="id"
                                       class="form-control"/>

                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 bg-primary">Product Price</label>
                            <div class="col-md-9">
                                <input type="number" value="{{$product->product_price}}" name="product_price"
                                       class="form-control"/>
                                @if ($errors->has('product_price'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('product_price') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 bg-primary">Product Quantity</label>
                            <div class="col-md-9">
                                <input type="number" value="{{$product->product_quantity}}" name="product_quantity"
                                       class="form-control"/>
                                @if ($errors->has('product_quantity'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('product_quantity') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 bg-primary">Short Description</label>
                            <div class="col-md-9">
                                <textarea class="form-control"
                                          name="short_description">{{$product->short_description}}</textarea>
                                @if ($errors->has('short_description'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('short_description') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 bg-primary">Long Description</label>
                            <div class="col-md-9">
                                <textarea class="form-control" id="editor"
                                          name="long_description">{{$product->long_description}}</textarea>
                                @if ($errors->has('long_description'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('long_description') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 bg-primary">Product Image</label>
                            <div class="col-md-9">
                                <input type="file" name="product_image" accept="image/*"/>
                                <br/>
                                <img src="{{asset($product->product_image)}}" width="150" height="200">
                                @if ($errors->has('product_quantity'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('product_quantity') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 bg-primary">Publication status</label>
                            <div class="col-md-9 radio">
                                <label><input type="radio" name="publication_status" value="1"/> Published</label>
                                <label><input type="radio" name="publication_status" value="0"/> Unpublished</label>
                                <br>
                                @if ($errors->has('publication_status'))
                                    <span class="invalid-feedback text-danger" role="alert">
                                        <strong>{{ $errors->first('publication_status') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-9 col-md-offset-3">
                                <input type="submit" name="btn" value="Update Product Info"
                                       class="btn btn-danger btn-outline-light btn-block text-lg-center"/>
                            </div>
                        </div>
                        {{Form::close()}}
                        {{--</form>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.forms['editProductForm'].elements['category_id'].value = '{{$product->category_id}}';
        document.forms['editProductForm'].elements['brand_id'].value = '{{$product->brand_id}}';
        document.forms['editProductForm'].elements['publication_status'].value = '{{$product->publication_status}}';
    </script>

@endsection

