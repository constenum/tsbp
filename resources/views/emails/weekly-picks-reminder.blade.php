@component('mail::message')
    # @lang('Hello!')

    @lang('This is your weekly reminder to make your TSBP picks.')

    @lang(' ')

    @lang('If you have already made your picks, no further action is required.')

    @lang(' ')
    @lang(' ')
    
    @lang('Regards'),
    {{ config('app.name') }}
@endcomponent


{{--@component('mail::message')--}}
{{--    TSBP Reminder--}}

{{--    This is your weekly reminder to make all of your TSBP picks.--}}

{{--    @component('mail::button', ['url' => 'http://64.225.60.114/login'])--}}
{{--        Login to make your picks--}}
{{--    @endcomponent--}}

{{--    If you have already made your picks, you can ignore this email.--}}

{{--    Thank you,--}}
{{--    TSBP Admin--}}
{{--@endcomponent--}}
