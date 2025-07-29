<div class="input">
    
    @if ($label)
        <label for="{{ $id }}">{{ $label }} @if($required)<span class="required">*</span>@endif</label>
    @endif
    
    @if ($type == 'radio')
        <div class="radio {{ $list ? 'list' : '' }}">
            @foreach ($options as $key => $option)
                <label class="{{ $list ? 'label_list' : 'label' }}" for="{{ $id }}-{{ $key }}">
                    <input
                        type="radio"
                        wire:model.live="{{ $wire }}"
                        value="{{ $key }}"
                        name="{{ $name }}"
                        id="{{ $id }}-{{ $key }}"
                        class="@error($name) error @enderror"
                    >
                    {{ $option }}
                </label>
            @endforeach
        </div>
    @else
        <input
            type="{{ $type }}"
            wire:model.live="{{ $wire }}"
            name="{{ $name }}"
            id="{{ $id }}"
            class="@error($name) error @enderror"
            autofocus
            autocomplete="off"
            >
    @endif
    
    @error($name)
        <small class="error-message">{{ $message }}</small>
    @enderror
    
</div>