@extends('layouts.master')

@section('content')
    <div class="container">
        <main>
            <div class="py-5 text-center">
                <img class="d-block mx-auto mb-4" src="https://getbootstrap.com/docs/5.3/assets/brand/bootstrap-logo.svg" alt="" width="72"
                     height="57">
                <h2>Test</h2>
            </div>

            <div class="row g-5">

                @include('articles.items', ['articles' => $articles])

                <div class="col-md-7 col-lg-8">
                    <h4 class="mb-3">Make Article</h4>
                    <form action="{{route('articles.store')}}" method="POST">
                        @csrf
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" class="form-control @if($errors->has('title')) is-invalid @endif" id="title" placeholder="Enter Title" value="{{old('title')}}"
                                       name="title">
                                @if ($errors->has('title'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('title') }}
                                    </div>
                                @endif
                            </div>

                            <div class="col-sm-6">
                                <label for="commentCount" class="form-label">Comment Count</label>
                                <input type="text" class="form-control @if($errors->has('commentCount')) is-invalid @endif" id="commentCount" placeholder="Enter comment count" value="{{old('commentCount')}}"
                                       name="commentCount">
                                @if ($errors->has('commentCount'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('commentCount') }}
                                    </div>
                                @endif
                            </div>

                            <div class="col-12">
                                <label for="body" class="form-label">Body</label>
                                <textarea class="form-control @if($errors->has('body')) is-invalid @endif" id="body" name="body" placeholder="Enter body">{{old('body')}}</textarea>
                                @if ($errors->has('body'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('body') }}
                                    </div>
                                @endif
                            </div>
                        </div>
                        <hr class="my-4">
                        <button class="w-100 btn btn-primary btn-lg" type="submit">save</button>
                    </form>
                </div>


            </div>
        </main>
    </div>
@endsection
