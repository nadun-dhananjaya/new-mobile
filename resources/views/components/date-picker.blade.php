@props(['disabled' => false])

<input type="month" id="start" name="start" min="2018-03" value="2018-05"  {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-300 focus:ring-[#D87D4A focus:border-[#D87D4A] shadow-none']) !!}>
