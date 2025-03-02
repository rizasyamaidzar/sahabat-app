<div class="relative z-0 w-full mb-5 group">

    <input type="{{ $type }}"
        class="block py-2.5 my-2 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none  focus:ring-0 focus:border-blue-600 peer"
        id="{{ $field }}" name="{{ $field }}" placeholder="{{ $placeholder ?? '' }}"
        @isset($value)
    value="{{ old($field) ? old($field) : $value }}"
    @else
    value="{{ old($field) }}"
    @endisset>
    <label for="{{ $field }}"
        class="peer-focus:font-medium absolute text-sm text-gray-500  duration-300 transform -translate-y-6 scale-75 top-3 -z-30 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600  peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">{{ $label }}</label>
    @error($field)
        <div class="text-red-400">
            {{ $message }}
        </div>
    @enderror
</div>
