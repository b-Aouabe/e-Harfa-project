@props(["title", "content", "link"])

<div class="courses__course animation">
    <h3>{{$title}}</h3>
    <p>{!!$content!!}</p>
    <a href="{{$link}}" class="link">Get Started</a>
</div>
