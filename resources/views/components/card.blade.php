@php
    if (empty($type)){
        $type = 'button';
    }
    if (empty($class)){
        $class = 'btn btn-primary';
    }
    if (empty($name)){
        $name ='Сохранить';
    }
    if (empty($method)){
        $method ='post';
    }
    if (empty($action)){
        $action ='form_send';
    }

@endphp

@switch($type)
    @case ('href')
    <a
        @empty(!@$class)  class="{{@$class}}" @endempty
    @empty(!@$action) data-action="{{@$action}}" @endempty
        @empty(!@$method) data-method="{{@$method}}" @endempty
        @empty(!@$url) data-url="{{@$url}}" @endempty
        @empty(!@$is_close) data-dismiss="modal" @endempty
    @empty(!@$data) {{@$data}} @endempty
    >
        {!!@$name!!}
    </a>
    @break
    @case ('button')
    <button type="{{@$type}}"
            class="btn {{@$class}}"
            @empty(!@$action) data-action="{{@$action}}" @endempty
            @empty(!@$method) data-method="{{@$method}}" @endempty
            @empty(!@$url) data-url="{{@$url}}" @endempty
            @empty(!@$is_close) data-dismiss="modal" @endempty
            @empty(!@$data) {{@$data}} @endempty
            @empty(!@$onclick) onclick="{{@$onclick}}" @endempty
    >
        {!!@$name!!}
    </button>
    @break
    @default
    <button type="{{@$type}}"
            class="btn {{@$class}}"
            @empty(!@$action) data-action="{{@$action}}" @endempty
            @empty(!@$method) data-method="{{@$method}}" @endempty
            @empty(!@$url) data-url="{{@$url}}" @endempty
            @empty(!@$is_close) data-dismiss="modal" @endempty
            @empty(!@$data) {{@$data}} @endempty
            @empty(!@$onclick) onclick="{{@$onclick}}" @endempty
    >
        {!!@$name!!}
    </button>
@endswitch
