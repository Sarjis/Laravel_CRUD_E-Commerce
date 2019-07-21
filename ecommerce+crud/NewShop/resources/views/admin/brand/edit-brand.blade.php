@extends('admin.master')
@section('admin-body')
    <br/>
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <h3 class="text-center text-success"> {{Session::get('message')}}</h3>
                    <div class="panel-body">
                        <form action="{{ route('update-brand') }}" name="editbrandForm" method="POST"
                              class="form-horizontal">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label class="control-label col-md-3">brand Name</label>
                                <div class="col-md-9">
                                    <input type="text" value="{{$brand->brand_name}}" name="brand_name"
                                           class="form-control"/>
                                    <input type="hidden" value="{{$brand->id}}" name="id"
                                           class="form-control"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3">brand Description</label>
                                <div class="col-md-9">
                                    <textarea class="form-control"
                                              name="brand_description">{{$brand->brand_description}}</textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3">Publication status</label>
                                <div class="col-md-9 radio">
                                    <label><input type="radio" name="publication_status" value="1"/> Published</label>
                                    <label><input type="radio" name="publication_status" value="0"/> Unpublished</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-9 col-md-offset-3">
                                    <input type="submit" name="btn" value="Update brand Info"
                                           class="btn btn-success btn-block"/>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.forms['editbrandForm'].elements['publication_status'].value ={{$brand->publication_status}}
    </script>
@endsection

