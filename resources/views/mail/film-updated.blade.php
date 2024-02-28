<x-mail::message>
# Introduction

an update has been applyed to this movie: {{ $film->title }}



<x-mail::button :url="''">
Button Text
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
