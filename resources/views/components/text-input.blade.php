@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-300 focus:ring-[#D87D4A focus:border-[#D87D4A] shadow-none']) !!}>
