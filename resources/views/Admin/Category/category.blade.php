@extends('admin.layout.main')
@push('title')
    <title> Category</title>
@endpush
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0"> Category</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active"> Category</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title"> Category</h3>
                            </div>
                            <form action="{{route('store-category')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="category">Category</label>
                                                <input type="text" name="category"  class="slug-create form-control" id="category">
                                                @error('category')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>

                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="slug">Slug</label>
                                                <input type="text" name="slug" class="form-control slug1" id="slug">
                                                @error('slug')
                                                <div class="text-danger">{{ $message }}</div>

                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Sab Category</h3>
                            </div>
                            <form action="{{route('store-sub-category')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="">Select Category</label>
                                                <select class="form-control select2bs4" name="parent_id" style="width: 100%">
                                                    <option>Select</option>
                                                    @foreach ($category as $item)
                                                        @if ($item->parent_id == 0)
                                                            <option value="{{$item->id}}">{{$item->category}} </option>
                                                        @endif

                                                    @endforeach
                                                </select>
                                                @error('parent_id')
                                                <div class="text-danger">{{ $message }}</div>

                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="">Sab Category</label>
                                                <input type="text" class="form-control slug-create2" name="scategory">
                                                @error('scategory')
                                                <div class="text-danger">{{ $message }}</div>

                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="">Slug</label>
                                                <input type="text"  name="sub_category_slug" class="form-control slug2">
                                                @error('sub_category_slug')
                                                <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="card-body table-responsive p-0" style="height: 400px;">
                        <table class="table table-head-fixed text-nowrap">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Category</th>
                                    <th>Sab Category</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($category as $item)
                                    @if($item->parent_id == 0)
                                        <tr>
                                            <td><span class="increment">{{ $loop->iteration }}.</span></td>  {{-- Directly use $loop->iteration --}}

                                            <td>
                                                {{$item->category}}
                                            </td>

                                            <td>
                                                @foreach ($category as $subcategory)
                                                    @if ($subcategory->parent_id == $item->id)
                                                        {{$subcategory->category}} <br>
                                                    @endif
                                                @endforeach
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
