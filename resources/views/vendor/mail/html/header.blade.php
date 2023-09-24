@props(['url'])
<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img src="{{Vite::asset('resources/images/logo.jpg')}}" class="logo" alt="BlogText Logo">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
