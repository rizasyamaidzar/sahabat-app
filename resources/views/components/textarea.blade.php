<div class="form-group">
    <label for="{{ $field }}" class="block mb-2 text-sm font-medium text-gray-900">{{ $label }}</label>
    <textarea name="{{ $field }}" id="{{ $field }}" rows="3"
        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 "
        placeholder="{{ $placeholder ?? '' }}">
        @isset($value)
{{ old($field) ? old($field) : $value }}
@else
{{ old($field) }}
@endisset
    </textarea>
</div>
@error($field)
    <div class="text-red-400">
        {{ $message }}
    </div>
@enderror
