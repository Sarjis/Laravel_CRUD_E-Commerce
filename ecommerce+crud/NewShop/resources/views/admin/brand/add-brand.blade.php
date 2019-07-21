@extends('admin.master')
@section('admin-body')
    <br/>
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <h3 class="text-center text-success"> {{Session::get('message')}}</h3>
                    <div class="panel-body">
                        <form action="{{ route('new-brand') }}" method="POST" class="form-horizontal">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label class="control-label col-md-3">Brand Name</label>
                                <div class="col-md-9">
                                    <input type="text" name="brand_name" class="form-control"/>
                                    @if ($errors->has('brand_name'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('brand_name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3">Brand Description</label>
                                <div class="col-md-9">
                                    <textarea class="form-control" name="brand_description"></textarea>
                                    @if ($errors->has('brand_description'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('brand_description') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3">Publication status</label>
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
                                    <input type="submit" name="btn" value="Save brand Info" class="btn btn-success btn-block"/>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

