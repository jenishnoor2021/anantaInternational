@extends('layouts.admin')
@section('content')
@section('style')
<style>
    .form-check-input {
        width: 2em;
        height: 1em;
        background-color: #e4e4e4;
        border-radius: 1em;
        position: relative;
        appearance: none;
        outline: none;
        cursor: pointer;
        transition: background-color 0.3s ease-in-out;
    }

    .form-check-input:checked {
        background-color: #4caf50;
    }

    .form-check-input::before {
        content: '';
        position: absolute;
        top: 2px;
        left: 2px;
        width: 0.8em;
        height: 0.8em;
        background-color: white;
        border-radius: 50%;
        transition: transform 0.3s ease-in-out;
    }

    .form-check-input:checked::before {
        transform: translateX(1em);
    }

    .d-none {
        display: none;
    }

    .read-more-toggle {
        cursor: pointer;
        font-weight: 600;
        display: block;
        margin-top: 8px;
    }
</style>
@endsection
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Product List</h4>
        </div>
    </div>
</div>
<!-- end page title -->

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <i class="mdi mdi-check-all me-2"></i>
                    {{ session()->get('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif

                @if (session()->has('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <i class="mdi mdi-check-all me-2"></i>
                    {{ session()->get('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif

                <div id="right">
                    <div id="menu" class="mb-3">

                        <span id="menu-navi"
                            class="d-sm-flex flex-wrap text-center text-sm-start justify-content-sm-between">
                            <div class="d-flex align-items-center gap-2 flex-wrap mb-3">
                                <a class="btn btn-info waves-effect waves-light"
                                    href="{{ route('admin.product.create') }}"><i class="fa fa-plus editable" style="font-size:15px;">&nbsp;ADD</i></a>

                                <form method="GET" action="{{ route('admin.product.index') }}"
                                    class="d-flex align-items-center gap-2 flex-wrap mb-0" id="filterForm">
                                    <select name="categories_id" class="form-select w-auto"
                                        onchange="this.form.submit()">
                                        <option value="" {{ request()->categories_id == '' ? 'selected' : '' }}>Select Category</option>
                                        @foreach ($categorys as $category)
                                        <option value="{{$category->id}}"
                                            {{ request()->categories_id == $category->id ? 'selected' : '' }}>{{$category->title}}</option>
                                        @endforeach
                                    </select>
                                </form>

                            </div>
                        </span>

                    </div>
                </div>



                <table id="datatable" class="table table-bordered dt-responsive w-100 mt-3">
                    <thead>
                        <tr>
                            <th>Action</th>
                            <th>Category</th>
                            <th>Product Name</th>
                            <th>Image</th>
                            <!-- <th>Detail</th>
                            <th>Feature</th> -->
                            <th>Show/Hide</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($products as $product)
                        <tr>
                            <td>
                                <a href="{{ route('admin.product.edit', $product->id) }}"
                                    class="btn btn-outline-primary waves-effect waves-light"><i
                                        class="fa fa-edit"></i></a>
                                <a href="{{ route('admin.product.destroy', $product->id) }}"
                                    onclick="return confirm('Sure ! You want to delete ?');"
                                    class="btn btn-outline-danger waves-effect waves-light"><i
                                        class="fa fa-trash"></i></a>
                            </td>
                            <td>
                                {{$product->categories->title}}
                            </td>
                            <td>
                                {{$product->pname}}
                            </td>
                            <td>
                                <img height="50" src="{{$product->file ? $product->file : 'https://eitrawmaterials.eu/wp-content/uploads/2016/09/person-icon.png'}}" alt="">
                            </td>
                            <!-- <td>
                                <div class="html-read-more-content">{{ $product->pdetail }}</div>
                            </td>
                            <td>
                                <div class="html-read-more-content">{{ $product->feature }}</div>
                            </td> -->
                            <td>
                                <div class="form-check form-switch">
                                    <input class="form-check-input toggle-status-switch" type="checkbox"
                                        id="toggleSwitch{{ $product->id }}" data-id="{{ $product->id }}"
                                        {{ $product->is_active ? 'checked' : '' }}>
                                    <label class="form-check-label" for="toggleSwitch{{ $product->id }}">
                                        {{ $product->is_active ? 'Show' : 'Hide' }}
                                    </label>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->
@endsection

@section('script')
<script>
    $(document).on('change', '.toggle-status-switch', function() {
        const toggleSwitch = $(this);
        const agentId = toggleSwitch.data('id');
        const isChecked = toggleSwitch.is(':checked');

        $.ajax({
            url: "{{ route('admin.product.active') }}",
            type: "POST",
            data: {
                _token: "{{ csrf_token() }}",
                id: agentId
            },
            success: function(response) {
                if (response.success) {
                    toggleSwitch.next('label').text(response.status);
                    alert('Status updated successfully');
                } else {
                    alert(response.message);
                }
            },
            error: function() {
                alert('An error occurred. Please try again.');
                // Revert toggle state in case of an error
                toggleSwitch.prop('checked', !isChecked);
            }
        });
    });

    $(document).ready(function() {
        function truncateHtml(selector, limit = 50) {
            $(selector).each(function() {
                const originalHtml = $(this).html();
                const plainText = $('<div>').html(originalHtml).text().trim();

                if (plainText.length <= limit) return; // No need to truncate

                const truncatedHtml = getTruncatedHtml(originalHtml, limit);

                const html = `
                <div class="truncated-content">${truncatedHtml}</div>
                <div class="full-content d-none">${originalHtml}</div>
                <a href="javascript:void(0);" class="read-more-toggle text-primary"><u>...read more</u></a>
            `;

                $(this).html(html);
            });

            $(document).on('click', '.read-more-toggle', function() {
                const container = $(this).closest('.html-read-more-content');
                container.find('.truncated-content, .full-content').toggleClass('d-none');

                const isExpanded = container.find('.full-content').is(':visible');
                $(this).html(isExpanded ? '<u>read less</u>' : '<u>...read more</u>');
            });
        }

        // Helper function to truncate HTML but keep structure intact
        function getTruncatedHtml(html, maxLength) {
            let result = '';
            let length = 0;
            let isTag = false;

            for (let i = 0; i < html.length && length < maxLength; i++) {
                const char = html[i];
                result += char;

                if (char === '<') isTag = true;
                else if (char === '>') isTag = false;
                else if (!isTag) length++;
            }

            return result;
        }

        truncateHtml('.html-read-more-content', 50);
    });
</script>
</script>
@endsection