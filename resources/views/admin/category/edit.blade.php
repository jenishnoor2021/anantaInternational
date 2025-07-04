@extends('layouts.admin')
@section('content')
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Edit Category</h4>
        </div>
    </div>
</div>
<!-- end page title -->

<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">

                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                {!! Form::model($category, [
                'method' => 'PATCH',
                'action' => ['AdminCategoryController@update', $category->id],
                'files' => true,
                'class' => 'form-horizontal',
                'name' => 'editcategoryForm',
                ]) !!}
                @csrf

                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="title">Name<span class="text-danger">*</span></label>
                            <input type="text" name="title" class="form-control" id="title"
                                placeholder="Enter name" value="{{ $category->title }}" required>
                            @if ($errors->has('title'))
                            <div class="error text-danger">{{ $errors->first('title') }}
                            </div>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="d-flex gap-2">
                    <button type="submit" class="btn btn-primary w-md">update</button>
                    <a class="btn btn-light w-md" href="{{ URL::to('/admin/category') }}">Back</a>
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
        $("form[name='editcategoryForm']").validate({
            rules: {
                title: {
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