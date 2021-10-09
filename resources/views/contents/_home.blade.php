@extends('layouts.master')
@section('content')
  <div class="content">
    <div class="blog-list w-dyn-list">
      <div role="list" class="w-dyn-items">
        @foreach ($contents as $content)
        <div role="listitem" class="w-dyn-item">
          <div class="post-wrapper">
            <a href="posts/coffee-variety-macchiato-as-organic-ut-variety-caffeine-americano" class="blog-title-link w-inline-block">
              <h1 class="blog-title">{{$content->title}}</h1>
            </a>
            <div class="post-info-wrapper">
              <div class="post-info">{{$content->created_at}}</div>
              <div class="post-info">|</div><a href="categories/travel" class="post-info when-link">-</a>
            </div>
            <p class="post-summary">{{$content->content}}</p><a href="posts/coffee-variety-macchiato-as-organic-ut-variety-caffeine-americano" class="button-round w-button">Continue
              reading →</a>
          </div>
        </div>
        @endforeach
      </div>
    </div>
    <div class="button-wrapper">{{ $contents->links() }}</div>
  </div>
@endsection