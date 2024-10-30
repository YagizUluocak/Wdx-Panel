<div class="form-group">
    <div class="custom-control custom-checkbox">
        <input type="checkbox"
        class="custom-control-input"
        id="{{ $name }}"
        name="{{ $name }}"
        {{ $checked ? 'checked' : ''}}>
        <label class="custom-control-label" for="{{ $name }}">{{ $label }}</label>
    </div>   
</div>