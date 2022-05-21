<div class="list-group">
    @foreach ($category as $item)
    <a href="{{ route('filter',$item->id) }}" class="list-group-item list-group-item-action">{{$item->cat_title}}</a>
    @endforeach
</div>