@extends('layouts.admin')
@section('content')
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Edit Product</h4>
        </div>
    </div>
</div>
<!-- end page title -->

<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Edit</h4>

                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                {!! Form::model($product, [
                'method' => 'PATCH',
                'action' => ['AdminProductsController@update', $product->id],
                'files' => true,
                'class' => 'form-horizontal',
                'name' => 'editproductform',
                ]) !!}
                @csrf

                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="categories_id">Product Categpory<span class="text-danger">*</span></label>
                            <select name="categories_id" id="category" class="form-control" style="width:100%" required>
                                <option value="">Select category</option>
                                @foreach($category as $cate)
                                <option value="{{$cate->id}}" {{ $product->categories_id == $cate->id ? 'selected' : '' }}>{{$cate->title}}</option>
                                @endforeach
                            </select>
                            @if($errors->has('categories_id'))
                            <div class="error text-danger">{{ $errors->first('categories_id') }}</div>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="pname">Product Name<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="pname" id="pname" placeholder="Enter product name" value="{{$product->pname}}" required>
                            @if($errors->has('pname'))
                            <div class="error text-danger">{{ $errors->first('pname') }}</div>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="file">Product image<span class="text-danger">*</span></label>
                            <input type="file" name="file" id="file" class="form-control" accept="image/*">
                            <img src="{{$product->file}}" alt="img" width="100">
                            @if($errors->has('file'))
                            <div class="error text-danger">{{ $errors->first('file') }}</div>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="pdetail">Product Detail<span class="text-danger">*</span></label>
                    <textarea type="text" name="pdetail" class="form-control" id="pdetail" placeholder="Enter product detail" required>{{$product->pdetail}}</textarea>
                    @if ($errors->has('pdetail'))
                    <div class="error text-danger">{{ $errors->first('pdetail') }}</div>
                    @endif
                </div>

                <div class="mb-3">
                    <label for="feature">Product Feature<span class="text-danger">*</span></label>
                    <textarea type="text" name="feature" class="form-control" id="feature" placeholder="Enter product feature" required>{{$product->feature}}</textarea>
                    @if ($errors->has('feature'))
                    <div class="error text-danger">{{ $errors->first('feature') }}</div>
                    @endif
                </div>

                <div class="d-flex gap-2">
                    <button type="submit" class="btn btn-primary w-md">Update</button>
                    <a class="btn btn-light w-md" href="{{ URL::to('/admin/product') }}">Back</a>
                </div>
                </form>
            </div>
            <!-- end card body -->
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->
</div>
<!-- end row -->
@endsection

@section('script')
<script>
    $(function() {

        $("form[name='editproductform']").validate({
            rules: {
                categories_id: {
                    required: true,
                },
                pname: {
                    required: true,
                },
                pdetail: {
                    required: true,
                },
                // file: {
                //     required: true,
                // },
                feature: {
                    required: true,
                },
            },
            submitHandler: function(form) {
                form.submit();
            }
        });
    });
</script>
@endsection