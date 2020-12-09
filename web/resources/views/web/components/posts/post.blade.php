<div class="post">
    <div class="post-header">
        <div class="meta">
            <div class="date">
                <span class="day">{{ $day }}</span>
                <span class="rest">{{ $date }}</span>
            </div>
        </div>
        <div class="matter">
            <h4 class="title small">
                <a href="{{ $link }}">{{ $title }}</a>
            </h4>
            <span class="description">
                    {{ $slot }}
            </span>
        </div>
    </div>
</div>
