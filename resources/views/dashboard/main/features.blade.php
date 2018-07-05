@extends('dashboard.layouts.app')

@section('content')

    <div class="content-i">
        <div class="content-box">
            <div class="row">
                <div class="col-sm-12">
                    <div class="element-wrapper">
                        <div class="element-box">
                            <div class="element-info">
                                <div class="element-info-with-icon">
                                    <div class="element-info-icon">
                                        <div class="os-icon os-icon-star-full"></div>
                                    </div>
                                    <div class="element-info-text">
                                        <h5 class="element-inner-header">
                                            Home page / Features
                                        </h5>
                                    </div>
                                </div>
                            </div>

                            <div class="table-responsive">
                                <table id="" width="100%" class="table table-striped table-lightfont">
                                    <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>title</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Your digital pillbox</td>
                                            <td class="text-right">
                                                <a href="{{route('main.features_edit', 1 )}}">
                                                    <button data-id="1" class="mr-2 mb-2 btn btn-primary cursor_pointer" type="button">
                                                        <span class="os-icon os-icon-pencil-2"></span>
                                                    </button>
                                                </a>
                                                <button data-id="1" class="mr-2 mb-2 btn btn-danger delete-button cursor_pointer" type="button">
                                                    <span class="os-icon os-icon-close"></span>
                                                </button>
                                                <form method="POST" action="route_delete">
                                                    {{ csrf_field() }}
                                                </form>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Universal health card</td>
                                            <td class="text-right">
                                                <a href="{{route('main.features_edit', 2 )}}">
                                                    <button data-id="2" class="mr-2 mb-2 btn btn-primary cursor_pointer" type="button">
                                                        <span class="os-icon os-icon-pencil-2"></span>
                                                    </button>
                                                </a>
                                                <button data-id="1" class="mr-2 mb-2 btn btn-danger delete-button cursor_pointer" type="button">
                                                    <span class="os-icon os-icon-close"></span>
                                                </button>
                                                <form method="POST" action="route_delete">
                                                    {{ csrf_field() }}
                                                </form>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Care Management</td>
                                            <td class="text-right">
                                                <a href="{{route('main.features_edit', 3 )}}">
                                                    <button data-id="3" class="mr-2 mb-2 btn btn-primary cursor_pointer" type="button">
                                                        <span class="os-icon os-icon-pencil-2"></span>
                                                    </button>
                                                </a>
                                                <button data-id="1" class="mr-2 mb-2 btn btn-danger delete-button cursor_pointer" type="button">
                                                    <span class="os-icon os-icon-close"></span>
                                                </button>
                                                <form method="POST" action="route_delete">
                                                    {{ csrf_field() }}
                                                </form>
                                            </td>
                                        </tr>
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
