@extends('dashboard.layouts.app')

@section('content')

    <div class="content-i">
        <div class="content-box">
            <div class="row">
                <div class="col-sm-12">
                    <div class="element-wrapper">

                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div class="element-box">
                            <div class="element-info">
                                <div class="element-info-with-icon">
                                    <div class="element-info-icon">
                                        <div class="os-icon os-icon-calendar-time"></div>
                                    </div>
                                    <div class="element-info-text">
                                        <h5 class="element-inner-header">
                                            Blog / List
                                        </h5>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <a class="btn btn-primary" href="{{ route('blog.create') }}">Add new</a>
                                <br /><br />
                            </div>
                            <div class="table-responsive">
                                <table id="" width="100%" class="table table-striped table-lightfont">
                                    <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>title</th>
                                        <th>author</th>
                                        <th>date</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($blog_list as $item)
                                        <tr>
                                            <td>{{ $item->id }}</td>
                                            <td>{{ $item->title }}</td>
                                            <td>{{ $item->author }}</td>
                                            <td>{{ $item->date }}</td>
                                            <td class="text-right">
                                                <a href="{{route('blog.edit', $item->id )}}">
                                                    <button data-id="{{ $item->id }}" class="mr-2 mb-2 btn btn-primary cursor_pointer" type="button">
                                                        <span class="os-icon os-icon-pencil-2"></span>
                                                    </button>
                                                </a>
                                                <button data-id="1" class="mr-2 mb-2 btn btn-danger delete-button cursor_pointer" type="button">
                                                    <span class="os-icon os-icon-close"></span>
                                                </button>
                                                <form method="POST" action="{{route('blog.delete_item', $item->id)}}">
                                                    {{ csrf_field() }}
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('js')
    <script>
        jQuery('.delete-button').on('click', function ( e ) {
            e.preventDefault();
            var form = $(this).siblings('form');
            swal({
                title: 'Are you sure?',
                text: "Now you delete the record!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Delete',
                cancelButtonText: 'Cancel',
                confirmButtonClass: 'mr-2 mb-2 btn btn-primary',
                cancelButtonClass: 'mr-2 mb-2 btn btn-danger delete-button',
                buttonsStyling: false
            }).then(function () {
                //location.href = href;
                form.submit();
            }, function (dismiss) {
                //code...
            })
        });
    </script>
@endsection
