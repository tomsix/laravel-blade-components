<div {{ $attributes->merge(['class' => config('library.css.form.group')]) }} >

    @isset($label)
        <label class="{{ config('library.css.form.label') }}" for="{{ $name }}">{{ $label }}</label>
    @endisset

    <x-form-input-group :name="$name" :prepend="$prepend" :append="$append">

        <select
            name="{{ $name }}"
            id="{{ $name }}"
            class="{{ config('library.css.form.select') }} @error($name) {{ config('library.css.error.inline.input') }} @enderror"
            {{ $inputAttributes }}
        >

            {{ $slot }}

            @foreach ($options as $key => $option)
                <option value="{{ $key }}" {{ $isSelected($key) }}>
                    {{ $option }}
                </option>
            @endforeach

        </select>

    </x-form-input-group>

    <x-form-error :name="$name" />
</div>
