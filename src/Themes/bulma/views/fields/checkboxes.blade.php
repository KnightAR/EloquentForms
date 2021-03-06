@eloquentforms_component($Field->getViewNamespace().'::components.field', ['Field' => $Field, 'prev_inline' => $prev_inline])

    @slot('field_markup')
        <div class="{{ $Field->options->container_class }}">
            @if($Field->label != '')
                <label class="{{ $Field->label_class }}">{!! $Field->label.($Field->label_suffix != '' ? $Field->label_suffix : '').(isset($Field->attributes->required) ? ' <em>*</em>' : '') !!}</label>
            @endif

            @foreach($Field->options->getOptions() as $key => $option)
                {!! $Field->makeOptionView($key, $Field->attributes->value, $view_only) !!}
            @endforeach
        </div>

        @eloquentforms_include($Field->getViewNamespace().'::pieces.example')
        @eloquentforms_include($Field->getViewNamespace().'::pieces.error')
        @eloquentforms_include($Field->getViewNamespace().'::pieces.note')
    @endslot

@endcomponent
