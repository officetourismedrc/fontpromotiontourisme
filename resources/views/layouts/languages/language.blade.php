<select name="lang-switch" id="lang_switch">

        @foreach($available_locales as $locale_name => $available_locale)
        @if($available_locale === $current_locale)
            <option value="{{$available_locale}}" >{{ $locale_name }}</option> 
        @else
        <option value="{{$available_locale}}"> <a href="language/{{ $available_locale }}">
                {{ $locale_name }}
            </a></option>
        @endif
        @endforeach

</select>