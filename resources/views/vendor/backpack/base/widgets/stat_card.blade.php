@includeWhen(!empty($widget['wrapper']), 'backpack::widgets.inc.wrapper_start')
<div class="{{ $widget['class'] ?? 'col-12 col-sm-6 col-md-4' }}">
    @if (isset($widget['content']))
        @if (isset($widget['content']['body']))
            <div class="{{ $widget['content']['body']['class'] ?? 'stat_widget_info bg__lorg' }} border-radius_10 mb-4">
                <div>
                    @if (isset($widget['content']['body']['header']))
                        <h6><strong>{!! $widget['content']['body']['header'] !!}</strong></h6>
                    @endif
                    @if (isset($widget['content']['body']['stat']))
                        <h2>{!! $widget['content']['body']['stat'] !!}</h2>
                    @endif
                </div>
                <div class="{{ $widget['content']['body']['icon']['class'] ?? 'stat_icon' }}">
                    @if (isset($widget['content']['body']['icon']['content']))
                        <span>
                            {!! $widget['content']['body']['icon']['content'] !!}
                        </span>
                    @endif
                </div>
            </div>
        @endif
    @endif
</div>
@includeWhen(!empty($widget['wrapper']), 'backpack::widgets.inc.wrapper_end')
