@extends('admin.master')
@section('admin-body')
    <div id="page-wrapper">
        <h3 class="text-center text-success"> {{Session::get('message')}}</h3>
        <table class="table table-bordered table-hover">
            <thead>
            <tr class="bg-primary">
                <th>SL No.</th>
                <th>brand Name</th>
                <th>brand Description</th>
                <th>Publication Status</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @php($i=1)
            @foreach($brands as $brand)
                <tr class="text-center text-warning">
                    <td>{{$i++}}</td>
                    <td>{{$brand->brand_name}}</td>
                    <td>{{$brand->brand_description}}</td>
                    <td>{{$brand->publication_status==1?'Published':'Un-Published'}}</td>

                    <td>
                        @if($brand->publication_status==1)
                            <a href="{{route('brand/publish',['id'=>$brand->id])}}" class="btn btn-info btn-xs"
                               title="Published">
                                <span class="glyphicon glyphicon-arrow-up"></span>
                            </a>
                        @else
                            <a href="{{route('brand/un-publish',['id'=>$brand->id])}}" class="btn btn-warning btn-xs"
                               title="Un-Published">
                                <span class="glyphicon glyphicon-arrow-down"></span>
                            </a>
                        @endif
                        <a href="{{route('brand-edit',['id'=>$brand->id])}}" class="btn btn-success btn-xs">
                            <span class="glyphicon glyphicon-edit"></span>
                        </a>
                        <a href="{{route('brand/delete',['id'=>$brand->id])}}" class="btn btn-danger btn-xs"
                           onclick="return confirm('Are you sure?')">
                            <span class="glyphicon glyphicon-trash"></span>
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection

