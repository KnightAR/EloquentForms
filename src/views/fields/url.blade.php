{{--
    This template can be overriden to be unique,
    by default it uses the default input markup
--}}

{{--  Custom view only view  --}}
@if($view_only)
    @eloquentforms_component($Field->getViewNamespace().'::components.field', ['Field' => $Field, 'prev_inline' => $prev_inline])

    @slot('field_markup')
        @eloquentforms_include($Field->getViewNamespace().'::pieces.label', ['Field' => $Field])

        <div class="value">
            <a href="{{ $Field->attributes->value }}">{{ $Field->attributes->value }}</a>
        </div>

        @eloquentforms_include($Field->getViewNamespace().'::pieces.note')
    @endslot

    @endcomponent

    {{--  Use default input template for non-view only --}}
@else
    @eloquentforms_include($Field->getViewNamespace().'::pieces.default-input')
@endif
