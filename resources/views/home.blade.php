@extends('layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col col-md-offset-3 col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        まずはフォルダを作成しましょう
                    </div>
                    <div class="panel-body">
                        <div class="test-center">
                            <a href="{{ route('folders.create') }}" class="btn btn-primary">
                                フォルダ作成ページへ
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

