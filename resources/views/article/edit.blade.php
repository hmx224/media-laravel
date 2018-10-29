@extends('layouts.app')

@section('title', '自媒体平台')


@section('content')

    <div class="col-sm-8 blog-main">
        <form action="/articles/{{$article->id}}" method="POST">
            {{ method_field('put') }}
            {{ csrf_field() }}
            {{--<input type="hidden" name="_token" value="{{ csrf_token() }}">--}}
            <div class="form-group">
                <label>标题</label>
                <input name="title" type="text" class="form-control" value="{{ $article->title }}" placeholder="这里是标题">
            </div>
            <div class="form-group">
                <label>内容</label>
                <textarea id="content" style="height:400px;max-height:500px;" name="content" class="form-control"
                          placeholder="这里是内容">
                    {{ $article->content }}
                </textarea>
            </div>

            @include('layouts.error')

            <button type="submit" class="btn btn-default">提交</button>
        </form>
        <br>

    </div><!-- /.blog-main -->

@endsection

