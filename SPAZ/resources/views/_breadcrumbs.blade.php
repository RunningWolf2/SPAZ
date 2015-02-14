@if ($breadcrumbs)
	<nav class="breadcrumbs">
        @foreach ($breadcrumbs as $breadcrumb)
            @if (!$breadcrumb->last)
                <a href="{{{ $breadcrumb->url }}}">{{{ $breadcrumb->title }}}</a>
            @else
                <a class="current" href="#">{{{ $breadcrumb->title }}}</a>
            @endif
        @endforeach
    </nav>
@endif
