@extends('admin.master')
@section('admin-body')
    <div id="page-wrapper">
        <h3 class="text-center text-success"> {{Session::get('message')}}</h3>
        <table class="table table-bordered table-hover">
            <thead>
            <tr class="bg-primary">
                <th>SL No.</th>
                <th>Category Name</th>
                <th>Category Description</th>
                <th>Publication Status</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @php($i=1)
            @foreach($categories as $category)
                <tr>
                    <td>{{$i++}}</td>
                    <td>{{$category->category_name}}</td>
                    <td>{{$category->category_description}}</td>
                    <td>{{$category->publication_status==1?'Published':'Un-Published'}}</td>

                    <td>
                        @if($category->publication_status==1)
                            <a href="{{route('category/publish',['id'=>$category->id])}}" class="btn btn-info btn-xs" title="Published">
                                <span class="glyphicon glyphicon-arrow-up"></span>
                            </a>
                        @else
                            <a href="{{route('category/un-publish',['id'=>$category->id])}}" class="btn btn-warning btn-xs"  title="Un-Published">
                                <span class="glyphicon glyphicon-arrow-down"></span>
                            </a>
                        @endif
                            <a href="{{route('category-edit',['id'=>$category->id])}}" class="btn btn-success btn-xs">
                                <span class="glyphicon glyphicon-edit"></span>
                            </a>
                            <a href="{{route('category/delete',['id'=>$category->id])}}" class="btn btn-danger btn-xs"
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

