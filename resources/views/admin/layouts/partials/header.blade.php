<div class="header">
    <h1 class="header-title">
        {{ $pageTitle ?? 'Dashboard' }}
    </h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            @foreach ($breadcrumbs as $breadcrumb)
                @if ($breadcrumb['url'])
                    <li class="breadcrumb-item">
                        <a href="{{ $breadcrumb['url'] }}">{{ $breadcrumb['name'] }}</a>
                    </li>
                @else
                    <li class="breadcrumb-item active" aria-current="page">
                        {{ $breadcrumb['name'] }}
                    </li>
                @endif
            @endforeach
        </ol>
    </nav>
</div>
