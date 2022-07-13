<div>
    <div class="form-group text-start">
        <label>{{ $label }}</label>
        <input class="form-control" placeholder="{{ $label }}" name="{{ $name }}" id="{{ $name }}"
            type="{{ $type }}" {{ $attribute }} value="{{ old($name, $value) }}">
    </div>
</div>
