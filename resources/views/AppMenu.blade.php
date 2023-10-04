<div id="app-menu">
<div class="layout-menu-container" id="app-menu-root">
    <ul class="layout-menu" role="menu">
        @foreach ($model as $item)
            @if ($item['items'] && $item['root'])
                <li class="layout-menuitem-category" role="none">
                    <div class="layout-menuitem-root-text" aria-label="{{ $item['label'] }}">
                        {{ $item['label'] }}
                    </div>
                    <ul role="menu">
                        @foreach ($item['items'] as $subItem)
                            <li role="none">
                                @if ($subItem['to'])
                                    <a aria-label="{{ $subItem['label'] }}" href="{{ $subItem['to'] }}" class="p-ripple" role="menuitem">
                                        <i class="{{ $subItem['icon'] }}"></i>
                                        <span>{{ $subItem['label'] }}</span>
                                    </a>
                                @else
                                    <a aria-label="{{ $subItem['label'] }}" href="{{ $subItem['url'] }}" class="p-ripple" role="menuitem">
                                        <i class="{{ $subItem['icon'] }}"></i>
                                        <span>{{ $subItem['label'] }}</span>
                                    </a>
                                @endif
                            </li>
                        @endforeach
                    </ul>
                </li>
            @else
                <li class="layout-menuitem" role="none">
                    @if ($item['to'])
                        <a aria-label="{{ $item['label'] }}" href="{{ $item['to'] }}" class="p-ripple" role="menuitem">
                            <i class="{{ $item['icon'] }}"></i>
                            <span>{{ $item['label'] }}</span>
                        </a>
                    @else
                        <a aria-label="{{ $item['label'] }}" href="{{ $item['url'] }}" class="p-ripple" role="menuitem">
                            <i class="{{ $item['icon'] }}"></i>
                            <span>{{ $item['label'] }}</span>
                        </a>
                    @endif
                    <ul role="menu">
                        @foreach ($item['items'] as $subItem)
                            <li role="none">
                                @if ($subItem['to'])
                                    <a aria-label="{{ $subItem['label'] }}" href="{{ $subItem['to'] }}" class="p-ripple" role="menuitem">
                                        <i class="{{ $subItem['icon'] }}"></i>
                                        <span>{{ $subItem['label'] }}</span>
                                    </a>
                                @else
                                    <a aria-label="{{ $subItem['label'] }}" href="{{ $subItem['url'] }}" class="p-ripple" role="menuitem">
                                        <i class="{{ $subItem['icon'] }}"></i>
                                        <span>{{ $subItem['label'] }}</span>
                                    </a>
                                @endif
                            </li>
                        @endforeach
                    </ul>
                </li>
            @endif
        @endforeach
    </ul>
</div>

</div>
