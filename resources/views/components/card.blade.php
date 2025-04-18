@props(['color' => 'white'])
<div class="card" style="background-color: {{$color}}">
    <div {{$title->attributes->class("card-header")}}>{{$title}}</div>
    @if ($slot->isEmpty())
        <p>please provide content</p>
    @else
        {{$slot}}
    @endif
    <div class="card-footer">{{$footer}}</div>
</div>
