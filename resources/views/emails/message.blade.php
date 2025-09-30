<x-mail::message>
# Pesan Baru dari {{ $messageData->name }}

**Email:** {{ $messageData->email }}
**Subjek:** {{ $messageData->subject }}

---

{{ $messageData->message }}

---

Terima kasih,<br>
{{ config('app.name') }}
</x-mail::message>
