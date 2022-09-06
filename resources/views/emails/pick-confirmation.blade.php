@component('mail::message')
    # TSBP Picks Confirmation

    Here is a summary of your picks for week {{ $submitted_picks->week_id }}.

    @foreach(json_decode($submitted_picks->picks, true) as $key=>$value)
    - {{ \App\Models\Team::find($value)->name }}
    @endforeach
@endcomponent
